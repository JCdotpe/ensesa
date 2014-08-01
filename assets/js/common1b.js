function add_remove_row(event_target, params) 
{

	var table = params[0];
	var suf = params[1].toLowerCase();

	method = $(event_target).closest('button').text();
	
	order = $(event_target).closest('tr').find('.order_' + suf).val().split('-');
	order = order[1];
	order++;

	if ( method.trim() == 'Add' )
	{
		var row = DynamicRows( order, suf );

		$('#'+ table).append(row);

		$(event_target).closest('button').text('Remove');

	}
	else if ( method.trim() == 'Remove')
	{
		var index = $(event_target).closest('tr').index() - 4;
		var i = 0;

		$(event_target).closest('tr').remove();
		
		$('.order_' + suf).each(function () {
			++i;
			$(this).val(suf.toUpperCase() + '-' + i);
		});
		
		$('.focus_' + suf).eq(index).focus();

	}

	rename_order( suf );

}

function validate_table(input_value, name_table, suffix)
{

	$('#' + name_table).find('tr').remove('.row_' + suffix.toLowerCase());
	
	if (input_value == 1)
	{
		var order = 1;
		var row = DynamicRows( order, suffix );
		
		$('#' + name_table).append(row);

	}

}

function salt_input(input_value, name_class, input_disabled)
{

	if ( input_value == 1 )
	{
		for (var i = 0; i < name_class.length; i++) 
		{
			$('.' + name_class[i]).closest('tr').find(':input').removeAttr('disabled');
		}

		if ( input_disabled != undefined )
		{
			$('#' + input_disabled).removeAttr('disabled');
		}
	}
	else if ( input_value == 2 )
	{
		for (var i = 0; i < name_class.length; i++)
		{
			$('.' + name_class[i]).closest('tr').find(':input').attr('disabled','disabled');
			$('.' + name_class[i]).closest('tr').find(':input').val('');
		}

		if ( input_disabled != undefined )
		{
			$('#' + input_disabled).attr('disabled', 'disabled');
			$('#' + input_disabled).val('');
		}
	}

}

function DynamicRows( order, suffix )
{
	var suf = suffix.toLowerCase();
	var row = '';
	// order = order - 1;

	row = 	'<tr class="row_' + suf + '">' +
				'<td> <input type="text" id="E1B_Tipo_Nro_' + order + '_' + suf + '" name="E1B_Tipo_Nro[' + order + ']" class="form-control order_' + suf + ' uppercase E1B_Tipo_Nro" value="' + suf.toUpperCase() + '-' + order + '" readonly /> <div class="help-block error"></div> </td>' +
				'<td> <input type="text" id="E1B_1A_Nombre_' + order + '_' + suf + '" name="E1B_1A_Nombre[' + order + ']" class="form-control focus_' + suf + ' uppercase E1B_1A_Nombre" value="" maxlength="20" /> <div class="help-block error"></div> </td>';

				if ( suf.toUpperCase() == 'PC' || suf.toUpperCase() == 'SC' || suf.toUpperCase() == 'PR' )
				{
					row += '<td> <input type="text" id="E1B_1B_' + order + '_' + suf + '" name="E1B_1B[' + order + ']" class="form-control E1B_1B" value="" maxlength="2" /> <div class="help-block error"></div> </td>';
				}
				
				if ( suf.toUpperCase() == 'PR' )
				{
					row += '<td> <input type="text" id="E1B_1C_Um_' + order + '_' + suf + '" name="E1B_1C_Um[' + order + ']" class="form-control input-sm uppercase E1B_1C_Um" value="" maxlength="20" /> <div class="help-block error"></div> </td>';
				}
				
				if ( suf.toUpperCase() == 'PC' || suf.toUpperCase() == 'PR' || suf.toUpperCase() == 'SR' || suf.toUpperCase() == 'PA' || suf.toUpperCase() == 'SA' )
				{
					row += '<td> <input type="text" id="E1B_1C_Peso_' + order + '_' + suf + '" name="E1B_1C_Peso[' + order + ']" class="form-control E1B_1C_Peso" value="" maxlength="9" /> <div class="help-block error"></div> </td>';
				}

		row +=	'<td> <input type="text" id="E1B_1D_Venta_K_' + order + '_' + suf + '" name="E1B_1D_Venta_K[' + order + ']" class="form-control E1B_1D_Venta_K" value="" maxlength="9" /> <div class="help-block error"></div> </td>' +
				'<td> <input type="text" id="E1B_1D_Venta_T_' + order + '_' + suf + '" name="E1B_1D_Venta_T[' + order + ']" class="form-control E1B_1D_Venta_T" value="" maxlength="9" /> <div class="help-block error"></div> </td>' +
				
				'<td> <input type="text" id="E1B_1D_Venta_M_Local_' + order + '_' + suf + '" name="E1B_1D_Venta_M_Local[' + order + ']" class="form-control E1B_1D_Venta_M_Local" value="" maxlength="1" /> <div class="help-block error"></div> </td>' +
				'<td> <input type="text" id="E1B_1D_Venta_M_Region_' + order + '_' + suf + '" name="E1B_1D_Venta_M_Region[' + order + ']" class="form-control E1B_1D_Venta_M_Region" value="" maxlength="1" /> <div class="help-block error"></div> </td>' +
				'<td> <input type="text" id="E1B_1D_Venta_M_Nacion_' + order + '_' + suf + '" name="E1B_1D_Venta_M_Nacion[' + order + ']" class="form-control E1B_1D_Venta_M_Nacion" value="" maxlength="1" /> <div class="help-block error"></div> </td>' +
				'<td> <input type="text" id="E1B_1D_Venta_M_NA_' + order + '_' + suf + '" name="E1B_1D_Venta_M_NA[' + order + ']" class="form-control E1B_1D_Venta_M_NA" value="" maxlength="1" /> <div class="help-block error"></div> </td>' +
				
				'<td> <input type="text" id="E1B_1D_Consumo_K_' + order + '_' + suf + '" name="E1B_1D_Consumo_K[' + order + ']" class="form-control E1B_1D_Consumo_K" value="" maxlength="9" /> <div class="help-block error"></div> </td>' +
				'<td> <input type="text" id="E1B_1D_Consumo_T_' + order + '_' + suf + '" name="E1B_1D_Consumo_T[' + order + ']" class="form-control E1B_1D_Consumo_T" value="" maxlength="9" /> <div class="help-block error"></div> </td>' +
				
				'<td> <input type="text" id="E1B_1D_Trueque_K_' + order + '_' + suf + '" name="E1B_1D_Trueque_K[' + order + ']" class="form-control E1B_1D_Trueque_K" value="" maxlength="9" /> <div class="help-block error"></div> </td>' +
				'<td> <input type="text" id="E1B_1D_Trueque_T_' + order + '_' + suf + '" name="E1B_1D_Trueque_T[' + order + ']" class="form-control E1B_1D_Trueque_T" value="" maxlength="9" /> <div class="help-block error"></div> </td>';
				
				if ( suf.toUpperCase() == 'PC' || suf.toUpperCase() == 'PR' || suf.toUpperCase() == 'PA' )
				{
					row += 	'<td> <input type="text" id="E1B_1D_Sub_K_' + order + '_' + suf + '" name="E1B_1D_Sub_K[' + order + ']" class="form-control E1B_1D_Sub_K" value="" maxlength="9" /> <div class="help-block error"></div> </td>' +
							'<td> <input type="text" id="E1B_1D_Sub_T_' + order + '_' + suf + '" name="E1B_1D_Sub_T[' + order + ']" class="form-control E1B_1D_Sub_T" value="" maxlength="9" /> <div class="help-block error"></div> </td>';
				}

		row +=	'<td> <input type="text" id="E1B_1D_Otro_K_' + order + '_' + suf + '" name="E1B_1D_Otro_K[' + order + ']" class="form-control E1B_1D_Otro_K" value="" maxlength="9" /> <div class="help-block error"></div> </td>' +
				'<td> <input type="text" id="E1B_1D_Otro_T_' + order + '_' + suf + '" name="E1B_1D_Otro_T[' + order + ']" class="form-control E1B_1D_Otro_T" value="" maxlength="9" /> <div class="help-block error"></div> </td>' +
				
				'<td> <button type="button" id="button_' + order + '_' + suf + '" class="btn btn-warning"> Add </button> </td>' +
			'</tr>';

	return row;
}

function clear_form_1B( array_form, array_table, name_class )
{

	for (var i = 0; i < array_form.length; i++) 
	{
		$('#' + array_form[i]).get(0).reset();
		$('#' + array_form[i]).find(':input').removeAttr('disabled');
		$('#' + array_form[i]).find(':input').removeAttr('readonly');
	}

	for (var i = 0; i < array_table.length; i++) 
	{
		table = array_table[i];
		suf = table.split('_');
		$('#' + table).find('.' + name_class + suf[1].toLowerCase()).remove();
	}
}

// funcion creada para poder hacer la validaciones de los array input
function rename_order( suffix )
{
	name_class = ['E1B_Tipo_Nro', 'E1B_1A_Nombre', 'E1B_1D_Venta_K', 'E1B_1D_Venta_T', 'E1B_1D_Venta_M_Local', 'E1B_1D_Venta_M_Region', 'E1B_1D_Venta_M_Nacion', 'E1B_1D_Venta_M_NA', 'E1B_1D_Consumo_K', 'E1B_1D_Consumo_T', 'E1B_1D_Trueque_K', 'E1B_1D_Trueque_T', 'E1B_1D_Otro_K', 'E1B_1D_Otro_T'];

	suffix = suffix.toUpperCase();

	switch(suffix)
	{
		case 'PC':
			name_class.push('E1B_1B', 'E1B_1C_Peso', 'E1B_1D_Sub_K', 'E1B_1D_Sub_T');
			break;

		case 'SC':
			name_class.push('E1B_1B');
			break;

		case 'PR':
			name_class.push('E1B_1B', 'E1B_1C_Um', 'E1B_1C_Peso', 'E1B_1D_Sub_K', 'E1B_1D_Sub_T');
			break;

		case 'SR':
			name_class.push('E1B_1C_Peso');
			break;

		case 'PA':
			name_class.push('E1B_1C_Peso', 'E1B_1D_Sub_K', 'E1B_1D_Sub_T');
			break;

		case 'SA':
			name_class.push('E1B_1C_Peso');
			break;
	}

	for (var i = 0; i < name_class.length; i++)
	{
		var j = 0;

		$('input.' + name_class[i] + ':text').each(function() {
			$(this).prop( 'name', name_class[i] + '['+j+']' );
			$(this).prop( 'id', name_class[i] + '_' + j + '_' + suffix.toLowerCase() );
			j++;
		});
	}
}

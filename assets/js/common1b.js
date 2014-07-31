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
		var row = DynamicRows(order, suf);

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
		var row = DynamicRows(order, suffix);
		
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
		}

		if ( input_disabled != undefined )
		{
			$('#' + input_disabled).attr('disabled', 'disabled');
		}
	}
	else if ( input_value == 3 )
	{
		for (var i = 0; i < name_class.length; i++)
		{
			$('.' + name_class[i]).closest('tr').find(':input').attr('disabled','disabled');
		}

		if ( input_disabled != undefined )
		{
			$('#' + input_disabled).attr('disabled', 'disabled');
		}
	}

}

function DynamicRows(order, suffix)
{
	var suf = suffix.toLowerCase();
	var row = '';
		
	row = 	'<tr class="row_' + suf + '">' +
				'<td> <input type="text" id="E1B_Tipo_Nro_0_' + suf + '" name="E1B_Tipo_Nro[0]" class="form-control order_' + suf + ' uppercase E1B_Tipo_Nro" value="' + suf.toUpperCase() + '-' + order + '" readonly /> <div class="help-block error"></div> </td>' +
				'<td> <input type="text" id="E1B_1A_Nombre_0_' + suf + '" name="E1B_1A_Nombre[0]" class="form-control focus_' + suf + ' uppercase E1B_1A_Nombre" value="" /> <div class="help-block error"></div> </td>';

				if ( suf.toUpperCase() == 'PC' || suf.toUpperCase() == 'SC' || suf.toUpperCase() == 'PR' )
				{
					row += '<td> <input type="text" id="E1B_1B_0_' + suf + '" name="E1B_1B[0]" class="form-control E1B_1B" value="" /> <div class="help-block error"></div> </td>';
				}
				
				if ( suf.toUpperCase() == 'PR' )
				{
					row += '<td> <input type="text" id="E1B_1C_Um_0_' + suf + '" name="E1B_1C_Um[0]" class="form-control input-sm E1B_1C_Um" value="" /> <div class="help-block error"></div> </td>';
				}
				
				if ( suf.toUpperCase() == 'PC' || suf.toUpperCase() == 'PR' || suf.toUpperCase() == 'SR' || suf.toUpperCase() == 'PA' || suf.toUpperCase() == 'SA' )
				{
					row += '<td> <input type="text" id="E1B_1C_Peso_0_' + suf + '" name="E1B_1C_Peso[0]" class="form-control E1B_1C_Peso" value="" /> <div class="help-block error"></div> </td>';
				}

		row +=	'<td> <input type="text" id="E1B_1D_Venta_K_0_' + suf + '" name="E1B_1D_Venta_K[0]" class="form-control E1B_1D_Venta_K" value="" /> <div class="help-block error"></div> </td>' +
				'<td> <input type="text" id="E1B_1D_Venta_T_0_' + suf + '" name="E1B_1D_Venta_T[0]" class="form-control E1B_1D_Venta_T" value="" /> <div class="help-block error"></div> </td>' +
				
				'<td> <input type="text" id="E1B_1D_Venta_M_Local_0_' + suf + '" name="E1B_1D_Venta_M_Local[0]" class="form-control E1B_1D_Venta_M_Local" value="" /> <div class="help-block error"></div> </td>' +
				'<td> <input type="text" id="E1B_1D_Venta_M_Region_0_' + suf + '" name="E1B_1D_Venta_M_Region[0]" class="form-control E1B_1D_Venta_M_Region" value="" /> <div class="help-block error"></div> </td>' +
				'<td> <input type="text" id="E1B_1D_Venta_M_Nacion_0_' + suf + '" name="E1B_1D_Venta_M_Nacion[0]" class="form-control E1B_1D_Venta_M_Nacion" value="" /> <div class="help-block error"></div> </td>' +
				'<td> <input type="text" id="E1B_1D_Venta_M_NA_0_' + suf + '" name="E1B_1D_Venta_M_NA[0]" class="form-control E1B_1D_Venta_M_NA" value="" /> <div class="help-block error"></div> </td>' +
				
				'<td> <input type="text" id="E1B_1D_Consumo_K_0_' + suf + '" name="E1B_1D_Consumo_K[0]" class="form-control E1B_1D_Consumo_K" value="" /> <div class="help-block error"></div> </td>' +
				'<td> <input type="text" id="E1B_1D_Consumo_T_0_' + suf + '" name="E1B_1D_Consumo_T[0]" class="form-control E1B_1D_Consumo_T" value="" /> <div class="help-block error"></div> </td>' +
				
				'<td> <input type="text" id="E1B_1D_Trueque_K_0_' + suf + '" name="E1B_1D_Trueque_K[0]" class="form-control E1B_1D_Trueque_K" value="" /> <div class="help-block error"></div> </td>' +
				'<td> <input type="text" id="E1B_1D_Trueque_T_0_' + suf + '" name="E1B_1D_Trueque_T[0]" class="form-control E1B_1D_Trueque_T" value="" /> <div class="help-block error"></div> </td>';
				
				if ( suf.toUpperCase() == 'PC' || suf.toUpperCase() == 'PR' || suf.toUpperCase() == 'PA' )
				{
					row += 	'<td> <input type="text" id="E1B_1D_Sub_K_0_' + suf + '" name="E1B_1D_Sub_K[0]" class="form-control E1B_1D_Sub_K" value="" /> <div class="help-block error"></div> </td>' +
							'<td> <input type="text" id="E1B_1D_Sub_T_0_' + suf + '" name="E1B_1D_Sub_T[0]" class="form-control E1B_1D_Sub_T" value="" /> <div class="help-block error"></div> </td>';
				}

		row +=	'<td> <input type="text" id="E1B_1D_Otro_K_0_' + suf + '" name="E1B_1D_Otro_K[0]" class="form-control E1B_1D_Otro_K" value="" /> <div class="help-block error"></div> </td>' +
				'<td> <input type="text" id="E1B_1D_Otro_T_0_' + suf + '" name="E1B_1D_Otro_T[0]" class="form-control E1B_1D_Otro_T" value="" /> <div class="help-block error"></div> </td>' +
				
				'<td> <button type="button" id="button_0_' + suf + '" class="btn btn-warning"> Add </button> </td>' +
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

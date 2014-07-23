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

}

function DynamicRows(order, suffix)
{
	var suf = suffix.toLowerCase();
	var row = '';
		
	row = 	'<tr class="row_' + suf + '">' +
				'<td> <input type="text" id="E1B_Tipo_Nro_' + order + '_' + suf + '" name="E1B_Tipo_Nro[]" class="form-control order_' + suf + '" value="' + suf.toUpperCase() + '-' + order + '" readonly /> </td>' +
				'<td> <input type="text" id="E1B_1A_Nombre_' + order + '_' + suf + '" name="E1B_1A_Nombre[]" class="form-control focus_' + suf + '" value="" /> </td>';

				if ( suf.toUpperCase() == 'PC' || suf.toUpperCase() == 'SC' || suf.toUpperCase() == 'PR' )
				{
					row += '<td> <input type="text" id="E1B_1B_' + order + '_' + suf + '" name="E1B_1B[]" class="form-control" value="" /> </td>';
				}
				
				if ( suf.toUpperCase() == 'PR' )
				{
					row += '<td> <input type="text" id="E1B_1C_Um_' + order + '_' + suf + '" name="E1B_1C_Um[]" class="form-control input-sm" value="" /> </td>';
				}
				
				if ( suf.toUpperCase() == 'PC' || suf.toUpperCase() == 'PR' || suf.toUpperCase() == 'SR' || suf.toUpperCase() == 'PA' || suf.toUpperCase() == 'SA' )
				{
					row += '<td> <input type="text" id="E1B_1C_Peso_' + order + '_' + suf + '" name="E1B_1C_Peso[]" class="form-control" value="" /> </td>';
				}

		row +=	'<td> <input type="text" id="E1B_1D_Venta_K_' + order + '_' + suf + '" name="E1B_1D_Venta_K[]" class="form-control" value="" /> </td>' +
				'<td> <input type="text" id="E1B_1D_Venta_T_' + order + '_' + suf + '" name="E1B_1D_Venta_T[]" class="form-control" value="" /> </td>' +
				
				'<td> <input type="text" id="E1B_1D_Venta_M_Local_' + order + '_' + suf + '" name="E1B_1D_Venta_M_Local[]" class="form-control" value="" /> </td>' +
				'<td> <input type="text" id="E1B_1D_Venta_M_Region_' + order + '_' + suf + '" name="E1B_1D_Venta_M_Region[]" class="form-control" value="" /> </td>' +
				'<td> <input type="text" id="E1B_1D_Venta_M_Nacion_' + order + '_' + suf + '" name="E1B_1D_Venta_M_Nacion[]" class="form-control" value="" /> </td>' +
				'<td> <input type="text" id="E1B_1D_Venta_M_NA_' + order + '_' + suf + '" name="E1B_1D_Venta_M_NA[]" class="form-control" value="" /> </td>' +
				
				'<td> <input type="text" id="E1B_1D_Consumo_K_' + order + '_' + suf + '" name="E1B_1D_Consumo_K[]" class="form-control" value="" /> </td>' +
				'<td> <input type="text" id="E1B_1D_Consumo_T_' + order + '_' + suf + '" name="E1B_1D_Consumo_T[]" class="form-control" value="" /> </td>' +
				
				'<td> <input type="text" id="E1B_1D_Trueque_K_' + order + '_' + suf + '" name="E1B_1D_Trueque_K[]" class="form-control" value="" /> </td>' +
				'<td> <input type="text" id="E1B_1D_Trueque_T_' + order + '_' + suf + '" name="E1B_1D_Trueque_T[]" class="form-control" value="" /> </td>';
				
				if ( suf.toUpperCase() == 'PC' || suf.toUpperCase() == 'PR' || suf.toUpperCase() == 'PA' )
				{
					row += 	'<td> <input type="text" id="E1B_1D_Sub_K_' + order + '_' + suf + '" name="E1B_1D_Sub_K[]" class="form-control" value="" /> </td>' +
							'<td> <input type="text" id="E1B_1D_Sub_T_' + order + '_' + suf + '" name="E1B_1D_Sub_T[]" class="form-control" value="" /> </td>';
				}

		row +=	'<td> <input type="text" id="E1B_1D_Otro_K_' + order + '_' + suf + '" name="E1B_1D_Otro_K[]" class="form-control" value="" /> </td>' +
				'<td> <input type="text" id="E1B_1D_Otro_T_' + order + '_' + suf + '" name="E1B_1D_Otro_T[]" class="form-control" value="" /> </td>' +
				
				'<td> <button type="button" id="button_' + order + '_' + suf + '" class="btn btn-warning"> Add </button> </td>' +
			'</tr>';

	return row;
}

function clear_form( array_form, array_table, name_class )
{

	for (var i = 0; i < array_form.length; i++) 
	{
		$('#' + array_form[i])[0].reset();
		$('#' + array_form[i]).find(':input').removeAttr('disabled');
		$('#' + array_form[i]).find(':input').removeAttr('readonly');
	}

	for (var i = 0; i < array_table.length; i++) {
		$('#' + array_table[i]).find('.' + name_class).remove();
	}
}
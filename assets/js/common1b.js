function add_remove_row(event_target, params) 
{

	var table = params[0];
	var suffix = params[1].toLowerCase();

	method = $(event_target).closest('button').text();
	
	order = $(event_target).closest('tr').find('.order_' + suffix).val().split('-');
	order = order[1];
	order++;

	if ( method.trim() == 'Add' )
	{
		var row = DynamicRows( order, suffix );

		$('#'+ table).append(row);

		$(event_target).closest('button').text('Remove');

	}
	else if ( method.trim() == 'Remove')
	{
		var index = $(event_target).closest('tr').index() - 4;
		var i = 0;

		$(event_target).closest('tr').remove();
		
		$('.order_' + suffix).each(function () {
			++i;
			$(this).val(suffix.toUpperCase() + '-' + i);
		});
		
		$('.focus_' + suffix).eq(index).focus();

	}

	rename_order();

}

function validate_table(input_value, name_table, suffix)
{

	$('#' + name_table).find('tr').remove('.row_' + suffix.toLowerCase());
	
	if (input_value == 1)
	{
		var order = 1;
		var row = DynamicRows( order, suffix );
		
		$('#' + name_table).append(row);

		rename_order();

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

	// Order solo se utiliza para la consulta a bd ya que necesita saber la posicion donde se mostrara el valor aunque luego con la funcion rename_order() se reordena los input para su funcionamiento. Tambien sirve para mostrar el correlativo de la tabla al usuario (ej. PC-1, PC-2). //

	row = 	'<tr class="row_' + suf + '">' +
				'<td> <input type="text" id="E1B_Tipo_Nro_' + order + '_' + suf + '" name="E1B_Tipo_Nro[]" class="form-control order_' + suf + ' uppercase E1B_Tipo_Nro" value="' + suf.toUpperCase() + '-' + order + '" readonly /> <div class="help-block error"></div> </td>' +
				'<td> <input type="text" id="E1B_1A_Nombre_' + order + '_' + suf + '" name="E1B_1A_Nombre[]" class="form-control focus_' + suf + ' uppercase E1B_1A_Nombre" value="" maxlength="20" /> <div class="help-block error"></div> </td>';

				if ( suf.toUpperCase() == 'PC' || suf.toUpperCase() == 'SC' || suf.toUpperCase() == 'PR' )
				{
					row += '<td> <input type="text" id="E1B_1B_' + order + '_' + suf + '" name="E1B_1B[]" class="form-control E1B_1B" value="" maxlength="2" /> <div class="help-block error"></div> </td>';
				}
				
				if ( suf.toUpperCase() == 'PR' )
				{
					row += '<td> <input type="text" id="E1B_1C_Um_' + order + '_' + suf + '" name="E1B_1C_Um[]" class="form-control input-sm uppercase E1B_1C_Um" value="" maxlength="20" /> <div class="help-block error"></div> </td>';
				}
				
				if ( suf.toUpperCase() == 'PC' || suf.toUpperCase() == 'PR' || suf.toUpperCase() == 'SR' || suf.toUpperCase() == 'PA' || suf.toUpperCase() == 'SA' )
				{
					row += '<td> <input type="text" id="E1B_1C_Peso_' + order + '_' + suf + '" name="E1B_1C_Peso[]" class="form-control E1B_1C_Peso" value="" maxlength="9" /> <div class="help-block error"></div> </td>';
				}

		row +=	'<td> <input type="text" id="E1B_1D_Venta_K_' + order + '_' + suf + '" name="E1B_1D_Venta_K[]" class="form-control E1B_1D_Venta_K" value="" maxlength="9" /> <div class="help-block error"></div> </td>' +
				'<td> <input type="text" id="E1B_1D_Venta_T_' + order + '_' + suf + '" name="E1B_1D_Venta_T[]" class="form-control E1B_1D_Venta_T" value="" maxlength="9" /> <div class="help-block error"></div> </td>' +
				
				'<td> <input type="text" id="E1B_1D_Venta_M_Local_' + order + '_' + suf + '" name="E1B_1D_Venta_M_Local[]" class="form-control E1B_1D_Venta_M_Local" value="" maxlength="1" /> <div class="help-block error"></div> </td>' +
				'<td> <input type="text" id="E1B_1D_Venta_M_Region_' + order + '_' + suf + '" name="E1B_1D_Venta_M_Region[]" class="form-control E1B_1D_Venta_M_Region" value="" maxlength="1" /> <div class="help-block error"></div> </td>' +
				'<td> <input type="text" id="E1B_1D_Venta_M_Nacion_' + order + '_' + suf + '" name="E1B_1D_Venta_M_Nacion[]" class="form-control E1B_1D_Venta_M_Nacion" value="" maxlength="1" /> <div class="help-block error"></div> </td>' +
				'<td> <input type="text" id="E1B_1D_Venta_M_NA_' + order + '_' + suf + '" name="E1B_1D_Venta_M_NA[]" class="form-control E1B_1D_Venta_M_NA" value="" maxlength="1" /> <div class="help-block error"></div> </td>' +
				
				'<td> <input type="text" id="E1B_1D_Consumo_K_' + order + '_' + suf + '" name="E1B_1D_Consumo_K[]" class="form-control E1B_1D_Consumo_K" value="" maxlength="9" /> <div class="help-block error"></div> </td>' +
				'<td> <input type="text" id="E1B_1D_Consumo_T_' + order + '_' + suf + '" name="E1B_1D_Consumo_T[]" class="form-control E1B_1D_Consumo_T" value="" maxlength="9" /> <div class="help-block error"></div> </td>' +
				
				'<td> <input type="text" id="E1B_1D_Trueque_K_' + order + '_' + suf + '" name="E1B_1D_Trueque_K[]" class="form-control E1B_1D_Trueque_K" value="" maxlength="9" /> <div class="help-block error"></div> </td>' +
				'<td> <input type="text" id="E1B_1D_Trueque_T_' + order + '_' + suf + '" name="E1B_1D_Trueque_T[]" class="form-control E1B_1D_Trueque_T" value="" maxlength="9" /> <div class="help-block error"></div> </td>';
				
				if ( suf.toUpperCase() == 'PC' || suf.toUpperCase() == 'PR' || suf.toUpperCase() == 'PA' )
				{
					row += 	'<td> <input type="text" id="E1B_1D_Sub_K_' + order + '_' + suf + '" name="E1B_1D_Sub_K[]" class="form-control E1B_1D_Sub_K" value="" maxlength="9" /> <div class="help-block error"></div> </td>' +
							'<td> <input type="text" id="E1B_1D_Sub_T_' + order + '_' + suf + '" name="E1B_1D_Sub_T[]" class="form-control E1B_1D_Sub_T" value="" maxlength="9" /> <div class="help-block error"></div> </td>';
				}

		row +=	'<td> <input type="text" id="E1B_1D_Otro_K_' + order + '_' + suf + '" name="E1B_1D_Otro_K[]" class="form-control E1B_1D_Otro_K" value="" maxlength="9" /> <div class="help-block error"></div> </td>' +
				'<td> <input type="text" id="E1B_1D_Otro_T_' + order + '_' + suf + '" name="E1B_1D_Otro_T[]" class="form-control E1B_1D_Otro_T" value="" maxlength="9" /> <div class="help-block error"></div> </td>' +
				
				'<td> <button type="button" id="button_' + order + '_' + suf + '" class="btn btn-warning"> Add </button> </td>' +
			'</tr>';

	return row;
}

function clear_form_1B( array_form, array_table, name_class )
{

	for (var i = 0; i < array_form.length; i++) 
	{
		$('#' + array_form[i]).get(0).reset();
		$('#' + array_form[i]).find(':input:not(.not_enable)').removeAttr('disabled');
		$('#' + array_form[i]).find(':input:not(.not_enable)').removeAttr('readonly');
	}

	for (var i = 0; i < array_table.length; i++) 
	{
		table = array_table[i];
		suf = table.split('_');
		$('#' + table).find('.' + name_class + suf[1].toLowerCase()).remove();
	}
}

/*****
Funcion creada para poder hacer la validaciones de los input[], ya que jquery necesita tener un indice definido porque sino solo valida la primera posicion es decir input[0].
*****/
function rename_order()
{
	name_class = [ 'E1B_1A_Nombre', 'E1B_1D_Venta_K', 'E1B_1D_Venta_T', 'E1B_1D_Venta_M_Local', 'E1B_1D_Venta_M_Region', 'E1B_1D_Venta_M_Nacion', 'E1B_1D_Venta_M_NA', 'E1B_1D_Consumo_K', 'E1B_1D_Consumo_T', 'E1B_1D_Trueque_K', 'E1B_1D_Trueque_T', 'E1B_1D_Otro_K', 'E1B_1D_Otro_T', 'E1B_1B', 'E1B_1C_Um', 'E1B_1C_Peso', 'E1B_1D_Sub_K', 'E1B_1D_Sub_T' ];//, 'E1B_1B', 'E1B_1C_Um', 

	var base_array =  [];
	var pc_array = [];
	var sc_array = [];
	var pr_array = [];
	var sr_array = [];
	var pa_array = [];
	var sa_array = [];

	var j = 0;

	// el E1B_Tipo_Nro es global para todas las tablas por eso se toma como orden referencial para los demas campos. //
	$('input.E1B_Tipo_Nro:text').each(function () {
		
		id_array = $(this).attr('id').split('_');
		suffix = id_array[ id_array.length - 1 ];

		switch (suffix)
		{
			case 'pc':
				pc_array.push(j);
				break;

			case 'sc':
				sc_array.push(j);
				break;

			case 'pr':
				pr_array.push(j);
				break;

			case 'sr':
				sr_array.push(j);
				break;

			case 'pa':
				pa_array.push(j);
				break;

			case 'sa':
				sa_array.push(j);
				break;
		}

		$(this).prop( 'name', 'E1B_Tipo_Nro['+j+']' );
		$(this).prop( 'id', 'E1B_Tipo_Nro_' + j + '_' + suffix );
		j++;

	});

	// forma del array base [ [0,1,2], [3,4,5], [6,7,8] ] , se realizo de esta manera para que todos los input[] tengan el mismo indice en la fila ya que sino fuera asi se perdia datos al momento de grabar (ej. E1B_1C_Peso no aparece en todas las tablas). //
	base_array.push(pc_array, sc_array, pr_array, sr_array, pa_array, sa_array);

	for (var i = 0; i < name_class.length; i++)
	{

		// se creo un indice por cada sub array ya que son independientes del avance que tienen al hacerse en each. //
		var pc_index = 0;
		var sc_index = 0;
		var pr_index = 0;
		var sr_index = 0;
		var pa_index = 0;
		var sa_index = 0;

		$('input.' + name_class[i] + ':text').each(function() {
			
			id_array = $(this).attr('id').split('_');
			suffix = id_array[ id_array.length - 1 ];

			switch (suffix)
			{
				case 'pc':
					posicion = base_array[0][pc_index];
					pc_index++;
					break;

				case 'sc':
					posicion = base_array[1][sc_index];
					sc_index++;
					break;

				case 'pr':
					posicion = base_array[2][pr_index];
					pr_index++;
					break;

				case 'sr':
					posicion = base_array[3][sr_index];
					sr_index++;
					break;

				case 'pa':
					posicion = base_array[4][pa_index];
					pa_index++;
					break;

				case 'sa':
					posicion = base_array[5][sa_index];
					sa_index++;
					break;
			}

			$(this).prop( 'name', name_class[i] + '['+ posicion +']' );
			$(this).prop( 'id', name_class[i] + '_' + posicion + '_' + suffix );

			
		});
	}
}
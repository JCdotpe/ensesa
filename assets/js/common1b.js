function add_remove_row(event_target, params) 
{

	var table = params[0];
	var suffix = params[1].toLowerCase();

	method = $(event_target).closest('button');
	
	// obtengo de acuerdo a la posicion del cursor dentro del tr el input de la clase order_ y su valor lo devuelvo en un array //
	order = $(event_target).closest('tr').find('.order_' + suffix).val().split('-');
	order = order[1];
	order++;

	// obtengo el indice de la fila del cursor //
	var index = $(event_target).closest('tr').index();

	// se resta menos 4 porque son la cantidad de filas que tiene como cabecera la tabla con lo cual obtengo la posicion donde voy a poner el focus //
	new_index = index - 4;

	if ( method.hasClass('Add') )
	{
		// le aumento en 1 para poder posicionarlo en la nueva fila que se va agregar //
		new_index++;

		// obtengo el html de la nueva fila //
		var row = DynamicRows( order, suffix );

		// adjunto en la tabla la nueva fila //
		$('#'+ table).append(row);

		// obtengo el html del boton quitar //
		button_remove = buttons( --order, suffix, 'Remove' );

		// cambio el html del div botones por el nuevo boton quitar //
		$(event_target).closest('div').html( button_remove );

		// obtengo el html de los botones agregar y quitar //
		button_add = buttons( order, suffix, 'Add' );
		button_remove = buttons( order, suffix, 'Remove' );

		// adjunto en el div que se igual al nuevo indice, los botones de agregar y quitar //
		$('.boton_' + suffix).eq(new_index).html( button_add + ' ' + button_remove);

	}
	else if ( method.hasClass('Remove') )
	{
		// total de filas que tiene la tabla ( obtengo el indice de la ultima fila ) //
		var last_tr = $('#table_' + suffix.toUpperCase() + ' tr:last').index();

		// se valida que solo pueda eliminar filas mayores a 4 ya que debe tener como minimo una fila //
		if ( last_tr > 4 )
		{
			$(event_target).closest('tr').remove();
		}
		
		// recorro la clase para poder reordenar la numeracion //
		var i = 0;
		$('.order_' + suffix).each(function () {
			++i;
			$(this).val(suffix.toUpperCase() + '-' + i);
		});
		
		// condiciono si la fila eliminada corresponde a la ultima fila de la tabla //
		if ( last_tr == index )
		{
			// resto menos 1 al nuevo indice para poder posicionarlo en la ultima fila //
			--new_index;

			// obtengo el html de los botones agregar y quitar //
			button_add = buttons( order, suffix, 'Add' );
			button_remove = buttons( order, suffix, 'Remove' );

			// adjunto en el div que se igual al nuevo indice, los botones de agregar y quitar //
			$('.boton_' + suffix).eq(new_index).html( button_add + ' ' + button_remove );
		}
		
	}

	// posiciono el focus en el input con la clase focus_ que sea igual al nuevo indice //
	$('.focus_' + suffix).eq(new_index).focus();

	// reordeno el name e id de los input //
	rename_order();
}

function buttons ( order, suffix, action )
{
	var button = '';

	symbol = ( action == 'Add' ) ? '+' : '-';

	button = '<button type="button" id="button_' + order + '_' + suffix + '" class="btn btn-warning ' + action + '" > ' + symbol + ' </button>';

	return button;

}

function validate_table(input_value, name_table, suffix)
{
	// busca todos tr de la tabla y elimina los que tienen la clase row_ //
	$('#' + name_table).find('tr').remove('.row_' + suffix.toLowerCase());
	
	if (input_value == 1)
	{
		var order = 1;
		var row = DynamicRows( order, suffix );
		
		$('#' + name_table).append(row);

		// reordeno el name e id de los input //
		rename_order();
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
				
				'<td> <div id="botones_' + order + '_' + suf + '" class="boton_' + suf + '"> <button type="button" id="button_' + order + '_' + suf + '" class="btn btn-warning Add" > + </button>  </div> </td>' +
			'</tr>';

	return row;
}

function salt_input(input_value, name_class, input_disabled)
{

	// input_disabled es el input especifico que se debe habilitar o deshabilitar el cual puede ser opcional //

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

			// renombro el name y el id //
			$(this).prop( 'name', name_class[i] + '['+ posicion +']' );
			$(this).prop( 'id', name_class[i] + '_' + posicion + '_' + suffix );
			
		});
	}
}

function clear_form_1B( array_form, array_table, name_class )
{

	for (var i = 0; i < array_form.length; i++) 
	{
		$('#' + array_form[i]).get(0).reset();
		$('#' + array_form[i]).find(':input:not(.not_enable)').removeAttr('disabled');
		$('#' + array_form[i]).find(':input:not(.not_enable)').removeAttr('readonly');
		$('#' + array_form[i]).find(':submit').attr('disabled', 'disabled');
	}

	for (var i = 0; i < array_table.length; i++) 
	{
		table = array_table[i];
		suf = table.split('_');
		$('#' + table).find('.' + name_class + suf[1].toLowerCase()).remove();
	}
}

function validate_vivienda ( array_form )
{
	value = $('#vivienda').val();

	if ( value != '' )
	{
		for (var i = 0; i < array_form.length; i++) 
		{
			$('#' + array_form[i]).find(':submit').removeAttr('disabled');
		}
	}
}


function clean_modulo (argument) 
{
	clear_by_class(['data_head']);

	forms = [ frm_1B_100.attr('id'), frm_1B_200.attr('id'), frm_1B_300.attr('id') ];
	var tables = [ table_100_A.attr('id'), table_100_C.attr('id'), table_200_A.attr('id'), table_200_C.attr('id'), table_300_A.attr('id'), table_300_C.attr('id') ];
	
	clear_form_1B( forms, tables, 'row_' );
}

function execute_trigger_1B()
{
	var fields = [ 'E1B_101_A', 'E1B_101_C', 'E1B_201_A', 'E1B_201_C', 'E1B_301_A', 'E1B_301_C' ];

	for (var i = 0; i < fields.length; i++)
	{
		valor = $('#' + fields[i]).val();
		if ( valor == 2 ) $('#' + fields[i]).trigger('change');
	}

	// Tener en cuenta que el evento change de Otros? se ejecuta automaticamente cuando se llama al trigger de la clase. //
	$('input.C1_B_suma').trigger('change');
	$('input.C1_D_suma').trigger('change');

	$('input.C2_B_suma').trigger('change');
	$('input.C2_D_suma').trigger('change');

	$('input.C3_B_suma').trigger('change');
	$('input.C3_D_suma').trigger('change');

}
// general variables //
var this_value;
var forms = [];

// specific variables //
var distrito = $('#Nombre_Dist');
var codigo_distrito = $('#A_3_Cod_Dist');
var A_4_Centro_Poblado = $('#A_4_Centro_Poblado');
var A_5_Comunidad_Nativa = $('#A_5_Comunidad_Nativa');
var A_6_Anexo_Cn = $('#A_6_Anexo_Cn');
var B_7_Zona = $('#B_7_Zona');
var B_8_Manzana = $('#B_8_Manzana');
var B_10_Vivienda_nro = $('#B_10_Vivienda_nro');
var E1_B_13_Nro_Hogar = $('#E1_B_13_Nro_Hogar');

var E1_201_Nro = $('#E1_201_Nro');

// --> seccion 100
var E1B_Ini_M = $('#E1B_Ini_M');
var E1B_Ini_A = $('#E1B_Ini_A');
var E1B_Fin_M = $('#E1B_Fin_M');
var E1B_Fin_A = $('#E1B_Fin_A');

var E1B_101_A = $('#E1B_101_A');
var table_100_A = $('#table_PC');

var E1B_101_B_j = $('#E1B_101_B_j');

var E1B_101_C = $('#E1B_101_C');
var table_100_C = $('#table_SC');

var E1B_101_D_h = $('#E1B_101_D_h');

// --> seccion 200
var E1B_201_A = $('#E1B_201_A');
var table_200_A = $('#table_PR');

var E1B_201_B_h = $('#E1B_201_B_h');

var E1B_201_C = $('#E1B_201_C');
var table_200_C = $('#table_SR');

var E1B_201_D_h = $('#E1B_201_D_h');

// --> seccion 300
var E1B_301_A = $('#E1B_301_A');
var table_300_A = $('#table_PA');

var E1B_301_B_i = $('#E1B_301_B_i');

var E1B_301_C = $('#E1B_301_C');
var table_300_C = $('#table_SA');

var E1B_301_D_h = $('#E1B_301_D_h');

// form variables //
var frm_1B = $('#1B');

var frm_1B_100 = $('#1B_100');
var frm_1B_200 = $('#1B_200');
var frm_1B_300 = $('#1B_300');


// Head //

distrito.on(
	{ change: function( event )
		{
			value = $(distrito).val();
			set_code_ubigeo( codigo_distrito, value );

			// **** Codigo eventual, de acuerdo sea el caso del app. Si no se necesita se elimna o comenta *** //
			list_dropdown = ['A_4_Centro_Poblado', 'A_5_Comunidad_Nativa', 'A_6_Anexo_Cn', 'B_7_Zona', 'B_8_Manzana', 'B_9_1_AER_ini', 'B_9_2_AER_fin', 'B_10_Vivienda_nro', 'E1_B_13_Nro_Hogar'];
			
			clean_ubigeo( list_dropdown, ['ubigeo']);
			search_data_ubicacion('A_4_Centro_Poblado');

			// ****
		}
	}
);

A_4_Centro_Poblado.on(
	{ change: function ( event ) 
		{
			list_dropdown = ['A_5_Comunidad_Nativa', 'A_6_Anexo_Cn', 'B_7_Zona', 'B_8_Manzana', 'B_9_1_AER_ini', 'B_9_2_AER_fin', 'B_10_Vivienda_nro', 'E1_B_13_Nro_Hogar'];
			clean_ubigeo( list_dropdown, ['ubigeo'] );
			search_data_ubicacion('A_5_Comunidad_Nativa');
		}
	}
);

A_5_Comunidad_Nativa.on(
	{ change: function ( event )
		{
			list_dropdown = ['A_6_Anexo_Cn', 'B_7_Zona', 'B_8_Manzana', 'B_9_1_AER_ini', 'B_9_2_AER_fin', 'B_10_Vivienda_nro', 'E1_B_13_Nro_Hogar'];
			clean_ubigeo( list_dropdown, ['ubigeo'] );
			search_data_ubicacion('A_6_Anexo_Cn');
		}
	}
);

A_6_Anexo_Cn.on(
	{ change: function ( event )
		{
			list_dropdown = ['B_7_Zona', 'B_8_Manzana', 'B_9_1_AER_ini', 'B_9_2_AER_fin', 'B_10_Vivienda_nro', 'E1_B_13_Nro_Hogar'];
			clean_ubigeo( list_dropdown, ['ubigeo'] );
			search_data_ubicacion('B_7_Zona');
		}
	}
);

B_7_Zona.on(
	{ change: function ( event )
		{
			list_dropdown = ['B_8_Manzana', 'B_9_1_AER_ini', 'B_9_2_AER_fin', 'B_10_Vivienda_nro', 'E1_B_13_Nro_Hogar'];
			clean_ubigeo( list_dropdown, ['ubigeo'] );
			search_data_ubicacion('B_8_Manzana');
		}
	}
);

B_8_Manzana.on(
	{ change: function ( event )
		{
			list_dropdown = ['B_9_1_AER_ini', 'B_9_2_AER_fin', 'B_10_Vivienda_nro', 'E1_B_13_Nro_Hogar'];
			clean_ubigeo( list_dropdown, ['ubigeo'] );

			var data = $('.location').serializeArray();
			data.push({ name: 'search', value: 'B_10_Vivienda_nro' });

			$.ajax({
				url: CI.site_url + '/cedulas/location/get_ubicacion_vivienda',
				type: 'POST',
				cache: false,
				data: {'key':data},
				dataType: 'json',
				success:function(json_data)
				{
					if (json_data.VIVIENDA.length == 0 ) { return; }

					var row = '<option id="0" value="">SELECCIONE</option>';
					$.each( json_data.VIVIENDA, 
							function(i, datos)
							{
								$('#B_9_1_AER_ini').val( datos.B_9_1_AER_ini );
								$('#B_9_2_AER_fin').val( datos.B_9_2_AER_fin );
								
								row += '<option id="' + i + '" value="' + datos.Cod_Vivienda + '" >' + datos.search_column + '</option>';
							}
						);
					$('#B_10_Vivienda_nro').html(row);
				}
			});
		}
	}
);


B_10_Vivienda_nro.on(
	{ change: function ( event ) 
		{
			contenido = $('#B_10_Vivienda_nro').val();
			var data = { vivienda: contenido }

			clean_modulo();

			$('#vivienda').val( contenido );
			$('#E1_B_13_Nro_Hogar').empty();
			$('#E1_B_12').val('');
			$('#E1_201_Nro').val('');

			$.ajax({
				url: CI.site_url + '/cedulas/location/get_ubicacion_hogar',
				type: 'POST',
				cache: false,
				data: data,
				dataType: 'json',
				success:function(json_data)
				{
					$.each( json_data.HOGAR,
							function(fila, valor)
							{
								valor = ( valor == null ) ? '' : valor;
								$('#E1_B_12').val(valor);
							}
						);

					$.each( json_data.HOGAR_DETAIL,
							function (i, datos)
							{
								row = '<option id="' + i + '" value="' + datos.E1_B_13_Nro_Hogar + '" >' + datos.E1_B_13_Nro_Hogar + '</option>';
								$('#E1_B_13_Nro_Hogar').append(row);
							}
						);
				}
			});
		}
	}
);

E1_B_13_Nro_Hogar.on(
	{ change: function ( event ) 
		{
			clean_modulo();
			$('#E1_201_Nro').val('');
		}
	}
);

// **** Codigo eventual, de acuerdo sea el caso del app. Si no se necesita se elimna o comenta *** //
function search_data_ubicacion( name_dropdown )
{

	var data = $('.location').serializeArray();
	data.push({ name: 'search', value: name_dropdown });

	$.ajax({
		url: CI.site_url + '/cedulas/location/get_ubicacion_vivienda',
		type: 'POST',
		cache: false,
		data: {'key':data},
		dataType: 'json',
		success:function(json_data)
		{
			if (json_data.VIVIENDA.length == 0 ) { return; }

			var row = '<option id="0" value="">SELECCIONE</option>';
			$.each( json_data.VIVIENDA, 
					function(i, datos)
					{
						name_ubicacion  = ( datos.search_column != null )  ? datos.search_column : 'NO TIENE';
						row += '<option id="' + i + '" value="' + datos.search_column + '" >' + name_ubicacion + '</option>';
					}
				);
			$('#' + name_dropdown).html(row);
		}
	});
}

function clean_ubigeo ( list_dropdown, name_class )
{
	clean_dropdown( list_dropdown );
	clear_by_class ( name_class );

	clean_modulo();
}

E1_201_Nro.on(
	{ change : function ( event ) 
		{
			var search_parameters = { 
				vivienda: $("input[name='vivienda']").val(),
				E1_B_13_Nro_Hogar: $("#E1_B_13_Nro_Hogar").val(),
				E1_201_Nro: $("input[name='E1_201_Nro']").val(),
			};

			clean_modulo();

			$.ajax({
				url: CI.site_url + '/cedulas/cedula1b/get_data',
				type: 'POST',
				cache: false,
				data: search_parameters,
				dataType: 'json',
				success:function(json_data)
				{

					var vivienda = '';

					$.each( json_data.E1_Persona,
							function (fila, valor)
							{
								valor = ( valor ==  null ) ? '' : valor;
								$('#' + fila).val( valor );
							}
						);

					$.each( json_data.E1B_Recursos_Naturales, 
							function(fila, valor)
							{
								valor = ( valor == null ) ? '' : valor;
								
								$('#' + fila).val(valor);

								validate_vivienda( forms );
							}
						);

					execute_trigger_1B();

					var old_nro = 0;
					var old_tipo = '';
					var nro = 0;
					var tipo = '';

					$.each( json_data.E1B_Produccion_Recursos, 
							function(i, datos)
							{
								tipo = datos.E1B_Tipo.toLowerCase();
								nro = datos.E1B_Tipo_Nro;

								switch (old_tipo)
								{
									case '':
										old_tipo = tipo;
										old_nro = nro;
										break;

									case tipo:
										old_nro = nro;
										break;

									default:
										button_add = buttons( old_nro, old_tipo, 'Add' );
										button_remove = buttons( old_nro, old_tipo, 'Remove' );
										$('#botones_' + old_nro + '_' + old_tipo).html( button_add + ' ' + button_remove );
										// $('#button_' + old_nro + '_' + old_tipo).text('+');
										old_tipo = tipo;
										old_nro = nro;
										break;
								}

								var row = DynamicRows( datos.E1B_Tipo_Nro , datos.E1B_Tipo );
								$('#table_' + datos.E1B_Tipo).append(row);

								$('#E1B_Tipo_Nro' + '_'+ nro +'_' + tipo).val( datos.E1B_Tipo + '-' + datos.E1B_Tipo_Nro );
								$('#E1B_1A_Nombre' + '_'+ nro +'_' + tipo).val( datos.E1B_1A_Nombre );


								$('#E1B_1B' + '_' + nro + '_' + tipo).val( datos.E1B_1B );
								$('#E1B_1C_Um' + '_' + nro + '_' + tipo).val( datos.E1B_1C_Um );
								$('#E1B_1C_Peso' + '_' + nro + '_' + tipo).val( datos.E1B_1C_Peso );
								
								$('#E1B_1D_Venta_K' + '_' + nro + '_' + tipo).val( datos.E1B_1D_Venta_K );
								$('#E1B_1D_Venta_T' + '_' + nro + '_' + tipo).val( datos.E1B_1D_Venta_T );
								
								$('#E1B_1D_Venta_M_Local' + '_' + nro + '_' + tipo).val( datos.E1B_1D_Venta_M_Local );
								$('#E1B_1D_Venta_M_Region' + '_' + nro + '_' + tipo).val( datos.E1B_1D_Venta_M_Region );
								$('#E1B_1D_Venta_M_Nacion' + '_' + nro + '_' + tipo).val( datos.E1B_1D_Venta_M_Nacion );
								$('#E1B_1D_Venta_M_NA' + '_' + nro + '_' + tipo).val( datos.E1B_1D_Venta_M_NA );
								
								$('#E1B_1D_Consumo_K' + '_' + nro + '_' + tipo).val( datos.E1B_1D_Consumo_K );
								$('#E1B_1D_Consumo_T' + '_' + nro + '_' + tipo).val( datos.E1B_1D_Consumo_T );
								
								$('#E1B_1D_Trueque_K' + '_' + nro + '_' + tipo).val( datos.E1B_1D_Trueque_K );
								$('#E1B_1D_Trueque_T' + '_' + nro + '_' + tipo).val( datos.E1B_1D_Trueque_T );
								
								$('#E1B_1D_Sub_K' + '_' + nro + '_' + tipo).val( datos.E1B_1D_Sub_K );
								$('#E1B_1D_Sub_T' + '_' + nro + '_' + tipo).val( datos.E1B_1D_Sub_T );
								
								$('#E1B_1D_Otro_K' + '_' + nro + '_' + tipo).val( datos.E1B_1D_Otro_K );
								$('#E1B_1D_Otro_T' + '_' + nro + '_' + tipo).val( datos.E1B_1D_Otro_T );


								$('#button_' + nro + '_'  + tipo).text('-');
							}
						);

					// $('#button_' + nro + '_' + tipo).text('+');
					button_add = buttons( nro, tipo, 'Add' );
					button_remove = buttons( nro, tipo, 'Remove' );
					$('#botones_' + nro + '_' + tipo).html( button_add + ' ' + button_remove );

					rename_order();
					$(frm_1B).find(':submit').removeAttr('disabled');
				}
			});
		}
	}
);


// Question 100 //
E1B_Ini_M.on(
	{ change: function () 
			{
				this_value = $(this).val().toUpperCase();

				set_label( 'mes_inicio', this_value );
			}
	}
);

E1B_Ini_A.on(
	{ change: function () 
			{
				this_value = $(this).val().toUpperCase();

				set_label( 'anio_inicio', this_value );
			}
	}
);

E1B_Fin_M.on(
	{ change: function () 
			{
				this_value = $(this).val().toUpperCase();
				set_label( 'mes_fin', this_value );
			}
	}
);

E1B_Fin_A.on(
	{ change: function () 
			{
				this_value = $(this).val().toUpperCase();
				set_label( 'anio_fin', this_value );
			}
	}
);

function set_label ( name_class, valor )
{
	$('.' + name_class).text( valor );
}

// --> section A
E1B_101_A.on( 
	{ change : function( event ) 
				{
					this_value = $(this).val();

					common_event_group( table_100_A.attr('id'), [ 'C1_B_table', 'C1_D_table' ], this_value, E1B_101_C.attr('id'), 'PC' );

					E1B_101_C.val('');
					E1B_101_C.trigger('change');
				},
	  keyup : event_keyup_jump()
	}
);

table_100_A.on( 'click', 'button', 
	function( event ) 
	{
		add_remove_row(event.target, [ table_100_A.attr('id'), 'PC' ]);
	}

);

// --> section B
$('input.C1_B_suma').on(
	{ change: function () 
			{
				sum_per_class( 'C1_B_suma', 'E1B_101_B_Total');
			}
	}
);

E1B_101_B_j.on(
	{ change: function () 
			{
				this_value = $(this).val();

				if ( this_value.trim() != '' && this_value != '0' )
				{
					$('#E1B_101_B_j_O').removeAttr( 'disabled' );
				}
				else
				{
					$('#E1B_101_B_j_O').attr( 'disabled', 'disabled' );
					$('#E1B_101_B_j_O').val('');
				}

			}
	}
);

// --> section C
E1B_101_C.on( 
	{ change : function( event ) 
		{
			this_value = $(this).val();

			common_event_group( table_100_C.attr('id'), [ 'C1_D_table' ], this_value, null, 'SC' );
		},
	  keyup : event_keyup_jump()
	}
);

table_100_C.on('click', 'button', 
	function( event ) 
	{
		add_remove_row(event.target, [ table_100_C.attr('id'), 'SC' ]);
	}
);

// --> section D
$('input.C1_D_suma').on(
	{ change: function () 
			{
				sum_per_class( 'C1_D_suma', 'E1B_101_D_Total');
			}
	}
);

E1B_101_D_h.on(
	{ change: function () 
			{
				this_value = $(this).val();

				if ( this_value.trim() != '' && this_value != '0' )
				{
					$('#E1B_101_D_h_O').removeAttr( 'disabled' );
				}
				else
				{
					$('#E1B_101_D_h_O').attr( 'disabled', 'disabled' );
					$('#E1B_101_D_h_O').val('');
				}

			}
	}
);


// Question 200 //
// --> section A
E1B_201_A.on( 
	{ change : function(event) 
		{
			this_value = $(this).val();

			common_event_group( table_200_A.attr('id'), [ 'C2_B_table', 'C2_D_table' ], this_value, E1B_201_C.attr('id'), 'PR' );

			E1B_201_C.val('');
			E1B_201_C.trigger('change');
		},
	  keyup : event_keyup_jump()
	}
);

table_200_A.on('click', 'button',
	function( event ) 
	{
		add_remove_row(event.target, [ table_200_A.attr('id'), 'PR' ]);	
	}
);

// --> section B
$('input.C2_B_suma').on(
	{ change: function () 
			{
				sum_per_class( 'C2_B_suma', 'E1B_201_B_Total');
			}
	}
);

E1B_201_B_h.on(
	{ change: function () 
			{
				this_value = $(this).val();

				if ( this_value.trim() != '' && this_value != '0' )
				{
					$('#E1B_201_B_h_O').removeAttr( 'disabled' );
				}
				else
				{
					$('#E1B_201_B_h_O').attr( 'disabled', 'disabled' );
					$('#E1B_201_B_h_O').val('');
				}

			}
	}
);

// --> section C
E1B_201_C.on(
	{ change : function(event) 
		{
			this_value = $(this).val();

			common_event_group( table_200_C.attr('id'), [ 'C2_D_table' ], this_value, null, 'SR' );
		},
	  keyup : event_keyup_jump()
	}
);

table_200_C.on('click', 'button',
	function( event ) 
	{
		add_remove_row(event.target, [ table_200_C.attr('id'), 'SR' ]);	
	}
);

// --> section D
$('input.C2_D_suma').on(
	{ change: function () 
			{
				sum_per_class( 'C2_D_suma', 'E1B_201_D_Total');
			}
	}
);

E1B_201_D_h.on(
	{ change: function () 
			{
				this_value = $(this).val();

				if ( this_value.trim() != '' && this_value != '0' )
				{
					$('#E1B_201_D_h_O').removeAttr( 'disabled' );
				}
				else
				{
					$('#E1B_201_D_h_O').attr( 'disabled', 'disabled' );
					$('#E1B_201_D_h_O').val('');
				}

			}
	}
);


// Question 300 //
// --> section A
E1B_301_A.on( 
	{ change : function(event) 
		{
			this_value = $(this).val();

			common_event_group( table_300_A.attr('id'), [ 'C3_B_table', 'C3_D_table' ], this_value, E1B_301_C.attr('id'), 'PA' );

			E1B_301_C.val('');
			E1B_301_C.trigger('change');
		},
	  keyup : event_keyup_jump()
	}
);

table_300_A.on('click', 'button',
	function( event ) 
	{
		add_remove_row(event.target, [ table_300_A.attr('id'), 'PA' ]);	
	}
);

// --> section B
$('input.C3_B_suma').on(
	{ change: function () 
			{
				sum_per_class( 'C3_B_suma', 'E1B_301_B_Total');
			}
	}
);

E1B_301_B_i.on(
	{ change: function () 
			{
				this_value = $(this).val();

				if ( this_value.trim() != '' && this_value != '0' )
				{
					$('#E1B_301_B_i_O').removeAttr( 'disabled' );
				}
				else
				{
					$('#E1B_301_B_i_O').attr( 'disabled', 'disabled' );
					$('#E1B_301_B_i_O').val('');
				}

			}
	}
);

// --> section C
E1B_301_C.on(
	{ change : function(event) 
		{
			this_value = $(this).val();

			common_event_group( table_300_C.attr('id'), [ 'C3_D_table' ], this_value, null, 'SA' );
		},
	  keyup : event_keyup_jump()
	}
);

table_300_C.on('click', 'button',
	function( event ) 
	{
		add_remove_row(event.target, [ table_300_C.attr('id'), 'SA' ]);	
	}
);

// --> section D
$('input.C3_D_suma').on(
	{ change: function () 
			{
				sum_per_class( 'C3_D_suma', 'E1B_301_D_Total');
			}
	}
);

E1B_301_D_h.on(
	{ change: function () 
			{
				this_value = $(this).val();

				if ( this_value.trim() != '' && this_value != '0' )
				{
					$('#E1B_301_D_h_O').removeAttr( 'disabled' );
				}
				else
				{
					$('#E1B_301_D_h_O').attr( 'disabled', 'disabled' );
					$('#E1B_301_D_h_O').val('');
				}

			}
	}
);


function common_event_group ( id_table, name_class, input_value, input_disabled, suffix )
{
	salt_input( input_value, name_class, input_disabled );
	validate_table( input_value, id_table, suffix );
}

function sum_per_class ( name_class, input_total )
{
	var total = 0;

	$('.' + name_class).each(function () {
		
		this_value = $(this).val();
		this_value = ( this_value == '' || this_value == '0' ) ? 0 : parseInt(this_value);

		total += this_value;
	});

	$('#' + input_total).val( total );

}


// Form 1B //
frm_1B.validate(
	{
		rules : 
		{
			B_10_Vivienda_nro:
			{
				required: true
			},
			E1_B_13_Nro_Hogar:
			{
				required: true
			},
			E1_201_Nro:
			{
				required: true,
				digits: true,
				range: [1,99]
			},
			E1_202_Nombre:
			{
				required: true
			},
			E1_202_Apellidos:
			{
				required: true
			},
			E1B_Informante_Nro:
			{
				required: true,
				digits: true,
				range: [1, 99]
			},
			E1B_13:
			{
				required: true,
				digits: true,
				range: [0,1]
			},
			E1B_13_Obs:
			{
				maxlength: 200
			}
		},
		messages :
		{

		},
		errorPlacement: function(error, element) {
			$(element).next().after(error);
		},
		invalidHandler: function(form, validator) {
			var errors = validator.numberOfInvalids();
			if (errors) 
			{
				var message = errors == 1
				? 'Por favor corrige estos errores:\n'
				: 'Por favor corrige los ' + errors + ' errores.\n';
				var errors = "";
				if (validator.errorList.length > 0) 
				{
					for (x=0;x<validator.errorList.length;x++) 
					{
						errors += "\n\u25CF " + validator.errorList[x].message;
					}
				}
				alert(message + errors);
			}
			validator.focusInvalid();
		},
		submitHandler: function(form)
		{
			var data_1b = frm_1B.serializeArray();
			
			var button_form = $(frm_1B).find(':submit');
			button_form.attr('disabled','disabled');

			data_1b.push(
				{ name: 'vivienda', value: $("input[name='vivienda']").val() }
			);

			$.ajax({
				url: CI.site_url + '/cedulas/cedula1b/register_1b',
				type: 'POST',
				data: data_1b,
				dataType: 'json',
				success:function(json) 
				{
					alert(json.msg);
					button_form.removeAttr('disabled');
					validate_vivienda('1B_100');
				}
			});
		}
	}
);

$.validator.addClassRules({
	'E1B_1A_Nombre':
	{
		required: true
	},
	'E1B_1D_Venta_K':
	{
		required: true,
		number: true
	},
	'E1B_1B':
	{
		required: true,
		digits:true,
		range: [1,98]
	},
	'E1B_1C_Um':
	{
		required: true,
	},
	'E1B_1C_Peso':
	{
		required: true,
		digits: true,
		range: [1,999999998]
	},
	'E1B_1D_Venta_K':
	{
		required: true,
		digits: true,
		range: [1,999999998]
	},
	'E1B_1D_Venta_T':
	{
		required: true,
		digits: true,
		range: [1,999999998]
	},
	'E1B_1D_Venta_M_Local':
	{
		required: true,
		digits: true,
		range: [0,1]
	},
	'E1B_1D_Venta_M_Region':
	{
		required: true,
		digits: true,
		range: [0,1]
	},
	'E1B_1D_Venta_M_Nacion':
	{
		required: true,
		digits: true,
		range: [0,1]
	},
	'E1B_1D_Venta_M_NA':
	{
		required: true,
		digits: true,
		range: [0,1]
	},
	'E1B_1D_Consumo_K':
	{
		required: true,
		digits: true,
		range: [0,999999998]
	},
	'E1B_1D_Consumo_T':
	{
		required: true,
		digits: true,
		range: [0,999999998]
	},
	'E1B_1D_Trueque_K':
	{
		required: true,
		digits: true,
		range: [0,999999998]
	},
	'E1B_1D_Trueque_T':
	{
		required: true,
		digits: true,
		range: [0,999999998]
	},
	'E1B_1D_Sub_K':
	{
		required: true,
		digits: true,
		range: [0,999999998]
	},
	'E1B_1D_Sub_T':
	{
		required: true,
		digits: true,
		range: [0,999999998]
	},
	'E1B_1D_Otro_K':
	{
		required: true,
		digits: true,
		range: [0,999999998]
	},
	'E1B_1D_Otro_T':
	{
		required: true,
		digits: true,
		range: [0,999999998]
	}
});

// Form 1B_100 //
$('#1B_100').validate({
		rules : 
		{
			E1B_Ini_M: 
			{
				required: true,
				mes: true
			},
			E1B_Ini_A: 
			{
				required: true,
				digits: true,
				year: true
			},
			E1B_Fin_M: 
			{
				required: true,
				mes: true
			},
			E1B_Fin_A: 
			{
				required: true,
				digits: true,
				year: true,
				rangofecha: [ 'E1B_Ini_M', 'E1B_Ini_A', 'E1B_Fin_M' ]
			},
			E1B_101_A: 
			{
				required: true,
				digits: true,
				range: [1,2]
			},
			E1B_101_B_a:
			{
				required: true,
				digits: true,
				range: [0,999999998]
			},
			E1B_101_B_b:
			{
				required: true,
				digits: true,
				range: [0,999999998]
			},
			E1B_101_B_c:
			{
				required: true,
				digits: true,
				range: [0,999999998]
			},
			E1B_101_B_d:
			{
				required: true,
				digits: true,
				range: [0,999999998]
			},
			E1B_101_B_e:
			{
				required: true,
				digits: true,
				range: [0,999999998]
			},
			E1B_101_B_f:
			{
				required: true,
				digits: true,
				range: [0,999999998]
			},
			E1B_101_B_g:
			{
				required: true,
				digits: true,
				range: [0,999999998]
			},
			E1B_101_B_h:
			{
				required: true,
				digits: true,
				range: [0,999999998]
			},
			E1B_101_B_i:
			{
				required: true,
				digits: true,
				range: [0,999999998]
			},
			E1B_101_B_j:
			{
				required: true,
				digits: true,
				range: [0,999999998]
			},
			E1B_101_B_Total:
			{
				required: true,
				digits: true,
				range: [1,999999998]
			},
			E1B_101_B_Obs:
			{
				maxlength: 500
			},
			E1B_101_C:
			{
				required: true,
				digits: true,
				range: [1,2]
			},
			E1B_101_D_a:
			{
				required: true,
				digits: true,
				range: [0,999999998]
			},
			E1B_101_D_b:
			{
				required: true,
				digits: true,
				range: [0,999999998]
			},
			E1B_101_D_c:
			{
				required: true,
				digits: true,
				range: [0,999999998]
			},
			E1B_101_D_d:
			{
				required: true,
				digits: true,
				range: [0,999999998]
			},
			E1B_101_D_e:
			{
				required: true,
				digits: true,
				range: [0,999999998]
			},
			E1B_101_D_f:
			{
				required: true,
				digits: true,
				range: [0,999999998]
			},
			E1B_101_D_g:
			{
				required: true,
				digits: true,
				range: [0,999999998]
			},
			E1B_101_D_h:
			{
				required: true,
				digits: true,
				range: [0,999999998]
			},
			E1B_101_D_Total:
			{
				required: true,
				digits: true,
				range: [1,999999998]
			},
			E1B_101_D_Obs:
			{
				maxlength: 200
			}
		},
		messages : 
		{

		},
		errorPlacement: function(error, element) {
			$(element).next().after(error);
		},
		invalidHandler: function(form, validator) {
			var errors = validator.numberOfInvalids();
			if (errors) {
				var message = errors == 1
				? 'Por favor corrige estos errores:\n'
				: 'Por favor corrige los ' + errors + ' errores.\n';
				var errors = "";
				if (validator.errorList.length > 0) {
					for (x=0;x<validator.errorList.length;x++) {
						errors += "\n\u25CF " + validator.errorList[x].message;
					}
				}
				alert(message + errors);
			}
			validator.focusInvalid();
		},
		submitHandler: function(form)
		{
			var data_1b_100 = frm_1B_100.serializeArray();

			var button_form = $(frm_1B_100).find(':submit');
			button_form.attr('disabled','disabled');

			data_1b_100.push(
				{ name: 'vivienda', value: $("input[name='vivienda']").val() },
				{ name: 'E1_B_13_Nro_Hogar', value: $("#E1_B_13_Nro_Hogar").val() },
				{ name: 'E1_201_Nro', value: $("input[name='E1_201_Nro']").val() }
			);
			
			$.ajax({
				url: CI.site_url + '/cedulas/cedula1b/register_1b_100',
				type: 'POST',
				data: data_1b_100,
				dataType: 'json',
				success:function(json) 
				{
					alert(json.msg);
					button_form.removeAttr('disabled');
					validate_vivienda('1B_200');
				}
			});
		}
	}
);


// Form 1B_200 //
frm_1B_200.validate(
	{
		rules : {
			E1B_201_A:
			{
				required: true,
				digits: true,
				range: [1,2]
			},
			E1B_201_B_a:
			{
				required: true,
				digits: true,
				range: [0,999999998]
			},
			E1B_201_B_b:
			{
				required: true,
				digits: true,
				range: [0,999999998]
			},
			E1B_201_B_c:
			{
				required: true,
				digits: true,
				range: [0,999999998]
			},
			E1B_201_B_d:
			{
				required: true,
				digits: true,
				range: [0,999999998]
			},
			E1B_201_B_e:
			{
				required: true,
				digits: true,
				range: [0,999999998]
			},
			E1B_201_B_f:
			{
				required: true,
				digits: true,
				range: [0,999999998]
			},
			E1B_201_B_g:
			{
				required: true,
				digits: true,
				range: [0,999999998]
			},
			E1B_201_B_h:
			{
				required: true,
				digits: true,
				range: [0,999999998]
			},
			E1B_201_B_h_O:
			{
				required: true
			},
			E1B_201_B_Total:
			{
				required: true,
				digits: true,
				range: [0,999999998]
			},
			E1B_201_C:
			{
				required: true,
				digits: true,
				range: [1,2]
			},
			E1B_201_D_a:
			{
				required: true,
				digits: true,
				range: [0,999999998]
			},
			E1B_201_D_b:
			{
				required: true,
				digits: true,
				range: [0,999999998]
			},
			E1B_201_D_c:
			{
				required: true,
				digits: true,
				range: [0,999999998]
			},
			E1B_201_D_d:
			{
				required: true,
				digits: true,
				range: [0,999999998]
			},
			E1B_201_D_e:
			{
				required: true,
				digits: true,
				range: [0,999999998]
			},
			E1B_201_D_f:
			{
				required: true,
				digits: true,
				range: [0,999999998]
			},
			E1B_201_D_g:
			{
				required: true,
				digits: true,
				range: [0,999999998]
			},
			E1B_201_D_h:
			{
				required: true,
				digits: true,
				range: [0,999999998]
			},
			E1B_201_D_h_O:
			{
				required: true
			},
			E1B_201_D_Total:
			{
				required: true,
				digits: true,
				range: [0,999999998]
			},
			E1B_201_D_Obs:
			{
				maxlength: 200
			}
		},
		messages : {

		},
		errorPlacement: function(error, element) {
			$(element).next().after(error);
		},
		invalidHandler: function(form, validator) {
			var errors = validator.numberOfInvalids();
			if (errors) 
			{
				var message = errors == 1
				? 'Por favor corrige estos errores:\n'
				: 'Por favor corrige los ' + errors + ' errores.\n';
				var errors = "";
				if (validator.errorList.length > 0) 
				{
					for (x=0;x<validator.errorList.length;x++) 
					{
						errors += "\n\u25CF " + validator.errorList[x].message;
					}
				}
				alert(message + errors);
			}
			validator.focusInvalid();
		},
		submitHandler: function(form)
		{
			var data_1b_200 = frm_1B_200.serializeArray();

			var button_form = $(frm_1B_200).find(':submit');
			button_form.attr('disabled','disabled');

			data_1b_200.push(
				{ name: 'vivienda', value: $("input[name='vivienda']").val() },
				{ name: 'E1_B_13_Nro_Hogar', value: $("#E1_B_13_Nro_Hogar").val() },
				{ name: 'E1_201_Nro', value: $("input[name='E1_201_Nro']").val() }
			);
			
			$.ajax({
				url: CI.site_url + '/cedulas/cedula1b/register_1b_200',
				type: 'POST',
				data: data_1b_200,
				dataType: 'json',
				success:function(json) 
				{
					alert(json.msg);
					button_form.removeAttr('disabled');
					validate_vivienda('1B_300');
				}
			});
		}
	}
);


// Form 1B_300 //
frm_1B_300.validate(
	{
		rules : {
			E1B_301_A:
			{
				required: true,
				digits: true,
				range: [1,2]
			},
			E1B_301_B_a:
			{
				required: true,
				digits: true,
				range: [0,999999998]
			},
			E1B_301_B_b:
			{
				required: true,
				digits: true,
				range: [0,999999998]
			},
			E1B_301_B_c:
			{
				required: true,
				digits: true,
				range: [0,999999998]
			},
			E1B_301_B_d:
			{
				required: true,
				digits: true,
				range: [0,999999998]
			},
			E1B_301_B_e:
			{
				required: true,
				digits: true,
				range: [0,999999998]
			},
			E1B_301_B_f:
			{
				required: true,
				digits: true,
				range: [0,999999998]
			},
			E1B_301_B_g:
			{
				required: true,
				digits: true,
				range: [0,999999998]
			},
			E1B_301_B_h:
			{
				required: true,
				digits: true,
				range: [0,999999998]
			},
			E1B_301_B_i:
			{
				required: true,
				digits: true,
				range: [0,999999998]
			},
			E1B_301_B_i_O:
			{
				required: true
			},
			E1B_301_B_Total:
			{
				required: true,
				digits: true,
				range: [0,999999998]
			},
			E1B_301_C:
			{
				required: true,
				digits: true,
				range: [1,2]
			},
			E1B_301_D_a:
			{
				required: true,
				digits: true,
				range: [0,999999998]
			},
			E1B_301_D_b:
			{
				required: true,
				digits: true,
				range: [0,999999998]
			},
			E1B_301_D_c:
			{
				required: true,
				digits: true,
				range: [0,999999998]
			},
			E1B_301_D_d:
			{
				required: true,
				digits: true,
				range: [0,999999998]
			},
			E1B_301_D_e:
			{
				required: true,
				digits: true,
				range: [0,999999998]
			},
			E1B_301_D_f:
			{
				required: true,
				digits: true,
				range: [0,999999998]
			},
			E1B_301_D_g:
			{
				required: true,
				digits: true,
				range: [0,999999998]
			},
			E1B_301_D_h:
			{
				required: true,
				digits: true,
				range: [0,999999998]
			},
			E1B_301_D_h_O:
			{
				required: true
			},
			E1B_301_D_Total:
			{
				required: true,
				digits: true,
				range: [0,999999998]
			},
			E1B_301_D_Obs:
			{
				maxlength: 200
			}
		},
		messages : {

		},
		errorPlacement: function(error, element) {
			$(element).next().after(error);
		},
		invalidHandler: function(form, validator) {
			var errors = validator.numberOfInvalids();
			if (errors) 
			{
				var message = errors == 1
				? 'Por favor corrige estos errores:\n'
				: 'Por favor corrige los ' + errors + ' errores.\n';
				var errors = "";
				if (validator.errorList.length > 0) 
				{
					for (x=0;x<validator.errorList.length;x++) 
					{
						errors += "\n\u25CF " + validator.errorList[x].message;
					}
				}
				alert(message + errors);
			}
			validator.focusInvalid();
		},
		submitHandler: function(form)
		{
			var data_1b_300 = frm_1B_300.serializeArray();

			var button_form = $(frm_1B_300).find(':submit');
			button_form.attr('disabled','disabled');

			data_1b_300.push(
				{ name: 'vivienda', value: $("input[name='vivienda']").val() },
				{ name: 'E1_B_13_Nro_Hogar', value: $("#E1_B_13_Nro_Hogar").val() },
				{ name: 'E1_201_Nro', value: $("input[name='E1_201_Nro']").val() }
			);
			
			$.ajax({
				url: CI.site_url + '/cedulas/cedula1b/register_1b_300',
				type: 'POST',
				data: data_1b_300,
				dataType: 'json',
				success:function(json) 
				{
					alert(json.msg);
					button_form.removeAttr('disabled');
				}
			});
		}
	}
);
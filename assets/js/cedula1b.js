// general variables //
var this_value;

// specific variables //
var A_4_Centro_Poblado = $('#A_4_Centro_Poblado');
var A_5_Comunidad_Nativa = $('#A_5_Comunidad_Nativa');
var A_6_Anexo_Cn = $('#A_6_Anexo_Cn');
var B_7_Zona = $('#B_7_Zona');
var B_8_Manzana = $('#B_8_Manzana');
var B_10_Vivienda_nro = $('#B_10_Vivienda_nro');

var E1_201_Nro = $('#E1_201_Nro');

var E1B_101_A = $('#E1B_101_A');
var table_100_A = $('#table_PC');

var E1B_101_C = $('#E1B_101_C');
var table_100_C = $('#table_SC');


var E1B_201_A = $('#E1B_201_A');
var table_200_A = $('#table_PR');

var E1B_201_C = $('#E1B_201_C');
var table_200_C = $('#table_SR');


var E1B_301_A = $('#E1B_301_A');
var table_300_A = $('#table_PA');

var E1B_301_C = $('#E1B_301_C');
var table_300_C = $('#table_SA');

// form variables //
var frm_1B = $('#1B');

var frm_1B_100 = $('#1B_100');
var frm_1B_200 = $('#1B_200');
var frm_1B_300 = $('#1B_300');


// Head //
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

			$('#vivienda').val( contenido );
			$('#E1_B_13_Nro_Hogar').empty();
			$('#E1_B_12').val('');

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


E1_201_Nro.on(
	{ change : function ( event ) 
		{
			var search_parameters = { 
				vivienda: $("input[name='vivienda']").val(),
				E1_B_13_Nro_Hogar: $("#E1_B_13_Nro_Hogar").val(),
				E1_201_Nro: $("input[name='E1_201_Nro']").val(),
			};

			clear_by_class(['data_head']);

			$.ajax({
				url: CI.site_url + '/cedulas/cedula1b/get_data',
				type: 'POST',
				cache: false,
				data: search_parameters,
				dataType: 'json',
				success:function(json_data)
				{

					$.each( json_data.E1_Persona,
							function (fila, valor)
							{
								valor = ( valor ==  null ) ? '' : valor;
								$('#' + fila).val( valor );
							}
						);

					var forms = [ frm_1B_100.attr('id'), frm_1B_200.attr('id'), frm_1B_300.attr('id') ];
					var tables = [ table_100_A.attr('id'), table_100_C.attr('id'), table_200_A.attr('id'), table_200_C.attr('id'), table_300_A.attr('id'), table_300_C.attr('id') ];
					
					clear_form_1B( forms, tables, 'row_' );

					var fields = [ 'E1B_101_A', 'E1B_101_C', 'E1B_201_A', 'E1B_201_C', 'E1B_301_A', 'E1B_301_C' ];

					$.each( json_data.E1B_Recursos_Naturales, 
							function(fila, valor)
							{
								valor = ( valor == null ) ? '' : valor;
								
								$('#' + fila).val(valor);

								if ( $.inArray( fila, fields ) !== -1 )
								{
									if ( valor == 2 ) $('#' + fila).trigger('change');
								}
							}
						);

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
										$('#button_' + old_nro + '_' + old_tipo).text('Add');
										old_tipo = tipo;
										old_nro = nro;
										break;
								}

								var row = DynamicRows( datos.E1B_Tipo_Nro, datos.E1B_Tipo );
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


								$('#button_' + datos.E1B_Tipo_Nro + '_'  + tipo).text('Remove');
							}
						);

					$('#button_' + nro + '_' + tipo).text('Add');
				}
			});
		}
	}
);


// Question 100 //
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


function common_event_group ( id_table, name_class, input_value, input_disabled, suffix )
{
	salt_input( input_value, name_class, input_disabled );
	validate_table( input_value, id_table, suffix );
}


// Form 1B //
frm_1B.validate(
	{
		rules : 
		{
			E1_B_13_Nro_Hogar : 
			{
				required : true
			},
			E1_201_Nro :
			{
				required : true,
				number : true,
			},
			E1_202_Nombre :
			{
				required : true
			},
			E1_202_Apellidos :
			{
				required : true
			},
			E1B_Informante_Nro :
			{
				required : true,
				number : true,
			},
			E1B_13 :
			{
				required : true,
				number : true,
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
		number:true,
	},
	'E1B_1C_Um':
	{
		required: true,
	},
	'E1B_1C_Peso':
	{
		required: true,
		number: true,
	},
	'E1B_1D_Venta_K':
	{
		required: true,
		number: true,
	},
	'E1B_1D_Venta_T':
	{
		required: true,
		number: true,
	},
	'E1B_1D_Venta_M_Local':
	{
		required: true,
		number: true,
	},
	'E1B_1D_Venta_M_Region':
	{
		required: true,
		number: true,
	},
	'E1B_1D_Venta_M_Nacion':
	{
		required: true,
		number: true,
	},
	'E1B_1D_Venta_M_NA':
	{
		required: true,
		number: true,
	},
	'E1B_1D_Consumo_K':
	{
		required: true,
		number: true,
	},
	'E1B_1D_Consumo_T':
	{
		required: true,
		number: true,
	},
	'E1B_1D_Trueque_K':
	{
		required: true,
		number: true,
	},
	'E1B_1D_Trueque_T':
	{
		required: true,
		number: true,
	},
	'E1B_1D_Sub_K':
	{
		required: true,
		number: true,
	},
	'E1B_1D_Sub_T':
	{
		required: true,
		number: true,
	},
	'E1B_1D_Otro_K':
	{
		required: true,
		number: true,
	},
	'E1B_1D_Otro_T':
	{
		required: true,
		number: true,
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
				year: true
			},
			E1B_101_A: 
			{
				required: true,
				digits: true
			},
			E1B_101_B_a:
			{
				required: true,
				number: true
			},
			E1B_101_B_b:
			{
				required: true,
				number: true
			},
			E1B_101_B_c:
			{
				required: true,
				number: true
			},
			E1B_101_B_c:
			{
				required: true,
				number: true
			},
			E1B_101_B_d:
			{
				required: true,
				number: true
			},
			E1B_101_B_e:
			{
				required: true,
				number: true
			},
			E1B_101_B_f:
			{
				required: true,
				number: true
			},
			E1B_101_B_g:
			{
				required: true,
				number: true
			},
			E1B_101_B_h:
			{
				required: true,
				number: true
			},
			E1B_101_B_i:
			{
				required: true,
				number: true
			},
			E1B_101_B_j:
			{
				required: true,
				number: true
			},
			E1B_101_B_Total:
			{
				required: true,
				number: true,
			},
			E1B_101_C:
			{
				required: true,
				digits: true,
			},
			E1B_101_D_a:
			{
				required: true,
				number: true,
			},
			E1B_101_D_b:
			{
				required: true,
				number: true,
			},
			E1B_101_D_c:
			{
				required: true,
				number: true,
			},
			E1B_101_D_d:
			{
				required: true,
				number: true,
			},
			E1B_101_D_e:
			{
				required: true,
				number: true,
			},
			E1B_101_D_f:
			{
				required: true,
				number: true,
			},
			E1B_101_D_g:
			{
				required: true,
				number: true,
			},
			E1B_101_D_h:
			{
				required: true,
				number: true,
			},
			E1B_101_D_Total:
			{
				required: true,
				number: true,
			},
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
				}
			});
		}
	}
);


// Form 1B_200 //
frm_1B_200.validate(
	{
		rules : {
			
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
				}
			});
		}
	}
);


// Form 1B_300 //
frm_1B_300.validate(
	{
		rules : {
			
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
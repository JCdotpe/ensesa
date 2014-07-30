// global variables //
var departamento = $('#Nombre_Dpto');
var provincia = $('#Nombre_Prov');
var distrito = $('#Nombre_Dist');

var codigo_departamento = $('#A_1_Cod_Dpto');
var codigo_provincia = $('#A_2_Cod_Prov');
var codigo_distrito = $('#A_3_Cod_Dist');

function initialize_region()
{

	$( departamento ).empty();
	
	$( departamento ).append('<option value="0">SELECCIONE...</option>');
	$( provincia ).html('<option value="0">SELECCIONE...</option>');
	$( distrito ).html('<option value="0">SELECCIONE...</option>');

	load_ubigeo( 'DEP' );
}

departamento.on(
	{ change : function( event )
		{
			value = $(departamento).val();
			set_code_ubigeo( codigo_departamento, value );

			$(provincia).empty();
			$(provincia).append('<option value="0">SELECCIONE...</option>');

			$('#A_2_Cod_Prov').val(''); // Codigo eventual, de acuerdo sea el caso del app. Si no se necesita se elimna o comenta
			
			if ( value != 0 )  load_ubigeo('PROV');
			
			$(distrito).html('<option value="0">SELECCIONE...</option>');

			$('#A_3_Cod_Dist').val(''); // Codigo eventual, de acuerdo sea el caso del app. Si no se necesita se elimna o comenta
		}
	}
);

provincia.on(
	{ change: function( event )
		{
			value = $(provincia).val();
			set_code_ubigeo( codigo_provincia, value );

			$(distrito).empty();
			$(distrito).append('<option value="0">SELECCIONE...</option>');

			$('#A_3_Cod_Dist').val(''); // Codigo eventual, de acuerdo sea el caso del app. Si no se necesita se elimna o comenta

			if ( value != 0 ) load_ubigeo('DIST');
		}
	}
);

distrito.on(
	{ change: function( event )
		{
			value = $(distrito).val();
			set_code_ubigeo( codigo_distrito, value );

			// **** Codigo eventual, de acuerdo sea el caso del app. Si no se necesita se elimna o comenta *** //
			list_dropdown = ['A_4_Centro_Poblado', 'A_5_Comunidad_Nativa', 'A_6_Anexo_Cn', 'B_7_Zona', 'B_8_Manzana', 'B_9_1_AER_ini', 'B_9_2_AER_fin', 'B_10_Vivienda_nro', 'E1_B_13_Nro_Hogar'];
			// clean_dropdown( list_dropdown );
			clean_ubigeo( list_dropdown, ['ubigeo']);
			search_data_ubicacion('A_4_Centro_Poblado');
			// ****
		}
	}
);


function load_ubigeo(name)
{

	indice1 = $(departamento).children(':selected').attr('id');
	indice2 = $(provincia).children(':selected').attr('id');

	$.ajax({
		type: "POST",
		url: CI.base_url + "assets/json/ubigeo.json",
		dataType:'json',
		success: function(json_data){

			if ( name == 'DEP' ){
				for (var k in json_data.Ubigeo) {
					$( departamento ).append('<option id="' + k + '" value="' + json_data.Ubigeo[k].CCDD + '" >' + json_data.Ubigeo[k].Nombre + '</option>');
				}

			}else if ( name == 'PROV'){
				for (var k in json_data.Ubigeo[indice1].PROVINCIA) {
					$( provincia ).append('<option id="' + k + '" value="' + json_data.Ubigeo[indice1].PROVINCIA[k].CCPP + '" >' +json_data.Ubigeo[indice1].PROVINCIA[k].Nombre + '</option>');
				}

			}else if ( name == 'DIST'){
				for (var k in json_data.Ubigeo[indice1].PROVINCIA[indice2].DISTRITO) {
					$( distrito ).append('<option id="' + k + '" value="' + json_data.Ubigeo[indice1].PROVINCIA[indice2].DISTRITO[k].CCDI + '" >' +json_data.Ubigeo[indice1].PROVINCIA[indice2].DISTRITO[k].Nombre + '</option>');
				}

			}
		}
	});

}

function set_code_ubigeo( input_code, value )
{
	if ( $(input_code).length )
	{
		$(input_code).val( value );
	}
}

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

	valor = $('#E1_201_Nro').val();

	clean_dropdown( list_dropdown );
	clear_by_class ( name_class )

	if ( valor != '')
	{
		$('#E1_201_Nro').trigger('change');
	}

}
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

			// Codigo eventual, de acuerdo sea el caso del app. Si no se necesita se elimna o comenta
			$(codigo_distrito).val(''); 
			$(distrito).trigger('change');
			// ****
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

			

			if ( value != 0 ) load_ubigeo('DIST');

			// Codigo eventual, de acuerdo sea el caso del app. Si no se necesita se elimna o comenta
			$(codigo_distrito).val('');
			$(distrito).trigger('change');
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
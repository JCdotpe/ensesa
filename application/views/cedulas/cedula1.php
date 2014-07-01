<?php 

$cuestionario = array(
				'id' => 'cuestionario',
				'name' => 'cuestionario',
				'class' => 'form-control',
			);

$cuestionario_adicional = array(
				'id' => 'cuestionario_adicional',
				'name' => 'cuestionario_adicional',
				'class' => 'form-control',
			);

$departamento = array(
				'id' => 'departamento',
				'name' => 'departamento',
				'class' => 'form-control',
			);

$codigo_departamento = array(
				'id' => 'codigo_departamento',
				'name' => 'codigo_departamento',
				'class' => 'form-control',
			);

$provincia = array(
				'id' => 'provincia',
				'name' => 'provincia',
				'class' => 'form-control',
			);

$codigo_provincia = array(
				'id' => 'codigo_provincia',
				'name' => 'codigo_provincia',
				'class' => 'form-control',
			);

$distrito = array(
				'id' => 'distrito',
				'name' => 'distrito',
				'class' => 'form-control',
			);

$codigo_distrito = array(
				'id' => 'codigo_distrito',
				'name' => 'codigo_distrito',
				'class' => 'form-control',
			);

$centro_poblado = array(
				'id' => 'centro_poblado',
				'name' => 'centro_poblado',
				'class' => 'form-control',
			);

$comunidad_nativa = array(
				'id' => 'comunidad_nativa',
				'name' => 'comunidad_nativa',
				'class' => 'form-control',
			);

$anexo_ccnn = array(
				'id' => 'anexo_ccnn',
				'name' => 'anexo_ccnn',
				'class' => 'form-control',
			);

$zona = array(
			'id' => 'zona',
			'name' => 'zona',
			'class' => 'form-control',
		);

$hogares = array(
			'id' => 'hogares',
			'name' => 'hogares',
			'class' => 'form-control',
		);

?>

<!-- Items A y B -->

<table class="table table-bordered">
	<tr>
		<th colspan="4"> Vivienda, Hogar, Educacion, Salud, Empleo e Ingresos, Conservacion de bosques, Recursos y Servicios del bosque, Deforestacion y Comite de vigilancia del bosque </th>
		<th> Cuestionario </th>
		<th> Cuestionario Adicional </th>
	</tr>
	<tr>
		<td colspan="4"> Cuestionario Confidencial: Amparado por el decreto legislativo Nro 604 y por el decreto supremo 043-2001-PCM: Secreto Estadistico </td>
		<td> <?php echo form_input($cuestionario); ?> </td>
		<td> <?php echo form_input($cuestionario_adicional); ?> </td>
	</tr>
	<tr>
		<th colspan="2"> A. Ubicacion Geografica </th>
		<th>COD</th>
		<th colspan="3"> B. Ubicacion Censal </th>
	</tr>
	<tr>
		<td> 1. Departamento </td>
		<td> <?php echo form_input($departamento); ?> </td>
		<td> <?php echo form_input($codigo_departamento); ?> </td>
		<td colspan="2"> 7. Zona Nro </td>
		<td> <?php echo form_input($zona); ?> </td>
	</tr>
	<tr>
		<td> 2. Provincia </td>
		<td> <?php echo form_input($provincia); ?> </td>
		<td> <?php echo form_input($codigo_provincia); ?> </td>
		<td colspan="2"> 8. Manzana Nro </td>
		<td> <?php echo form_input($zona); ?> </td>
	</tr>
	<tr>
		<td> 3. Distrito </td>
		<td> <?php echo form_input($distrito); ?> </td>
		<td> <?php echo form_input($codigo_distrito); ?> </td>
		<td rowspan="2"> 9. A.E.R.N </td>
		<td> Inicial </td>
		<td> <?php echo form_input($zona); ?> </td>
	</tr>
	<tr>
		<td> 4. Centro Poblado </td>
		<td colspan="2"> <?php echo form_input($centro_poblado); ?> </td>
		<td> Final </td>
		<td> <?php echo form_input($zona); ?> </td>
	</tr>
	<tr>
		<td> 5. Comunidad Nativa </td>
		<td colspan="2"> <?php echo form_input($comunidad_nativa); ?> </td>
		<td colspan="2"> 10. Vivienda Nro </td>
		<td> <?php echo form_input($zona); ?> </td>
	</tr>
	<tr>
		<td> 6. Anexo CC.NN. </td>
		<td colspan="2"> <?php echo form_input($anexo_ccnn); ?> </td>
		<td colspan="2"> </td>
		<td> </td>
	</tr>
</table>

<!-- Fin Items A y B -->

<?php 

$tipo_via = array(
				'id' => 'tipo_via',
				'name' => 'tipo_via',
				'class' => 'form-control',
			);

$nombre_via = array(
				'id' => 'nombre_via',
				'name' => 'nombre_via',
				'class' => 'form-control',
			);

$nro_puerta = array(
				'id' => 'nro_puerta',
				'name' => 'nro_puerta',
				'class' => 'form-control',
			);

$interior = array(
				'id' => 'interior',
				'name' => 'interior',
				'class' => 'form-control',
			);

$piso = array(
				'id' => 'piso',
				'name' => 'piso',
				'class' => 'form-control',
			);

$manzana = array(
				'id' => 'manzana',
				'name' => 'manzana',
				'class' => 'form-control',
			);

$lote = array(
				'id' => 'lote',
				'name' => 'lote',
				'class' => 'form-control',
			);

$km = array(
				'id' => 'km',
				'name' => 'km',
				'class' => 'form-control',
			);

$telefono = array(
				'id' => 'telefono',
				'name' => 'telefono',
				'class' => 'form-control',
			);

$referencia = array(
				'id' => 'referencia',
				'name' => 'referencia',
				'class' => 'form-control',
			);

$referencia_nombre = array(
				'id' => 'referencia_nombre',
				'name' => 'referencia_nombre',
				'class' => 'form-control',
			);

$cuantos_hogares = array(
				'id' => 'cuantos_hogares',
				'name' => 'cuantos_hogares',
				'class' => 'form-control',
			);

$hogar_nro = array(
				'id' => 'hogar_nro',
				'name' => 'hogar_nro',
				'class' => 'form-control',
			);

$nombre_jefe_hogar = array(
				'id' => 'nombre_jefe_hogar',
				'name' => 'nombre_jefe_hogar',
				'class' => 'form-control',
			);

$esta_vivienda = array(
				'id' => 'esta_vivienda',
				'name' => 'esta_vivienda',
				'class' => 'form-control',
			);

$departamento_preg_16 = array(
				'id' => 'departamento_preg_16',
				'name' => 'departamento_preg_16',
				'class' => 'form-control',
			);

$provincia_preg_16 = array(
				'id' => 'provincia_preg_16',
				'name' => 'provincia_preg_16',
				'class' => 'form-control',
			);

$distrito_preg_16 = array(
				'id' => 'distrito_preg_16',
				'name' => 'distrito_preg_16',
				'class' => 'form-control',
			);

$ccpp_preg_16 = array(
				'id' => 'ccpp_preg_16',
				'name' => 'ccpp_preg_16',
				'class' => 'form-control',
			);

$mismo_ccpp_preg_16 = array(
				'id' => 'mismo_ccpp_preg_16',
				'name' => 'mismo_ccpp_preg_16',
				'class' => 'form-control',
			);


?>

<table class="table table-bordered">
	<tr>
		<td colspan="11"> 11. Direccion </td>
	</tr>
	<tr>
		<td> Tipo de Via </td>
		<td colspan="10"> <?php echo form_input($tipo_via); ?> </td>
	</tr>
	<tr>
		<td colspan="4"> Nombre de Via </td>
		<td> Nro de Puerta </td>
		<td> Interior </td>
		<td> Piso </td>
		<td> Manzana </td>
		<td> Lote </td>
		<td> Km </td>
		<td> Telefono </td>
	</tr>
	<tr>
		<td colspan="4"> <?php echo form_input($nombre_via); ?> </td>
		<td> <?php echo form_input($nro_puerta); ?> </td>
		<td> <?php echo form_input($interior); ?> </td>
		<td> <?php echo form_input($piso); ?> </td>
		<td> <?php echo form_input($manzana); ?> </td>
		<td> <?php echo form_input($lote); ?> </td>
		<td> <?php echo form_input($km); ?> </td>
		<td> <?php echo form_input($telefono); ?> </td>
	</tr>
	<tr>
		<td> 11A. Referencia </td>
		<td colspan="10"> <?php echo form_input($referencia); ?>	</td>
	</tr>
	<tr>
		<td> Nombre </td>
		<td colspan="10"> <?php echo form_input($referencia_nombre); ?> </td>
	</tr>
	<tr>
		<td colspan="10"> 12. Total de Hogares que ocupan la vivienda </td>
		<td> 13. Hogar Nro </td>
	</tr>
	<tr>
		<td colspan="4"> Cuanto hogares ocupan la vivienda? </td>
		<td colspan="6"> <?php echo form_input($cuantos_hogares); ?> </td>
		<td> <?php echo form_input($hogar_nro); ?> </td>
	</tr>
	<tr>
		<td colspan="4"> 14. Nombres y Apellidos del Jefe del Hogar </td>
		<td colspan="7"> <?php echo form_input($nombre_jefe_hogar); ?> </td>
	</tr>
	<tr>
		<td colspan="3"> 15. Esta vivienda es: </td>
		<td colspan="8"> 16. En que departamento, provincia, distrito y cc.pp. esta ubicada su vivienda principal? </td>
	</tr>
	<tr>
		<td colspan="3" rowspan="3"> <?php echo form_input($esta_vivienda); ?> </td>
		<td> Departamento </td>
		<td colspan="3"> <?php echo form_input($departamento_preg_16); ?> </td>
		<td> Distrito </td>
		<td colspan="3"> <?php echo form_input($distrito_preg_16); ?> </td>
	</tr>
	<tr>
		<td> Provincia </td>
		<td colspan="3"> <?php echo form_input($provincia_preg_16); ?> </td>
		<td> CC.PP. </td>
		<td colspan="3"> <?php echo form_input($ccpp_preg_16); ?> </td>
	</tr>
	<tr>
		<td colspan="4"></td>
		<td> En el mismo CC.PP </td>
		<td colspan="3"> <?php echo form_input($mismo_ccpp_preg_16); ?> </td>
	</tr>

</table>

<!-- Item C -->
<?php 
// Primera Visita
$first_fecha_uno = array(
					'id' => 'first_fecha_uno',
					'name' => 'first_fecha_uno',
					'class' => 'form-control' 
				);

$first_hora_uno_de = array(
					'id' => 'first_hora_uno_de',
					'name' => 'first_hora_uno_de',
					'class' => 'form-control' 
				);

$first_hora_uno_a = array(
					'id' => 'first_hora_uno_a',
					'name' => 'first_hora_uno_a',
					'class' => 'form-control' 
				);

$first_fecha_dos = array(
					'id' => 'first_fecha_dos',
					'name' => 'first_fecha_dos',
					'class' => 'form-control' 
				);

$first_hora_dos = array(
					'id' => 'first_hora_dos',
					'name' => 'first_hora_dos',
					'class' => 'form-control' 
				);

$first_resultado_uno = array(
					'id' => 'first_resultado_uno',
					'name' => 'first_resultado_uno',
					'class' => 'form-control' 
				);

$first_fecha_tres = array(
					'id' => 'first_fecha_tres',
					'name' => 'first_fecha_tres',
					'class' => 'form-control' 
				);

$first_hora_tres_de = array(
					'id' => 'first_hora_tres_de',
					'name' => 'first_hora_tres_de',
					'class' => 'form-control' 
				);

$first_hora_tres_a = array(
					'id' => 'first_hora_tres_a',
					'name' => 'first_hora_tres_a',
					'class' => 'form-control' 
				);

$first_resultado_dos = array(
					'id' => 'first_resultado_dos',
					'name' => 'first_resultado_dos',
					'class' => 'form-control' 
				);

// Segunda Visita
$second_fecha_uno = array(
					'id' => 'second_fecha_uno',
					'name' => 'second_fecha_uno',
					'class' => 'form-control' 
				);

$second_hora_uno_de = array(
					'id' => 'second_hora_uno_de',
					'name' => 'second_hora_uno_de',
					'class' => 'form-control' 
				);

$second_hora_uno_a = array(
					'id' => 'second_hora_uno_a',
					'name' => 'second_hora_uno_a',
					'class' => 'form-control' 
				);

$second_fecha_dos = array(
					'id' => 'second_fecha_dos',
					'name' => 'second_fecha_dos',
					'class' => 'form-control' 
				);

$second_hora_dos = array(
					'id' => 'second_hora_dos',
					'name' => 'second_hora_dos',
					'class' => 'form-control' 
				);

$second_resultado_uno = array(
					'id' => 'second_resultado_uno',
					'name' => 'second_resultado_uno',
					'class' => 'form-control' 
				);

$second_fecha_tres = array(
					'id' => 'second_fecha_tres',
					'name' => 'second_fecha_tres',
					'class' => 'form-control' 
				);

$second_hora_tres_de = array(
					'id' => 'second_hora_tres_de',
					'name' => 'second_hora_tres_de',
					'class' => 'form-control' 
				);

$second_hora_tres_a = array(
					'id' => 'second_hora_tres_a',
					'name' => 'second_hora_tres_a',
					'class' => 'form-control' 
				);

$second_resultado_dos = array(
					'id' => 'second_resultado_dos',
					'name' => 'second_resultado_dos',
					'class' => 'form-control' 
				);
// Tercera Visita
$third_fecha_uno = array(
					'id' => 'third_fecha_uno',
					'name' => 'third_fecha_uno',
					'class' => 'form-control' 
				);

$third_hora_uno_de = array(
					'id' => 'third_hora_uno_de',
					'name' => 'third_hora_uno_de',
					'class' => 'form-control' 
				);

$third_hora_uno_a = array(
					'id' => 'third_hora_uno_a',
					'name' => 'third_hora_uno_a',
					'class' => 'form-control' 
				);

$third_fecha_dos = array(
					'id' => 'third_fecha_dos',
					'name' => 'third_fecha_dos',
					'class' => 'form-control' 
				);

$third_hora_dos = array(
					'id' => 'third_hora_dos',
					'name' => 'third_hora_dos',
					'class' => 'form-control' 
				);

$third_resultado_uno = array(
					'id' => 'third_resultado_uno',
					'name' => 'third_resultado_uno',
					'class' => 'form-control' 
				);

$third_fecha_tres = array(
					'id' => 'third_fecha_tres',
					'name' => 'third_fecha_tres',
					'class' => 'form-control' 
				);

$third_hora_tres_de = array(
					'id' => 'third_hora_tres_de',
					'name' => 'third_hora_tres_de',
					'class' => 'form-control' 
				);

$third_hora_tres_a = array(
					'id' => 'third_hora_tres_a',
					'name' => 'third_hora_tres_a',
					'class' => 'form-control' 
				);

$third_resultado_dos = array(
					'id' => 'third_resultado_dos',
					'name' => 'third_resultado_dos',
					'class' => 'form-control' 
				);
// Cuarta Visita
$fourth_fecha_uno = array(
					'id' => 'fourth_fecha_uno',
					'name' => 'fourth_fecha_uno',
					'class' => 'form-control' 
				);

$fourth_hora_uno_de = array(
					'id' => 'fourth_hora_uno_de',
					'name' => 'fourth_hora_uno_de',
					'class' => 'form-control' 
				);

$fourth_hora_uno_a = array(
					'id' => 'fourth_hora_uno_a',
					'name' => 'fourth_hora_uno_a',
					'class' => 'form-control' 
				);

$fourth_fecha_dos = array(
					'id' => 'fourth_fecha_dos',
					'name' => 'fourth_fecha_dos',
					'class' => 'form-control' 
				);

$fourth_hora_dos = array(
					'id' => 'fourth_hora_dos',
					'name' => 'fourth_hora_dos',
					'class' => 'form-control' 
				);

$fourth_resultado_uno = array(
					'id' => 'fourth_resultado_uno',
					'name' => 'fourth_resultado_uno',
					'class' => 'form-control' 
				);

$fourth_fecha_tres = array(
					'id' => 'fourth_fecha_tres',
					'name' => 'fourth_fecha_tres',
					'class' => 'form-control' 
				);

$fourth_hora_tres_de = array(
					'id' => 'fourth_hora_tres_de',
					'name' => 'fourth_hora_tres_de',
					'class' => 'form-control' 
				);

$fourth_hora_tres_a = array(
					'id' => 'fourth_hora_tres_a',
					'name' => 'fourth_hora_tres_a',
					'class' => 'form-control' 
				);

$fourth_resultado_dos = array(
					'id' => 'fourth_resultado_dos',
					'name' => 'fourth_resultado_dos',
					'class' => 'form-control' 
				);
// Quinta Visita
$fifth_fecha_uno = array(
					'id' => 'fifth_fecha_uno',
					'name' => 'fifth_fecha_uno',
					'class' => 'form-control' 
				);

$fifth_hora_uno_de = array(
					'id' => 'fifth_hora_uno_de',
					'name' => 'fifth_hora_uno_de',
					'class' => 'form-control' 
				);

$fifth_hora_uno_a = array(
					'id' => 'fifth_hora_uno_a',
					'name' => 'fifth_hora_uno_a',
					'class' => 'form-control' 
				);

$fifth_fecha_dos = array(
					'id' => 'fifth_fecha_dos',
					'name' => 'fifth_fecha_dos',
					'class' => 'form-control' 
				);

$fifth_hora_dos = array(
					'id' => 'fifth_hora_dos',
					'name' => 'fifth_hora_dos',
					'class' => 'form-control' 
				);

$fifth_resultado_uno = array(
					'id' => 'fifth_resultado_uno',
					'name' => 'fifth_resultado_uno',
					'class' => 'form-control' 
				);

$fifth_fecha_tres = array(
					'id' => 'fifth_fecha_tres',
					'name' => 'fifth_fecha_tres',
					'class' => 'form-control' 
				);

$fifth_hora_tres_de = array(
					'id' => 'fifth_hora_tres_de',
					'name' => 'fifth_hora_tres_de',
					'class' => 'form-control' 
				);

$fifth_hora_tres_a = array(
					'id' => 'fifth_hora_tres_a',
					'name' => 'fifth_hora_tres_a',
					'class' => 'form-control' 
				);

$fifth_resultado_dos = array(
					'id' => 'fifth_resultado_dos',
					'name' => 'fifth_resultado_dos',
					'class' => 'form-control' 
				);
// Sexta Temporada
$sixth_fecha_uno = array(
					'id' => 'sixth_fecha_uno',
					'name' => 'sixth_fecha_uno',
					'class' => 'form-control' 
				);

$sixth_hora_uno_de = array(
					'id' => 'sixth_hora_uno_de',
					'name' => 'sixth_hora_uno_de',
					'class' => 'form-control' 
				);

$sixth_hora_uno_a = array(
					'id' => 'sixth_hora_uno_a',
					'name' => 'sixth_hora_uno_a',
					'class' => 'form-control' 
				);

$sixth_fecha_dos = array(
					'id' => 'sixth_fecha_dos',
					'name' => 'sixth_fecha_dos',
					'class' => 'form-control' 
				);

$sixth_hora_dos = array(
					'id' => 'sixth_hora_dos',
					'name' => 'sixth_hora_dos',
					'class' => 'form-control' 
				);

$sixth_resultado_uno = array(
					'id' => 'sixth_resultado_uno',
					'name' => 'sixth_resultado_uno',
					'class' => 'form-control' 
				);

$sixth_fecha_tres = array(
					'id' => 'sixth_fecha_tres',
					'name' => 'sixth_fecha_tres',
					'class' => 'form-control' 
				);

$sixth_hora_tres_de = array(
					'id' => 'sixth_hora_tres_de',
					'name' => 'sixth_hora_tres_de',
					'class' => 'form-control' 
				);

$sixth_hora_tres_a = array(
					'id' => 'sixth_hora_tres_a',
					'name' => 'sixth_hora_tres_a',
					'class' => 'form-control' 
				);

$sixth_resultado_dos = array(
					'id' => 'sixth_resultado_dos',
					'name' => 'sixth_resultado_dos',
					'class' => 'form-control' 
				);
// Pregunta 17
$fecha_pregunta_17 = array(
					'id' => 'fecha_pregunta_17',
					'name' => 'fecha_pregunta_17',
					'class' => 'form-control' 
				);

$resultado_pregunta_17 = array(
					'id' => 'resultado_pregunta_17',
					'name' => 'resultado_pregunta_17',
					'class' => 'form-control' 
				);

$codigo_resultado = array(
					'id' => 'codigo_resultado',
					'name' => 'codigo_resultado',
					'class' => 'form-control' 
				);

$codigo_resultado_especifique = array(
					'id' => 'codigo_resultado_especifique',
					'name' => 'codigo_resultado_especifique',
					'class' => 'form-control' 
				);

?>
<table class="table table-bordered">
	<tr>
		<th colspan="11"> C. Entrevista y Supervision </th>
	</tr>
	<tr>
		<td rowspan="3"> Visita </td>
		<td colspan="6"> Encuestador(a) </td>
		<td colspan="4"> Jefe de Equipo </td>
	</tr>
	<tr>
		<td rowspan="2"> Fecha</td>
		<td colspan="2"> Hora </td>
		<td colspan="2"> Proxima Visita </td>
		<td rowspan="2"> Resultado de la Visita(*) </td>
		<td rowspan="2"> Fecha </td>
		<td colspan="2"> Hora </td>
		<td rowspan="2"> Resultado de la Visita(*) </td>
	</tr>
	<tr>
		<td> De </td>
		<td> A </td>
		<td> Fecha </td>
		<td> Hora </td>
		<td> De </td>
		<td> A </td>
	</tr>
	<tr>
		<td> Primera </td>
		<td> <?php echo form_input($first_fecha_uno); ?> </td>
		<td> <?php echo form_input($first_hora_uno_de); ?> </td>
		<td> <?php echo form_input($first_hora_uno_a); ?> </td>
		<td> <?php echo form_input($first_fecha_dos); ?> </td>
		<td> <?php echo form_input($first_hora_dos); ?> </td>
		<td> <?php echo form_input($first_resultado_uno); ?> </td>
		<td> <?php echo form_input($first_fecha_tres); ?> </td>
		<td> <?php echo form_input($first_hora_tres_de); ?> </td>
		<td> <?php echo form_input($first_hora_tres_a); ?> </td>
		<td> <?php echo form_input($first_resultado_dos); ?> </td>
	</tr>
	<tr>
		<td> Segunda </td>
		<td> <?php echo form_input($second_fecha_uno); ?> </td>
		<td> <?php echo form_input($second_hora_uno_de); ?> </td>
		<td> <?php echo form_input($second_hora_uno_a); ?> </td>
		<td> <?php echo form_input($second_fecha_dos); ?> </td>
		<td> <?php echo form_input($second_hora_dos); ?> </td>
		<td> <?php echo form_input($second_resultado_uno); ?> </td>
		<td> <?php echo form_input($second_fecha_tres); ?> </td>
		<td> <?php echo form_input($second_hora_tres_de); ?> </td>
		<td> <?php echo form_input($second_hora_tres_a); ?> </td>
		<td> <?php echo form_input($second_resultado_dos); ?> </td>
	</tr>
	<tr>
		<td> Tercera </td>
		<td> <?php echo form_input($third_fecha_uno); ?> </td>
		<td> <?php echo form_input($third_hora_uno_de); ?> </td>
		<td> <?php echo form_input($third_hora_uno_a); ?> </td>
		<td> <?php echo form_input($third_fecha_dos); ?> </td>
		<td> <?php echo form_input($third_hora_dos); ?> </td>
		<td> <?php echo form_input($third_resultado_uno); ?> </td>
		<td> <?php echo form_input($third_fecha_tres); ?> </td>
		<td> <?php echo form_input($third_hora_tres_de); ?> </td>
		<td> <?php echo form_input($third_hora_tres_a); ?> </td>
		<td> <?php echo form_input($third_resultado_dos); ?> </td>
	</tr>
	<tr>
		<td> Cuarta </td>
		<td> <?php echo form_input($fourth_fecha_uno); ?> </td>
		<td> <?php echo form_input($fourth_hora_uno_de); ?> </td>
		<td> <?php echo form_input($fourth_hora_uno_a); ?> </td>
		<td> <?php echo form_input($fourth_fecha_dos); ?> </td>
		<td> <?php echo form_input($fourth_hora_dos); ?> </td>
		<td> <?php echo form_input($fourth_resultado_uno); ?> </td>
		<td> <?php echo form_input($fourth_fecha_tres); ?> </td>
		<td> <?php echo form_input($fourth_hora_tres_de); ?> </td>
		<td> <?php echo form_input($fourth_hora_tres_a); ?> </td>
		<td> <?php echo form_input($fourth_resultado_dos); ?> </td>
	</tr>
	<tr>
		<td> Quinta </td>
		<td> <?php echo form_input($fifth_fecha_uno); ?> </td>
		<td> <?php echo form_input($fifth_hora_uno_de); ?> </td>
		<td> <?php echo form_input($fifth_hora_uno_a); ?> </td>
		<td> <?php echo form_input($fifth_fecha_dos); ?> </td>
		<td> <?php echo form_input($fifth_hora_dos); ?> </td>
		<td> <?php echo form_input($fifth_resultado_uno); ?> </td>
		<td> <?php echo form_input($fifth_fecha_tres); ?> </td>
		<td> <?php echo form_input($fifth_hora_tres_de); ?> </td>
		<td> <?php echo form_input($fifth_hora_tres_a); ?> </td>
		<td> <?php echo form_input($fifth_resultado_dos); ?> </td>
	</tr>
	<tr>
		<td> Sexta </td>
		<td> <?php echo form_input($sixth_fecha_uno); ?> </td>
		<td> <?php echo form_input($sixth_hora_uno_de); ?> </td>
		<td> <?php echo form_input($sixth_hora_uno_a); ?> </td>
		<td> <?php echo form_input($sixth_fecha_dos); ?> </td>
		<td> <?php echo form_input($sixth_hora_dos); ?> </td>
		<td> <?php echo form_input($sixth_resultado_uno); ?> </td>
		<td> <?php echo form_input($sixth_fecha_tres); ?> </td>
		<td> <?php echo form_input($sixth_hora_tres_de); ?> </td>
		<td> <?php echo form_input($sixth_hora_tres_a); ?> </td>
		<td> <?php echo form_input($sixth_resultado_dos); ?> </td>
	</tr>
	<tr>
		<td colspan="4"> 17. Resultado Final de la Encuesta </td>
		<td colspan="7"> (*) Codigos de Resultado </td>
	</tr>
	<tr>
		<td colspan="2"> Fecha </td>
		<td colspan="2"> <?php echo form_input($fecha_pregunta_17); ?> </td>
		<td rowspan="2"> <?php echo form_input($codigo_resultado); ?> </td>
		<td rowspan="2"> Especifique </td>
		<td colspan="5" rowspan="2"> <?php echo form_input($codigo_resultado_especifique); ?> </td>
	</tr>
	<tr>
		<td colspan="2"> Resultado </td>
		<td colspan="2"> <?php echo form_input($resultado_pregunta_17); ?> </td>
	</tr>
</table>

<!-- Item D -->
<?php 

$encuestador_dni = array(
					'id' => 'encuestador_dni',
					'name' => 'encuestador_dni',
					'class' => 'form-control'
				);

$encuestador_nombres = array(
					'id' => 'encuestador_nombres',
					'name' => 'encuestador_nombres',
					'class' => 'form-control'
				);

$jefe_equipo_dni = array(
					'id' => 'jefe_equipo_dni',
					'name' => 'jefe_equipo_dni',
					'class' => 'form-control'
				);

$jefe_equipo_nombres = array(
					'id' => 'jefe_equipo_nombres',
					'name' => 'jefe_equipo_nombres',
					'class' => 'form-control'
				);

$coordinador_dni = array(
					'id' => 'coordinador_dni',
					'name' => 'coordinador_dni',
					'class' => 'form-control'
				);

$coordinador_nombres = array(
					'id' => 'coordinador_nombres',
					'name' => 'coordinador_nombres',
					'class' => 'form-control'
				);

$supervisor_dni = array(
					'id' => 'supervisor_dni',
					'name' => 'supervisor_dni',
					'class' => 'form-control'
				);

$supervisor_nombres = array(
					'id' => 'supervisor_nombres',
					'name' => 'supervisor_nombres',
					'class' => 'form-control'
				);

$pregunta_18 = array(
					'id' => 'pregunta_18',
					'name' => 'pregunta_18',
					'class' => 'form-control'
				);

$pregunta_19 = array(
					'id' => 'pregunta_19',
					'name' => 'pregunta_19',
					'class' => 'form-control'
				);

$pregunta_20 = array(
					'id' => 'pregunta_20',
					'name' => 'pregunta_20',
					'class' => 'form-control'
				);

$pregunta_21 = array(
					'id' => 'pregunta_21',
					'name' => 'pregunta_21',
					'class' => 'form-control'
				);

?>

<table class="table table-bordered">
	<tr>
		<th colspan="8"> D. Funcionarios de la Encuesta </th>
	</tr>
	<tr>
		<td colspan="2"> Cargo </td>
		<td colspan="2"> DNI </td>
		<td colspan="4"> Nombres y Apellidos </td>
	</tr>
	<tr>
		<td colspan="2"> Encuestador(a): </td>
		<td colspan="2"> <?php echo form_input($encuestador_dni); ?> </td>
		<td colspan="4"> <?php echo form_input($encuestador_nombres); ?> </td>
	</tr>
	<tr>
		<td colspan="2"> Jefe de Equipo: </td>
		<td colspan="2"> <?php echo form_input($jefe_equipo_dni); ?> </td>
		<td colspan="4"> <?php echo form_input($jefe_equipo_nombres); ?> </td>
	</tr>
	<tr>
		<td colspan="2"> Coordinador(a) Departamental: </td>
		<td colspan="2"> <?php echo form_input($coordinador_dni); ?> </td>
		<td colspan="4"> <?php echo form_input($coordinador_nombres); ?> </td>
	</tr>
	<tr>
		<td colspan="2"> Supervisor(a) Nacional: </td>
		<td colspan="2"> <?php echo form_input($supervisor_dni); ?> </td>
		<td colspan="4"> <?php echo form_input($supervisor_nombres); ?> </td>
	</tr>
	<tr>
		<td> 18. Total de Personas Registradas en el Capitulo 200 </td>
		<td> <?php echo form_input($pregunta_18); ?> </td>
		<td> 19. Total de Personas de 14 años y mas de edad del Cap. 200 </td>
		<td> <?php echo form_input($pregunta_19); ?> </td>
		<td> 20. Total de Productores Agropecuarios Doc.ENSESA.01A </td>
		<td> <?php echo form_input($pregunta_20); ?> </td>
		<td> 21. Total de Personas dedicadas a la caza y/o recoleccion y/o pesca Doc.ENSESA.01B </td>
		<td> <?php echo form_input($pregunta_21); ?> </td>
	</tr>
</table>

<!-- Item 100 -->
<?php 

$pregunta_101 = array(
					'id' => 'pregunta_101',
					'name' => 'pregunta_101',
					'class' => 'form-control' 
				);

$pregunta_101_especifique = array(
					'id' => 'pregunta_101_especifique',
					'name' => 'pregunta_101_especifique',
					'class' => 'form-control' 
				);

$pregunta_102 = array(
					'id' => 'pregunta_102',
					'name' => 'pregunta_102',
					'class' => 'form-control' 
				);

$pregunta_102_especifique = array(
					'id' => 'pregunta_102_especifique',
					'name' => 'pregunta_102_especifique',
					'class' => 'form-control' 
				);

$pregunta_103 = array(
					'id' => 'pregunta_103',
					'name' => 'pregunta_103',
					'class' => 'form-control' 
				);

$pregunta_103_especifique = array(
					'id' => 'pregunta_103_especifique',
					'name' => 'pregunta_103_especifique',
					'class' => 'form-control' 
				);

$pregunta_104 = array(
					'id' => 'pregunta_104',
					'name' => 'pregunta_104',
					'class' => 'form-control' 
				);

$pregunta_104_especifique = array(
					'id' => 'pregunta_104_especifique',
					'name' => 'pregunta_104_especifique',
					'class' => 'form-control' 
				);

$pregunta_105 = array(
					'id' => 'pregunta_105',
					'name' => 'pregunta_105',
					'class' => 'form-control' 
				);

$pregunta_106 = array(
					'id' => 'pregunta_106',
					'name' => 'pregunta_106',
					'class' => 'form-control' 
				);

$pregunta_106_especifique = array(
					'id' => 'pregunta_106_especifique',
					'name' => 'pregunta_106_especifique',
					'class' => 'form-control' 
				);

$pregunta_107 = array(
					'id' => 'pregunta_107',
					'name' => 'pregunta_107',
					'class' => 'form-control' 
				);

$pregunta_108 = array(
					'id' => 'pregunta_108',
					'name' => 'pregunta_108',
					'class' => 'form-control' 
				);

$pregunta_108_especifique = array(
					'id' => 'pregunta_108_especifique',
					'name' => 'pregunta_108_especifique',
					'class' => 'form-control' 
				);

$pregunta_109 = array(
					'id' => 'pregunta_109',
					'name' => 'pregunta_109',
					'class' => 'form-control' 
				);

$pregunta_110_1 = array(
					'id' => 'pregunta_110_1',
					'name' => 'pregunta_110_1',
					'class' => 'form-control' 
				);

$pregunta_110_2 = array(
					'id' => 'pregunta_110_2',
					'name' => 'pregunta_110_2',
					'class' => 'form-control' 
				);

$pregunta_110_3 = array(
					'id' => 'pregunta_110_3',
					'name' => 'pregunta_110_3',
					'class' => 'form-control' 
				);

$pregunta_110_4 = array(
					'id' => 'pregunta_110_4',
					'name' => 'pregunta_110_4',
					'class' => 'form-control' 
				);

$pregunta_110_5 = array(
					'id' => 'pregunta_110_5',
					'name' => 'pregunta_110_5',
					'class' => 'form-control' 
				);

$pregunta_110_6 = array(
					'id' => 'pregunta_110_6',
					'name' => 'pregunta_110_6',
					'class' => 'form-control' 
				);

$pregunta_110_7 = array(
					'id' => 'pregunta_110_7',
					'name' => 'pregunta_110_7',
					'class' => 'form-control' 
				);

$pregunta_110_7_especifique = array(
					'id' => 'pregunta_110_7_especifique',
					'name' => 'pregunta_110_7_especifique',
					'class' => 'form-control' 
				);

$pregunta_110_8 = array(
					'id' => 'pregunta_110_8',
					'name' => 'pregunta_110_8',
					'class' => 'form-control' 
				);

$pregunta_111_1 = array(
					'id' => 'pregunta_111_1',
					'name' => 'pregunta_111_1',
					'class' => 'form-control' 
				);

$pregunta_111_2 = array(
					'id' => 'pregunta_111_2',
					'name' => 'pregunta_111_2',
					'class' => 'form-control' 
				);

$pregunta_111_3 = array(
					'id' => 'pregunta_111_3',
					'name' => 'pregunta_111_3',
					'class' => 'form-control' 
				);

$pregunta_111_4 = array(
					'id' => 'pregunta_111_4',
					'name' => 'pregunta_111_4',
					'class' => 'form-control' 
				);

$pregunta_111_5 = array(
					'id' => 'pregunta_111_5',
					'name' => 'pregunta_111_5',
					'class' => 'form-control' 
				);

$pregunta_111_6 = array(
					'id' => 'pregunta_111_6',
					'name' => 'pregunta_111_6',
					'class' => 'form-control' 
				);

$pregunta_111_7 = array(
					'id' => 'pregunta_111_7',
					'name' => 'pregunta_111_7',
					'class' => 'form-control' 
				);

$pregunta_111_8 = array(
					'id' => 'pregunta_111_8',
					'name' => 'pregunta_111_8',
					'class' => 'form-control' 
				);

$pregunta_111_8_especifique = array(
					'id' => 'pregunta_111_8_especifique',
					'name' => 'pregunta_111_8_especifique',
					'class' => 'form-control' 
				);

$pregunta_111_9 = array(
					'id' => 'pregunta_111_9',
					'name' => 'pregunta_111_9',
					'class' => 'form-control' 
				);

$pregunta_112_1 = array(
					'id' => 'pregunta_112_1',
					'name' => 'pregunta_112_1',
					'class' => 'form-control' 
				);

$pregunta_112_2 = array(
					'id' => 'pregunta_112_2',
					'name' => 'pregunta_112_2',
					'class' => 'form-control' 
				);

$pregunta_112_3 = array(
					'id' => 'pregunta_112_3',
					'name' => 'pregunta_112_3',
					'class' => 'form-control' 
				);

$pregunta_112_4 = array(
					'id' => 'pregunta_112_4',
					'name' => 'pregunta_112_4',
					'class' => 'form-control' 
				);

$pregunta_112_5 = array(
					'id' => 'pregunta_112_5',
					'name' => 'pregunta_112_5',
					'class' => 'form-control' 
				);

$pregunta_112_6 = array(
					'id' => 'pregunta_112_6',
					'name' => 'pregunta_112_6',
					'class' => 'form-control' 
				);

$pregunta_112_7 = array(
					'id' => 'pregunta_112_7',
					'name' => 'pregunta_112_7',
					'class' => 'form-control' 
				);

$pregunta_112_8 = array(
					'id' => 'pregunta_112_8',
					'name' => 'pregunta_112_8',
					'class' => 'form-control' 
				);

$pregunta_112_9 = array(
					'id' => 'pregunta_112_9',
					'name' => 'pregunta_112_9',
					'class' => 'form-control' 
				);

$pregunta_112_10 = array(
					'id' => 'pregunta_112_10',
					'name' => 'pregunta_112_10',
					'class' => 'form-control' 
				);

$pregunta_112_11 = array(
					'id' => 'pregunta_112_11',
					'name' => 'pregunta_112_11',
					'class' => 'form-control' 
				);

$pregunta_112_12 = array(
					'id' => 'pregunta_112_12',
					'name' => 'pregunta_112_12',
					'class' => 'form-control' 
				);

$pregunta_112_13 = array(
					'id' => 'pregunta_112_13',
					'name' => 'pregunta_112_13',
					'class' => 'form-control' 
				);

$pregunta_112_14 = array(
					'id' => 'pregunta_112_14',
					'name' => 'pregunta_112_14',
					'class' => 'form-control' 
				);

$pregunta_112_15 = array(
					'id' => 'pregunta_112_15',
					'name' => 'pregunta_112_15',
					'class' => 'form-control' 
				);

$pregunta_112_16 = array(
					'id' => 'pregunta_112_16',
					'name' => 'pregunta_112_16',
					'class' => 'form-control' 
				);

$pregunta_112_17 = array(
					'id' => 'pregunta_112_17',
					'name' => 'pregunta_112_17',
					'class' => 'form-control' 
				);

$pregunta_112_18 = array(
					'id' => 'pregunta_112_18',
					'name' => 'pregunta_112_18',
					'class' => 'form-control' 
				);

$pregunta_112_19 = array(
					'id' => 'pregunta_112_19',
					'name' => 'pregunta_112_19',
					'class' => 'form-control' 
				);

?>

<table class="table table-bordered">
	<tr>
		<th colspan="7"> 100. CARACTERISTICAS DE LA VIVIENDA Y DEL HOGAR </th>
	</tr>
	<tr>
		
	</tr>
	<tr>
		<td><!-- LEFT SIDE -->
			<table class="table">
				<tr><td><h4>DATOS DE LA VIVIENDA</h4></td></tr>
				<tr><td> 101. Tipo de Vivienda </td></tr>
				<tr><td> <?php echo form_input($pregunta_101); ?> </td></tr>
				<tr><td> 102. El Material predominante en las paredes exteriores es: </td></tr>
				<tr><td> <?php echo form_input($pregunta_110_2); ?> </td></tr>
				<tr><td> 103. El Material predominante en los pisos es: </td></tr>
				<tr><td> <?php echo form_input($pregunta_103); ?> </td></tr>
				<tr><td> 104. El Material predominante en los techos es: </td></tr>
				<tr><td> <?php echo form_input($pregunta_104); ?> </td></tr>
				<tr><td> 105. Sin contar Baño, Cocina, pasadizos ni garaje, Cuantas habitaciones en total tiene la vivienda? </td></tr>
				<tr><td> <?php echo form_input($pregunta_105); ?> </td></tr>
				<tr><td> 106. La Vivienda que ocupa su hogar es: </td></tr>
				<tr><td> <?php echo form_input($pregunta_106); ?> </td></tr>
				<tr><td> (Especifique)<?php echo form_input($pregunta_106_especifique); ?> </td></tr>
				<tr><td><h4>DATOS DEL HOGAR</h4></td></tr>
				<tr><td> 107. ¿CUÁNTAS HABITACIONES SE USAN EXCLUSIVAMENTE PARA DORMIR</td></tr>
				<tr><td> <?php echo form_input($pregunta_107); ?>N° de habitaciones </td></tr>
			</table>
		</td>
		<td><!-- RIGHT SIDE -->
			<table class="table">
				<tr><td><h4>DATOS DEL HOGAR</h4></td></tr>
				<tr><td> 108. El Abastecimiento de agua en su hogar procede de: </td></tr>
				<tr><td> <?php echo form_input($pregunta_108); ?> </td></tr>
				<tr><td> (Especifique)<?php echo form_input($pregunta_108_especifique); ?> </td></tr>
				<tr><td> 109. El Servicio higienico que tiene su hogar esta conectado a: </td></tr>
				<tr><td> <?php echo form_input($pregunta_109); ?> </td></tr>
				<tr><td> 110. Cual es el tipo de alumbrado que tiene su hogar: </td></tr>
				<tr><td><table class="table">
						<tr><td> Electricidad? </td><td> <?php echo form_input($pregunta_110_1); ?> </td></tr>
						<tr><td> Kerosene (mechero/lamparin)? </td><td> <?php echo form_input($pregunta_110_2); ?> </td></tr>
						<tr><td> Petroleo/gas (lampara)? </td><td> <?php echo form_input($pregunta_110_3); ?> </td></tr>
						<tr><td> Vela? </td><td> <?php echo form_input($pregunta_110_4); ?> </td></tr>
						<tr><td> Generador? </td><td> <?php echo form_input($pregunta_110_5); ?> </td></tr>
						<tr><td> Panel solar? </td><td> <?php echo form_input($pregunta_110_6); ?> </td></tr>
						<tr><td> Otro? </td><td> <?php echo form_input($pregunta_110_7); ?> </td></tr>
						<tr><td> (Especifique) </td><td> <?php echo form_input($pregunta_110_7_especifique); ?> </td></tr>
						<tr><td> NO UTILIZA </td><td> <?php echo form_input($pregunta_110_8); ?> </td></tr>						
					</table></td>
				</tr>
				<tr><td> 111. Cual es el tipo de alumbrado que tiene su hogar: </td></tr>
				<tr><td><table class="table">
						<tr><td> Electricidad? </td><td> <?php echo form_input($pregunta_111_1); ?> </td></tr>
						<tr><td> Gas(GLP)? </td><td> <?php echo form_input($pregunta_111_2); ?> </td></tr>
						<tr><td> Gas Natural? </td><td> <?php echo form_input($pregunta_111_3); ?> </td></tr>
						<tr><td> Kerosene? </td><td> <?php echo form_input($pregunta_111_4); ?> </td></tr>
						<tr><td> Carbón? </td><td> <?php echo form_input($pregunta_111_5); ?> </td></tr>
						<tr><td> Leña? </td><td> <?php echo form_input($pregunta_111_6); ?> </td></tr>
						<tr><td> Bosta/estiércol? </td><td> <?php echo form_input($pregunta_111_7); ?> </td></tr>
						<tr><td> Otro? </td><td> <?php echo form_input($pregunta_111_8); ?> </td></tr>
						<tr><td> (Especifique) </td><td> <?php echo form_input($pregunta_111_8_especifique); ?> </td></tr>
						<tr><td> NO COCINAN </td><td> <?php echo form_input($pregunta_111_9); ?> </td></tr>						
					</table></td>
				</tr>
				<tr><td> 112. SU HOGAR TIENE: (Acepte una o más alternativas) </td></tr>
				<tr><td><table class="table">
						<tr>
							<td>
								<table class="table">
									<tr><td colspan="2"> Equipos y/o bienes </td></tr>
									<tr><td> Radio? </td><td> <?php echo form_input($pregunta_112_1); ?> </td></tr>
									<tr><td> Equipo de Sonido? </td><td> <?php echo form_input($pregunta_112_2); ?> </td></tr>
									<tr><td> Televisor a color? </td><td> <?php echo form_input($pregunta_112_3); ?> </td></tr>
									<tr><td> DVD o Blu-ray? </td><td> <?php echo form_input($pregunta_112_4); ?> </td></tr>
									<tr><td> Plancha? </td><td> <?php echo form_input($pregunta_112_5); ?> </td></tr>
									<tr><td> Licuadora? </td><td> <?php echo form_input($pregunta_112_6); ?> </td></tr>
									<tr><td> Refigeradora o congeladora? </td><td> <?php echo form_input($pregunta_112_7); ?> </td></tr>
									<tr><td> Lavadora? </td><td> <?php echo form_input($pregunta_112_8); ?> </td></tr>
									<tr><td> Cocina a gas? </td><td> <?php echo form_input($pregunta_112_9); ?> </td></tr>
									<tr><td> Horno microondas? </td><td> <?php echo form_input($pregunta_112_10); ?> </td></tr>
									<tr><td> Computadora? </td><td> <?php echo form_input($pregunta_112_11); ?> </td></tr>
									<tr><td> Motocicleta? </td><td> <?php echo form_input($pregunta_112_12); ?> </td></tr>
									<tr><td> Bicicleta? </td><td> <?php echo form_input($pregunta_112_13); ?> </td></tr>
									<tr><td> No Tiene? </td><td> <?php echo form_input($pregunta_112_14); ?> </td></tr>	
								</table>
							</td>
							<td>
								<table class="table">
									<tr><td> Telefono Fijo? </td><td> <?php echo form_input($pregunta_112_15); ?> </td></tr>
									<tr><td> Telefono Celular? </td><td> <?php echo form_input($pregunta_112_16); ?> </td></tr>
									<tr><td> Conexion a Internet? </td><td> <?php echo form_input($pregunta_112_17); ?> </td></tr>
									<tr><td> Conexion a TV cable / satelital? </td><td> <?php echo form_input($pregunta_112_18); ?> </td></tr>
									<tr><td> No Tiene? </td><td> <?php echo form_input($pregunta_112_19); ?> </td></tr>
								</table>
							</td>
						</tr>

					</table></td>
				</tr>
			</table>
		</td>
	</tr>


</table>

<!-- Item 200 -->
<?php 

$informante_nro = array(
					'id' => 'informante_nro',
					'name' => 'informante_nro',
					'class' => 'form-control'
				);

$pregunta_202_n_1 = array(
					'id' => 'pregunta_202_n_1',
					'name' => 'pregunta_202_n_1',
					'class' => 'form-control'
				);

$pregunta_202_n_2 = array(
					'id' => 'pregunta_202_n_2',
					'name' => 'pregunta_202_n_2',
					'class' => 'form-control'
				);

$pregunta_202_n_3 = array(
					'id' => 'pregunta_202_n_3',
					'name' => 'pregunta_202_n_3',
					'class' => 'form-control'
				);

$pregunta_202_n_4 = array(
					'id' => 'pregunta_202_n_4',
					'name' => 'pregunta_202_n_4',
					'class' => 'form-control'
				);

$pregunta_202_n_5 = array(
					'id' => 'pregunta_202_n_5',
					'name' => 'pregunta_202_n_5',
					'class' => 'form-control'
				);

$pregunta_202_n_6 = array(
					'id' => 'pregunta_202_n_6',
					'name' => 'pregunta_202_n_6',
					'class' => 'form-control'
				);

$pregunta_202_n_7 = array(
					'id' => 'pregunta_202_n_7',
					'name' => 'pregunta_202_n_7',
					'class' => 'form-control'
				);

$pregunta_202_n_8 = array(
					'id' => 'pregunta_202_n_8',
					'name' => 'pregunta_202_n_8',
					'class' => 'form-control'
				);

$pregunta_202_n_9 = array(
					'id' => 'pregunta_202_n_9',
					'name' => 'pregunta_202_n_9',
					'class' => 'form-control'
				);

$pregunta_202_n_10 = array(
					'id' => 'pregunta_202_n_10',
					'name' => 'pregunta_202_n_10',
					'class' => 'form-control'
				);

$pregunta_202_n_11 = array(
					'id' => 'pregunta_202_n_11',
					'name' => 'pregunta_202_n_11',
					'class' => 'form-control'
				);

$pregunta_202_n_12 = array(
					'id' => 'pregunta_202_n_12',
					'name' => 'pregunta_202_n_12',
					'class' => 'form-control'
				);


$pregunta_202_a_1 = array(
					'id' => 'pregunta_202_a_1',
					'name' => 'pregunta_202_a_1',
					'class' => 'form-control'
				);

$pregunta_202_a_2 = array(
					'id' => 'pregunta_202_a_2',
					'name' => 'pregunta_202_a_2',
					'class' => 'form-control'
				);

$pregunta_202_a_3 = array(
					'id' => 'pregunta_202_a_3',
					'name' => 'pregunta_202_a_3',
					'class' => 'form-control'
				);

$pregunta_202_a_4 = array(
					'id' => 'pregunta_202_a_4',
					'name' => 'pregunta_202_a_4',
					'class' => 'form-control'
				);

$pregunta_202_a_5 = array(
					'id' => 'pregunta_202_a_5',
					'name' => 'pregunta_202_a_5',
					'class' => 'form-control'
				);

$pregunta_202_a_6 = array(
					'id' => 'pregunta_202_a_6',
					'name' => 'pregunta_202_a_6',
					'class' => 'form-control'
				);

$pregunta_202_a_7 = array(
					'id' => 'pregunta_202_a_7',
					'name' => 'pregunta_202_a_7',
					'class' => 'form-control'
				);

$pregunta_202_a_8 = array(
					'id' => 'pregunta_202_a_8',
					'name' => 'pregunta_202_a_8',
					'class' => 'form-control'
				);

$pregunta_202_a_9 = array(
					'id' => 'pregunta_202_a_9',
					'name' => 'pregunta_202_a_9',
					'class' => 'form-control'
				);

$pregunta_202_a_10 = array(
					'id' => 'pregunta_202_a_10',
					'name' => 'pregunta_202_a_10',
					'class' => 'form-control'
				);

$pregunta_202_a_11 = array(
					'id' => 'pregunta_202_a_11',
					'name' => 'pregunta_202_a_11',
					'class' => 'form-control'
				);

$pregunta_202_a_12 = array(
					'id' => 'pregunta_202_a_12',
					'name' => 'pregunta_202_a_12',
					'class' => 'form-control'
				);


$pregunta_203_1 = array(
					'id' => 'pregunta_203_1',
					'name' => 'pregunta_203_1',
					'class' => 'form-control'
				);

$pregunta_203_2 = array(
					'id' => 'pregunta_203_2',
					'name' => 'pregunta_203_2',
					'class' => 'form-control'
				);

$pregunta_203_3 = array(
					'id' => 'pregunta_203_3',
					'name' => 'pregunta_203_3',
					'class' => 'form-control'
				);

$pregunta_203_4 = array(
					'id' => 'pregunta_203_4',
					'name' => 'pregunta_203_4',
					'class' => 'form-control'
				);

$pregunta_203_5 = array(
					'id' => 'pregunta_203_5',
					'name' => 'pregunta_203_5',
					'class' => 'form-control'
				);

$pregunta_203_6 = array(
					'id' => 'pregunta_203_6',
					'name' => 'pregunta_203_6',
					'class' => 'form-control'
				);

$pregunta_203_7 = array(
					'id' => 'pregunta_203_7',
					'name' => 'pregunta_203_7',
					'class' => 'form-control'
				);

$pregunta_203_8 = array(
					'id' => 'pregunta_203_8',
					'name' => 'pregunta_203_8',
					'class' => 'form-control'
				);

$pregunta_203_9 = array(
					'id' => 'pregunta_203_9',
					'name' => 'pregunta_203_9',
					'class' => 'form-control'
				);

$pregunta_203_10 = array(
					'id' => 'pregunta_203_10',
					'name' => 'pregunta_203_10',
					'class' => 'form-control'
				);

$pregunta_203_11 = array(
					'id' => 'pregunta_203_11',
					'name' => 'pregunta_203_11',
					'class' => 'form-control'
				);

$pregunta_203_12 = array(
					'id' => 'pregunta_203_12',
					'name' => 'pregunta_203_12',
					'class' => 'form-control'
				);


$pregunta_204_1 = array(
					'id' => 'pregunta_204_1',
					'name' => 'pregunta_204_1',
					'class' => 'form-control'
				);

$pregunta_204_2 = array(
					'id' => 'pregunta_204_2',
					'name' => 'pregunta_204_2',
					'class' => 'form-control'
				);

$pregunta_204_3 = array(
					'id' => 'pregunta_204_3',
					'name' => 'pregunta_204_3',
					'class' => 'form-control'
				);

$pregunta_204_4 = array(
					'id' => 'pregunta_204_4',
					'name' => 'pregunta_204_4',
					'class' => 'form-control'
				);

$pregunta_204_5 = array(
					'id' => 'pregunta_204_5',
					'name' => 'pregunta_204_5',
					'class' => 'form-control'
				);

$pregunta_204_6 = array(
					'id' => 'pregunta_204_6',
					'name' => 'pregunta_204_6',
					'class' => 'form-control'
				);

$pregunta_204_7 = array(
					'id' => 'pregunta_204_7',
					'name' => 'pregunta_204_7',
					'class' => 'form-control'
				);

$pregunta_204_8 = array(
					'id' => 'pregunta_204_8',
					'name' => 'pregunta_204_8',
					'class' => 'form-control'
				);

$pregunta_204_9 = array(
					'id' => 'pregunta_204_9',
					'name' => 'pregunta_204_9',
					'class' => 'form-control'
				);

$pregunta_204_10 = array(
					'id' => 'pregunta_204_10',
					'name' => 'pregunta_204_10',
					'class' => 'form-control'
				);

$pregunta_204_11 = array(
					'id' => 'pregunta_204_11',
					'name' => 'pregunta_204_11',
					'class' => 'form-control'
				);

$pregunta_204_12 = array(
					'id' => 'pregunta_204_12',
					'name' => 'pregunta_204_12',
					'class' => 'form-control'
				);


$pregunta_205_1 = array(
					'id' => 'pregunta_205_1',
					'name' => 'pregunta_205_1',
					'class' => 'form-control'
				);

$pregunta_205_2 = array(
					'id' => 'pregunta_205_2',
					'name' => 'pregunta_205_2',
					'class' => 'form-control'
				);

$pregunta_205_3 = array(
					'id' => 'pregunta_205_3',
					'name' => 'pregunta_205_3',
					'class' => 'form-control'
				);

$pregunta_205_4 = array(
					'id' => 'pregunta_205_4',
					'name' => 'pregunta_205_4',
					'class' => 'form-control'
				);

$pregunta_205_5 = array(
					'id' => 'pregunta_205_5',
					'name' => 'pregunta_205_5',
					'class' => 'form-control'
				);

$pregunta_205_6 = array(
					'id' => 'pregunta_205_6',
					'name' => 'pregunta_205_6',
					'class' => 'form-control'
				);

$pregunta_205_7 = array(
					'id' => 'pregunta_205_7',
					'name' => 'pregunta_205_7',
					'class' => 'form-control'
				);

$pregunta_205_8 = array(
					'id' => 'pregunta_205_8',
					'name' => 'pregunta_205_8',
					'class' => 'form-control'
				);

$pregunta_205_9 = array(
					'id' => 'pregunta_205_9',
					'name' => 'pregunta_205_9',
					'class' => 'form-control'
				);

$pregunta_205_10 = array(
					'id' => 'pregunta_205_10',
					'name' => 'pregunta_205_10',
					'class' => 'form-control'
				);

$pregunta_205_11 = array(
					'id' => 'pregunta_205_11',
					'name' => 'pregunta_205_11',
					'class' => 'form-control'
				);

$pregunta_205_12 = array(
					'id' => 'pregunta_205_12',
					'name' => 'pregunta_205_12',
					'class' => 'form-control'
				);


$pregunta_206_1 = array(
					'id' => 'pregunta_206_1',
					'name' => 'pregunta_206_1',
					'class' => 'form-control'
				);

$pregunta_206_2 = array(
					'id' => 'pregunta_206_2',
					'name' => 'pregunta_206_2',
					'class' => 'form-control'
				);

$pregunta_206_3 = array(
					'id' => 'pregunta_206_3',
					'name' => 'pregunta_206_3',
					'class' => 'form-control'
				);

$pregunta_206_4 = array(
					'id' => 'pregunta_206_4',
					'name' => 'pregunta_206_4',
					'class' => 'form-control'
				);

$pregunta_206_5 = array(
					'id' => 'pregunta_206_5',
					'name' => 'pregunta_206_5',
					'class' => 'form-control'
				);

$pregunta_206_6 = array(
					'id' => 'pregunta_206_6',
					'name' => 'pregunta_206_6',
					'class' => 'form-control'
				);

$pregunta_206_7 = array(
					'id' => 'pregunta_206_7',
					'name' => 'pregunta_206_7',
					'class' => 'form-control'
				);

$pregunta_206_8 = array(
					'id' => 'pregunta_206_8',
					'name' => 'pregunta_206_8',
					'class' => 'form-control'
				);

$pregunta_206_9 = array(
					'id' => 'pregunta_206_9',
					'name' => 'pregunta_206_9',
					'class' => 'form-control'
				);

$pregunta_206_10 = array(
					'id' => 'pregunta_206_10',
					'name' => 'pregunta_206_10',
					'class' => 'form-control'
				);

$pregunta_206_11 = array(
					'id' => 'pregunta_206_11',
					'name' => 'pregunta_206_11',
					'class' => 'form-control'
				);

$pregunta_206_12 = array(
					'id' => 'pregunta_206_12',
					'name' => 'pregunta_206_12',
					'class' => 'form-control'
				);


$pregunta_207_a_1 = array(
					'id' => 'pregunta_207_a_1',
					'name' => 'pregunta_207_a_1',
					'class' => 'form-control'
				);

$pregunta_207_a_2 = array(
					'id' => 'pregunta_207_a_2',
					'name' => 'pregunta_207_a_2',
					'class' => 'form-control'
				);

$pregunta_207_a_3 = array(
					'id' => 'pregunta_207_a_3',
					'name' => 'pregunta_207_a_3',
					'class' => 'form-control'
				);

$pregunta_207_a_4 = array(
					'id' => 'pregunta_207_a_4',
					'name' => 'pregunta_207_a_4',
					'class' => 'form-control'
				);

$pregunta_207_a_5 = array(
					'id' => 'pregunta_207_a_5',
					'name' => 'pregunta_207_a_5',
					'class' => 'form-control'
				);

$pregunta_207_a_6 = array(
					'id' => 'pregunta_207_a_6',
					'name' => 'pregunta_207_a_6',
					'class' => 'form-control'
				);

$pregunta_207_a_7 = array(
					'id' => 'pregunta_207_a_7',
					'name' => 'pregunta_207_a_7',
					'class' => 'form-control'
				);

$pregunta_207_a_8 = array(
					'id' => 'pregunta_207_a_8',
					'name' => 'pregunta_207_a_8',
					'class' => 'form-control'
				);

$pregunta_207_a_9 = array(
					'id' => 'pregunta_207_a_9',
					'name' => 'pregunta_207_a_9',
					'class' => 'form-control'
				);

$pregunta_207_a_10 = array(
					'id' => 'pregunta_207_a_10',
					'name' => 'pregunta_207_a_10',
					'class' => 'form-control'
				);

$pregunta_207_a_11 = array(
					'id' => 'pregunta_207_a_11',
					'name' => 'pregunta_207_a_11',
					'class' => 'form-control'
				);

$pregunta_207_a_12 = array(
					'id' => 'pregunta_207_a_12',
					'name' => 'pregunta_207_a_12',
					'class' => 'form-control'
				);


$pregunta_207_m_1 = array(
					'id' => 'pregunta_207_m_1',
					'name' => 'pregunta_207_m_1',
					'class' => 'form-control'
				);

$pregunta_207_m_2 = array(
					'id' => 'pregunta_207_m_2',
					'name' => 'pregunta_207_m_2',
					'class' => 'form-control'
				);

$pregunta_207_m_3 = array(
					'id' => 'pregunta_207_m_3',
					'name' => 'pregunta_207_m_3',
					'class' => 'form-control'
				);

$pregunta_207_m_4 = array(
					'id' => 'pregunta_207_m_4',
					'name' => 'pregunta_207_m_4',
					'class' => 'form-control'
				);

$pregunta_207_m_5 = array(
					'id' => 'pregunta_207_m_5',
					'name' => 'pregunta_207_m_5',
					'class' => 'form-control'
				);

$pregunta_207_m_6 = array(
					'id' => 'pregunta_207_m_6',
					'name' => 'pregunta_207_m_6',
					'class' => 'form-control'
				);

$pregunta_207_m_7 = array(
					'id' => 'pregunta_207_m_7',
					'name' => 'pregunta_207_m_7',
					'class' => 'form-control'
				);

$pregunta_207_m_8 = array(
					'id' => 'pregunta_207_m_8',
					'name' => 'pregunta_207_m_8',
					'class' => 'form-control'
				);

$pregunta_207_m_9 = array(
					'id' => 'pregunta_207_m_9',
					'name' => 'pregunta_207_m_9',
					'class' => 'form-control'
				);

$pregunta_207_m_10 = array(
					'id' => 'pregunta_207_m_10',
					'name' => 'pregunta_207_m_10',
					'class' => 'form-control'
				);

$pregunta_207_m_11 = array(
					'id' => 'pregunta_207_m_11',
					'name' => 'pregunta_207_m_11',
					'class' => 'form-control'
				);

$pregunta_207_m_12 = array(
					'id' => 'pregunta_207_m_12',
					'name' => 'pregunta_207_m_12',
					'class' => 'form-control'
				);


$pregunta_208_1 = array(
					'id' => 'pregunta_208_1',
					'name' => 'pregunta_208_1',
					'class' => 'form-control'
				);

$pregunta_208_2 = array(
					'id' => 'pregunta_208_2',
					'name' => 'pregunta_208_2',
					'class' => 'form-control'
				);

$pregunta_208_3 = array(
					'id' => 'pregunta_208_3',
					'name' => 'pregunta_208_3',
					'class' => 'form-control'
				);

$pregunta_208_4 = array(
					'id' => 'pregunta_208_4',
					'name' => 'pregunta_208_4',
					'class' => 'form-control'
				);

$pregunta_208_5 = array(
					'id' => 'pregunta_208_5',
					'name' => 'pregunta_208_5',
					'class' => 'form-control'
				);

$pregunta_208_6 = array(
					'id' => 'pregunta_208_6',
					'name' => 'pregunta_208_6',
					'class' => 'form-control'
				);

$pregunta_208_7 = array(
					'id' => 'pregunta_208_7',
					'name' => 'pregunta_208_7',
					'class' => 'form-control'
				);

$pregunta_208_8 = array(
					'id' => 'pregunta_208_8',
					'name' => 'pregunta_208_8',
					'class' => 'form-control'
				);

$pregunta_208_9 = array(
					'id' => 'pregunta_208_9',
					'name' => 'pregunta_208_9',
					'class' => 'form-control'
				);

$pregunta_208_10 = array(
					'id' => 'pregunta_208_10',
					'name' => 'pregunta_208_10',
					'class' => 'form-control'
				);

$pregunta_208_11 = array(
					'id' => 'pregunta_208_11',
					'name' => 'pregunta_208_11',
					'class' => 'form-control'
				);

$pregunta_208_12 = array(
					'id' => 'pregunta_208_12',
					'name' => 'pregunta_208_12',
					'class' => 'form-control'
				);


$pregunta_209_t_1 = array(
					'id' => 'pregunta_209_t_1',
					'name' => 'pregunta_209_t_1',
					'class' => 'form-control'
				);

$pregunta_209_t_2 = array(
					'id' => 'pregunta_209_t_2',
					'name' => 'pregunta_209_t_2',
					'class' => 'form-control'
				);

$pregunta_209_t_3 = array(
					'id' => 'pregunta_209_t_3',
					'name' => 'pregunta_209_t_3',
					'class' => 'form-control'
				);

$pregunta_209_t_4 = array(
					'id' => 'pregunta_209_t_4',
					'name' => 'pregunta_209_t_4',
					'class' => 'form-control'
				);

$pregunta_209_t_5 = array(
					'id' => 'pregunta_209_t_5',
					'name' => 'pregunta_209_t_5',
					'class' => 'form-control'
				);

$pregunta_209_t_6 = array(
					'id' => 'pregunta_209_t_6',
					'name' => 'pregunta_209_t_6',
					'class' => 'form-control'
				);

$pregunta_209_t_7 = array(
					'id' => 'pregunta_209_t_7',
					'name' => 'pregunta_209_t_7',
					'class' => 'form-control'
				);

$pregunta_209_t_8 = array(
					'id' => 'pregunta_209_t_8',
					'name' => 'pregunta_209_t_8',
					'class' => 'form-control'
				);

$pregunta_209_t_9 = array(
					'id' => 'pregunta_209_t_9',
					'name' => 'pregunta_209_t_9',
					'class' => 'form-control'
				);

$pregunta_209_t_10 = array(
					'id' => 'pregunta_209_t_10',
					'name' => 'pregunta_209_t_10',
					'class' => 'form-control'
				);

$pregunta_209_t_11 = array(
					'id' => 'pregunta_209_t_11',
					'name' => 'pregunta_209_t_11',
					'class' => 'form-control'
				);

$pregunta_209_t_12 = array(
					'id' => 'pregunta_209_t_12',
					'name' => 'pregunta_209_t_12',
					'class' => 'form-control'
				);


$pregunta_209_n_1 = array(
					'id' => 'pregunta_209_n_1',
					'name' => 'pregunta_209_n_1',
					'class' => 'form-control'
				);

$pregunta_209_n_2 = array(
					'id' => 'pregunta_209_n_2',
					'name' => 'pregunta_209_n_2',
					'class' => 'form-control'
				);

$pregunta_209_n_3 = array(
					'id' => 'pregunta_209_n_3',
					'name' => 'pregunta_209_n_3',
					'class' => 'form-control'
				);

$pregunta_209_n_4 = array(
					'id' => 'pregunta_209_n_4',
					'name' => 'pregunta_209_n_4',
					'class' => 'form-control'
				);

$pregunta_209_n_5 = array(
					'id' => 'pregunta_209_n_5',
					'name' => 'pregunta_209_n_5',
					'class' => 'form-control'
				);

$pregunta_209_n_6 = array(
					'id' => 'pregunta_209_n_6',
					'name' => 'pregunta_209_n_6',
					'class' => 'form-control'
				);

$pregunta_209_n_7 = array(
					'id' => 'pregunta_209_n_7',
					'name' => 'pregunta_209_n_7',
					'class' => 'form-control'
				);

$pregunta_209_n_8 = array(
					'id' => 'pregunta_209_n_8',
					'name' => 'pregunta_209_n_8',
					'class' => 'form-control'
				);

$pregunta_209_n_9 = array(
					'id' => 'pregunta_209_n_9',
					'name' => 'pregunta_209_n_9',
					'class' => 'form-control'
				);

$pregunta_209_n_10 = array(
					'id' => 'pregunta_209_n_10',
					'name' => 'pregunta_209_n_10',
					'class' => 'form-control'
				);

$pregunta_209_n_11 = array(
					'id' => 'pregunta_209_n_11',
					'name' => 'pregunta_209_n_11',
					'class' => 'form-control'
				);

$pregunta_209_n_12 = array(
					'id' => 'pregunta_209_n_12',
					'name' => 'pregunta_209_n_12',
					'class' => 'form-control'
				);


$pregunta_210_1 = array(
					'id' => 'pregunta_210_1',
					'name' => 'pregunta_210_1',
					'class' => 'form-control'
				);

$pregunta_210_2 = array(
					'id' => 'pregunta_210_2',
					'name' => 'pregunta_210_2',
					'class' => 'form-control'
				);

$pregunta_210_3 = array(
					'id' => 'pregunta_210_3',
					'name' => 'pregunta_210_3',
					'class' => 'form-control'
				);

$pregunta_210_4 = array(
					'id' => 'pregunta_210_4',
					'name' => 'pregunta_210_4',
					'class' => 'form-control'
				);

$pregunta_210_5 = array(
					'id' => 'pregunta_210_5',
					'name' => 'pregunta_210_5',
					'class' => 'form-control'
				);

$pregunta_210_6 = array(
					'id' => 'pregunta_210_6',
					'name' => 'pregunta_210_6',
					'class' => 'form-control'
				);

$pregunta_210_7 = array(
					'id' => 'pregunta_210_7',
					'name' => 'pregunta_210_7',
					'class' => 'form-control'
				);

$pregunta_210_8 = array(
					'id' => 'pregunta_210_8',
					'name' => 'pregunta_210_8',
					'class' => 'form-control'
				);

$pregunta_210_9 = array(
					'id' => 'pregunta_210_9',
					'name' => 'pregunta_210_9',
					'class' => 'form-control'
				);

$pregunta_210_10 = array(
					'id' => 'pregunta_210_10',
					'name' => 'pregunta_210_10',
					'class' => 'form-control'
				);

$pregunta_210_11 = array(
					'id' => 'pregunta_210_11',
					'name' => 'pregunta_210_11',
					'class' => 'form-control'
				);

$pregunta_210_12 = array(
					'id' => 'pregunta_210_12',
					'name' => 'pregunta_210_12',
					'class' => 'form-control'
				);

$observaciones_200 = array(
					'id' => 'observaciones_200',
					'name' => 'observaciones_200',
					'class' => 'form-control',
					'rows' => 2,
					'cols' => 13
				);

?>

<table class="table table-bordered">
	<tr>
		<th colspan="2"> Informante Nro </th>
		<th> <?php echo form_input($informante_nro); ?> </th>
		<th colspan="10" > 200. Caracteristicas de los Miembros del Hogar </th>
	</tr>
	<tr>
		<td rowspan="3"> 201. Nro de Ord. </td>
		<td colspan="2" rowspan="2"> 202. Cual es el Nombre y Apellidos de cada una de las personas que viven permanentemente en este hogar y de las que estan alojadas aqui? </td>
		<td colspan="6"> Para todas las personas </td>
		<td> Para personas de 12 años y mas edad </td> 
		<td colspan="2"> Para mujeres de 12 a 49 años de edad </td>
		<td> Para todas las personas </td>
	</tr>
	<tr>
		<td> 203. Cual es la relacion de parentesco con el jefe o jefa del hogar? </td>
		<td> 204. Es miembro del hogar? </td>
		<td> 205. Esta presente en el hogar 30 dias a mas? </td>
		<td> 206. Sexo </td>
		<td colspan="2"> 207. Que edad tiene en años cumplidos? </td>
		<td> 208. Cual es su estado civil o conyugal? </td>
		<td colspan="2"> 209. Cuantos hijos(as) nacidos vivos ha tenido? </td>
		<td> 210. Tiene DNI? </td>
	</tr>
	<tr>
		<td> Nombre </td>
		<td> Apellidos </td>
		<td> Codigo </td>
		<td> Si / No </td>
		<td> Si / No </td>
		<td> H / M </td>
		<td> Años </td>
		<td> Meses </td>
		<td> Codigo </td>
		<td> Cantidad Total </td>
		<td> Ninguno </td>
		<td> Codigo </td>
	</tr>
	<tr>
		<td> 1 </td>
		<td> <?php echo form_input($pregunta_202_n_1); ?> </td>
		<td> <?php echo form_input($pregunta_202_a_1); ?> </td>
		<td> <?php echo form_input($pregunta_203_1); ?> </td>
		<td> <?php echo form_input($pregunta_204_1); ?> </td>
		<td> <?php echo form_input($pregunta_205_1); ?> </td>
		<td> <?php echo form_input($pregunta_206_1); ?> </td>
		<td> <?php echo form_input($pregunta_207_a_1); ?> </td>
		<td> <?php echo form_input($pregunta_207_m_1); ?> </td>
		<td> <?php echo form_input($pregunta_208_1); ?> </td>
		<td> <?php echo form_input($pregunta_209_t_1); ?> </td>
		<td> <?php echo form_input($pregunta_209_n_1); ?> </td>
		<td> <?php echo form_input($pregunta_210_1); ?> </td>
	</tr>
	<tr>
		<td> 2 </td>
		<td> <?php echo form_input($pregunta_202_n_2); ?> </td>
		<td> <?php echo form_input($pregunta_202_a_2); ?> </td>
		<td> <?php echo form_input($pregunta_203_2); ?> </td>
		<td> <?php echo form_input($pregunta_204_2); ?> </td>
		<td> <?php echo form_input($pregunta_205_2); ?> </td>
		<td> <?php echo form_input($pregunta_206_2); ?> </td>
		<td> <?php echo form_input($pregunta_207_a_2); ?> </td>
		<td> <?php echo form_input($pregunta_207_m_2); ?> </td>
		<td> <?php echo form_input($pregunta_208_2); ?> </td>
		<td> <?php echo form_input($pregunta_209_t_2); ?> </td>
		<td> <?php echo form_input($pregunta_209_n_2); ?> </td>
		<td> <?php echo form_input($pregunta_210_2); ?> </td>
	</tr>
	<tr>
		<td> 3 </td>
		<td> <?php echo form_input($pregunta_202_n_3); ?> </td>
		<td> <?php echo form_input($pregunta_202_a_3); ?> </td>
		<td> <?php echo form_input($pregunta_203_3); ?> </td>
		<td> <?php echo form_input($pregunta_204_3); ?> </td>
		<td> <?php echo form_input($pregunta_205_3); ?> </td>
		<td> <?php echo form_input($pregunta_206_3); ?> </td>
		<td> <?php echo form_input($pregunta_207_a_3); ?> </td>
		<td> <?php echo form_input($pregunta_207_m_3); ?> </td>
		<td> <?php echo form_input($pregunta_208_3); ?> </td>
		<td> <?php echo form_input($pregunta_209_t_3); ?> </td>
		<td> <?php echo form_input($pregunta_209_n_3); ?> </td>
		<td> <?php echo form_input($pregunta_210_3); ?> </td>
	</tr>
	<tr>
		<td> 4 </td>
		<td> <?php echo form_input($pregunta_202_n_4); ?> </td>
		<td> <?php echo form_input($pregunta_202_a_4); ?> </td>
		<td> <?php echo form_input($pregunta_203_4); ?> </td>
		<td> <?php echo form_input($pregunta_204_4); ?> </td>
		<td> <?php echo form_input($pregunta_205_4); ?> </td>
		<td> <?php echo form_input($pregunta_206_4); ?> </td>
		<td> <?php echo form_input($pregunta_207_a_4); ?> </td>
		<td> <?php echo form_input($pregunta_207_m_4); ?> </td>
		<td> <?php echo form_input($pregunta_208_4); ?> </td>
		<td> <?php echo form_input($pregunta_209_t_4); ?> </td>
		<td> <?php echo form_input($pregunta_209_n_4); ?> </td>
		<td> <?php echo form_input($pregunta_210_4); ?> </td>
	</tr>
	<tr>
		<td> 5 </td>
		<td> <?php echo form_input($pregunta_202_n_5); ?> </td>
		<td> <?php echo form_input($pregunta_202_a_5); ?> </td>
		<td> <?php echo form_input($pregunta_203_5); ?> </td>
		<td> <?php echo form_input($pregunta_204_5); ?> </td>
		<td> <?php echo form_input($pregunta_205_5); ?> </td>
		<td> <?php echo form_input($pregunta_206_5); ?> </td>
		<td> <?php echo form_input($pregunta_207_a_5); ?> </td>
		<td> <?php echo form_input($pregunta_207_m_5); ?> </td>
		<td> <?php echo form_input($pregunta_208_5); ?> </td>
		<td> <?php echo form_input($pregunta_209_t_5); ?> </td>
		<td> <?php echo form_input($pregunta_209_n_5); ?> </td>
		<td> <?php echo form_input($pregunta_210_5); ?> </td>
	</tr>
	<tr>
		<td> 6 </td>
		<td> <?php echo form_input($pregunta_202_n_6); ?> </td>
		<td> <?php echo form_input($pregunta_202_a_6); ?> </td>
		<td> <?php echo form_input($pregunta_203_6); ?> </td>
		<td> <?php echo form_input($pregunta_204_6); ?> </td>
		<td> <?php echo form_input($pregunta_205_6); ?> </td>
		<td> <?php echo form_input($pregunta_206_6); ?> </td>
		<td> <?php echo form_input($pregunta_207_a_6); ?> </td>
		<td> <?php echo form_input($pregunta_207_m_6); ?> </td>
		<td> <?php echo form_input($pregunta_208_6); ?> </td>
		<td> <?php echo form_input($pregunta_209_t_6); ?> </td>
		<td> <?php echo form_input($pregunta_209_n_6); ?> </td>
		<td> <?php echo form_input($pregunta_210_6); ?> </td>
	</tr>
	<tr>
		<td> 7 </td>
		<td> <?php echo form_input($pregunta_202_n_7); ?> </td>
		<td> <?php echo form_input($pregunta_202_a_7); ?> </td>
		<td> <?php echo form_input($pregunta_203_7); ?> </td>
		<td> <?php echo form_input($pregunta_204_7); ?> </td>
		<td> <?php echo form_input($pregunta_205_7); ?> </td>
		<td> <?php echo form_input($pregunta_206_7); ?> </td>
		<td> <?php echo form_input($pregunta_207_a_7); ?> </td>
		<td> <?php echo form_input($pregunta_207_m_7); ?> </td>
		<td> <?php echo form_input($pregunta_208_7); ?> </td>
		<td> <?php echo form_input($pregunta_209_t_7); ?> </td>
		<td> <?php echo form_input($pregunta_209_n_7); ?> </td>
		<td> <?php echo form_input($pregunta_210_7); ?> </td>
	</tr>
	<tr>
		<td> 8 </td>
		<td> <?php echo form_input($pregunta_202_n_8); ?> </td>
		<td> <?php echo form_input($pregunta_202_a_8); ?> </td>
		<td> <?php echo form_input($pregunta_203_8); ?> </td>
		<td> <?php echo form_input($pregunta_204_8); ?> </td>
		<td> <?php echo form_input($pregunta_205_8); ?> </td>
		<td> <?php echo form_input($pregunta_206_8); ?> </td>
		<td> <?php echo form_input($pregunta_207_a_8); ?> </td>
		<td> <?php echo form_input($pregunta_207_m_8); ?> </td>
		<td> <?php echo form_input($pregunta_208_8); ?> </td>
		<td> <?php echo form_input($pregunta_209_t_8); ?> </td>
		<td> <?php echo form_input($pregunta_209_n_8); ?> </td>
		<td> <?php echo form_input($pregunta_210_8); ?> </td>
	</tr>
	<tr>
		<td> 9 </td>
		<td> <?php echo form_input($pregunta_202_n_9); ?> </td>
		<td> <?php echo form_input($pregunta_202_a_9); ?> </td>
		<td> <?php echo form_input($pregunta_203_9); ?> </td>
		<td> <?php echo form_input($pregunta_204_9); ?> </td>
		<td> <?php echo form_input($pregunta_205_9); ?> </td>
		<td> <?php echo form_input($pregunta_206_9); ?> </td>
		<td> <?php echo form_input($pregunta_207_a_9); ?> </td>
		<td> <?php echo form_input($pregunta_207_m_9); ?> </td>
		<td> <?php echo form_input($pregunta_208_9); ?> </td>
		<td> <?php echo form_input($pregunta_209_t_9); ?> </td>
		<td> <?php echo form_input($pregunta_209_n_9); ?> </td>
		<td> <?php echo form_input($pregunta_210_9); ?> </td>
	</tr>
	<tr>
		<td> 10 </td>
		<td> <?php echo form_input($pregunta_202_n_10); ?> </td>
		<td> <?php echo form_input($pregunta_202_a_10); ?> </td>
		<td> <?php echo form_input($pregunta_203_10); ?> </td>
		<td> <?php echo form_input($pregunta_204_10); ?> </td>
		<td> <?php echo form_input($pregunta_205_10); ?> </td>
		<td> <?php echo form_input($pregunta_206_10); ?> </td>
		<td> <?php echo form_input($pregunta_207_a_10); ?> </td>
		<td> <?php echo form_input($pregunta_207_m_10); ?> </td>
		<td> <?php echo form_input($pregunta_208_10); ?> </td>
		<td> <?php echo form_input($pregunta_209_t_10); ?> </td>
		<td> <?php echo form_input($pregunta_209_n_10); ?> </td>
		<td> <?php echo form_input($pregunta_210_10); ?> </td>
	</tr>
	<tr>
		<td> 11 </td>
		<td> <?php echo form_input($pregunta_202_n_11); ?> </td>
		<td> <?php echo form_input($pregunta_202_a_11); ?> </td>
		<td> <?php echo form_input($pregunta_203_11); ?> </td>
		<td> <?php echo form_input($pregunta_204_11); ?> </td>
		<td> <?php echo form_input($pregunta_205_11); ?> </td>
		<td> <?php echo form_input($pregunta_206_11); ?> </td>
		<td> <?php echo form_input($pregunta_207_a_11); ?> </td>
		<td> <?php echo form_input($pregunta_207_m_11); ?> </td>
		<td> <?php echo form_input($pregunta_208_11); ?> </td>
		<td> <?php echo form_input($pregunta_209_t_11); ?> </td>
		<td> <?php echo form_input($pregunta_209_n_11); ?> </td>
		<td> <?php echo form_input($pregunta_210_11); ?> </td>
	</tr>
	<tr>
		<td> 12 </td>
		<td> <?php echo form_input($pregunta_202_n_12); ?> </td>
		<td> <?php echo form_input($pregunta_202_a_12); ?> </td>
		<td> <?php echo form_input($pregunta_203_12); ?> </td>
		<td> <?php echo form_input($pregunta_204_12); ?> </td>
		<td> <?php echo form_input($pregunta_205_12); ?> </td>
		<td> <?php echo form_input($pregunta_206_12); ?> </td>
		<td> <?php echo form_input($pregunta_207_a_12); ?> </td>
		<td> <?php echo form_input($pregunta_207_m_12); ?> </td>
		<td> <?php echo form_input($pregunta_208_12); ?> </td>
		<td> <?php echo form_input($pregunta_209_t_12); ?> </td>
		<td> <?php echo form_input($pregunta_209_n_12); ?> </td>
		<td> <?php echo form_input($pregunta_210_12); ?> </td>
	</tr>
	<tr>
		<td colspan="13"> Observaciones </td>
	</tr>
	<tr>
		<td colspan="13"> <?php echo form_textarea($observaciones_200); ?> </td>
	</tr>
</table>

<!-- Item 300 -->
<?php 

$pregunta_301_1 = array(
					'id' => 'pregunta_301_1', 
					'name' => 'pregunta_301_1',
					'class' => 'form-control'
				);

$pregunta_301_2 = array(
					'id' => 'pregunta_301_2', 
					'name' => 'pregunta_301_2',
					'class' => 'form-control'
				);

$pregunta_301_3 = array(
					'id' => 'pregunta_301_3', 
					'name' => 'pregunta_301_3',
					'class' => 'form-control'
				);

$pregunta_301_4 = array(
					'id' => 'pregunta_301_4', 
					'name' => 'pregunta_301_4',
					'class' => 'form-control'
				);

$pregunta_301_5 = array(
					'id' => 'pregunta_301_5', 
					'name' => 'pregunta_301_5',
					'class' => 'form-control'
				);

$pregunta_301_6 = array(
					'id' => 'pregunta_301_6', 
					'name' => 'pregunta_301_6',
					'class' => 'form-control'
				);

$pregunta_301_7 = array(
					'id' => 'pregunta_301_7', 
					'name' => 'pregunta_301_7',
					'class' => 'form-control'
				);

$pregunta_301_8 = array(
					'id' => 'pregunta_301_8', 
					'name' => 'pregunta_301_8',
					'class' => 'form-control'
				);

$pregunta_301_9 = array(
					'id' => 'pregunta_301_9', 
					'name' => 'pregunta_301_9',
					'class' => 'form-control'
				);

$pregunta_301_10 = array(
					'id' => 'pregunta_301_10', 
					'name' => 'pregunta_301_10',
					'class' => 'form-control'
				);

$pregunta_301_11 = array(
					'id' => 'pregunta_301_11', 
					'name' => 'pregunta_301_11',
					'class' => 'form-control'
				);

$pregunta_301_12 = array(
					'id' => 'pregunta_301_12', 
					'name' => 'pregunta_301_12',
					'class' => 'form-control'
				);


$pregunta_301_1_especifique = array(
					'id' => 'pregunta_301_1_especifique', 
					'name' => 'pregunta_301_1_especifique',
					'class' => 'form-control'
				);

$pregunta_301_2_especifique = array(
					'id' => 'pregunta_301_2_especifique', 
					'name' => 'pregunta_301_2_especifique',
					'class' => 'form-control'
				);

$pregunta_301_3_especifique = array(
					'id' => 'pregunta_301_3_especifique', 
					'name' => 'pregunta_301_3_especifique',
					'class' => 'form-control'
				);

$pregunta_301_4_especifique = array(
					'id' => 'pregunta_301_4_especifique', 
					'name' => 'pregunta_301_4_especifique',
					'class' => 'form-control'
				);

$pregunta_301_5_especifique = array(
					'id' => 'pregunta_301_5_especifique', 
					'name' => 'pregunta_301_5_especifique',
					'class' => 'form-control'
				);

$pregunta_301_6_especifique = array(
					'id' => 'pregunta_301_6_especifique', 
					'name' => 'pregunta_301_6_especifique',
					'class' => 'form-control'
				);

$pregunta_301_7_especifique = array(
					'id' => 'pregunta_301_7_especifique', 
					'name' => 'pregunta_301_7_especifique',
					'class' => 'form-control'
				);

$pregunta_301_8_especifique = array(
					'id' => 'pregunta_301_8_especifique', 
					'name' => 'pregunta_301_8_especifique',
					'class' => 'form-control'
				);

$pregunta_301_9_especifique = array(
					'id' => 'pregunta_301_9_especifique', 
					'name' => 'pregunta_301_9_especifique',
					'class' => 'form-control'
				);

$pregunta_301_10_especifique = array(
					'id' => 'pregunta_301_10_especifique', 
					'name' => 'pregunta_301_10_especifique',
					'class' => 'form-control'
				);

$pregunta_301_11_especifique = array(
					'id' => 'pregunta_301_11_especifique', 
					'name' => 'pregunta_301_11_especifique',
					'class' => 'form-control'
				);

$pregunta_301_12_especifique = array(
					'id' => 'pregunta_301_12_especifique', 
					'name' => 'pregunta_301_12_especifique',
					'class' => 'form-control'
				);


$pregunta_302_n_1 = array(
					'id' => 'pregunta_302_n_1', 
					'name' => 'pregunta_302_n_1',
					'class' => 'form-control'
				);

$pregunta_302_n_2 = array(
					'id' => 'pregunta_302_n_2', 
					'name' => 'pregunta_302_n_2',
					'class' => 'form-control'
				);

$pregunta_302_n_3 = array(
					'id' => 'pregunta_302_n_3', 
					'name' => 'pregunta_302_n_3',
					'class' => 'form-control'
				);

$pregunta_302_n_4 = array(
					'id' => 'pregunta_302_n_4', 
					'name' => 'pregunta_302_n_4',
					'class' => 'form-control'
				);

$pregunta_302_n_5 = array(
					'id' => 'pregunta_302_n_5', 
					'name' => 'pregunta_302_n_5',
					'class' => 'form-control'
				);

$pregunta_302_n_6 = array(
					'id' => 'pregunta_302_n_6', 
					'name' => 'pregunta_302_n_6',
					'class' => 'form-control'
				);

$pregunta_302_n_7 = array(
					'id' => 'pregunta_302_n_7', 
					'name' => 'pregunta_302_n_7',
					'class' => 'form-control'
				);

$pregunta_302_n_8 = array(
					'id' => 'pregunta_302_n_8', 
					'name' => 'pregunta_302_n_8',
					'class' => 'form-control'
				);

$pregunta_302_n_9 = array(
					'id' => 'pregunta_302_n_9', 
					'name' => 'pregunta_302_n_9',
					'class' => 'form-control'
				);

$pregunta_302_n_10 = array(
					'id' => 'pregunta_302_n_10', 
					'name' => 'pregunta_302_n_10',
					'class' => 'form-control'
				);

$pregunta_302_n_11 = array(
					'id' => 'pregunta_302_n_11', 
					'name' => 'pregunta_302_n_11',
					'class' => 'form-control'
				);

$pregunta_302_n_12 = array(
					'id' => 'pregunta_302_n_12', 
					'name' => 'pregunta_302_n_12',
					'class' => 'form-control'
				);


$pregunta_302_a_1 = array(
					'id' => 'pregunta_302_a_1', 
					'name' => 'pregunta_302_a_1',
					'class' => 'form-control'
				);

$pregunta_302_a_2 = array(
					'id' => 'pregunta_302_a_2', 
					'name' => 'pregunta_302_a_2',
					'class' => 'form-control'
				);

$pregunta_302_a_3 = array(
					'id' => 'pregunta_302_a_3', 
					'name' => 'pregunta_302_a_3',
					'class' => 'form-control'
				);

$pregunta_302_a_4 = array(
					'id' => 'pregunta_302_a_4', 
					'name' => 'pregunta_302_a_4',
					'class' => 'form-control'
				);

$pregunta_302_a_5 = array(
					'id' => 'pregunta_302_a_5', 
					'name' => 'pregunta_302_a_5',
					'class' => 'form-control'
				);

$pregunta_302_a_6 = array(
					'id' => 'pregunta_302_a_6', 
					'name' => 'pregunta_302_a_6',
					'class' => 'form-control'
				);

$pregunta_302_a_7 = array(
					'id' => 'pregunta_302_a_7', 
					'name' => 'pregunta_302_a_7',
					'class' => 'form-control'
				);

$pregunta_302_a_8 = array(
					'id' => 'pregunta_302_a_8', 
					'name' => 'pregunta_302_a_8',
					'class' => 'form-control'
				);

$pregunta_302_a_9 = array(
					'id' => 'pregunta_302_a_9', 
					'name' => 'pregunta_302_a_9',
					'class' => 'form-control'
				);

$pregunta_302_a_10 = array(
					'id' => 'pregunta_302_a_10', 
					'name' => 'pregunta_302_a_10',
					'class' => 'form-control'
				);

$pregunta_302_a_11 = array(
					'id' => 'pregunta_302_a_11', 
					'name' => 'pregunta_302_a_11',
					'class' => 'form-control'
				);

$pregunta_302_a_12 = array(
					'id' => 'pregunta_302_a_12', 
					'name' => 'pregunta_302_a_12',
					'class' => 'form-control'
				);


$pregunta_302_g_1 = array(
					'id' => 'pregunta_302_g_1', 
					'name' => 'pregunta_302_g_1',
					'class' => 'form-control'
				);

$pregunta_302_g_2 = array(
					'id' => 'pregunta_302_g_2', 
					'name' => 'pregunta_302_g_2',
					'class' => 'form-control'
				);

$pregunta_302_g_3 = array(
					'id' => 'pregunta_302_g_3', 
					'name' => 'pregunta_302_g_3',
					'class' => 'form-control'
				);

$pregunta_302_g_4 = array(
					'id' => 'pregunta_302_g_4', 
					'name' => 'pregunta_302_g_4',
					'class' => 'form-control'
				);

$pregunta_302_g_5 = array(
					'id' => 'pregunta_302_g_5', 
					'name' => 'pregunta_302_g_5',
					'class' => 'form-control'
				);

$pregunta_302_g_6 = array(
					'id' => 'pregunta_302_g_6', 
					'name' => 'pregunta_302_g_6',
					'class' => 'form-control'
				);

$pregunta_302_g_7 = array(
					'id' => 'pregunta_302_g_7', 
					'name' => 'pregunta_302_g_7',
					'class' => 'form-control'
				);

$pregunta_302_g_8 = array(
					'id' => 'pregunta_302_g_8', 
					'name' => 'pregunta_302_g_8',
					'class' => 'form-control'
				);

$pregunta_302_g_9 = array(
					'id' => 'pregunta_302_g_9', 
					'name' => 'pregunta_302_g_9',
					'class' => 'form-control'
				);

$pregunta_302_g_10 = array(
					'id' => 'pregunta_302_g_10', 
					'name' => 'pregunta_302_g_10',
					'class' => 'form-control'
				);

$pregunta_302_g_11 = array(
					'id' => 'pregunta_302_g_11', 
					'name' => 'pregunta_302_g_11',
					'class' => 'form-control'
				);

$pregunta_302_g_12 = array(
					'id' => 'pregunta_302_g_12', 
					'name' => 'pregunta_302_g_12',
					'class' => 'form-control'
				);


$pregunta_303_1 = array(
					'id' => 'pregunta_303_1', 
					'name' => 'pregunta_303_1',
					'class' => 'form-control'
				);

$pregunta_303_2 = array(
					'id' => 'pregunta_303_2', 
					'name' => 'pregunta_303_2',
					'class' => 'form-control'
				);

$pregunta_303_3 = array(
					'id' => 'pregunta_303_3', 
					'name' => 'pregunta_303_3',
					'class' => 'form-control'
				);

$pregunta_303_4 = array(
					'id' => 'pregunta_303_4', 
					'name' => 'pregunta_303_4',
					'class' => 'form-control'
				);

$pregunta_303_5 = array(
					'id' => 'pregunta_303_5', 
					'name' => 'pregunta_303_5',
					'class' => 'form-control'
				);

$pregunta_303_6 = array(
					'id' => 'pregunta_303_6', 
					'name' => 'pregunta_303_6',
					'class' => 'form-control'
				);

$pregunta_303_7 = array(
					'id' => 'pregunta_303_7', 
					'name' => 'pregunta_303_7',
					'class' => 'form-control'
				);

$pregunta_303_8 = array(
					'id' => 'pregunta_303_8', 
					'name' => 'pregunta_303_8',
					'class' => 'form-control'
				);

$pregunta_303_9 = array(
					'id' => 'pregunta_303_9', 
					'name' => 'pregunta_303_9',
					'class' => 'form-control'
				);

$pregunta_303_10 = array(
					'id' => 'pregunta_303_10', 
					'name' => 'pregunta_303_10',
					'class' => 'form-control'
				);

$pregunta_303_11 = array(
					'id' => 'pregunta_303_11', 
					'name' => 'pregunta_303_11',
					'class' => 'form-control'
				);

$pregunta_303_12 = array(
					'id' => 'pregunta_303_12', 
					'name' => 'pregunta_303_12',
					'class' => 'form-control'
				);


$pregunta_304_1 = array(
					'id' => 'pregunta_304_1', 
					'name' => 'pregunta_304_1',
					'class' => 'form-control'
				);

$pregunta_304_2 = array(
					'id' => 'pregunta_304_2', 
					'name' => 'pregunta_304_2',
					'class' => 'form-control'
				);

$pregunta_304_3 = array(
					'id' => 'pregunta_304_3', 
					'name' => 'pregunta_304_3',
					'class' => 'form-control'
				);

$pregunta_304_4 = array(
					'id' => 'pregunta_304_4', 
					'name' => 'pregunta_304_4',
					'class' => 'form-control'
				);

$pregunta_304_5 = array(
					'id' => 'pregunta_304_5', 
					'name' => 'pregunta_304_5',
					'class' => 'form-control'
				);

$pregunta_304_6 = array(
					'id' => 'pregunta_304_6', 
					'name' => 'pregunta_304_6',
					'class' => 'form-control'
				);

$pregunta_304_7 = array(
					'id' => 'pregunta_304_7', 
					'name' => 'pregunta_304_7',
					'class' => 'form-control'
				);

$pregunta_304_8 = array(
					'id' => 'pregunta_304_8', 
					'name' => 'pregunta_304_8',
					'class' => 'form-control'
				);

$pregunta_304_9 = array(
					'id' => 'pregunta_304_9', 
					'name' => 'pregunta_304_9',
					'class' => 'form-control'
				);

$pregunta_304_10 = array(
					'id' => 'pregunta_304_10', 
					'name' => 'pregunta_304_10',
					'class' => 'form-control'
				);

$pregunta_304_11 = array(
					'id' => 'pregunta_304_11', 
					'name' => 'pregunta_304_11',
					'class' => 'form-control'
				);

$pregunta_304_12 = array(
					'id' => 'pregunta_304_12', 
					'name' => 'pregunta_304_12',
					'class' => 'form-control'
				);


$pregunta_305_1 = array(
					'id' => 'pregunta_305_1', 
					'name' => 'pregunta_305_1',
					'class' => 'form-control'
				);

$pregunta_305_2 = array(
					'id' => 'pregunta_305_2', 
					'name' => 'pregunta_305_2',
					'class' => 'form-control'
				);

$pregunta_305_3 = array(
					'id' => 'pregunta_305_3', 
					'name' => 'pregunta_305_3',
					'class' => 'form-control'
				);

$pregunta_305_4 = array(
					'id' => 'pregunta_305_4', 
					'name' => 'pregunta_305_4',
					'class' => 'form-control'
				);

$pregunta_305_5 = array(
					'id' => 'pregunta_305_5', 
					'name' => 'pregunta_305_5',
					'class' => 'form-control'
				);

$pregunta_305_6 = array(
					'id' => 'pregunta_305_6', 
					'name' => 'pregunta_305_6',
					'class' => 'form-control'
				);

$pregunta_305_7 = array(
					'id' => 'pregunta_305_7', 
					'name' => 'pregunta_305_7',
					'class' => 'form-control'
				);

$pregunta_305_8 = array(
					'id' => 'pregunta_305_8', 
					'name' => 'pregunta_305_8',
					'class' => 'form-control'
				);

$pregunta_305_9 = array(
					'id' => 'pregunta_305_9', 
					'name' => 'pregunta_305_9',
					'class' => 'form-control'
				);

$pregunta_305_10 = array(
					'id' => 'pregunta_305_10', 
					'name' => 'pregunta_305_10',
					'class' => 'form-control'
				);

$pregunta_305_11 = array(
					'id' => 'pregunta_305_11', 
					'name' => 'pregunta_305_11',
					'class' => 'form-control'
				);

$pregunta_305_12 = array(
					'id' => 'pregunta_305_12', 
					'name' => 'pregunta_305_12',
					'class' => 'form-control'
				);


$pregunta_305_1_especifique = array(
					'id' => 'pregunta_305_1_especifique', 
					'name' => 'pregunta_305_1_especifique',
					'class' => 'form-control'
				);

$pregunta_305_2_especifique = array(
					'id' => 'pregunta_305_2_especifique', 
					'name' => 'pregunta_305_2_especifique',
					'class' => 'form-control'
				);

$pregunta_305_3_especifique = array(
					'id' => 'pregunta_305_3_especifique', 
					'name' => 'pregunta_305_3_especifique',
					'class' => 'form-control'
				);

$pregunta_305_4_especifique = array(
					'id' => 'pregunta_305_4_especifique', 
					'name' => 'pregunta_305_4_especifique',
					'class' => 'form-control'
				);

$pregunta_305_5_especifique = array(
					'id' => 'pregunta_305_5_especifique', 
					'name' => 'pregunta_305_5_especifique',
					'class' => 'form-control'
				);

$pregunta_305_6_especifique = array(
					'id' => 'pregunta_305_6_especifique', 
					'name' => 'pregunta_305_6_especifique',
					'class' => 'form-control'
				);

$pregunta_305_7_especifique = array(
					'id' => 'pregunta_305_7_especifique', 
					'name' => 'pregunta_305_7_especifique',
					'class' => 'form-control'
				);

$pregunta_305_8_especifique = array(
					'id' => 'pregunta_305_8_especifique', 
					'name' => 'pregunta_305_8_especifique',
					'class' => 'form-control'
				);

$pregunta_305_9_especifique = array(
					'id' => 'pregunta_305_9_especifique', 
					'name' => 'pregunta_305_9_especifique',
					'class' => 'form-control'
				);

$pregunta_305_10_especifique = array(
					'id' => 'pregunta_305_10_especifique', 
					'name' => 'pregunta_305_10_especifique',
					'class' => 'form-control'
				);

$pregunta_305_11_especifique = array(
					'id' => 'pregunta_305_11_especifique', 
					'name' => 'pregunta_305_11_especifique',
					'class' => 'form-control'
				);

$pregunta_305_12_especifique = array(
					'id' => 'pregunta_305_12_especifique', 
					'name' => 'pregunta_305_12_especifique',
					'class' => 'form-control'
				);


$pregunta_306_1 = array(
					'id' => 'pregunta_306_1', 
					'name' => 'pregunta_306_1',
					'class' => 'form-control'
				);

$pregunta_306_2 = array(
					'id' => 'pregunta_306_2', 
					'name' => 'pregunta_306_2',
					'class' => 'form-control'
				);

$pregunta_306_3 = array(
					'id' => 'pregunta_306_3', 
					'name' => 'pregunta_306_3',
					'class' => 'form-control'
				);

$pregunta_306_4 = array(
					'id' => 'pregunta_306_4', 
					'name' => 'pregunta_306_4',
					'class' => 'form-control'
				);

$pregunta_306_5 = array(
					'id' => 'pregunta_306_5', 
					'name' => 'pregunta_306_5',
					'class' => 'form-control'
				);

$pregunta_306_6 = array(
					'id' => 'pregunta_306_6', 
					'name' => 'pregunta_306_6',
					'class' => 'form-control'
				);

$pregunta_306_7 = array(
					'id' => 'pregunta_306_7', 
					'name' => 'pregunta_306_7',
					'class' => 'form-control'
				);

$pregunta_306_8 = array(
					'id' => 'pregunta_306_8', 
					'name' => 'pregunta_306_8',
					'class' => 'form-control'
				);

$pregunta_306_9 = array(
					'id' => 'pregunta_306_9', 
					'name' => 'pregunta_306_9',
					'class' => 'form-control'
				);

$pregunta_306_10 = array(
					'id' => 'pregunta_306_10', 
					'name' => 'pregunta_306_10',
					'class' => 'form-control'
				);

$pregunta_306_11 = array(
					'id' => 'pregunta_306_11', 
					'name' => 'pregunta_306_11',
					'class' => 'form-control'
				);

$pregunta_306_12 = array(
					'id' => 'pregunta_306_12', 
					'name' => 'pregunta_306_12',
					'class' => 'form-control'
				);


$pregunta_307_1 = array(
					'id' => 'pregunta_307_1', 
					'name' => 'pregunta_307_1',
					'class' => 'form-control'
				);

$pregunta_307_2 = array(
					'id' => 'pregunta_307_2', 
					'name' => 'pregunta_307_2',
					'class' => 'form-control'
				);

$pregunta_307_3 = array(
					'id' => 'pregunta_307_3', 
					'name' => 'pregunta_307_3',
					'class' => 'form-control'
				);

$pregunta_307_4 = array(
					'id' => 'pregunta_307_4', 
					'name' => 'pregunta_307_4',
					'class' => 'form-control'
				);

$pregunta_307_5 = array(
					'id' => 'pregunta_307_5', 
					'name' => 'pregunta_307_5',
					'class' => 'form-control'
				);

$pregunta_307_6 = array(
					'id' => 'pregunta_307_6', 
					'name' => 'pregunta_307_6',
					'class' => 'form-control'
				);

$pregunta_307_7 = array(
					'id' => 'pregunta_307_7', 
					'name' => 'pregunta_307_7',
					'class' => 'form-control'
				);

$pregunta_307_8 = array(
					'id' => 'pregunta_307_8', 
					'name' => 'pregunta_307_8',
					'class' => 'form-control'
				);

$pregunta_307_9 = array(
					'id' => 'pregunta_307_9', 
					'name' => 'pregunta_307_9',
					'class' => 'form-control'
				);

$pregunta_307_10 = array(
					'id' => 'pregunta_307_10', 
					'name' => 'pregunta_307_10',
					'class' => 'form-control'
				);

$pregunta_307_11 = array(
					'id' => 'pregunta_307_11', 
					'name' => 'pregunta_307_11',
					'class' => 'form-control'
				);

$pregunta_307_12 = array(
					'id' => 'pregunta_307_12', 
					'name' => 'pregunta_307_12',
					'class' => 'form-control'
				);


$pregunta_307_a_1 = array(
					'id' => 'pregunta_307_a_1', 
					'name' => 'pregunta_307_a_1',
					'class' => 'form-control'
				);

$pregunta_307_a_2 = array(
					'id' => 'pregunta_307_a_2', 
					'name' => 'pregunta_307_a_2',
					'class' => 'form-control'
				);

$pregunta_307_a_3 = array(
					'id' => 'pregunta_307_a_3', 
					'name' => 'pregunta_307_a_3',
					'class' => 'form-control'
				);

$pregunta_307_a_4 = array(
					'id' => 'pregunta_307_a_4', 
					'name' => 'pregunta_307_a_4',
					'class' => 'form-control'
				);

$pregunta_307_a_5 = array(
					'id' => 'pregunta_307_a_5', 
					'name' => 'pregunta_307_a_5',
					'class' => 'form-control'
				);

$pregunta_307_a_6 = array(
					'id' => 'pregunta_307_a_6', 
					'name' => 'pregunta_307_a_6',
					'class' => 'form-control'
				);

$pregunta_307_a_7 = array(
					'id' => 'pregunta_307_a_7', 
					'name' => 'pregunta_307_a_7',
					'class' => 'form-control'
				);

$pregunta_307_a_8 = array(
					'id' => 'pregunta_307_a_8', 
					'name' => 'pregunta_307_a_8',
					'class' => 'form-control'
				);

$pregunta_307_a_9 = array(
					'id' => 'pregunta_307_a_9', 
					'name' => 'pregunta_307_a_9',
					'class' => 'form-control'
				);

$pregunta_307_a_10 = array(
					'id' => 'pregunta_307_a_10', 
					'name' => 'pregunta_307_a_10',
					'class' => 'form-control'
				);

$pregunta_307_a_11 = array(
					'id' => 'pregunta_307_a_11', 
					'name' => 'pregunta_307_a_11',
					'class' => 'form-control'
				);

$pregunta_307_a_12 = array(
					'id' => 'pregunta_307_a_12', 
					'name' => 'pregunta_307_a_12',
					'class' => 'form-control'
				);


$pregunta_307_g_1 = array(
					'id' => 'pregunta_307_g_1', 
					'name' => 'pregunta_307_g_1',
					'class' => 'form-control'
				);

$pregunta_307_g_2 = array(
					'id' => 'pregunta_307_g_2', 
					'name' => 'pregunta_307_g_2',
					'class' => 'form-control'
				);

$pregunta_307_g_3 = array(
					'id' => 'pregunta_307_g_3', 
					'name' => 'pregunta_307_g_3',
					'class' => 'form-control'
				);

$pregunta_307_g_4 = array(
					'id' => 'pregunta_307_g_4', 
					'name' => 'pregunta_307_g_4',
					'class' => 'form-control'
				);

$pregunta_307_g_5 = array(
					'id' => 'pregunta_307_g_5', 
					'name' => 'pregunta_307_g_5',
					'class' => 'form-control'
				);

$pregunta_307_g_6 = array(
					'id' => 'pregunta_307_g_6', 
					'name' => 'pregunta_307_g_6',
					'class' => 'form-control'
				);

$pregunta_307_g_7 = array(
					'id' => 'pregunta_307_g_7', 
					'name' => 'pregunta_307_g_7',
					'class' => 'form-control'
				);

$pregunta_307_g_8 = array(
					'id' => 'pregunta_307_g_8', 
					'name' => 'pregunta_307_g_8',
					'class' => 'form-control'
				);

$pregunta_307_g_9 = array(
					'id' => 'pregunta_307_g_9', 
					'name' => 'pregunta_307_g_9',
					'class' => 'form-control'
				);

$pregunta_307_g_10 = array(
					'id' => 'pregunta_307_g_10', 
					'name' => 'pregunta_307_g_10',
					'class' => 'form-control'
				);

$pregunta_307_g_11 = array(
					'id' => 'pregunta_307_g_11', 
					'name' => 'pregunta_307_g_11',
					'class' => 'form-control'
				);

$pregunta_307_g_12 = array(
					'id' => 'pregunta_307_g_12', 
					'name' => 'pregunta_307_g_12',
					'class' => 'form-control'
				);


$pregunta_308_1 = array(
					'id' => 'pregunta_308_1', 
					'name' => 'pregunta_308_1',
					'class' => 'form-control'
				);

$pregunta_308_2 = array(
					'id' => 'pregunta_308_2', 
					'name' => 'pregunta_308_2',
					'class' => 'form-control'
				);

$pregunta_308_3 = array(
					'id' => 'pregunta_308_3', 
					'name' => 'pregunta_308_3',
					'class' => 'form-control'
				);

$pregunta_308_4 = array(
					'id' => 'pregunta_308_4', 
					'name' => 'pregunta_308_4',
					'class' => 'form-control'
				);

$pregunta_308_5 = array(
					'id' => 'pregunta_308_5', 
					'name' => 'pregunta_308_5',
					'class' => 'form-control'
				);

$pregunta_308_6 = array(
					'id' => 'pregunta_308_6', 
					'name' => 'pregunta_308_6',
					'class' => 'form-control'
				);

$pregunta_308_7 = array(
					'id' => 'pregunta_308_7', 
					'name' => 'pregunta_308_7',
					'class' => 'form-control'
				);

$pregunta_308_8 = array(
					'id' => 'pregunta_308_8', 
					'name' => 'pregunta_308_8',
					'class' => 'form-control'
				);

$pregunta_308_9 = array(
					'id' => 'pregunta_308_9', 
					'name' => 'pregunta_308_9',
					'class' => 'form-control'
				);

$pregunta_308_10 = array(
					'id' => 'pregunta_308_10', 
					'name' => 'pregunta_308_10',
					'class' => 'form-control'
				);

$pregunta_308_11 = array(
					'id' => 'pregunta_308_11', 
					'name' => 'pregunta_308_11',
					'class' => 'form-control'
				);

$pregunta_308_12 = array(
					'id' => 'pregunta_308_12', 
					'name' => 'pregunta_308_12',
					'class' => 'form-control'
				);


$pregunta_308_1_especifique = array(
					'id' => 'pregunta_308_1_especifique', 
					'name' => 'pregunta_308_1_especifique',
					'class' => 'form-control'
				);

$pregunta_308_2_especifique = array(
					'id' => 'pregunta_308_2_especifique', 
					'name' => 'pregunta_308_2_especifique',
					'class' => 'form-control'
				);

$pregunta_308_3_especifique = array(
					'id' => 'pregunta_308_3_especifique', 
					'name' => 'pregunta_308_3_especifique',
					'class' => 'form-control'
				);

$pregunta_308_4_especifique = array(
					'id' => 'pregunta_308_4_especifique', 
					'name' => 'pregunta_308_4_especifique',
					'class' => 'form-control'
				);

$pregunta_308_5_especifique = array(
					'id' => 'pregunta_308_5_especifique', 
					'name' => 'pregunta_308_5_especifique',
					'class' => 'form-control'
				);

$pregunta_308_6_especifique = array(
					'id' => 'pregunta_308_6_especifique', 
					'name' => 'pregunta_308_6_especifique',
					'class' => 'form-control'
				);

$pregunta_308_7_especifique = array(
					'id' => 'pregunta_308_7_especifique', 
					'name' => 'pregunta_308_7_especifique',
					'class' => 'form-control'
				);

$pregunta_308_8_especifique = array(
					'id' => 'pregunta_308_8_especifique', 
					'name' => 'pregunta_308_8_especifique',
					'class' => 'form-control'
				);

$pregunta_308_9_especifique = array(
					'id' => 'pregunta_308_9_especifique', 
					'name' => 'pregunta_308_9_especifique',
					'class' => 'form-control'
				);

$pregunta_308_10_especifique = array(
					'id' => 'pregunta_308_10_especifique', 
					'name' => 'pregunta_308_10_especifique',
					'class' => 'form-control'
				);

$pregunta_308_11_especifique = array(
					'id' => 'pregunta_308_11_especifique', 
					'name' => 'pregunta_308_11_especifique',
					'class' => 'form-control'
				);

$pregunta_308_12_especifique = array(
					'id' => 'pregunta_308_12_especifique', 
					'name' => 'pregunta_308_12_especifique',
					'class' => 'form-control'
				);


$observaciones_300 = array(
					'id' => 'observaciones_300', 
					'name' => 'observaciones_300',
					'class' => 'form-control',
					'rows' => 2,
					'cols' => 18
				);

?>
<table class="table table-bordered">
	<tr>
		<th colspan="18"> 300. Educacion (Para personas de 3 años y mas de edad) </th>
	</tr>
	<tr>
		<td rowspan="3"> 201. Nro Ord. </td>
		<td colspan="6"> Para Personas de 3 años y mas de edad </td>
		<td colspan="3"> Para Personas de 15 años y mas de edad </td>
		<td colspan="6"> Para Personas de 3 años y mas edad </td>
	</tr>
	<tr>
		<td colspan="2"> 301. El Idioma o Lengua con el que apredio a hablar ... fue: </td>
		<td colspan="3"> 302. Cual es el ultimo año o grado de estudios y nivel que aprobo...? </td>
		<td> 303. ... Sabe leer y/o escribir? </td>
		<td> 304. Asiste... a un programa de alfabetizacion? </td>
		<td colspan="2"> 305. De quien recibe el programa? </td>
		<td> 306. Actualmente... Asiste a algun centro o programa de educacion basica o superior? </td>
		<td colspan="3"> 307. Cual es el año o grado de estudios al que asiste? ... </td>
		<td colspan="2"> 308. Cual es la razon principal por la que no asiste actualmente a un centro o programa de educacion basica o superior? </td>
	</tr>
	<tr>
		<td colspan="2"> Codigo </td>
		<td> Nivel </td>
		<td> Año </td>
		<td> Grado </td>
		<td> Si / No </td>
		<td> Si / No </td>
		<td colspan="2"> Codigo </td>
		<td> Si / No </td>
		<td> Codigo </td>
		<td> Año </td>
		<td> Grado </td>
		<td colspan="2"> Codigo </td>
	</tr>
	<tr>
		<td> 1 </td>
		<td> <?php echo form_input($pregunta_301_1); ?> </td>
		<td> <?php echo form_input($pregunta_301_1_especifique); ?> (espc.) </td>
		<td> <?php echo form_input($pregunta_302_n_1); ?> </td>
		<td> <?php echo form_input($pregunta_302_a_1); ?> </td>
		<td> <?php echo form_input($pregunta_302_g_1); ?> </td>
		<td> <?php echo form_input($pregunta_303_1); ?> </td>
		<td> <?php echo form_input($pregunta_304_1); ?> </td>
		<td> <?php echo form_input($pregunta_305_1); ?> </td>
		<td> <?php echo form_input($pregunta_305_1_especifique); ?> (espc.) </td>
		<td> <?php echo form_input($pregunta_306_1); ?> </td>
		<td> <?php echo form_input($pregunta_307_1); ?> </td>
		<td> <?php echo form_input($pregunta_307_a_1); ?> </td>
		<td> <?php echo form_input($pregunta_307_g_1); ?> </td>
		<td> <?php echo form_input($pregunta_308_1); ?> </td>
		<td> <?php echo form_input($pregunta_308_1_especifique); ?> (espc.) </td>
	</tr>
	<tr>
		<td> 2 </td>
		<td> <?php echo form_input($pregunta_301_2); ?> </td>
		<td> <?php echo form_input($pregunta_301_2_especifique); ?> (espc.) </td>
		<td> <?php echo form_input($pregunta_302_n_2); ?> </td>
		<td> <?php echo form_input($pregunta_302_a_2); ?> </td>
		<td> <?php echo form_input($pregunta_302_g_2); ?> </td>
		<td> <?php echo form_input($pregunta_303_2); ?> </td>
		<td> <?php echo form_input($pregunta_304_2); ?> </td>
		<td> <?php echo form_input($pregunta_305_2); ?> </td>
		<td> <?php echo form_input($pregunta_305_2_especifique); ?> (espc.) </td>
		<td> <?php echo form_input($pregunta_306_2); ?> </td>
		<td> <?php echo form_input($pregunta_307_2); ?> </td>
		<td> <?php echo form_input($pregunta_307_a_2); ?> </td>
		<td> <?php echo form_input($pregunta_307_g_2); ?> </td>
		<td> <?php echo form_input($pregunta_308_2); ?> </td>
		<td> <?php echo form_input($pregunta_308_2_especifique); ?> (espc.) </td>
	</tr>
	<tr>
		<td> 3 </td>
		<td> <?php echo form_input($pregunta_301_3); ?> </td>
		<td> <?php echo form_input($pregunta_301_3_especifique); ?> (espc.) </td>
		<td> <?php echo form_input($pregunta_302_n_3); ?> </td>
		<td> <?php echo form_input($pregunta_302_a_3); ?> </td>
		<td> <?php echo form_input($pregunta_302_g_3); ?> </td>
		<td> <?php echo form_input($pregunta_303_3); ?> </td>
		<td> <?php echo form_input($pregunta_304_3); ?> </td>
		<td> <?php echo form_input($pregunta_305_3); ?> </td>
		<td> <?php echo form_input($pregunta_305_3_especifique); ?> (espc.) </td>
		<td> <?php echo form_input($pregunta_306_3); ?> </td>
		<td> <?php echo form_input($pregunta_307_3); ?> </td>
		<td> <?php echo form_input($pregunta_307_a_3); ?> </td>
		<td> <?php echo form_input($pregunta_307_g_3); ?> </td>
		<td> <?php echo form_input($pregunta_308_3); ?> </td>
		<td> <?php echo form_input($pregunta_308_3_especifique); ?> (espc.) </td>
	</tr>
	<tr>
		<td> 4 </td>
		<td> <?php echo form_input($pregunta_301_4); ?> </td>
		<td> <?php echo form_input($pregunta_301_4_especifique); ?> (espc.) </td>
		<td> <?php echo form_input($pregunta_302_n_4); ?> </td>
		<td> <?php echo form_input($pregunta_302_a_4); ?> </td>
		<td> <?php echo form_input($pregunta_302_g_4); ?> </td>
		<td> <?php echo form_input($pregunta_303_4); ?> </td>
		<td> <?php echo form_input($pregunta_304_4); ?> </td>
		<td> <?php echo form_input($pregunta_305_4); ?> </td>
		<td> <?php echo form_input($pregunta_305_4_especifique); ?> (espc.) </td>
		<td> <?php echo form_input($pregunta_306_4); ?> </td>
		<td> <?php echo form_input($pregunta_307_4); ?> </td>
		<td> <?php echo form_input($pregunta_307_a_4); ?> </td>
		<td> <?php echo form_input($pregunta_307_g_4); ?> </td>
		<td> <?php echo form_input($pregunta_308_4); ?> </td>
		<td> <?php echo form_input($pregunta_308_4_especifique); ?> (espc.) </td>
	</tr>
	<tr>
		<td> 5 </td>
		<td> <?php echo form_input($pregunta_301_5); ?> </td>
		<td> <?php echo form_input($pregunta_301_5_especifique); ?> (espc.) </td>
		<td> <?php echo form_input($pregunta_302_n_5); ?> </td>
		<td> <?php echo form_input($pregunta_302_a_5); ?> </td>
		<td> <?php echo form_input($pregunta_302_g_5); ?> </td>
		<td> <?php echo form_input($pregunta_303_5); ?> </td>
		<td> <?php echo form_input($pregunta_304_5); ?> </td>
		<td> <?php echo form_input($pregunta_305_5); ?> </td>
		<td> <?php echo form_input($pregunta_305_5_especifique); ?> (espc.) </td>
		<td> <?php echo form_input($pregunta_306_5); ?> </td>
		<td> <?php echo form_input($pregunta_307_5); ?> </td>
		<td> <?php echo form_input($pregunta_307_a_5); ?> </td>
		<td> <?php echo form_input($pregunta_307_g_5); ?> </td>
		<td> <?php echo form_input($pregunta_308_5); ?> </td>
		<td> <?php echo form_input($pregunta_308_5_especifique); ?> (espc.) </td>
	</tr>
	<tr>
		<td> 6 </td>
		<td> <?php echo form_input($pregunta_301_6); ?> </td>
		<td> <?php echo form_input($pregunta_301_6_especifique); ?> (espc.) </td>
		<td> <?php echo form_input($pregunta_302_n_6); ?> </td>
		<td> <?php echo form_input($pregunta_302_a_6); ?> </td>
		<td> <?php echo form_input($pregunta_302_g_6); ?> </td>
		<td> <?php echo form_input($pregunta_303_6); ?> </td>
		<td> <?php echo form_input($pregunta_304_6); ?> </td>
		<td> <?php echo form_input($pregunta_305_6); ?> </td>
		<td> <?php echo form_input($pregunta_305_6_especifique); ?> (espc.) </td>
		<td> <?php echo form_input($pregunta_306_6); ?> </td>
		<td> <?php echo form_input($pregunta_307_6); ?> </td>
		<td> <?php echo form_input($pregunta_307_a_6); ?> </td>
		<td> <?php echo form_input($pregunta_307_g_6); ?> </td>
		<td> <?php echo form_input($pregunta_308_6); ?> </td>
		<td> <?php echo form_input($pregunta_308_6_especifique); ?> (espc.) </td>
	</tr>
	<tr>
		<td> 7 </td>
		<td> <?php echo form_input($pregunta_301_7); ?> </td>
		<td> <?php echo form_input($pregunta_301_7_especifique); ?> (espc.) </td>
		<td> <?php echo form_input($pregunta_302_n_7); ?> </td>
		<td> <?php echo form_input($pregunta_302_a_7); ?> </td>
		<td> <?php echo form_input($pregunta_302_g_7); ?> </td>
		<td> <?php echo form_input($pregunta_303_7); ?> </td>
		<td> <?php echo form_input($pregunta_304_7); ?> </td>
		<td> <?php echo form_input($pregunta_305_7); ?> </td>
		<td> <?php echo form_input($pregunta_305_7_especifique); ?> (espc.) </td>
		<td> <?php echo form_input($pregunta_306_7); ?> </td>
		<td> <?php echo form_input($pregunta_307_7); ?> </td>
		<td> <?php echo form_input($pregunta_307_a_7); ?> </td>
		<td> <?php echo form_input($pregunta_307_g_7); ?> </td>
		<td> <?php echo form_input($pregunta_308_7); ?> </td>
		<td> <?php echo form_input($pregunta_308_7_especifique); ?> (espc.) </td>
	</tr>
	<tr>
		<td> 8 </td>
		<td> <?php echo form_input($pregunta_301_8); ?> </td>
		<td> <?php echo form_input($pregunta_301_8_especifique); ?> (espc.) </td>
		<td> <?php echo form_input($pregunta_302_n_8); ?> </td>
		<td> <?php echo form_input($pregunta_302_a_8); ?> </td>
		<td> <?php echo form_input($pregunta_302_g_8); ?> </td>
		<td> <?php echo form_input($pregunta_303_8); ?> </td>
		<td> <?php echo form_input($pregunta_304_8); ?> </td>
		<td> <?php echo form_input($pregunta_305_8); ?> </td>
		<td> <?php echo form_input($pregunta_305_8_especifique); ?> (espc.) </td>
		<td> <?php echo form_input($pregunta_306_8); ?> </td>
		<td> <?php echo form_input($pregunta_307_8); ?> </td>
		<td> <?php echo form_input($pregunta_307_a_8); ?> </td>
		<td> <?php echo form_input($pregunta_307_g_8); ?> </td>
		<td> <?php echo form_input($pregunta_308_8); ?> </td>
		<td> <?php echo form_input($pregunta_308_8_especifique); ?> (espc.) </td>
	</tr>
	<tr>
		<td> 9 </td>
		<td> <?php echo form_input($pregunta_301_9); ?> </td>
		<td> <?php echo form_input($pregunta_301_9_especifique); ?> (espc.) </td>
		<td> <?php echo form_input($pregunta_302_n_9); ?> </td>
		<td> <?php echo form_input($pregunta_302_a_9); ?> </td>
		<td> <?php echo form_input($pregunta_302_g_9); ?> </td>
		<td> <?php echo form_input($pregunta_303_9); ?> </td>
		<td> <?php echo form_input($pregunta_304_9); ?> </td>
		<td> <?php echo form_input($pregunta_305_9); ?> </td>
		<td> <?php echo form_input($pregunta_305_9_especifique); ?> (espc.) </td>
		<td> <?php echo form_input($pregunta_306_9); ?> </td>
		<td> <?php echo form_input($pregunta_307_9); ?> </td>
		<td> <?php echo form_input($pregunta_307_a_9); ?> </td>
		<td> <?php echo form_input($pregunta_307_g_9); ?> </td>
		<td> <?php echo form_input($pregunta_308_9); ?> </td>
		<td> <?php echo form_input($pregunta_308_9_especifique); ?> (espc.) </td>
	</tr>
	<tr>
		<td> 10 </td>
		<td> <?php echo form_input($pregunta_301_10); ?> </td>
		<td> <?php echo form_input($pregunta_301_10_especifique); ?> (espc.) </td>
		<td> <?php echo form_input($pregunta_302_n_10); ?> </td>
		<td> <?php echo form_input($pregunta_302_a_10); ?> </td>
		<td> <?php echo form_input($pregunta_302_g_10); ?> </td>
		<td> <?php echo form_input($pregunta_303_10); ?> </td>
		<td> <?php echo form_input($pregunta_304_10); ?> </td>
		<td> <?php echo form_input($pregunta_305_10); ?> </td>
		<td> <?php echo form_input($pregunta_305_10_especifique); ?> (espc.) </td>
		<td> <?php echo form_input($pregunta_306_10); ?> </td>
		<td> <?php echo form_input($pregunta_307_10); ?> </td>
		<td> <?php echo form_input($pregunta_307_a_10); ?> </td>
		<td> <?php echo form_input($pregunta_307_g_10); ?> </td>
		<td> <?php echo form_input($pregunta_308_10); ?> </td>
		<td> <?php echo form_input($pregunta_308_10_especifique); ?> (espc.) </td>
	</tr>
	<tr>
		<td> 11 </td>
		<td> <?php echo form_input($pregunta_301_11); ?> </td>
		<td> <?php echo form_input($pregunta_301_11_especifique); ?> (espc.) </td>
		<td> <?php echo form_input($pregunta_302_n_11); ?> </td>
		<td> <?php echo form_input($pregunta_302_a_11); ?> </td>
		<td> <?php echo form_input($pregunta_302_g_11); ?> </td>
		<td> <?php echo form_input($pregunta_303_11); ?> </td>
		<td> <?php echo form_input($pregunta_304_11); ?> </td>
		<td> <?php echo form_input($pregunta_305_11); ?> </td>
		<td> <?php echo form_input($pregunta_305_11_especifique); ?> (espc.) </td>
		<td> <?php echo form_input($pregunta_306_11); ?> </td>
		<td> <?php echo form_input($pregunta_307_11); ?> </td>
		<td> <?php echo form_input($pregunta_307_a_11); ?> </td>
		<td> <?php echo form_input($pregunta_307_g_11); ?> </td>
		<td> <?php echo form_input($pregunta_308_11); ?> </td>
		<td> <?php echo form_input($pregunta_308_11_especifique); ?> (espc.) </td>
	</tr>
	<tr>
		<td> 12 </td>
		<td> <?php echo form_input($pregunta_301_12); ?> </td>
		<td> <?php echo form_input($pregunta_301_12_especifique); ?> (espc.) </td>
		<td> <?php echo form_input($pregunta_302_n_12); ?> </td>
		<td> <?php echo form_input($pregunta_302_a_12); ?> </td>
		<td> <?php echo form_input($pregunta_302_g_12); ?> </td>
		<td> <?php echo form_input($pregunta_303_12); ?> </td>
		<td> <?php echo form_input($pregunta_304_12); ?> </td>
		<td> <?php echo form_input($pregunta_305_12); ?> </td>
		<td> <?php echo form_input($pregunta_305_12_especifique); ?> (espc.) </td>
		<td> <?php echo form_input($pregunta_306_12); ?> </td>
		<td> <?php echo form_input($pregunta_307_12); ?> </td>
		<td> <?php echo form_input($pregunta_307_a_12); ?> </td>
		<td> <?php echo form_input($pregunta_307_g_12); ?> </td>
		<td> <?php echo form_input($pregunta_308_12); ?> </td>
		<td> <?php echo form_input($pregunta_308_12_especifique); ?> (espc.) </td>
	</tr>
	<tr>
		<td colspan="18"> Observaciones </td>
	</tr>
	<tr>
		<td colspan="18"> <?php echo form_textarea($observaciones_300); ?> </td>
	</tr>
</table>
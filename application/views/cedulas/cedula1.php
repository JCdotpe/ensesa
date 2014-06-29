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
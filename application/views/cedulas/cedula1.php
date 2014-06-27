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


?>

<table class="table table-bordered">
	<tr>
		<td colspan="8"> 11. Direccion </td>
	</tr>
	<tr>
		<td> Tipo de Via </td>
		<td colspan="7"> <?php echo form_input($tipo_via); ?> </td>
	</tr>
	<tr>
		<td> Nombre de Via </td>
		<td> Nro de Puerta </td>
		<td> Interior </td>
		<td> Piso </td>
		<td> Manzana </td>
		<td> Lote </td>
		<td> Km </td>
		<td> Telefono </td>
	</tr>
	<tr>
		<td> <?php echo form_input($nombre_via); ?> </td>
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
		<td colspan="7"> <?php echo form_input($referencia); ?>	</td>
	</tr>
	<tr>
		<td> Nombre </td>
		<td colspan="7"> <?php echo form_input($referencia_nombre); ?> </td>
	</tr>
	<tr>
		<td colspan="7"> 12. Total de Hogares que ocupan la vivienda </td>
		<td> 13. Hogar Nro </td>
	</tr>
	<tr>
		<td> Cuanto hogares ocupan la vivienda? </td>
		<td colspan="6"> <?php echo form_input($cuantos_hogares); ?> </td>
		<td> <?php echo form_input($hogar_nro); ?> </td>
	</tr>

</table>
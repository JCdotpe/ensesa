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
		<th colspan="6"> Jefe de Comunidad Nativa </th>
		<th> Cuestionario N°</th>
		
	</tr>
	<tr>
		<td colspan="6"> Cuestionario Confidencial: Amparado por el decreto legislativo Nro 604 y por el decreto supremo 043-2001-PCM: Secreto Estadistico </td>
		<td> <?php echo form_input($cuestionario); ?> </td>
		
	</tr>
	<tr>
		<th colspan="2"> A. Ubicacion Geografica </th>
		<th>COD</th>
		<th colspan="4"> B. Ubicacion Censal </th>
	</tr>
	<tr>
		<td> 1. Departamento </td>
		<td> <?php echo form_input($departamento); ?> </td>
		<td> <?php echo form_input($codigo_departamento); ?> </td>
		<td rowspan="2"> 6. A.E.R.N </td>
		<td > Inicial </td>
		<td> <?php echo form_input($zona); ?> </td>
	</tr>
	<tr>
		<td> 2. Provincia </td>
		<td> <?php echo form_input($provincia); ?> </td>
		<td> <?php echo form_input($codigo_provincia); ?> </td>
		<td> Final </td>
		<td> <?php echo form_input($zona); ?> </td>
	</tr>
	<tr>
		<td> 3. Distrito </td>
		<td> <?php echo form_input($distrito); ?> </td>
		<td> <?php echo form_input($codigo_distrito); ?> </td>
	</tr>
	<tr>
		<td> 4. Centro Poblado </td>
		<td colspan="2"> <?php echo form_input($centro_poblado); ?> </td>
	</tr>
	<tr>
		<td> 5. Comunidad Nativa </td>
		<td colspan="2"> <?php echo form_input($comunidad_nativa); ?> </td>
	</tr>
	
</table>



<?php
$nombre = array(
'id' => 'nombre',
'name' => 'nombre',
'class' => 'form-control',
);

?>

<table class="table table-bordered">
	<tr>
		<th colspan="2"> C. Datos del Informante </th>
	</tr>
	<tr>
	<td> 7. Nombre y Apellidos del Jefe de la Comunidad </td>	
	<td> <?php echo form_input($nombre); ?></td>

	</tr>	
</table>



<?php

$fecha = array(
'id' => 'fecha',
'name' => 'fecha',
'class' => 'form-control',
);

?>

<table class="table table-bordered">
	<tr>
		<th colspan="2"> D. Entrevista y Supervision </th>
	</tr>
	<tr>
	<th rowspan="3"> VISITA </th>
	<th colspan="4"> Encuestador(a) </th>
	<th colspan="3"> Jefe de Equipo </th>	
	</tr>


	<tr>
	<td> Fecha </td>
	<td> Hora </td>
	<td> Proxima Visita </td>
	<td> Resultado de la Visita (*) </td>
	<td> Fecha </td>
	<td colspan="2"> Hora </td>
	<td> Resultado de la Visita (*) </td>
	</tr>	


    <tr>
    <th> PRIMERA </th>
    <td> De </td>
    <td> A </td>
    <td> De </td>
    <td> A </td>
    </tr>



    <tr>
    <td> <?php echo form_input($fecha);?> </td>
    </tr>


</table>
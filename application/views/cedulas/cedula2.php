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

$fecha_Encues1 = array(
'id' => 'fecha_Encues1',
'name' => 'fecha_Encues1',
'class' => 'form-control',
);


$hora_Encues11 = array(
'id' => 'hora_Encues11',
'name' => 'hora_Encues11',
'class' => 'form-control',
);


$hora_Encues12 = array(
'id' => 'hora_Encues12',
'name' => 'hora_Encues12',
'class' => 'form-control',
);


$prox_Visita_fech1 = array(
'id' => 'prox_Visita_fech1',
'name' => 'prox_Visita_fech1',
'class' => 'form-control',
);

$prox_Visita_hor1= array(
'id' => 'prox_Visita_hor1',
'name' => 'prox_Visita_hor1',
'class' => 'form-control',
);

$prox_Visita_fech2 = array(
'id' => 'prox_Visita_fech2',
'name' => 'prox_Visita_fech2',
'class' => 'form-control',
);

$prox_Visita_hor2 = array(
'id' => 'prox_Visita_hor2',
'name' => 'prox_Visita_hor2',
'class' => 'form-control',
);

$resul_Visita11 = array(
'id' => 'resul_Visita11',
'name' => 'resul_Visita11',
'class' => 'form-control',
);

$fecha_Equipo1=array(
'id' => 'fecha_Equipo1',
'name' => 'fecha_Equipo1',
'class' => 'form-control'
);


$fecha_Equipo2=array(
'id' => 'fecha_Equipo2',
'name' => 'fecha_Equipo2',
'class' => 'form-control'
);

$resul_Visita11 = array(
'id' => 'resul_Visita11',
'name' => 'resul_Visita11',
'class' => 'form-control',
);

$hora_Equipo11 = array(
'id' => 'hora_Equipo11',
'name' => 'hora_Equipo11',
'class' => 'form-control',
);

$hora_Equipo12 = array(
'id' => 'hora_Equipo12',
'name' => 'hora_Equipo12',
'class' => 'form-control',
);

$resul_Visita12 = array(
'id' => 'resul_Visita12',
'name' => 'resul_Visita12',
'class' => 'form-control',
);

$fecha_Encues2 = array(
'id' => 'fecha_Encues2',
'name' => 'fecha_Encues2',
'class' => 'form-control',
);

$hora_Encues21 = array(
'id' => 'hora_Encues21',
'name' => 'hora_Encues21',
'class' => 'form-control',
);


$hora_Encues22 = array(
'id' => 'hora_Encues22',
'name' => 'hora_Encues22',
'class' => 'form-control',
);

$resul_Visita21 = array(
'id' => 'resul_Visita21',
'name' => 'resul_Visita21',
'class' => 'form-control',
);


$resul_Visita22 = array(
'id' => 'resul_Visita22',
'name' => 'resul_Visita22',
'class' => 'form-control',
);
$hora_Equipo21 = array(
'id' => 'hora_Equipo21',
'name' => 'hora_Equipo21',
'class' => 'form-control',
);

$hora_Equipo22 = array(
'id' => 'hora_Equipo22',
'name' => 'hora_Equipo22',
'class' => 'form-control',
);

?>



<table class="table table-bordered">
	<tr>
		<th colspan="10"> D. Entrevista y Supervision </th>
	</tr>
	<tr>
	<th rowspan="3"> VISITA </th>
	<th colspan="6"><center> Encuestador(a) </center></th>
	<th colspan="4"><center> Jefe de Equipo </center></th>	
	</tr>


	<tr>
	<td rowspan="2" ><center> Fecha </center></td>
	<td colspan="2"><center> Hora </center></td>
	<td colspan="2"><center> Proxima Visita </center></td>
	<td rowspan="2" > Resultado de la Visita (*) </td>
	<td rowspan="2"><center> Fecha </center></td>
	<td colspan="2"><center> Hora </center></td>
	<td rowspan="2"> Resultado de la Visita (*) </td>
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
     <th> Primera </th>
     <td> <?php echo form_input($fecha_Encues1);?> </td>
     <td> <?php echo form_input($hora_Encues11);?> </td>
     <td> <?php echo form_input($hora_Encues12);?> </td>
     <td> <?php echo form_input($prox_Visita_fech1);?> </td>
     <td> <?php echo form_input($prox_Visita_hor1);?> </td>
     <td> <?php echo form_input($resul_Visita11);?> </td>
     <td> <?php echo form_input($fecha_Equipo1);?> </td>
     <td> <?php echo form_input($hora_Equipo11);?> </td>
     <td> <?php echo form_input($hora_Equipo12);?> </td>
     <td> <?php echo form_input($resul_Visita12);?> </td>
 	 </tr>
    
     <tr>
     <th> Segunda </th>
     <td> <?php echo form_input($fecha_Encues2);?> </td>
     <td> <?php echo form_input($hora_Encues21);?> </td>
     <td> <?php echo form_input($hora_Encues22);?> </td>
     <td> <?php echo form_input($prox_Visita_fech2);?> </td>
     <td> <?php echo form_input($prox_Visita_hor2);?> </td>
     <td> <?php echo form_input($resul_Visita21);?> </td>
     <td> <?php echo form_input($fecha_Equipo2);?> </td>
     <td> <?php echo form_input($hora_Equipo21);?> </td>
     <td> <?php echo form_input($hora_Equipo22);?> </td>
     <td> <?php echo form_input($resul_Visita22);?> </td>
     </tr>

</table>

<table class="table table-bordered">
	  <th> Resultado Final de  la Encuesta </th>	







</table>
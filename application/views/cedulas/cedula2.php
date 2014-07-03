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
		<th colspan="3"> A. Ubicacion Geografica </th>
		<th>COD</th>
		<th colspan="4"> B. Ubicacion Censal </th>
	</tr>
	<tr>
		<td> 1. Departamento </td>
		<td colspan="2"> <?php echo form_input($departamento); ?> </td>
		<td> <?php echo form_input($codigo_departamento); ?> </td>
		<td rowspan="2"> 6. A.E.R.N </td>
		<td > Inicial </td>
		<td> <?php echo form_input($zona); ?> </td>
	</tr>
	<tr>
		<td > 2. Provincia </td>
		<td colspan="2"> <?php echo form_input($provincia); ?> </td>
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

$fecha_pregunta_8 =array(
	'id' =>'fecha_pregunta_8',
	'name' => 'fecha_pregunta_8',
	'class' => 'form-control',
);

$codigo_resultado_especifique =array(
	'id' => '$codigo_resultado_especifique',
	'name' => '$codigo_resultado_especifique',
	'class' => 'form-control',
);

$codigo_resultado = array(
	'id' => '$codigo_resultado',
	'name' => '$codigo_resultado',
	'class' => 'form-control',
);

$resultado_pregunta_8 = array(
	'id' => '$resultado_pregunta_8',
	'name' => '$resultado_pregunta_8',
	'class' => 'form-control',
);


?>



<table class="table table-bordered">
	<tr>
		<th colspan="11"> D. Entrevista y Supervision </th>
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

	<tr>
		 <th colspan="4"> 8. Resultado Final de  la Encuesta </th>
		 <td colspan="7"> (*) Codigos de Resultados </td>	
	</tr>

		<tr>
		<td colspan="2"> Fecha </td>
		<td colspan="2"> <?php echo form_input($fecha_pregunta_8); ?> </td>
		<td rowspan="2"> <?php echo form_input($codigo_resultado); ?> </td>
		<td rowspan="2"> Especifique </td>
		<td colspan="5" rowspan="2"> <?php echo form_input($codigo_resultado_especifique); ?> </td>
	</tr>
	<tr>
		<td colspan="2"> Resultado </td>
		<td colspan="2"> <?php echo form_input($resultado_pregunta_8); ?> </td>
	</tr>

</table>




<?php
$dni_encuestador = array(
	'id' => '$dni_encuestador',
	'name' => '$dni_encuestador',
	'class' => 'form-control',
);

$nombre_encuestador = array(
	'id' => '$nombre_encuestador',
	'name' => '$nombre_encuestador',
	'class' => 'form-control',
);

$dni_jefe = array(
	'id' => '$dni_jefe',
	'name' => '$dni_jefe',
	'class' => 'form-control',
);

$nombre_jefe = array(
	'id' => '$nombre_jefe',
	'name' => '$nombre_jefe',
	'class' => 'form-control',
);

$dni_coordinador = array(
	'id' => '$dni_coordinador',
	'name' => '$dni_coordinador',
	'class' => 'form-control',
);

$nombre_coordinador =array(
	'id' => '$nombre_coordinador',
	'name' => 'nombre_coordinador',
	'class' => 'form-control',
);

$dni_supervisor =array(
	'id' => 'dni_supervisor',
	'name' => 'dni_supervisor',
	'class' => 'form-control',
);
$nombre_supervisor =array(
	'id' => 'nombre_supervisor',
	'name' => 'nombre_supervisor',
	'class' => 'form-control',
);


$total_viviendas =array(
	'id' =>'$total_viviendas',
	'name' => '$total_viviendas',
	'class' => 'form-control',
);


$total_hombres =array(
	'id' =>'$total_hombres',
	'name' => '$total_hombres',
	'class' => 'form-control',
);


$total_mujeres =array(
	'id' =>'$total_mujeres',
	'name' => '$total_mujeres',
	'class' => 'form-control',
);

$respuesta =array(
	'id' =>'$respuesta',
	'name' => '$respuesta',
	'class' => 'form-control',
);


$cuantos =array(
	'id' =>'$cuantos',
	'name' => '$cuantos',
	'class' => 'form-control',
);

$total_Familias =array(
	'id' => '$total_Familias',
	'name' => '$total_Familias',
	'class' => 'form-control',
);

$total_Familias_hombres= array(
	'id' => '$total_Familias_hombres',
	'name' => '$total_Familias_hombres',
	'class' => 'form-control',
);

$total_Familias_mujeres =array(
	'id' => '$total_Familias_mujeres',
	'name'=> '$total_Familias_mujeres',
	'class' => 'form-control',
);

$total_Comuneros =array(
	'id' => '$total_Comuneros',
	'name' => '$total_Comuneros',
	'class' => 'form-control',
);

$total_Comuneros_hombres=array(
	'id' =>'$total_Comuneros_hombres',
	'name' =>'$total_Comuneros_hombres',
	'class'=>'form-control',
);

$total_Comuneros_mujeres=array(
	'id' =>'$total_Comuneros_mujeres',
	'name' =>'$total_Comuneros_mujeres',
	'class'=>'form-control',
);

$pregunta_102_1=array(
	'id'=>'$pregunta_102_1',
	'name' =>'$pregunta_102_1',
	'class'=> 'form-control',
);

$pregunta_102_2=array(
	'id'=>'$pregunta_102_2',
	'name' =>'$pregunta_102_2',
	'class'=> 'form-control',
);

$pregunta_102_3=array(
	'id'=>'$pregunta_102_3',
	'name'=>'$pregunta_102_3',
	'class'=> 'form-control',
);

$cuantos_1=array(
	'id'=>'$cuantos_1',
	'name'=>'$cuantos_1',
	'class'=>'form-control',
);

$cuantos_2=array(
	'id'=>'$cuantos_2',
	'name'=> '$cuantos_2',
	'class'=>'form-control',
);

$cuantos_3=array(
	'id'=>'$cuantos_3',
	'name'=>'$cuantos_3',
	'class' => 'form-control',
);

$cuantos_4= array(
	'id' =>'$cuantos_4',
	'name' => '$cuantos_4',
	'class'=> 'form-control',
);

$cuantos_5=array(
	'id' =>'$cuantos_5',
	'name' =>'$cuantos_5',
	'class' => 'form-control',
);

$cuantos_6=array(
	'id' =>'$cuantos_6',
	'name'=>'$cuantos_6',
	'class'=>'form-control',
);
$cuantos_7=array(
	'id' =>'$cuantos_7',
	'name'=>'$cuantos_7',
	'class'=>'form-control',
);
$cuantos_8=array(
	'id' =>'$cuantos_8',
	'name' =>'$cuantos_8',
	'class'=>'form-control',

);

$rio=array(
	'id'=>'$rio',
	'name'=>'$rio',
	'class'=>'form-control',
);
$carretera=array(
	'id'=>'$carretera',
	'name'=>'$carretera',
	'class'=>'form-control',
);
$trocha=array(
	'id'=>'$trocha',
	'name'=>'$trocha',
	'class'=>'form-control',
);
$via_aerea=array(
	'id'=>'$via_aerea',
	'name'=>'$via_aerea',
	'class'=>'form-control',
);
$camino_Herradura=array(
	'id'=>'$camino_Herradura',
	'name'=>'$camino_Herradura',
	'class'=>'form-control',
);
$otro=array(
	'id'=>'$otro',
	'name'=>'$otro',
	'class'=>'form-control',
);

$especifi=array(
	'id'=>'$especifi',
	'name'=>'$especifi',
	'class'=>'form-control',
);

$peque=array(
	'id'=>'$peque',
	'name'=> '$peque',
	'class'=> 'form-control',
);
$bote=array(
	'id'=>'$bote',
	'name'=>'$bote',
	'class'=> 'form-control',
);

$des_chalu=array(
	'id'=>'$des_chalu',
	'name'=>'$des_chalu',
	'class'=>'form-control',
);

$h1=array(
	'id'=>'$h1',
	'name'=>'$h1',
	'class'=>'form-control',
);
$m1=array(
	'id'=>'$m1',
	'name'=>'$m1',
	'class'=>'form-control',
);
$h2=array(
	'id'=>'$h2',
	'name'=>'$h2',
	'class'=>'form-control',
);
$m2=array(
	'id'=>'$m2',
	'name'=>'$m2',
	'class'=>'form-control',
);
$lancha=array(
	'id'=>'$lancha',
	'name'=>'$lancha',
	'class'=>'form-control',

);

$h3=array(
	'id'=>'$h3',
	'name'=>'$h3',
	'class'=>'form-control',
);
$m3=array(
	'id'=>'$m3',
	'name'=>'$m3',
	'class'=>'form-control',
);
$canoa=array(
	'id'=>'$canoa',
	'name'=>'$canoa',
	'class'=>'form-control',

);

$h4=array(
	'id'=>'$h4',
	'name'=>'$h4',
	'class'=>'form-control',
);
$m4=array(
	'id'=>'$m4',
	'name'=>'$m4',
	'class'=>'form-control',
);
$avioneta=array(
	'id'=>'$avioneta',
	'name'=>'$avioneta',
	'class'=>'form-control',

);
$h5=array(
	'id'=>'$h5',
	'name'=>'$h5',
	'class'=>'form-control',
);
$m5=array(
	'id'=>'$m5',
	'name'=>'$m5',
	'class'=>'form-control',
);
$pie=array(
	'id'=>'$pie',
	'name'=>'$pie',
	'class'=>'form-control',

);
$h6=array(
	'id'=>'$h6',
	'name'=>'$h6',
	'class'=>'form-control',
);
$m6=array(
	'id'=>'$m6',
	'name'=>'$m6',
	'class'=>'form-control',
);
$bicicleta=array(
	'id'=>'$bicicleta',
	'name'=>'$bicicleta',
	'class'=>'form-control',
);

$h7=array(
	'id'=>'$h7',
	'name'=>'$h7',
	'class'=>'form-control',
);

$m7=array(
	'id'=>'$m7',
	'name'=>'$m7',
	'class'=>'form-control',
);

$motocicleta=array(
	'id'=>'$motocicleta',
	'name'=>'$motocicleta',
	'class'=>'form-control',
);

$h8=array(
	'id'=>'$h8',
	'name'=>'$h8',
	'class'=>'form-control',
);

$m8=array(
	'id'=>'$m8',
	'name'=>'$m8',
	'class'=>'form-control',
);

$cam_auto=array(
	'id'=>'$cam_auto',
	'name'=>'$cam_auto',
	'class'=>'form-control',
);

$h9=array(
	'id'=>'$h9',
	'name'=>'$h9',
	'class'=>'form-control',
);

$m9=array(
	'id'=>'$m9',
	'name'=>'$m9',
	'class'=>'form-control',
);

$acemila=array(
	'id'=>'$acemila',
	'name'=>'$acemila',
	'class'=>'form-control',
);
$h10=array(
	'id'=>'$h10',
	'name'=>'$h10',
	'class'=>'form-control',
);

$m10=array(
	'id'=>'$m10',
	'name'=>'$m10',
	'class'=>'form-control',
);
$h11=array(
	'id'=>'$h11',
	'name'=>'$h11',
	'class'=>'form-control',
);

$m11=array(
	'id'=>'$m11',
	'name'=>'$m11',
	'class'=>'form-control',
);
$h12=array(
	'id'=>'$h12',
	'name'=>'$h12',
	'class'=>'form-control',
);

$m12=array(
	'id'=>'$m12',
	'name'=>'$m12',
	'class'=>'form-control',
);
$otro2=array(
	'id'=>'$otro2',
	'name'=>'$otro2',
	'class'=>'form-control',
);
$especifique2=array(
	'id'=>'$especifique2',
	'name'=>'$especifique2',
	'class'=>'form-control',
);
$h13=array(
	'id'=>'$h13',
	'name'=>'$h13',
	'class'=>'form-control',
);

$m13=array(
	'id'=>'$m13',
	'name'=>'$m13',
	'class'=>'form-control',
);

$rpt106_1=array(
	'id'=>'$rpt106_1',
	'name'=>'$rpt106_1',
	'class'=>'form-control',
);
$rpt106_2=array(
	'id'=>'$rpt106_2',
	'name'=>'$rpt106_2',
	'class'=>'form-control',
);
$rpt106_3=array(
	'id'=>'$rpt106_3',
	'name'=>'$rpt106_3',
	'class'=>'form-control',
);
$rpt106_4=array(
	'id'=>'$rpt106_4',
	'name'=>'$rpt106_4',
	'class'=>'form-control',
);
$rpt106_5=array(
	'id'=>'$rpt106_5',
	'name'=>'$rpt106_5',
	'class'=>'form-control',
);

$rpt106_6=array(
	'id'=>'$rpt106_6',
	'name'=>'$rpt106_6',
	'class'=>'form-control',
);
$rpt106_7=array(
	'id'=>'$rpt106_7',
	'name'=>'$rpt106_7',
	'class'=>'form-control',
);
$rpt106_8=array(
	'id'=>'$rpt106_8',
	'name'=>'$rpt106_8',
	'class'=>'form-control',
);
$rpt106_9=array(
	'id'=>'$rpt106_9',
	'name'=>'$rpt106_9',
	'class'=>'form-control',
);
$rpt106_10=array(
	'id'=>'$rpt106_10',
	'name'=>'$rpt106_10',
	'class'=>'form-control',
);
$rpt106_11=array(
	'id'=>'$rpt106_11',
	'name'=>'$rpt106_11',
	'class'=>'form-control',
);
$rpt106_12=array(
	'id'=>'$rpt106_12',
	'name'=>'$rpt106_12',
	'class'=>'form-control',
);
$rpt106_13=array(
	'id'=>'$rpt106_13',
	'name'=>'$rpt106_13',
	'class'=>'form-control',
);
$rpt106_14=array(
	'id'=>'$rpt106_14',
	'name'=>'$rpt106_14',
	'class'=>'form-control',
);
$rpt106_15=array(
	'id'=>'$rpt106_15',
	'name'=>'$rpt106_15',
	'class'=>'form-control',
);
$rpt106_16=array(
	'id'=>'$rpt106_16',
	'name'=>'$rpt106_16',
	'class'=>'form-control',
);
$rpt106_17=array(
	'id'=>'$rpt106_17',
	'name'=>'$rpt106_17',
	'class'=>'form-control',
);
$rpt106_18=array(
	'id'=>'$rpt106_18',
	'name'=>'$rpt106_18',
	'class'=>'form-control',
);
$rpt106_19=array(
	'id'=>'$rpt106_19',
	'name'=>'$rpt106_19',
	'class'=>'form-control',
);
$rpt106_20=array(
	'id'=>'$rpt106_20',
	'name'=>'$rpt106_20',
	'class'=>'form-control',
);
$rpt106_21=array(
	'id'=>'$rpt106_21',
	'name'=>'$rpt106_21',
	'class'=>'form-control',
);
$rpt106_22=array(
	'id'=>'$rpt106_22',
	'name'=>'$rpt106_22',
	'class'=>'form-control',
);
$rpt106_23=array(
	'id'=>'$rpt106_23',
	'name'=>'$rpt106_23',
	'class'=>'form-control',
);
$rpt106_24=array(
	'id'=>'$rpt106_24',
	'name'=>'$rpt106_24',
	'class'=>'form-control',
);
$rpt106_25=array(
	'id'=>'$rpt106_25',
	'name'=>'$rpt106_25',
	'class'=>'form-control',
);
$rpt106_26=array(
	'id'=>'$rpt106_26',
	'name'=>'$rpt106_26',
	'class'=>'form-control',
);
$rpt106_27=array(
	'id'=>'$rpt106_27',
	'name'=>'$rpt106_27',
	'class'=>'form-control',
);
$rpt106_28=array(
	'id'=>'$rpt106_28',
	'name'=>'$rpt106_28',
	'class'=>'form-control',
);
$rpt106_29=array(
	'id'=>'$rpt106_29',
	'name'=>'$rpt106_29',
	'class'=>'form-control',
);
$rpt106_30=array(
	'id'=>'$rpt106_30',
	'name'=>'$rpt106_30',
	'class'=>'form-control',
);

//107
$rpt107_1=array(
	'id'=>'$rpt107_1',
	'name'=>'$rpt107_1',
	'class'=>'form-control',
);
$rpt107_2=array(
	'id'=>'$rpt107_2',
	'name'=>'$rpt107_2',
	'class'=>'form-control',
);
$rpt107_3=array(
	'id'=>'$rpt107_3',
	'name'=>'$rpt107_3',
	'class'=>'form-control',
);
$rpt107_4=array(
	'id'=>'$rpt107_4',
	'name'=>'$rpt107_4',
	'class'=>'form-control',
);
$rpt107_5=array(
	'id'=>'$rpt107_5',
	'name'=>'$rpt107_5',
	'class'=>'form-control',
);

$rpt107_6=array(
	'id'=>'$rpt107_6',
	'name'=>'$rpt107_6',
	'class'=>'form-control',
);

$rpt107_7=array(
	'id'=>'$rpt107_7',
	'name'=>'$rpt107_7',
	'class'=>'form-control',
);

$rpt107_8=array(
	'id'=>'$rpt107_8',
	'name'=>'$rpt107_8',
	'class'=>'form-control',
);

$rpt107_9=array(
	'id'=>'$rpt107_9',
	'name'=>'$rpt107_9',
	'class'=>'form-control',
);

$rpt107_10=array(
	'id'=>'$rpt107_10',
	'name'=>'$rpt107_10',
	'class'=>'form-control',
);

$rpt107_11=array(
	'id'=>'$rpt107_11',
	'name'=>'$rpt107_11',
	'class'=>'form-control',
);

$rpt107_12=array(
	'id'=>'$rpt107_12',
	'name'=>'$rpt107_12',
	'class'=>'form-control',
);

$rpt107_13=array(
	'id'=>'$rpt107_13',
	'name'=>'$rpt107_13',
	'class'=>'form-control',
);

$rpt107_14=array(
	'id'=>'$rpt107_14',
	'name'=>'$rpt107_14',
	'class'=>'form-control',
);

$rpt107_15=array(
	'id'=>'$rpt107_15',
	'name'=>'$rpt107_15',
	'class'=>'form-control',
);

$rpt107_16=array(
	'id'=>'$rpt107_16',
	'name'=>'$rpt107_16',
	'class'=>'form-control',
);

$rpt107_17=array(
	'id'=>'$rpt107_17',
	'name'=>'$rpt107_17',
	'class'=>'form-control',
);

$rpt107_18=array(
	'id'=>'$rpt107_18',
	'name'=>'$rpt107_18',
	'class'=>'form-control',
);

$rpt107_19=array(
	'id'=>'$rpt107_19',
	'name'=>'$rpt107_19',
	'class'=>'form-control',
);

$rpt107_20=array(
	'id'=>'$rpt107_20',
	'name'=>'$rpt107_20',
	'class'=>'form-control',
);

$rpt107_21=array(
	'id'=>'$rpt107_21',
	'name'=>'$rpt107_21',
	'class'=>'form-control',
);

$rpt107_22=array(
	'id'=>'$rpt107_22',
	'name'=>'$rpt107_22',
	'class'=>'form-control',
);

$rpt107_23=array(
	'id'=>'$rpt107_23',
	'name'=>'$rpt107_23',
	'class'=>'form-control',
);

$rpt107_24=array(
	'id'=>'$rpt107_24',
	'name'=>'$rpt107_24',
	'class'=>'form-control',
);
$rpt107_25=array(
	'id'=>'$rpt107_25',
	'name'=>'$rpt107_25',
	'class'=>'form-control',
);
$rpt107_26=array(
	'id'=>'$rpt107_26',
	'name'=>'$rpt107_26',
	'class'=>'form-control',
);
$rpt107_27=array(
	'id'=>'$rpt107_27',
	'name'=>'$rpt107_27',
	'class'=>'form-control',
);
$rpt107_28=array(
	'id'=>'$rpt107_28',
	'name'=>'$rpt107_28',
	'class'=>'form-control',
);
$rpt107_29=array(
	'id'=>'$rpt107_29',
	'name'=>'$rpt107_29',
	'class'=>'form-control',
);
$rpt107_30=array(
	'id'=>'$rpt107_30',
	'name'=>'$rpt107_30',
	'class'=>'form-control',
);
$rpt107_31=array(
	'id'=>'$rpt107_31',
	'name'=>'$rpt107_31',
	'class'=>'form-control',
);
$rpt107_32=array(
	'id'=>'$rpt107_32',
	'name'=>'$rpt107_32',
	'class'=>'form-control',
);
$rpt107_33=array(
	'id'=>'$rpt107_33',
	'name'=>'$rpt107_33',
	'class'=>'form-control',
);
$rpt107_34=array(
	'id'=>'$rpt107_34',
	'name'=>'$rpt107_34',
	'class'=>'form-control',
);
$rpt107_35=array(
	'id'=>'$rpt107_35',
	'name'=>'$rpt107_35',
	'class'=>'form-control',
);
$rpt107_36=array(
	'id'=>'$rpt107_36',
	'name'=>'$rpt107_36',
	'class'=>'form-control',
);
$rpt107_37=array(
	'id'=>'$rpt107_37',
	'name'=>'$rpt107_37',
	'class'=>'form-control',
);
$rpt107_38=array(
	'id'=>'$rpt107_38',
	'name'=>'$rpt107_38',
	'class'=>'form-control',
);
$rpt107_39=array(
	'id'=>'$rpt107_39',
	'name'=>'$rpt107_39',
	'class'=>'form-control',
);
$rpt107_40=array(
	'id'=>'$rpt107_40',
	'name'=>'$rpt107_40',
	'class'=>'form-control',
);
$rpt107_41=array(
	'id'=>'$rpt107_41',
	'name'=>'$rpt107_41',
	'class'=>'form-control',
);
$rpt107_42=array(
	'id'=>'$rpt107_42',
	'name'=>'$rpt107_42',
	'class'=>'form-control',
);
$rpt107_43=array(
	'id'=>'$rpt107_43',
	'name'=>'$rpt107_43',
	'class'=>'form-control',
);
$rpt107_44=array(
	'id'=>'$rpt107_44',
	'name'=>'$rpt107_44',
	'class'=>'form-control',
);
$rpt107_45=array(
	'id'=>'$rpt107_45',
	'name'=>'$rpt107_45',
	'class'=>'form-control',
);
$rpt107_46=array(
	'id'=>'$rpt107_46',
	'name'=>'$rpt107_46',
	'class'=>'form-control',
);
$rpt107_47=array(
	'id'=>'$rpt107_47',
	'name'=>'$rpt107_47',
	'class'=>'form-control',
);
$rpt107_48=array(
	'id'=>'$rpt107_48',
	'name'=>'$rpt107_48',
	'class'=>'form-control',
);
$rpt107_49=array(
	'id'=>'$rpt107_49',
	'name'=>'$rpt107_49',
	'class'=>'form-control',
);
$rpt107_50=array(
	'id'=>'$rpt107_50',
	'name'=>'$rpt107_50',
	'class'=>'form-control',
);
$rpt107_51=array(
	'id'=>'$rpt107_51',
	'name'=>'$rpt107_51',
	'class'=>'form-control',
);
$rpt107_52=array(
	'id'=>'$rpt107_52',
	'name'=>'$rpt107_52',
	'class'=>'form-control',
);
$rpt107_53=array(
	'id'=>'$rpt107_53',
	'name'=>'$rpt107_53',
	'class'=>'form-control',
);
$rpt107_54=array(
	'id'=>'$rpt107_54',
	'name'=>'$rpt107_54',
	'class'=>'form-control',
);
$rpt107_55=array(
	'id'=>'$rpt107_55',
	'name'=>'$rpt107_55',
	'class'=>'form-control',
);
$rpt107_56=array(
	'id'=>'$rpt107_56',
	'name'=>'$rpt107_56',
	'class'=>'form-control',
);
$rpt107_57=array(
	'id'=>'$rpt107_57',
	'name'=>'$rpt107_57',
	'class'=>'form-control',
);
$rpt107_58=array(
	'id'=>'$rpt107_58',
	'name'=>'$rpt107_58',
	'class'=>'form-control',
);
$rpt107_59=array(
	'id'=>'$rpt107_59',
	'name'=>'$rpt107_59',
	'class'=>'form-control',
);
$rpt107_60=array(
	'id'=>'$rpt107_60',
	'name'=>'$rpt107_60',
	'class'=>'form-control',
);
$rpt107_61=array(
	'id'=>'$rpt107_61',
	'name'=>'$rpt107_61',
	'class'=>'form-control',
);

$rpt107_62=array(
	'id'=>'$rpt107_62',
	'name'=>'$rpt107_62',
	'class'=>'form-control',
);

$rpt107_63=array(
	'id'=>'$rpt107_63',
	'name'=>'$rpt107_63',
	'class'=>'form-control',
);
$rpt107_64=array(
	'id'=>'$rpt107_64',
	'name'=>'$rpt107_64',
	'class'=>'form-control',
);
$rpt107_65=array(
	'id'=>'$rpt107_65',
	'name'=>'$rpt107_65',
	'class'=>'form-control',
);
$rpt107_66=array(
	'id'=>'$rpt107_66',
	'name'=>'$rpt107_66',
	'class'=>'form-control',
);
$rpt107_67=array(
	'id'=>'$rpt107_67',
	'name'=>'$rpt107_67',
	'class'=>'form-control',
);
$rpt107_68=array(
	'id'=>'$rpt107_68',
	'name'=>'$rpt107_68',
	'class'=>'form-control',
);

$rpt107_69=array(
	'id'=>'$rpt107_69',
	'name'=>'$rpt107_69',
	'class'=>'form-control',
);
$rpt107_70=array(
	'id'=>'$rpt107_70',
	'name'=>'$rpt107_70',
	'class'=>'form-control',
);
$rpt107_71=array(
	'id'=>'$rpt107_71',
	'name'=>'$rpt107_71',
	'class'=>'form-control',
);
$rpt107_72=array(
	'id'=>'$rpt107_72',
	'name'=>'$rpt107_72',
	'class'=>'form-control',
);
$rpt107_73=array(
	'id'=>'$rpt107_73',
	'name'=>'$rpt107_73',
	'class'=>'form-control',
);
$rpt107_74=array(
	'id'=>'$rpt107_74',
	'name'=>'$rpt107_74',
	'class'=>'form-control',
);
$rpt107_75=array(
	'id'=>'$rpt107_75',
	'name'=>'$rpt107_75',
	'class'=>'form-control',
);
$rpt107_76=array(
	'id'=>'$rpt107_76',
	'name'=>'$rpt107_76',
	'class'=>'form-control',
);
$rpt107_77=array(
	'id'=>'$rpt107_77',
	'name'=>'$rpt107_77',
	'class'=>'form-control',
);
$rpt107_78=array(
	'id'=>'$rpt107_78',
	'name'=>'$rpt107_78',
	'class'=>'form-control',
);
$rpt107_79=array(
	'id'=>'$rpt107_79',
	'name'=>'$rpt107_79',
	'class'=>'form-control',
);
$rpt107_80=array(
	'id'=>'$rpt107_80',
	'name'=>'$rpt107_80',
	'class'=>'form-control',
);
$rpt107_81=array(
	'id'=>'$rpt107_81',
	'name'=>'$rpt107_81',
	'class'=>'form-control',
);
$rpt107_82=array(
	'id'=>'$rpt107_82',
	'name'=>'$rpt107_82',
	'class'=>'form-control',
);
$rpt107_83=array(
	'id'=>'$rpt107_83',
	'name'=>'$rpt107_83',
	'class'=>'form-control',
);
$rpt107_84=array(
	'id'=>'$rpt107_84',
	'name'=>'$rpt107_84',
	'class'=>'form-control',
);
$rpt107_85=array(
	'id'=>'$rpt107_85',
	'name'=>'$rpt107_85',
	'class'=>'form-control',
);
$rpt107_86=array(
	'id'=>'$rpt107_86',
	'name'=>'$rpt107_86',
	'class'=>'form-control',
);
$rpt107_87=array(
	'id'=>'$rpt107_87',
	'name'=>'$rpt107_87',
	'class'=>'form-control',
);
$rpt107_88=array(
	'id'=>'$rpt107_88',
	'name'=>'$rpt107_88',
	'class'=>'form-control',
);
$rpt107_89=array(
	'id'=>'$rpt107_89',
	'name'=>'$rpt107_89',
	'class'=>'form-control',
);
$rpt107_90=array(
	'id'=>'$rpt107_90',
	'name'=>'$rpt107_90',
	'class'=>'form-control',
);
$rpt107_91=array(
	'id'=>'$rpt107_91',
	'name'=>'$rpt107_91',
	'class'=>'form-control',
);
$rpt107_92=array(
	'id'=>'$rpt107_92',
	'name'=>'$rpt107_92',
	'class'=>'form-control',
);
$especifique3=array(
	'id'=>'$especifique3',
	'name'=>'$especifique',
	'class'=>'form-control',
);
$rpt108_1=array(
	'id'=>'$rpt108_1',
	'name'=>'$rpt108_1',
	'class'=> 'form-control',
);

$rpt108_2=array(
	'id'=>'$rpt108_2',
	'name'=>'$rpt108_2',
	'class'=> 'form-control',
);


$rpt108_3=array(
	'id'=>'$rpt108_3',
	'name'=>'$rpt108_3',
	'class'=> 'form-control',
);


$rpt108_4=array(
	'id'=>'$rpt108_4',
	'name'=>'$rpt108_4',
	'class'=> 'form-control',
);


$rpt108_5=array(
	'id'=>'$rpt108_5',
	'name'=>'$rpt108_5',
	'class'=> 'form-control',
);


$rpt108_6=array(
	'id'=>'$rpt108_6',
	'name'=>'$rpt108_6',
	'class'=> 'form-control',
);


$rpt108_7=array(
	'id'=>'$rpt108_7',
	'name'=>'$rpt108_7',
	'class'=> 'form-control',
);


$rpt108_8=array(
	'id'=>'$rpt108_8',
	'name'=>'$rpt108_8',
	'class'=> 'form-control',
);


$rpt108_9=array(
	'id'=>'$rpt108_9',
	'name'=>'$rpt108_9',
	'class'=> 'form-control',
);


$rpt108_10=array(
	'id'=>'$rpt108_10',
	'name'=>'$rpt108_10',
	'class'=> 'form-control',
);


$rpt108_11=array(
	'id'=>'$rpt108_11',
	'name'=>'$rpt108_11',
	'class'=> 'form-control',
);


$rpt108_12=array(
	'id'=>'$rpt108_12',
	'name'=>'$rpt108_12',
	'class'=> 'form-control',
);


$rpt108_13=array(
	'id'=>'$rpt108_13',
	'name'=>'$rpt108_13',
	'class'=> 'form-control',
);


$rpt108_14=array(
	'id'=>'$rpt108_14',
	'name'=>'$rpt108_14',
	'class'=> 'form-control',
);


$rpt108_15=array(
	'id'=>'$rpt108_15',
	'name'=>'$rpt108_15',
	'class'=> 'form-control',
);

$rpt108_16=array(
	'id'=>'$rpt108_16',
	'name'=>'$rpt108_16',
	'class'=> 'form-control',
);


$rpt108_17=array(
	'id'=>'$rpt108_17',
	'name'=>'$rpt108_17',
	'class'=> 'form-control',
);


$rpt108_18=array(
	'id'=>'$rpt108_18',
	'name'=>'$rpt108_18',
	'class'=> 'form-control',
);


$rpt108_19=array(
	'id'=>'$rpt108_19',
	'name'=>'$rpt108_19',
	'class'=> 'form-control',
);


$rpt108_20=array(
	'id'=>'$rpt108_20',
	'name'=>'$rpt108_20',
	'class'=> 'form-control',
);


$rpt108_21=array(
	'id'=>'$rpt108_21',
	'name'=>'$rpt108_21',
	'class'=> 'form-control',
);

$otro3=array(
	'id'=>'$otro3',
	'name'=>'$otro3',
	'class'=>'form-control',
);

$otro4=array(
	'id'=>'$otro4',
	'name'=>'$otro4',
	'class'=>'form-control',
);
$espefique4=array(
	'id'=>'$especifique4',
	'name'=>'$especifique4',
	'class'=>'form-control',
);


?>






<table class="table table-bordered">
	<tr>
 		<th colspan="11"> E. Funcionarios de la Encuesta </th>
	</tr>

	<tr>
		<th colspan="2"><center> Cargo </center></th>
		<th colspan="3"><center> DNI </center></th>
		<th colspan="5"><center> Nombres y Apellidos </center></th>
	</tr>

  	<tr>
  		<td colspan="2"> Encuestador(a): </td>
  		<td colspan="3"> <?php echo form_input($dni_encuestador);?> </td>
  		<td colspan="3"> <?php echo form_input($nombre_jefe);?> </td>
  	</tr>
  	
  	<tr>
  		<td colspan="2"> Jefe(a) de Equipo </td>
  		<td colspan="3"> <?php echo form_input($dni_jefe);?> </td>
  		<td colspan="3"> <?php echo form_input($nombre_jefe);?> </td>
  	</tr>	

  	<tr>
  		<td colspan="2"> Coordinador(a) Departamental </td>
  		<td colspan="3"> <?php echo form_input($dni_coordinador); ?> </td>
  		<td colspan="3"> <?php echo form_input($nombre_coordinador); ?> </td>
  	</tr>

  	<tr>
  		<td colspan="2"> Supervisor(a) Nacional </td>
  		<td colspan="3"><?php echo form_input($dni_supervisor);?> </td>
  		<td colspan="3"><?php echo form_input($nombre_supervisor);?> </td>
  	</tr>

  	<tr>
  		<td colspan="11"> 100. Caracteristicas Generales de la Comunidad: Servicios Basicos e Infraestructura </td>
  	  	</tr>

  	<tr>
  		<td colspan="4"> 101. ¿Cual es el numero total de familias, viviendas y comuneros </td>
  		<td colspan="5"> 103. ¿Dentro de su comunidad existen otros anexo o caserios </td>
  	</tr>
  	


  	<tr>
  		<td> Detalle </td>
  		<td> Total </td>
  		<td> Hombres </td>
  		<td> Mujeres </td>
  		<td> Respuesta </td>
  		<td> ¿Cuantos? </td>
  	</tr>

  	<tr>
  		<td> 1. Numero de Viviendas </td>
  		<td> <?php echo form_input($total_viviendas);?> </td>
  		<td> <?php echo form_input($total_hombres);?> </td>
  		<td> <?php echo form_input($total_mujeres);?> </td>
  		<td><?php echo form_input($respuesta);?> </td>
  		<td> <?php echo form_input($cuantos);?> </td>
  	</tr>

  	<tr>
  		<td> 2. Numero de familias </td>
  		<td> <?php echo form_input($total_Familias);?> </td>
  		<td> <?php echo form_input($total_Familias_hombres);?> </td>
  		<td> <?php echo form_input($total_Familias_mujeres);?> </td>
  		<td colspan="2"> 103A. ¿Cuales son? (Anote el nombre en las lineas respectivas) </td>
 	</tr>

 	
 	<tr>
 		<td> 3. Numero de comuneros </td>
 		<td><?php echo form_input($total_Comuneros); ?></td>
 		<td><?php echo form_input($total_Comuneros_hombres); ?></td>
 		<td><?php echo form_input($total_Comuneros_mujeres); ?></td>
 		<td> 1. </td>
 		<td> <?php echo form_input($cuantos_1); ?> </td>
 	</tr>

 	<tr>
 		<td colspan="4"> 102. ¿Que lenguas se hablan con más frecuencia en la comunidad </td>
 		<td> 2. </td>
 		<td> <?php echo form_input($cuantos_2); ?> </td>
 	</tr>

 	<tr>

 	<tr>
 		<td> 1. </td>
 		<td> <?php echo form_input($pregunta_102_1);?> </td>
 		<td rowspan="4"> </td>
 		<td rowspan="4"></td>
 		<td> 3. </td>
 		<td> <?php echo form_input($cuantos_3);?> </td>
 	</tr>

 	<tr>
 		<td> 2. </td>
 		<td> <?php echo form_input($pregunta_102_2);?> </td>
 		<td> 4. </td>
 		<td> <?php echo form_input($cuantos_4);?> </td>
   	</tr>

  	<tr>
  		<td> 3. </td>
  		<td> <?php echo form_input($pregunta_102_3); ?> </td>
  		<td> 5. </td>
  		<td> <?php echo form_input($cuantos_5);?> </td>
  	</tr>

  	<tr>
  		<td colspan="2"> </td>
  		<td> 6. </td>
  		<td> <?php echo form_input($cuantos_6);?> </td>
  	</tr>

  	<tr>
  		<td colspan="4"> </td>
  		<td> 7. </td>
  		<td> <?php echo form_input($cuantos_7);?> </td>
  	</tr>

  	<tr>
  		<td colspan="4"> </td>
  		<td> 8. </td>
  		<td> <?php echo form_input($cuantos_8);?> </td>
  	</tr>
  	<tr>
  		<td colspan="4"> 104.¿Cuales son la vias de comunicacion que existen para llegar desde la capital distrital a la comunidad ? <br> (Circule uno o mas codigos) </br></td>
  		<td colspan="5"> 105.¿Cual(es) es el medio de transporte más utilizado y cuánto tiempo demora para llegar desde la capital distrital a la comunidad?  </td>
   	</tr>
  <tr>
  	<td> Rio? </td>
  	<td><?php echo form_input($rio);?></td>
  	<td> Trocha? </td>
  	<td> <?php echo form_input($trocha);?> </td>
  	<td> (Circule uno o más códigos) </td>
  	<td colspan="3"> 105.A Tiempo de demora </td>
  </tr>

  <tr>
  	<td> Carretera? </td>
  	<td><?php echo form_input($carretera);?></td>
  	<td> Vía aerea? </td>
  	<td> <?php echo form_input($via_aerea);?> </td>
  	<td> Peque Peque? </td>
  	<td> <?php echo form_input($peque);?> </td>
  	
  	<td> Horas </td>
  	<td coslpan="3"> Minutos </td>
  </tr>
  <tr>  
  	<td> Otro </td>
  	<td> <?php echo form_input($otro);?> </td>
  	<td colspan="2"> <?php echo form_input($especifi);?> (especifique) </td>
  	<td> Bote? </td>
  	<td> <?php echo form_input($bote);?> </td>
  	<td> <?php echo form_input($h1);?> </td>
  	<td> <?php echo form_input($m1); ?> </td>
 </tr>
 	<td colspan="4 "rowspan="12"></td>
 	<td> Deslizador / chalupa </td>
  	<td> <?php echo form_input($des_chalu);?> </td>
  	<td> <?php echo form_input($h2);?> </td>
 	<td> <?php echo form_input($m2);?> </td>
 <tr>
 	
 	<td> Lancha </td>
 	<td> <?php echo form_input($lancha); ?></td>
 	<td> <?php echo form_input($h3);?> </td>
  	<td> <?php echo form_input($m3); ?> </td>

 </tr>
 <tr>
 	<td> Canoa</td>
 	<td> <?php echo form_input($canoa);?></td>
 	<td> <?php echo form_input($h4);?> </td>
  	<td> <?php echo form_input($m4); ?> </td>
 </tr>

<tr>
 	<td> Avioneta </td>
 	<td> <?php echo form_input($avioneta);?></td>
 	<td> <?php echo form_input($h5);?> </td>
  	<td> <?php echo form_input($m5); ?> </td>
 </tr>

 <tr>
 	<td> A pie </td>
 	<td> <?php echo form_input($pie);?></td>
 	<td> <?php echo form_input($h6);?> </td>
  	<td> <?php echo form_input($m6); ?> </td>
 </tr>

  <tr>
 	<td> Bicicleta </td>
 	<td> <?php echo form_input($bicicleta);?></td>
 	 	<td> <?php echo form_input($h7);?> </td>
  	<td> <?php echo form_input($m7); ?> </td>
 </tr>
  <tr>
 	<td> Motocicleta </td>
 	<td> <?php echo form_input($motocicleta);?></td>
 	<td> <?php echo form_input($h8);?> </td>
  	<td> <?php echo form_input($m8); ?> </td>
 </tr>

  <tr>
 	<td> Camioneta rural / automóvil </td>
 	<td> <?php echo form_input($cam_auto);?></td>
 	<td> <?php echo form_input($h9);?> </td>
  	<td> <?php echo form_input($m9); ?> </td>
 </tr>

   <tr>
 	<td> Acémila </td>
 	<td> <?php echo form_input($acemila);?></td>
 	<td> <?php echo form_input($h10);?> </td>
  	<td> <?php echo form_input($m10); ?> </td>
 </tr>
  <tr>
 	<td> Otro </td>
 	<td> <?php echo form_input($otro2);?> </td>
 	<td> <?php echo form_input($h11);?> </td>
 	<td> <?php echo form_input($m11);?> </td>

 </tr>
 <tr>
 	<td colspan="2"> <?php echo form_input($especifique2);?> <br> Especifique </br> </td> 
 	<td> <?php echo form_input($h12);?></td>
 	<td> <?php echo form_input($m12);?></td>
 </tr>
 <tr>
 	<td colspan="2"> Total  </td>
 	<td> <?php echo form_input($h13);?></td>
 	<td> <?php echo form_input($m13);?></td>
 </tr>
 <tr>
 	<td colspan="8"> 106. La comunidad cuenta con los siguientes servicios: </td>
 </tr>
 <tr>
 	<td colspan="2"><center> Detalle </center></td>
 	<td><center> Si (1) / No (2) </center></td>
 	<td ><center> 106A. ¿Cuantos dias a la semana dispone del servicio? </center></td>
 	<td><center> 106B. ¿Cuantas horas al dia dispone del servicio? </center></td>
 	<td colspan="2"><center> 106C. ¿El servicio proviene de: Red pública?(1), Generador Eléctrico?(2),Otro(3), Especifique </center></td>
 	<td><center> 106D. Anote el nombre de la empresa de celular/ internet / emisora de radio </center></td>
 </tr>
 <tr>
 	<td colspan="2">  1.¿Agua potable? </td>
 	<td> <?php echo form_input($rpt106_1);?> </td>
 	<td> <?php echo form_input($rpt106_2);?> </td>
 	<td> <?php echo form_input($rpt106_3);?> </td>
 	<td colspan="2"> <?php echo form_input($rpt106_4);?> </td>
 	<td> <?php echo form_input($rpt106_5);?> </td>
 </tr>

 <tr>
 	<td colspan="2">  2.¿Desagüe? </td>
 	<td> <?php echo form_input($rpt106_6);?> </td>
 	<td> <?php echo form_input($rpt106_7);?> </td>
 	<td> <?php echo form_input($rpt106_8);?> </td>
 	<td colspan="2"> <?php echo form_input($rpt106_9);?> </td>
 	<td> <?php echo form_input($rpt106_10);?> </td>
 </tr>
 <tr>
 	<td colspan="2">  3.¿Servicio público de electricidad? </td>
 	<td> <?php echo form_input($rpt106_11);?> </td>
 	<td> <?php echo form_input($rpt106_12);?> </td>
 	<td> <?php echo form_input($rpt106_13);?> </td>
 	<td colspan="2"> <?php echo form_input($rpt106_14);?> </td>
 	<td> <?php echo form_input($rpt106_15);?> </td>
 </tr>

 <tr>
 	<td colspan="2">  3.¿Señal telefónica celular? </td>
 	<td> <?php echo form_input($rpt106_16);?> </td>
 	<td> <?php echo form_input($rpt106_17);?> </td>
 	<td> <?php echo form_input($rpt106_18);?> </td>
 	<td colspan="2"> <?php echo form_input($rpt106_19);?> </td>
 	<td> <?php echo form_input($rpt106_20);?> </td>
 </tr>

  <tr>
 	<td colspan="2">  4.¿Internet? </td>
 	<td> <?php echo form_input($rpt106_21);?> </td>
 	<td> <?php echo form_input($rpt106_22);?> </td>
 	<td> <?php echo form_input($rpt106_23);?> </td>
 	<td colspan="2"> <?php echo form_input($rpt106_24);?> </td>
 	<td> <?php echo form_input($rpt106_25);?> </td>
 </tr>
  <tr>
 	<td colspan="2">  5.¿Señal de emisora de radio? </td>
 	<td> <?php echo form_input($rpt106_26);?> </td>
 	<td> <?php echo form_input($rpt106_27);?> </td>
 	<td> <?php echo form_input($rpt106_28);?> </td>
 	<td colspan="2"> <?php echo form_input($rpt106_29);?> </td>
 	<td> <?php echo form_input($rpt106_30);?> </td>
 </tr>
 <tr>
 	<td colspan="8"> 107. La comunidad cuenta con:</td>
 </tr>
 <tr>
 	<td colspan="3"><center> Detalle </center></td>
 	<td><center> Si (1) / No (2) </center></td>
 	<td ><center> 107A. Cantidad </center></td>
 	<td><center> 107B. ¿Como lo obtuvieron? Comprado(1), Donado(2), Otro(Especifique)</center></td>
 	<td colspan="2"><center> 107C. ¿Cuantos funcionan? </center></td>
 </tr>
 <tr>
 	<td colspan="8"> La propiedad de los siguientes bienes: </td>
 </tr>
 <tr>
 	<td colspan="3">  1.¿Radiofonia / radio transmisor? </td>
 	<td> <?php echo form_input($rpt107_1);?> </td>
 	<td> <?php echo form_input($rpt107_2);?> </td>
 	<td> <?php echo form_input($rpt107_3);?> </td>
 	<td colspan="2"> <?php echo form_input($rpt107_4);?> </td>
 	
 </tr>

 <tr>
 	<td colspan="3">  2.¿Telefono satelital? </td>
 	<td> <?php echo form_input($rpt107_5);?> </td>
 	<td> <?php echo form_input($rpt107_6);?> </td>
 	<td> <?php echo form_input($rpt107_7);?> </td>
 	<td colspan="2"> <?php echo form_input($rpt107_8);?> </td>
 </tr>
 <tr>
 	<td colspan="3">  3.¿Telefono público? </td>
 	<td> <?php echo form_input($rpt107_9);?> </td>
 	<td> <?php echo form_input($rpt107_10);?> </td>
 	<td> <?php echo form_input($rpt107_11);?> </td>
 	<td colspan="2"> <?php echo form_input($rpt107_12);?> </td>
  </tr>

 <tr>
 	<td colspan="3">  4.¿Antena parabólica? </td>
 	<td> <?php echo form_input($rpt107_13);?> </td>
 	<td> <?php echo form_input($rpt107_14);?> </td>
 	<td> <?php echo form_input($rpt107_15);?> </td>
 	<td colspan="2"> <?php echo form_input($rpt107_16);?> </td>
  </tr>

  <tr>
 	<td colspan="3">  5.¿Generador eléctrico? </td>
 	<td> <?php echo form_input($rpt107_17);?> </td>
 	<td> <?php echo form_input($rpt107_18);?> </td>
 	<td> <?php echo form_input($rpt107_19);?> </td>
 	<td colspan="2"> <?php echo form_input($rpt106_20);?> </td>
  </tr>
  <tr>
 	<td colspan="3">  6.¿Panel solar? </td>
 	<td> <?php echo form_input($rpt107_21);?> </td>
 	<td> <?php echo form_input($rpt107_22);?> </td>
 	<td> <?php echo form_input($rpt107_23);?> </td>
 	<td colspan="2"> <?php echo form_input($rpt106_24);?> </td>
  </tr>
  <tr>
 	<td colspan="3">  7.¿Televisor? </td>
 	<td> <?php echo form_input($rpt107_25);?> </td>
 	<td> <?php echo form_input($rpt107_26);?> </td>
 	<td> <?php echo form_input($rpt107_27);?> </td>
 	<td colspan="2"> <?php echo form_input($rpt107_28);?> </td>
  </tr>
    <tr>
 	<td colspan="3">  8.¿Computadora? </td>
 	<td> <?php echo form_input($rpt107_29);?> </td>
 	<td> <?php echo form_input($rpt107_30);?> </td>
 	<td> <?php echo form_input($rpt107_31);?> </td>
 	<td colspan="2"> <?php echo form_input($rpt107_32);?> </td>
  </tr>
    <tr>
 	<td colspan="3">  9.¿DVD - Blue Ray? </td>
 	<td> <?php echo form_input($rpt107_33);?> </td>
 	<td> <?php echo form_input($rpt107_34);?> </td>
 	<td> <?php echo form_input($rpt107_35);?> </td>
 	<td colspan="2"> <?php echo form_input($rpt107_36);?> </td>
  </tr>
    <tr>
 	<td colspan="3">  10.¿Equipo de Sonido? </td>
 	<td> <?php echo form_input($rpt107_37);?> </td>
 	<td> <?php echo form_input($rpt107_38);?> </td>
 	<td> <?php echo form_input($rpt107_39);?> </td>
 	<td colspan="2"> <?php echo form_input($rpt107_40);?> </td>
  </tr>
  </tr>
    <tr>
 	<td colspan="3">  11.¿Aserradero? </td>
 	<td> <?php echo form_input($rpt107_41);?> </td>
 	<td> <?php echo form_input($rpt107_42);?> </td>
 	<td> <?php echo form_input($rpt107_43);?> </td>
 	<td colspan="2"> <?php echo form_input($rpt107_44);?> </td>
  </tr>
  </tr>
    <tr>
 	<td colspan="3">  12.¿Motosierra? </td>
 	<td> <?php echo form_input($rpt107_45);?> </td>
 	<td> <?php echo form_input($rpt107_46);?> </td>
 	<td> <?php echo form_input($rpt107_47);?> </td>
 	<td colspan="2"> <?php echo form_input($rpt107_48);?> </td>
  </tr>
  </tr>
    <tr>
 	<td colspan="3">  13.¿Peque peque? </td>
 	<td> <?php echo form_input($rpt107_49);?> </td>
 	<td> <?php echo form_input($rpt107_50);?> </td>
 	<td> <?php echo form_input($rpt107_51);?> </td>
 	<td colspan="2"> <?php echo form_input($rpt107_52);?> </td>
  </tr>
  </tr>
    <tr>
 	<td colspan="3">  14.¿Lancha? </td>
 	<td> <?php echo form_input($rpt107_53);?> </td>
 	<td> <?php echo form_input($rpt107_54);?> </td>
 	<td> <?php echo form_input($rpt107_55);?> </td>
 	<td colspan="2"> <?php echo form_input($rpt107_56);?> </td>
  </tr>
  </tr>
    <tr>
 	<td colspan="3">  15.¿Canoa? </td>
 	<td> <?php echo form_input($rpt107_57);?> </td>
 	<td> <?php echo form_input($rpt107_58);?> </td>
 	<td> <?php echo form_input($rpt107_59);?> </td>
 	<td colspan="2"> <?php echo form_input($rpt107_60);?> </td>
  </tr>
  </tr>
    <tr>
 	<td colspan="3">  16.¿Deslizador? </td>
 	<td> <?php echo form_input($rpt107_61);?> </td>
 	<td> <?php echo form_input($rpt107_62);?> </td>
 	<td> <?php echo form_input($rpt107_63);?> </td>
 	<td colspan="2"> <?php echo form_input($rpt107_64);?> </td>
  </tr>
  </tr>
    <tr>
 	<td colspan="3">  17.¿Camión / camioneta? </td>
 	<td> <?php echo form_input($rpt107_65);?> </td>
 	<td> <?php echo form_input($rpt107_66);?> </td>
 	<td> <?php echo form_input($rpt107_67);?> </td>
 	<td colspan="2"> <?php echo form_input($rpt107_68);?> </td>
  </tr>
    <tr>
 	<td colspan="3">  18.¿Tractor? </td>
 	<td> <?php echo form_input($rpt107_69);?> </td>
 	<td> <?php echo form_input($rpt107_70);?> </td>
 	<td> <?php echo form_input($rpt107_71);?> </td>
 	<td colspan="2"> <?php echo form_input($rpt107_72);?> </td>
 <tr>
 	<td colspan="3">  19.¿Red de pescar? </td>
 	<td> <?php echo form_input($rpt107_73);?> </td>
 	<td> <?php echo form_input($rpt107_74);?> </td>
 	<td> <?php echo form_input($rpt107_75);?> </td>
 	<td colspan="2"> <?php echo form_input($rpt107_76);?> </td>

  </tr>
    <tr>
 	<td colspan="3">  20.¿Apiladora de arroz? </td>
 	<td> <?php echo form_input($rpt107_77);?> </td>
 	<td> <?php echo form_input($rpt107_78);?> </td>
 	<td> <?php echo form_input($rpt107_79);?> </td>
 	<td colspan="2"> <?php echo form_input($rpt107_80);?> </td>
  </tr>
    <tr>
 	<td colspan="3">  21.¿Caja de fermentación? </td>
 	<td> <?php echo form_input($rpt107_81);?> </td>
 	<td> <?php echo form_input($rpt107_82);?> </td>
 	<td> <?php echo form_input($rpt107_83);?> </td>
 	<td colspan="2"> <?php echo form_input($rpt107_84);?> </td>
  </tr>

  <tr>
 	<td colspan="3">  22.¿Redes eléctricas? </td>
 	<td> <?php echo form_input($rpt107_85);?> </td>
 	<td> <?php echo form_input($rpt107_86);?> </td>
 	<td> <?php echo form_input($rpt107_87);?> </td>
 	<td colspan="2"> <?php echo form_input($rpt107_88);?> </td>
  </tr>

   <tr>
 	<td colspan="3">  23.¿Otro? <br><?php echo form_input($otro3);?></br> <?php echo form_input($especifique3);?> <br> (Especifique) </br> </td>
 	<td> <?php echo form_input($rpt107_89);?> </td>
 	<td> <?php echo form_input($rpt107_90);?> </td>
 	<td> <?php echo form_input($rpt107_91);?> </td>
 	<td colspan="2"> <?php echo form_input($rpt107_92);?> </td>
  </tr>
  <tr>
  	<td colspan="8"> 108. La comunidad cuenta con la siguiente infraestructura </td>
  </tr>
  <tr>
  	<td colspan="3"><center> Detalle </center></td>
  	<td><center> Si/No </center></td>
  	<td colspan="2"><center> 108 A. <br> Año de construcción </br> </center></td>
  	<td colspan="2"><center> 108 B. <br> Fuente de financiamiento </br> </center></td>
  </tr>
  <tr>
  	<td colspan="3"> 1. ¿Local comunal? </td>
  	<td><?php echo form_input($rpt108_1);?> </td>
  	<td colspan="2"><?php echo form_input($rpt108_2);?> </td>
  	<td colspan="2"><?php echo form_input($rpt108_3);?> </td>
  </tr>
  <tr>
  	<td colspan="3"> 2. ¿Almacén comunal? </td>
  	<td><?php echo form_input($rpt108_4);?> </td>
  	<td colspan="2"><?php echo form_input($rpt108_5);?> </td>
  	<td colspan="2"><?php echo form_input($rpt108_6);?> </td>
  </tr>
   <tr>
  	<td colspan="3"> 3. ¿Tienda comunal? </td>
  	<td><?php echo form_input($rpt108_7);?> </td>
  	<td colspan="2"><?php echo form_input($rpt108_8);?> </td>
  	<td colspan="2"><?php echo form_input($rpt108_9);?> </td>
  </tr>
   <tr>
  	<td colspan="3"> 4. ¿Albergue o lugar de alojamiento (comunal)? </td>
  	<td><?php echo form_input($rpt108_10);?> </td>
  	<td colspan="2"><?php echo form_input($rpt108_11);?> </td>
  	<td colspan="2"><?php echo form_input($rpt108_12);?> </td>
  </tr>
   <tr>
  	<td colspan="3"> 5. ¿Losa deportiva (cemento) (comunal)? </td>
  	<td><?php echo form_input($rpt108_13);?> </td>
  	<td colspan="2"><?php echo form_input($rpt108_14);?> </td>
  	<td colspan="2"><?php echo form_input($rpt108_15);?> </td>
  </tr>
   <tr>
  	<td colspan="3"> 6. ¿Botiquin comunal? </td>
  	<td><?php echo form_input($rpt108_16);?> </td>
  	<td colspan="2"><?php echo form_input($rpt108_17);?> </td>
  	<td colspan="2"><?php echo form_input($rpt108_18);?> </td>
  </tr>
   <tr>
  	<td colspan="3"> 7. ¿Otro? <br><?php echo form_input($otro4);?></br> <?php echo form_input($espefique4);?> (Especifique)</td>
  	<td><?php echo form_input($rpt108_19);?> </td>
  	<td colspan="2"><?php echo form_input($rpt108_20);?> </td>
  	<td colspan="2"><?php echo form_input($rpt108_21);?> </td>
  </tr>

</table>

<?php
$rpt109_1=array(
	'id'=>'$rpt109_1',
	'name'=>'$rpt109_1',
	'class'=>'form-control',
);

$rpt109_2=array(
	'id'=>'$rpt109_2',
	'name'=>'$rpt109_2',
	'class'=>'form-control',
);

$rpt110_1=array(
	'id'=>'$rpt110_1',
	'name'=>'$rpt110_1',
	'class'=>'form-control',
);

$rpt110_2=array(
	'id'=>'$rpt110_2',
	'name'=>'$rpt110_2',
	'class'=>'form-control',
);
$rpt110_3=array(
	'id'=>'$rpt110_3',
	'name'=>'$rpt110_3',
	'class'=>'form-control',
);

$rpt110_4=array(
	'id'=>'$rpt110_4',
	'name'=>'$rpt110_4',
	'class'=>'form-control',
);

$rpt110_5=array(
	'id'=>'$rpt110_5',
	'name'=>'$rpt110_5',
	'class'=>'form-control',
);
$rpt110_6=array(
	'id'=>'$rpt110_6',
	'name'=>'$rpt110_6',
	'class'=>'form-control',
);
$rpt110_7=array(
	'id'=>'$rpt110_7',
	'name'=>'$rpt110_7',
	'class'=>'form-control',
);

$rpt110_1_a=array(
	'id'=>'$rpt110_1_a',
	'name'=>'$rpt110_1_a',
	'class'=>'form-control',
);

$rpt110_1_b=array(
	'id'=>'$rpt110_1_b',
	'name'=>'$rpt110_1_b',
	'class'=>'form-control',
);


$rpt110_2_a=array(
	'id'=>'$rpt110_2_a',
	'name'=>'$rpt110_2_a',
	'class'=>'form-control',
);


$rpt110_2_b=array(
	'id'=>'$rpt110_2_b',
	'name'=>'$rpt110_2_b',
	'class'=>'form-control',
);

$rpt110_3_a=array(
	'id'=>'$rpt110_3_a',
	'name'=>'$rpt110_3_a',
	'class'=>'form-control',
);


$rpt110_3_b=array(
	'id'=>'$rpt110_3_b',
	'name'=>'$rpt110_3_b',
	'class'=>'form-control',
);

$rpt110_4_a=array(
	'id'=>'$rpt110_4_a',
	'name'=>'$rpt110_4_a',
	'class'=>'form-control',
);


$rpt110_4_b=array(
	'id'=>'$rpt110_4_b',
	'name'=>'$rpt110_4_b',
	'class'=>'form-control',
);

$rpt110_5_a=array(
	'id'=>'$rpt110_5_a',
	'name'=>'$rpt110_5_a',
	'class'=>'form-control',
);


$rpt110_5_b=array(
	'id'=>'$rpt110_5_b',
	'name'=>'$rpt110_5_b',
	'class'=>'form-control',
);
$rpt110_6_a=array(
	'id'=>'$rpt110_6_a',
	'name'=>'$rpt110_6_a',
	'class'=>'form-control',
);


$rpt110_6_b=array(
	'id'=>'$rpt110_6_b',
	'name'=>'$rpt110_6_b',
	'class'=>'form-control',
);

$rpt110_7_a=array(
	'id'=>'$rpt110_7_a',
	'name'=>'$rpt110_7_a',
	'class'=>'form-control',
);


$rpt110_7_b=array(
	'id'=>'$rpt110_7_b',
	'name'=>'$rpt110_7_b',
	'class'=>'form-control',
);

$otro_rpt110_6=array(
	 'id'=>'$otro_rpt110_6',
	 'name'=>'$otro_rpt110_6',
	 'class'=>'form-control',
);

$rpt_111=array(
	'id'=>'$rpt_111',
	'name'=>'$rpt_111',
	'class'=>'form-control',
);


$rpt113_1=array(
	'id'=>'$rpt113_1',
	'name'=>'$rpt113_1',
	'class'=>'form-control',
);


$rpt113_2=array(
	'id'=>'$rpt113_2',
	'name'=>'$rpt113_2',
	'class'=>'form-control',
);


$rpt113_3=array(
	'id'=>'$rpt113_3',
	'name'=>'$rpt113_3',
	'class'=>'form-control',
);




$rpt113_5=array(
	'id'=>'$rpt113_5',
	'name'=>'$rpt113_5',
	'class'=>'form-control',
);


$otro_rpt113_4=array(
	'id'=>'$otro_rpt113_4',
	'name'=>'$otro_rpt113_4',
	'class'=>'form-control',
);

$otro_rpt112_5=array(
	'id'=>'$otro_rpt112_5',
	'name'=>'$otro_rpt112_5',
	'class'=>'form-control',
);

$especifique_113=array(
	'id'=>'$especifique_113',
	'name'=>'$especifique_113',
	'class'=>'form-control',
);

$rpt112_1=array(
	'id'=>'$rpt112_1',
	'name'=>'$rpt112_1',
	'class'=>'form-control',
);

$rpt112_1_a=array(
	'id'=>'$rpt112_1_a',
	'name'=>'$rpt112_1_a',
	'class'=>'form-control',
);

$rpt112_1_b=array(
	'id'=>'$rpt112_1_b',
	'name'=>'$rpt112_1_b',
	'class'=>'form-control',
);

$rpt112_2=array(
	'id'=>'$rpt112_2',
	'name'=>'$rpt112_2',
	'class'=>'form-control',
);

$rpt112_2_a=array(
	'id'=>'$rpt112_2_a',
	'name'=>'$rpt112_2_a',
	'class'=>'form-control',
);

$rpt112_2_b=array(
	'id'=>'$rpt112_2_b',
	'name'=>'$rpt112_2_b',
	'class'=>'form-control',
);

$rpt112_3=array(
	'id'=>'$rpt112_3',
	'name'=>'$rpt112_3',
	'class'=>'form-control',
);

$rpt112_3_a=array(
	'id'=>'$rpt112_3_a',
	'name'=>'$rpt112_3_a',
	'class'=>'form-control',
);

$rpt112_3_b=array(
	'id'=>'$rpt112_3_b',
	'name'=>'$rpt112_3_b',
	'class'=>'form-control',
);

$rpt112_4=array(
	'id'=>'$rpt112_4',
	'name'=>'$rpt112_4',
	'class'=>'form-control',
);

$rpt112_4_a=array(
	'id'=>'$rpt112_4_a',
	'name'=>'$rpt112_4_a',
	'class'=>'form-control',
);

$rpt112_4_b=array(
	'id'=>'$rpt112_4_b',
	'name'=>'$rpt112_4_b',
	'class'=>'form-control',
);

$rpt112_5=array(
	'id'=>'$rpt112_5',
	'name'=>'$rpt112_5',
	'class'=>'form-control',
);

$rpt112_5_a=array(
	'id'=>'$rpt112_5_a',
	'name'=>'$rpt112_5_a',
	'class'=>'form-control',
);

$rpt112_5_b=array(
	'id'=>'$rpt112_5_b',
	'name'=>'$rpt112_5_b',
	'class'=>'form-control',
);
?>

<table class="table table-bordered">
<tr>
		<td><!-- lado izquierdo -->
			<table class="table ">
				<tr><td> Educacion </td> </tr>
				<tr><td> 109. En la comunidad, ¿existen centros educativos? </td></tr>
				<tr><td><?php echo form_input($rpt109_1);?></td></tr>
				<tr><td>  <?php echo form_input($rpt109_2);?>Cuantos </td></tr>
				<tr></tr>
				<tr>
					<td>					
						<table class="table table-bordered">
							<th> 110. Indique los niveles educativos de los centros de enseñanza, como se llaman y la lengua que se imparte la educación </th>
							<tr>
								<td> Nivel educativo </td>
								<td> Si / No </td>
								<td> 110A. Nombre de la institución educativa </td>
								<td> 110B. Lengua en que se imparte la educación </td>
							</tr>
							<tr>
								<td> 1. ¿Inicial? </td>
								<td><?php echo form_input($rpt110_1);?> </td>
								<td><?php echo form_input($rpt110_1_a);?> </td>
								<td><?php echo form_input($rpt110_1_b);?> </td>
							</tr>
							<tr>
								<td> 2.¿Primaria? </td>
								<td><?php echo form_input($rpt110_2);?> </td>
								<td> <?php echo form_input($rpt110_2_a);?> </td>
								<td> <?php echo form_input($rpt110_2_b);?> </td>

							</tr>

							<tr>
								<td> 3.¿Secundaria? </td>
								<td><?php echo form_input($rpt110_3);?> </td>
								<td> <?php echo form_input($rpt110_3_a);?> </td>
								<td> <?php echo form_input($rpt110_3_b);?> </td>
							</tr>


							<tr>
								<td> 4.¿Instituto Agropecuario? </td>
								<td><?php echo form_input($rpt110_4);?> </td>
								<td> <?php echo form_input($rpt110_4_a);?> </td>
								<td> <?php echo form_input($rpt110_4_b);?> </td>
							</tr>


							<tr>
								<td> 5.¿Instituto Pedagogico? </td>
								<td><?php echo form_input($rpt110_5);?> </td>
								<td> <?php echo form_input($rpt110_5_a);?> </td>
								<td> <?php echo form_input($rpt110_5_b);?> </td>
							</tr>


							<tr>
								<td> 6. ¿Instituto Tecnologico? </td>
								<td><?php echo form_input($rpt110_6);?> </td>
								<td> <?php echo form_input($rpt110_6_a);?> </td>
								<td> <?php echo form_input($rpt110_6_b);?></td>
							</tr>

							<tr>
								<td>  7.¿Otro? <br><?php echo form_input($otro_rpt110_6);?></br> <br>Especifique </br> </td>
								<td> <?php echo form_input($rpt110_7);?> </td>
								<td> <?php echo form_input($rpt110_7_a);?> </td>
								<td> <?php echo form_input($rpt110_7_b);?></td>
							</tr>
					</table>
				</td>

				</tr>	
			</table>	
		</td>

		<td> <!--lado derecho-->
			<table class="table">
	             <tr>
	                 <td> 111. En la comunidad, ¿Existen establecimientos o servicios de salud? </td>
		             <td> <?php echo form_input($rpt_111);?> <br>Pase a 113 </td>
				</tr>
				<tr>
					 <td>
						<table class="table">
			    		  <td> 112. Los establecimientos o servicios que existen en la comunidad son: </td>
			    		  <table class="table table-bordered">
			    		  <tr>
			    		  	<td> Establecimientos o servicios que existen en la comunidad son: </td>
			    		  	<td> Si / No </td>
			    		  	<td> 112A ¿Cuantos? </td>
			    		  	<td> 112B. Pertenece al sector; ¿Publico o privado? </td>
			    		  </tr>

			    		  <tr>
			    		  	<td> 1. ¿Centro de salud?</td>
			    		  	<td> <?php echo form_input($rpt112_1);?></td>
			    		  </tr>


			    		</table>
			    		</table>
			    	 </td>
			    	 <td>
 						<table class="table">

			    	 </td>
				</tr>
			</table>
		</td>	
</tr>
</table>




					


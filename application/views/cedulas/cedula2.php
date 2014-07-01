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
 	<td> Avioneta</td>
 	<td> <?php echo form_input($avioneta);?></td>
 	<td> <?php echo form_input($h5);?> </td>
  	<td> <?php echo form_input($m5); ?> </td>
 </tr>

 <tr>
 	<td> A pie</td>
 	<td> <?php echo form_input($pie);?></td>
 	<td> <?php echo form_input($h6);?> </td>
  	<td> <?php echo form_input($m6); ?> </td>
 </tr>

  <tr>
 	<td> Bicicleta</td>
 	<td> <?php echo form_input($bicicleta);?></td>
 	 	<td> <?php echo form_input($h7);?> </td>
  	<td> <?php echo form_input($m7); ?> </td>
 </tr>
  <tr>
 	<td> Motocicleta</td>
 	<td> <?php echo form_input($motocicleta);?></td>
 	<td> <?php echo form_input($h8);?> </td>
  	<td> <?php echo form_input($m8); ?> </td>
 </tr>

  <tr>
 	<td> Camioneta rural / automóvil</td>
 	<td> <?php echo form_input($cam_auto);?></td>
 	<td> <?php echo form_input($h9);?> </td>
  	<td> <?php echo form_input($m9); ?> </td>
 </tr>

   <tr>
 	<td> Acémila</td>
 	<td> <?php echo form_input($acemila);?></td>
 	<td> <?php echo form_input($h10);?> </td>
  	<td> <?php echo form_input($m10); ?> </td>
 </tr>
  <tr>
 	<td> Otro</td>
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
 	<td colspan="8"> 106. La comunidad cuenta con los siguientes servicios:</td>
 </tr>
 <tr>
 	<td colspan="2"> Detalle </td>
 	<td> Si (1) / No (2) </td>
 	<td > 106A. ¿Cuantos dias a la semana dispone del servicio? </td>
 	<td> 106B. ¿Cuantas horas al dia dispone del servicio? </td>
 	<td colspan="2"> 106C. ¿El servicio proviene de: Red pública?(1), Generador Eléctrico?(2),Otro(3), Especifique </td>
 	<td> 106D. Anote el nombre de la empresa de celular/ internet / emisora de radio </td>
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
 	<td colspan="8"> 106. La comunidad cuenta con los siguientes servicios:</td>
 </tr>
 <tr>
 	<td colspan="2"> Detalle </td>
 	<td> Si (1) / No (2) </td>
 	<td > 106A. ¿Cuantos dias a la semana dispone del servicio? </td>
 	<td> 106B. ¿Cuantas horas al dia dispone del servicio? </td>
 	<td colspan="2"> 106C. ¿El servicio proviene de: Red pública?(1), Generador Eléctrico?(2),Otro(3), Especifique </td>
 	<td> 106D. Anote el nombre de la empresa de celular/ internet / emisora de radio </td>
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
 
</table>



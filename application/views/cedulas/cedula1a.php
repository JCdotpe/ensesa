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
$personas = array(
			'id' => 'personas',
			'name' => 'personas',
			'class' => 'form-control',
		);

$nombres = array(
			'id' => 'nombres',
			'name' => 'nombres',
			'class' => 'form-control',
		);
$informantes = array(
			'id' => 'informantes',
			'name' => 'informantes',
			'class' => 'form-control',
		);

$resps = array(
			'id' => 'resps',
			'name' => 'resps',
			'class' => 'form-control',
		);

$obs_01b = array(
			'id' => 'obs_01b',
			'name' => 'obs_01b',
			'class' => 'form-control',
			'type' => 'textarea',
			'rows' => 2,
			'cols' => 13

		);

?>

<!-- Items A y B -->
<form>

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
</table>

<br>
<table class="table table-bordered">
	<tr>
		<td>
			<table class="table">
				<tr><td colspan="2"><h4>A. UBICACIÓN GEOGRÁFICA</h4></td><td><h4>COD</h4></td></tr>
				<tr><td> 1. DEPARTAMENTO </td><td> <?php echo form_input($departamento); ?> </td><td> <?php echo form_input($codigo_departamento); ?> </td></tr>
				<tr><td> 2. PROVINCIA </td><td> <?php echo form_input($provincia); ?> </td><td> <?php echo form_input($codigo_provincia); ?> </td></tr>
				<tr><td> 3. DISTRITO </td><td> <?php echo form_input($distrito); ?> </td><td> <?php echo form_input($codigo_distrito); ?> </td></tr>
				<tr><td> 4. CENTRO POBLADO </td><td> <?php echo form_input($centro_poblado); ?> </td></tr>
				<tr><td> 5. COMUNIDAD NATIVA </td><td> <?php echo form_input($comunidad_nativa); ?> </td></tr>
				<tr><td> 6. ANEXO CC.NN. </td><td> <?php echo form_input($anexo_ccnn); ?> </td></tr>
			</table>
		</td>
		<td>
			<table class="table">
				<tr><td colspan="3"><h4>B. UBICACIÓN CENSAL</h4></td></tr>
				<tr><td colspan="2"> 7. ZONA N° </td><td> <?php echo form_input($zona); ?> </td></tr>
				<tr><td colspan="2"> 8. MANZANA N° </td><td> <?php echo form_input($zona); ?> </td></tr>
				<tr><td rowspan="2"> 9. A.E.R.N </td><td> Inicial </td><td> <?php echo form_input($zona); ?> </td></tr>
				<tr><td> Final </td><td> <?php echo form_input($zona); ?> </td></tr>
				<tr><td colspan="2"> 10. VIVIENDA N° </td><td> <?php echo form_input($zona); ?> </td></tr>
			</table>
		</td>
	</tr>
</table>
<table class="table table-bordered">
	<tr>
		<td> Persona N&deg </td>
		<td colspan="3"> <?php echo form_input($personas); ?> </td>
		<td colspan="3"> Nombre: </td>
		<td> <?php echo form_input($nombres); ?> </td>
		<td colspan="3"> Informante N&deg </td>
		<td> <?php echo form_input($informantes); ?> </td>
	</tr>
</table>
<!--///////////////////////////////////////  PREGUNTA  100  /////////////////////////////////////////////////-->
<?php
$pregunta_100_1_a = array(
			'id' => 'pregunta_100_1_a',
			'name' => 'pregunta_100_1_a',
			'class' => 'form-control'
		);
$pregunta_100_1_p = array(
			'id' => 'pregunta_100_1_p',
			'name' => 'pregunta_100_1_p',
			'class' => 'form-control'
		);
$pregunta_100_1_f = array(
			'id' => 'pregunta_100_1_f',
			'name' => 'pregunta_100_1_f',
			'class' => 'form-control'
		);
$pregunta_100_2_s = array(
			'id' => 'pregunta_100_2_s',
			'name' => 'pregunta_100_2_s',
			'class' => 'form-control'
		);
$pregunta_100_2_p = array(
			'id' => 'pregunta_100_2_p',
			'name' => 'pregunta_100_2_p',
			'class' => 'form-control'
		);
$pregunta_100_3 = array(
			'id' => 'pregunta_100_3',
			'name' => 'pregunta_100_3',
			'class' => 'form-control'
		);
$pregunta_100_4_ct = array(
			'id' => 'pregunta_100_4_ct',
			'name' => 'pregunta_100_4_ct',
			'class' => 'form-control'
		);
$pregunta_100_4_cp = array(
			'id' => 'pregunta_100_4_cp',
			'name' => 'pregunta_100_4_cp',
			'class' => 'form-control'
		);
$pregunta_100_4_p = array(
			'id' => 'pregunta_100_4_p',
			'name' => 'pregunta_100_4_p',
			'class' => 'form-control'
		);
$pregunta_100_4_m = array(
			'id' => 'pregunta_100_4_m',
			'name' => 'pregunta_100_4_m',
			'class' => 'form-control'
		);
$pregunta_100_4_b = array(
			'id' => 'pregunta_100_4_b',
			'name' => 'pregunta_100_4_b',
			'class' => 'form-control'
		);
$pregunta_100_4_d = array(
			'id' => 'pregunta_100_4_d',
			'name' => 'pregunta_100_4_d',
			'class' => 'form-control'
		);
$pregunta_100_4_o = array(
			'id' => 'pregunta_100_4_o',
			'name' => 'pregunta_100_4_o',
			'class' => 'form-control'
		);
$pregunta_100_4_o_e = array(
			'id' => 'pregunta_100_4_o_e',
			'name' => 'pregunta_100_4_o_e',
			'class' => 'form-control'
		);
$pregunta_100_4A_p = array(
			'id' => 'pregunta_100_4A_p',
			'name' => 'pregunta_100_4A_p',
			'class' => 'form-control'
		);
$pregunta_100_4A_a = array(
			'id' => 'pregunta_100_4A_a',
			'name' => 'pregunta_100_4A_a',
			'class' => 'form-control'
		);
$pregunta_100_4A_pres = array(
			'id' => 'pregunta_100_4A_pres',
			'name' => 'pregunta_100_4A_pres',
			'class' => 'form-control'
		);
?>
<table class="table table-bordered">
	<tr>
	<td >Periodo de referencia: </td><td> de <?php echo form_input($informantes); ?></td><td> a <?php echo form_input($informantes); ?> </td>
    </tr>
    <tr>
    	<th colspan="3"> 100. Actividad agropecuaria (Por trabajo independiente)</th>
    </tr>
</table>
<table class="table table-bordered">
	<tr>
		<td>
			<table>
				<th>1.  ¿Que tipo de actividad realizo en su explotación agropecuaria en los ultimos 12 meses? (Encierre uno mas codigos)</th>
				<tr>
					<td>agricola</td>
					<td><?php echo form_input($distrito);?></td>
				</tr>
				<tr>
					<td>Pescuaria</td>
					<td><?php echo form_input($distrito);?></td>
				</tr>
				<tr>
					<td>Forestal</td>
					<td><?php echo form_input($distrito);?></td>
				</tr>
			</table>	 
		</td>
		<td>
			<table>
				<th>1.  ¿Que tipo de actividad realizo en su explotación agropecuaria en los ultimos 12 meses? (Encierre uno mas codigos)</th>
				<tr>
					<td>agricola</td>
					<td><?php echo form_input($distrito);?></td>
					<td>agricola</td>
					<td><?php echo form_input($distrito);?></td>
				</tr>
			</table>	 
		</td>
	</tr>
</table>
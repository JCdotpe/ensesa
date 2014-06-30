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
		);
?>

<table class="table table-bordered">
	<tr>
		<th colspan="4"> Ingreso y gastos por recursos naturales </th>
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
<table class="table table-bordered">
	<tr>
		<th>
			13. La actividad de recoleccion, caza y/o pesca realizada en los ultimos 12 meses, ¿Fue destinada a la venta?
		</th>
		<td> <?php echo form_input($resps); ?> </td>
	</tr>
</table>
<table class="table table-bordered">
	<tr>
		<th colspan="2">
			Para todas las personas de 14 años y mas de edad que en el cap. 500 o en los ultimos 12 meses, manifestaron realizar actividades de caza, recoleccion y/o pesca
		</th>

	</tr>
	<tr>
		<td align="center"> OBSERVACIONES </td>
		<td > <?php echo form_input($obs_01b); ?> </td>
		
	</tr>
</table>

<table class="table table-bordered">
	<tr>
		<th>100. Ingresos y gastos por la caza de animales silvestres</th>
	</tr>
	<tr>
		<th>Seccion A. ingreso por la caza de animales</th>
	</tr>
</table>

<table class="table table-bordered">
	<tr>
		1. En los ultimos 12 meses, de
	</tr>
	<tr>
		<td> <?php echo form_input($personas); ?> </td>
		<td colspan="3" align="center"> a </td>
		<td colspan="3"><?php echo form_input($nombres); ?> </td>
		<td align="center">¿Cazó animales silvestres? </td>
		<td> <?php echo form_input($informantes); ?> </td>
	</tr>
</table>

<table class="table table-bordered">
	<tr>
		<td>Nro de orden</td>
		<td>1A. ¿Que animales obtubo de la caza</td>
		<td>1A. ¿Que animales obtubo de la caza</td>
		<td>1A. ¿Que animales obtubo de la caza</td>
		<td>1A. ¿Que animales obtubo de la caza</td>
		<td>1A. ¿Que animales obtubo de la caza</td>
		<td>Nro de orden</td>
		<td>Nro de orden</td>

	</tr>
</table>
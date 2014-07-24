<?php 

$E1_Cuestionario_Nro = array(
				'id' => 'E1_Cuestionario_Nro',
				'name' => 'E1_Cuestionario_Nro',
				'class' => 'form-control',
				'readonly' => 'readonly',
			);

$A_1_Cod_Dpto = array(
				'id' => 'A_1_Cod_Dpto',
				'name' => 'A_1_Cod_Dpto',
				'class' => 'form-control location',
				'readonly' => 'readonly',
			);

$A_2_Cod_Prov = array(
				'id' => 'A_2_Cod_Prov',
				'name' => 'A_2_Cod_Prov',
				'class' => 'form-control location',
				'readonly' => 'readonly',
			);

$A_3_Cod_Dist = array(
				'id' => 'A_3_Cod_Dist',
				'name' => 'A_3_Cod_Dist',
				'class' => 'form-control location',
				'readonly' => 'readonly',
			);

$A_4_Centro_Poblado = array(
				'id' => 'A_4_Centro_Poblado',
				'name' => 'A_4_Centro_Poblado',
				'class' => 'form-control',
			);

$A_5_Comunidad_Nativa = array(
				'id' => 'A_5_Comunidad_Nativa',
				'name' => 'A_5_Comunidad_Nativa',
				'class' => 'form-control',
			);

$A_6_Anexo_Cn = array(
				'id' => 'A_6_Anexo_Cn',
				'name' => 'A_6_Anexo_Cn',
				'class' => 'form-control',
			);

$B_7_Zona = array(
			'id' => 'B_7_Zona',
			'name' => 'B_7_Zona',
			'class' => 'form-control',
		);

$B_8_Manzana = array(
			'id' => 'B_8_Manzana',
			'name' => 'B_8_Manzana',
			'class' => 'form-control',
		);

$B_9_1_AER_ini = array(
			'id' => 'B_9_1_AER_ini',
			'name' => 'B_9_1_AER_ini',
			'class' => 'form-control',
		);

$B_9_2_AER_fin = array(
			'id' => 'B_9_2_AER_fin',
			'name' => 'B_9_2_AER_fin',
			'class' => 'form-control',
		);

$B_10_Vivienda_nro  = array(
			'id' => 'B_10_Vivienda_nro',
			'name' => 'B_10_Vivienda_nro',
			'class' => 'form-control',
		);

$E1_B_12 = array(
			'id' => 'E1_B_12',
			'name' => 'E1_B_12',
			'class' => 'form-control',
			'readonly' => 'readonly',
		);

$E1_B_13_Nro_Hogar = array(
			'id' => 'E1_B_13_Nro_Hogar',
			'name' => 'E1_B_13_Nro_Hogar',
			'class' => 'form-control',
		);

$E1_201_Nro = array(
			'id' => 'E1_201_Nro',
			'name' => 'E1_201_Nro',
			'class' => 'form-control',
		);

$E1_202_Nombre = array(
			'id' => 'E1_202_Nombre',
			'name' => 'E1_202_Nombre',
			'class' => 'form-control',
		);

$E1_202_Apellidos = array(
			'id' => 'E1_202_Apellidos',
			'name' => 'E1_202_Apellidos',
			'class' => 'form-control',
		);

$E1B_Informante_Nro = array(
			'id' => 'E1B_Informante_Nro',
			'name' => 'E1B_Informante_Nro',
			'class' => 'form-control',
		);

$E1B_13 = array(
			'id' => 'E1B_13',
			'name' => 'E1B_13',
			'class' => 'form-control',
		);

$E1B_13_Obs = array(
			'id' => 'E1B_13_Obs',
			'name' => 'E1B_13_Obs',
			'class' => 'form-control',
			'type' => 'textarea',
			'rows' => 2,
			'cols' => 13
		);

$button_1B_head = array(
			'id' => 'button_1B_head',
			'name' => 'button_1B_head',
			'class' => 'btn btn-primary',
			'value' => 'Guardar',
			'align' => 'right',
		);

?>

<!-- Items A y B -->
<?php 

$attributes = array( 'id' => '1B' );
echo form_open( $this->uri->uri_string(), $attributes ); 

?>

<table class="table table-bordered">
	<tr>
		<th colspan="4"> Vivienda, Hogar, Educacion, Salud, Empleo e Ingresos, Conservacion de bosques, Recursos y Servicios del bosque, Deforestacion y Comite de vigilancia del bosque </th>
		<th> Cuestionario </th>
	</tr>
	<tr>
		<td colspan="4"> Cuestionario Confidencial: Amparado por el decreto legislativo Nro 604 y por el decreto supremo 043-2001-PCM: Secreto Estadistico </td>
		<td> <?php echo form_input($E1_Cuestionario_Nro); ?> </td>
	</tr>
</table>

<br>
<table class="table table-bordered">
	<tr>
		<td>
			<table class="table">
				<tr>
					<td colspan="2">
						<h4> A. UBICACIÓN GEOGRÁFICA </h4>
					</td>
					<td>
						<h4> COD </h4>
					</td>
				</tr>
				<tr>
					<td> 1. DEPARTAMENTO </td>
					<td> <select id="Nombre_Dpto" name="Nombre_Dpto" class="form-control"></select> </td>
					<td> 
						<div class="col-md-6">
							<?php echo form_input($A_1_Cod_Dpto); ?>
						</div>
					</td>
				</tr>
				<tr>
					<td> 2. PROVINCIA </td>
					<td> <select id="Nombre_Prov" name="Nombre_Prov" class="form-control"></select> </td>
					<td> 
						<div class="col-md-6">
							<?php echo form_input($A_2_Cod_Prov); ?> 
						</div>
					</td>
				</tr>
				<tr>
					<td> 3. DISTRITO </td>
					<td> <select id="Nombre_Dist" name="Nombre_Dist" class="form-control"></select> </td>
					<td>
						<div class="col-md-6"> 
							<?php echo form_input($A_3_Cod_Dist); ?> 
						</div>
					</td>
				</tr>
				<tr>
					<td> 4. CENTRO POBLADO </td>
					<td> <select id="A_4_Centro_Poblado" name="A_4_Centro_Poblado" class="form-control location"></select> </td>
				</tr>
				<tr>
					<td> 5. COMUNIDAD NATIVA </td>
					<td> <select id="A_5_Comunidad_Nativa" name="A_5_Comunidad_Nativa" class="form-control location"></select> </td>
				</tr>
				<tr>
					<td> 6. ANEXO CC.NN. </td>
					<td> <select id="A_6_Anexo_Cn" name="A_6_Anexo_Cn" class="form-control location"></select> </td>
				</tr>
			</table>
		</td>
		<td>
			<table class="table">
				<tr>
					<td colspan="3">
						<h4>B. UBICACIÓN CENSAL</h4>
					</td>
				</tr>
				<tr>
					<td>
						<table class="table">
							<tr>
								<td colspan="2"> 7. ZONA N° </td>
								<td> <select id="B_7_Zona" name="B_7_Zona" class="form-control location"></select> </td>			
							</tr>
							<tr>
								<td colspan="2"> 8. MANZANA N° </td>
								<td> <select id="B_8_Manzana" name="B_8_Manzana" class="form-control location"></select> </td>
							</tr>
							<tr>
								<td rowspan="2"> 9. A.E.R.N </td>
								<td> Inicial </td>
								<td> <select id="B_9_1_AER_ini" name="B_9_1_AER_ini" class="form-control location"></select> </td>
							</tr>
							<tr>
								<td> Final </td>
								<td> <select id="B_9_2_AER_fin" name="B_9_2_AER_fin" class="form-control location"></select> </td>
							</tr>
							<tr>
								<td colspan="2"> 10. VIVIENDA N° </td>
								<td> <select id="B_10_Vivienda_nro" name="B_10_Vivienda_nro" class="form-control location"></select> </td>
							</tr>
						</table>
					</td>
					<td>
						<table class="table">
							<tr>
								<td colspan="2"> 11. Total de Hogares que ocupan la vivienda </td>
								<td> <?php echo form_input($E1_B_12); ?> </td>
							</tr>
							<tr>
								<td colspan="2"> 12. Hogar N° </td>
								<td> 
									<?php echo form_input($E1_B_13_Nro_Hogar); ?> 
									<div class="help-block error"></div>
								</td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
		</td>
	</tr>
</table>

<table class="table table-bordered">
	<tr>
		<td> Persona N&deg; </td>
		<td colspan="3"> 
			<?php echo form_input($E1_201_Nro); ?> 
			<div class="help-block error"></div>
		</td>
		<td colspan="3"> Nombre: </td>
		<td> <?php echo form_input($E1_202_Nombre); ?> </td>
		<td>  <?php echo form_input($E1_202_Apellidos); ?> </td>
		<td colspan="3"> Informante N&deg; </td>
		<td> 
			<?php echo form_input($E1B_Informante_Nro); ?> 
			<div class="help-block error"></div>
		</td>
	</tr>
</table>

<table class="table table-bordered">
	<tr>
		<th> 13. La actividad de recoleccion, caza y/o pesca realizada en los ultimos 12 meses, ¿Fue destinada a la venta?	</th>
		<td> <?php echo form_input($E1B_13); ?> </td>
	</tr>
</table>

<table class="table table-bordered">
	<tr>
		<th colspan="2"> Para todas las personas de 14 años y mas de edad que en el cap. 500 o en los ultimos 12 meses, manifestaron realizar actividades de caza, recoleccion y/o pesca </th>
	</tr>
	<tr>
		<td align="center"> OBSERVACIONES <?php echo form_textarea($E1B_13_Obs); ?> </td>
	</tr>
</table>
<div class="row">
	<div class="pull-right">
		<?php echo form_submit($button_1B_head); ?>
	</div>
</div>

<?php echo form_close(); ?>

<script src="<?php echo base_url('assets/js/ubigeo.js'); ?>"></script>

<script type="text/javascript">

	initialize_region();
	
</script>
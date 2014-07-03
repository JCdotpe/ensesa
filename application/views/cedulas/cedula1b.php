
<?php 

$E1_Cuestionario_Nro = array(
				'id' => 'E1_Cuestionario_Nro',
				'name' => 'E1_Cuestionario_Nro',
				'class' => 'form-control',
			);

$Nombre_Dpto = array(
				'id' => 'Nombre_Dpto',
				'name' => 'Nombre_Dpto',
				'class' => 'form-control',
			);

$A_1_Cod_Dpto = array(
				'id' => 'A_1_Cod_Dpto',
				'name' => 'A_1_Cod_Dpto',
				'class' => 'form-control',
			);

$Nombre_Prov = array(
				'id' => 'Nombre_Prov',
				'name' => 'Nombre_Prov',
				'class' => 'form-control',
			);

$A_2_Cod_Prov = array(
				'id' => 'A_2_Cod_Prov',
				'name' => 'A_2_Cod_Prov',
				'class' => 'form-control',
			);

$Nombre_Dist = array(
				'id' => 'Nombre_Dist',
				'name' => 'Nombre_Dist',
				'class' => 'form-control',
			);

$A_3_Cod_Dist = array(
				'id' => 'A_3_Cod_Dist',
				'name' => 'A_3_Cod_Dist',
				'class' => 'form-control',
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
			'id' => 'informantes',
			'name' => 'informantes',
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

?>

<!-- Items A y B -->
<form>

<table class="table table-bordered">
	<tr>
		<th colspan="4"> Vivienda, Hogar, Educacion, Salud, Empleo e Ingresos, Conservacion de bosques, Recursos y Servicios del bosque, Deforestacion y Comite de vigilancia del bosque </th>
		<th> Cuestionario </th>
	</tr>
	<tr>
		<td colspan="4"> Cuestionario Confidencial: Amparado por el decreto legislativo Nro 604 y por el decreto supremo 043-2001-PCM: Secreto Estadistico </td>
		<td> <?php echo form_input($E1_Cuestionario_Nro); ?> </td>s
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
					<td> <?php echo form_input($Nombre_Dpto); ?> </td>
					<td> <?php echo form_input($A_1_Cod_Dpto); ?> </td>
				</tr>
				<tr>
					<td> 2. PROVINCIA </td>
					<td> <?php echo form_input($Nombre_Prov); ?> </td>
					<td> <?php echo form_input($A_2_Cod_Prov); ?> </td>
				</tr>
				<tr>
					<td> 3. DISTRITO </td>
					<td> <?php echo form_input($Nombre_Dist); ?> </td>
					<td> <?php echo form_input($A_3_Cod_Dist); ?> </td>
				</tr>
				<tr>
					<td> 4. CENTRO POBLADO </td>
					<td> <?php echo form_input($A_4_Centro_Poblado); ?> </td>
				</tr>
				<tr>
					<td> 5. COMUNIDAD NATIVA </td>
					<td> <?php echo form_input($A_5_Comunidad_Nativa); ?> </td>
				</tr>
				<tr>
					<td> 6. ANEXO CC.NN. </td>
					<td> <?php echo form_input($A_6_Anexo_Cn); ?> </td>
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
								<td> <?php echo form_input($B_7_Zona); ?> </td>			
							</tr>
							<tr>
								<td colspan="2"> 8. MANZANA N° </td>
								<td> <?php echo form_input($B_8_Manzana); ?> </td>
							</tr>
							<tr>
								<td rowspan="2"> 9. A.E.R.N </td>
								<td> Inicial </td>
								<td> <?php echo form_input($B_9_1_AER_ini); ?> </td>
							</tr>
							<tr>
								<td> Final </td>
								<td> <?php echo form_input($B_9_2_AER_fin); ?> </td>
							</tr>
							<tr>
								<td colspan="2"> 10. VIVIENDA N° </td>
								<td> <?php echo form_input($B_10_Vivienda_nro); ?> </td>
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
								<td> <?php echo form_input($E1_B_13_Nro_Hogar); ?> </td>
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
		<td colspan="3"> <?php echo form_input($E1_201_Nro); ?> </td>
		<td colspan="3"> Nombre: </td>
		<td> <?php echo form_input($E1_202_Nombre); ?> </td>
		<td>  <?php echo form_input($E1_202_Apellidos); ?> </td>
		<td colspan="3"> Informante N&deg; </td>
		<td> <?php echo form_input($E1B_Informante_Nro); ?> </td>
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


<!-- ////////////////////////////////////////////////////////////////PREGUNTA 100///////////////////////////////////////////////////////////////////-->

<table class="table table-bordered">
	<tr>
		<th>100. Ingresos y gastos por la caza de animales silvestres</th>
	</tr>
	<tr>
		<th>Seccion A. ingreso por la caza de animales</th>
	</tr>
</table>
<!-- Item 100 --> 
<?php

$E1B_Mes_Ini = array(
			'id' => 'E1B_Mes_Ini', 
			'name' => 'E1B_Mes_Ini', 
			'class' => 'form-control'
			);

$E1B_Mes_Fin = array(
			'id' => 'E1B_Mes_Fin', 
			'name' => 'E1B_Mes_Fin', 
			'class' => 'form-control'
			);

$E1B_101_A = array(
			'id' => 'E1B_101_A', 
			'name' => 'E1B_101_A', 
			'class' => 'form-control'
			);

$pregunta_100_A_1A_1 = array(
					'id' => 'pregunta_100_A_1A_1',
					'name' => 'pregunta_100_A_1A_1',
					'class' => 'form-control'
				);
$pregunta_100_A_1A_2 = array(
					'id' => 'pregunta_100_A_1A_2',
					'name' => 'pregunta_100_A_1A_2',
					'class' => 'form-control'
				);

$pregunta_100_A_1B_1 = array(
					'id' => 'pregunta_100_A_1B_1',
					'name' => 'pregunta_100_A_1B_1',
					'class' => 'form-control'
				);
$pregunta_100_A_1B_2 = array(
					'id' => 'pregunta_100_A_1B_2',
					'name' => 'pregunta_100_A_1B_2',
					'class' => 'form-control'
				);

$pregunta_100_A_1C_1 = array(
					'id' => 'pregunta_100_A_1C_1',
					'name' => 'pregunta_100_A_1C_1',
					'class' => 'form-control'
				);
$pregunta_100_A_1C_2 = array(
					'id' => 'pregunta_100_A_1C_2',
					'name' => 'pregunta_100_A_1C_2',
					'class' => 'form-control'
				);

$pregunta_100_A_V_K_1 = array(
					'id' => 'pregunta_100_A_V_K_1',
					'name' => 'pregunta_100_A_V_K_1',
					'class' => 'form-control'
				);
$pregunta_100_A_V_K_2 = array(
					'id' => 'pregunta_100_A_V_K_2',
					'name' => 'pregunta_100_A_V_K_2',
					'class' => 'form-control'
				);

$pregunta_100_A_V_T_1 = array(
					'id' => 'pregunta_100_A_V_T_1',
					'name' => 'pregunta_100_A_V_T_1',
					'class' => 'form-control'
				);
$pregunta_100_A_V_T_2 = array(
					'id' => 'pregunta_100_A_V_T_2',
					'name' => 'pregunta_100_A_V_T_2',
					'class' => 'form-control'
				);

$pregunta_100_A_V_M_1 = array(
					'id' => 'pregunta_100_A_V_M_1',
					'name' => 'pregunta_100_A_V_M_1',
					'class' => 'form-control'
				);
$pregunta_100_A_V_M_2 = array(
					'id' => 'pregunta_100_A_V_M_2',
					'name' => 'pregunta_100_A_V_M_2',
					'class' => 'form-control'
				);

$pregunta_100_A_C_K_1 = array(
					'id' => 'pregunta_100_A_C_K_1',
					'name' => 'pregunta_100_A_C_K_1',
					'class' => 'form-control'
				);
$pregunta_100_A_C_K_2 = array(
					'id' => 'pregunta_100_A_C_K_2',
					'name' => 'pregunta_100_A_C_K_2',
					'class' => 'form-control'
				);
$pregunta_100_A_C_T_1 = array(
					'id' => 'pregunta_100_A_C_T_1',
					'name' => 'pregunta_100_A_C_T_1',
					'class' => 'form-control'
				);
$pregunta_100_A_C_T_2 = array(
					'id' => 'pregunta_100_A_C_T_2',
					'name' => 'pregunta_100_A_C_T_2',
					'class' => 'form-control'
				);
$pregunta_100_A_T_K_1 = array(
					'id' => 'pregunta_100_A_T_K_1',
					'name' => 'pregunta_100_A_T_K_1',
					'class' => 'form-control'
				);
$pregunta_100_A_T_K_2 = array(
					'id' => 'pregunta_100_A_T_K_2',
					'name' => 'pregunta_100_A_T_K_2',
					'class' => 'form-control'
				);
$pregunta_100_A_T_T_1 = array(
					'id' => 'pregunta_100_A_T_T_1',
					'name' => 'pregunta_100_A_T_T_1',
					'class' => 'form-control'
				);
$pregunta_100_A_T_T_2 = array(
					'id' => 'pregunta_100_A_T_T_2',
					'name' => 'pregunta_100_A_T_T_2',
					'class' => 'form-control'
				);
$pregunta_100_A_E_K_1 = array(
					'id' => 'pregunta_100_A_E_K_1',
					'name' => 'pregunta_100_A_E_K_1',
					'class' => 'form-control'
				);
$pregunta_100_A_E_K_2 = array(
					'id' => 'pregunta_100_A_E_K_2',
					'name' => 'pregunta_100_A_E_K_2',
					'class' => 'form-control'
				);
$pregunta_100_A_E_T_1 = array(
					'id' => 'pregunta_100_A_E_T_1',
					'name' => 'pregunta_100_A_E_T_1',
					'class' => 'form-control'
				);
$pregunta_100_A_E_T_2 = array(
					'id' => 'pregunta_100_A_E_T_2',
					'name' => 'pregunta_100_A_E_T_2',
					'class' => 'form-control'
				);
$pregunta_100_A_O_K_1 = array(
					'id' => 'pregunta_100_A_O_K_1',
					'name' => 'pregunta_100_A_O_K_1',
					'class' => 'form-control'
				);
$pregunta_100_A_O_K_2 = array(
					'id' => 'pregunta_100_A_O_K_2',
					'name' => 'pregunta_100_A_O_K_2',
					'class' => 'form-control'
				);
$pregunta_100_A_O_T_1 = array(
					'id' => 'pregunta_100_A_O_T_1',
					'name' => 'pregunta_100_A_O_T_1',
					'class' => 'form-control'
				);
$pregunta_100_A_O_T_2 = array(
					'id' => 'pregunta_100_A_O_T_2',
					'name' => 'pregunta_100_A_O_T_2',
					'class' => 'form-control'
				);
$pregunta_100_B_a = array(
					'id' => 'pregunta_100_B_a',
					'name' => 'pregunta_100_B_a',
					'class' => 'form-control C1_B_table',
				);
$pregunta_100_B_b = array(
					'id' => 'pregunta_100_B_b',
					'name' => 'pregunta_100_B_b',
					'class' => 'form-control C1_B_table',
				);
$pregunta_100_B_c = array(
					'id' => 'pregunta_100_B_c',
					'name' => 'pregunta_100_B_c',
					'class' => 'form-control',
					'class' => 'form-control C1_B_table',
				);
$pregunta_100_B_d = array(
					'id' => 'pregunta_100_B_d',
					'name' => 'pregunta_100_B_d',
					'class' => 'form-control C1_B_table',
				);
$pregunta_100_B_e = array(
					'id' => 'pregunta_100_B_e',
					'name' => 'pregunta_100_B_e',
					'class' => 'form-control C1_B_table',
				);
$pregunta_100_B_f = array(
					'id' => 'pregunta_100_B_f',
					'name' => 'pregunta_100_B_f',
					'class' => 'form-control C1_B_table',
				);
$pregunta_100_B_g = array(
					'id' => 'pregunta_100_B_g',
					'name' => 'pregunta_100_B_g',
					'class' => 'form-control C1_B_table',
				);
$pregunta_100_B_h = array(
					'id' => 'pregunta_100_B_h',
					'name' => 'pregunta_100_B_h',
					'class' => 'form-control C1_B_table',
				);
$pregunta_100_B_i = array(
					'id' => 'pregunta_100_B_i',
					'name' => 'pregunta_100_B_i',
					'class' => 'form-control C1_B_table',
				);
$pregunta_100_B_j = array(
					'id' => 'pregunta_100_B_j',
					'name' => 'pregunta_100_B_j',
					'class' => 'form-control C1_B_table',
				);
$pregunta_100_B_j_o = array(
					'id' => 'pregunta_100_B_j_o',
					'name' => 'pregunta_100_B_j_o',
					'class' => 'form-control C1_B_table',
				);
$pregunta_100_B_total = array(
					'id' => 'pregunta_100_B_total',
					'name' => 'pregunta_100_B_total',
					'class' => 'form-control C1_B_table',
				);
$pregunta_100_B_obs = array(
					'id' => 'pregunta_100_B_obs',
					'name' => 'pregunta_100_B_obs',
					'class' => 'form-control C1_B_table',
					'rows' => 2,
			        'cols' => 13
				);
$mes_inicio_100_C = array(
			'id' => 'mes_inicio_100_C', 
			'name' => 'mes_inicio_100_C', 
			'class' => 'form-control'
			);
$mes_fin_100_C = array(
			'id' => 'mes_fin_100_C', 
			'name' => 'mes_fin_100_C', 
			'class' => 'form-control'
			);
$resp_100_C = array(
			'id' => 'resp_100_C', 
			'name' => 'resp_100_C', 
			'class' => 'form-control'
			);
$pregunta_100_C_1A_1 = array(
					'id' => 'pregunta_100_C_1A_1',
					'name' => 'pregunta_100_C_1A_1',
					'class' => 'form-control'
				);
$pregunta_100_C_1A_2 = array(
					'id' => 'pregunta_100_C_1A_2',
					'name' => 'pregunta_100_C_1A_2',
					'class' => 'form-control'
				);

$pregunta_100_C_1B_1 = array(
					'id' => 'pregunta_100_C_1B_1',
					'name' => 'pregunta_100_C_1B_1',
					'class' => 'form-control'
				);
$pregunta_100_C_1B_2 = array(
					'id' => 'pregunta_100_C_1B_2',
					'name' => 'pregunta_100_C_1B_2',
					'class' => 'form-control'
				);
$pregunta_100_C_V_K_1 = array(
					'id' => 'pregunta_100_C_V_K_1',
					'name' => 'pregunta_100_C_V_K_1',
					'class' => 'form-control'
				);
$pregunta_100_C_V_K_2 = array(
					'id' => 'pregunta_100_C_V_K_2',
					'name' => 'pregunta_100_C_V_K_2',
					'class' => 'form-control'
				);

$pregunta_100_C_V_T_1 = array(
					'id' => 'pregunta_100_C_V_T_1',
					'name' => 'pregunta_100_C_V_T_1',
					'class' => 'form-control'
				);
$pregunta_100_C_V_T_2 = array(
					'id' => 'pregunta_100_C_V_T_2',
					'name' => 'pregunta_100_C_V_T_2',
					'class' => 'form-control'
				);

$pregunta_100_C_V_M_1 = array(
					'id' => 'pregunta_100_C_V_M_1',
					'name' => 'pregunta_100_C_V_M_1',
					'class' => 'form-control'
				);
$pregunta_100_C_V_M_2 = array(
					'id' => 'pregunta_100_C_V_M_2',
					'name' => 'pregunta_100_C_V_M_2',
					'class' => 'form-control'
				);

$pregunta_100_C_C_K_1 = array(
					'id' => 'pregunta_100_C_C_K_1',
					'name' => 'pregunta_100_C_C_K_1',
					'class' => 'form-control'
				);
$pregunta_100_C_C_K_2 = array(
					'id' => 'pregunta_100_C_C_K_2',
					'name' => 'pregunta_100_C_C_K_2',
					'class' => 'form-control'
				);
$pregunta_100_C_C_T_1 = array(
					'id' => 'pregunta_100_C_C_T_1',
					'name' => 'pregunta_100_C_C_T_1',
					'class' => 'form-control'
				);
$pregunta_100_C_C_T_2 = array(
					'id' => 'pregunta_100_C_C_T_2',
					'name' => 'pregunta_100_C_C_T_2',
					'class' => 'form-control'
				);
$pregunta_100_C_T_K_1 = array(
					'id' => 'pregunta_100_C_T_K_1',
					'name' => 'pregunta_100_C_T_K_1',
					'class' => 'form-control'
				);
$pregunta_100_C_T_K_2 = array(
					'id' => 'pregunta_100_C_T_K_2',
					'name' => 'pregunta_100_C_T_K_2',
					'class' => 'form-control'
				);
$pregunta_100_C_T_T_1 = array(
					'id' => 'pregunta_100_C_T_T_1',
					'name' => 'pregunta_100_C_T_T_1',
					'class' => 'form-control'
				);
$pregunta_100_C_T_T_2 = array(
					'id' => 'pregunta_100_C_T_T_2',
					'name' => 'pregunta_100_C_T_T_2',
					'class' => 'form-control'
				);
$pregunta_100_C_O_K_1 = array(
				    'id' => 'pregunta_100_C_O_K_1',
					'name' => 'pregunta_100_C_O_K_1',
					'class' => 'form-control'
				);
$pregunta_100_C_O_K_2 = array(
					'id' => 'pregunta_100_C_O_K_2',
					'name' => 'pregunta_100_C_O_K_2',
					'class' => 'form-control'
				);
$pregunta_100_C_O_T_1 = array(
					'id' => 'pregunta_100_C_O_T_1',
					'name' => 'pregunta_100_C_O_T_1',
					'class' => 'form-control'
				);
$pregunta_100_C_O_T_2 = array(
					'id' => 'pregunta_100_C_O_T_2',
					'name' => 'pregunta_100_C_O_T_2',
					'class' => 'form-control'
				);

$pregunta_100_D_a = array(
					'id' => 'pregunta_100_D_a',
					'name' => 'pregunta_100_D_a',
					'class' => 'form-control C1_D_table'
				);

$pregunta_100_D_b = array(
					'id' => 'pregunta_100_D_b',
					'name' => 'pregunta_100_D_b',
					'class' => 'form-control C1_D_table'
				);

$pregunta_100_D_c = array(
					'id' => 'pregunta_100_D_c',
					'name' => 'pregunta_100_D_c',
					'class' => 'form-control C1_D_table'
				);

$pregunta_100_D_d = array(
					'id' => 'pregunta_100_D_d',
					'name' => 'pregunta_100_D_d',
					'class' => 'form-control C1_D_table'
				);

$pregunta_100_D_e = array(
					'id' => 'pregunta_100_D_e',
					'name' => 'pregunta_100_D_e',
					'class' => 'form-control C1_D_table'
				);

$pregunta_100_D_f = array(
					'id' => 'pregunta_100_D_f',
					'name' => 'pregunta_100_D_f',
					'class' => 'form-control C1_D_table'
				);

$pregunta_100_D_g = array(
					'id' => 'pregunta_100_D_g',
					'name' => 'pregunta_100_D_g',
					'class' => 'form-control C1_D_table'
				);

$pregunta_100_D_h_o = array(
					'id' => 'pregunta_100_D_h_o',
					'name' => 'pregunta_100_D_h_o',
					'class' => 'form-control C1_D_table'
				);

$pregunta_100_D_h = array(
					'id' => 'pregunta_100_D_h',
					'name' => 'pregunta_100_D_h',
					'class' => 'form-control C1_D_table'
				);

$pregunta_100_D_total = array(
					'id' => 'pregunta_100_D_total',
					'name' => 'pregunta_100_D_total',
					'class' => 'form-control C1_D_table'
				);

$pregunta_100_D_obs = array(
					'id' => 'pregunta_100_D_obs',
					'name' => 'pregunta_100_D_obs',
					'class' => 'form-control C1_D_table',
					'rows' => 2,
			        'cols' => 13
				);

?>

<table class="table table-bordered">
	<tr>
		<td> 1. En los ultimos 12 meses, de	</td>
		<td> <?php echo form_input($E1B_Mes_Ini); ?> </td>
		<td colspan="3" align="center"> a </td>
		<td colspan="3"> <?php echo form_input($E1B_Mes_Fin); ?> </td>
		<td align="center"> ¿Cazó animales silvestres? </td>
		<td> <?php echo form_input($E1B_101_A); ?> </td>
	</tr>
</table>

<table class="table table-bordered">
	<tr>
      <td rowspan="4">Nro de orden</td>
      <td rowspan="4">1A. ¿Que animales obtubo de la caza?</td>
      <td rowspan="4">1B. ¿Que cantidad de ........ obtubo?</td>
      <td rowspan="4">1C. Peso total (En Kilos)</td>
      <td colspan="11" align="center">1D. Del total de la caza,¿Cuantos destino para:</td>
      
   </tr>
   <tr>
     <td colspan="3">Venta</td>
     <td colspan="2" rowspan="2">Consumo de hogar?</td>
     <td colspan="2" rowspan="2">Trueque?</td>
     <td colspan="2" rowspan="2">Elaboracion de subproductos?</td>
     <td colspan="2" rowspan="2">Otros?</td>
   </tr><tr>
     <td rowspan="2">Cant. Kilos</td>
     <td rowspan="2">Monto Total S/.</td>
     <td rowspan="2">La venta la realizo en un mercado:</td>
   </tr>
   <tr>
     <td>Cant. Kilos</td>
     <td>Monto Total S/.</td>
     <td>Cant. Kilos</td>
     <td>Monto Total S/.</td>
     <td>Cant. Kilos</td>
     <td>Monto Total S/.</td>
     <td>Cant. Kilos</td>
     <td>Monto Total S/.</td>
   </tr>
   <tr>
   	<td>1</td>
   	<td> <?php echo form_input($pregunta_100_A_1A_1); ?> </td>
   	<td> <?php echo form_input($pregunta_100_A_1B_1); ?> </td>
   	<td> <?php echo form_input($pregunta_100_A_1C_1); ?> </td>
   	<td> <?php echo form_input($pregunta_100_A_V_K_1); ?> </td>
   	<td> <?php echo form_input($pregunta_100_A_V_T_1); ?> </td>
   	<td> <?php echo form_input($pregunta_100_A_V_M_1); ?> </td>
   	<td> <?php echo form_input($pregunta_100_A_C_K_1); ?> </td>
   	<td> <?php echo form_input($pregunta_100_A_C_T_1); ?> </td>
   	<td> <?php echo form_input($pregunta_100_A_T_K_1); ?> </td>
   	<td> <?php echo form_input($pregunta_100_A_T_T_1); ?> </td>
   	<td> <?php echo form_input($pregunta_100_A_E_K_1); ?> </td>
   	<td> <?php echo form_input($pregunta_100_A_E_T_1); ?> </td>
	<td> <?php echo form_input($pregunta_100_A_O_K_1); ?> </td>
   	<td> <?php echo form_input($pregunta_100_A_O_T_1); ?> </td>
   </tr>
   <tr>
   	<td>2</td>
   	<td> <?php echo form_input($pregunta_100_A_1A_2); ?> </td>
   	<td> <?php echo form_input($pregunta_100_A_1B_2); ?> </td>
   	<td> <?php echo form_input($pregunta_100_A_1C_2); ?> </td>
   	<td> <?php echo form_input($pregunta_100_A_V_K_2); ?> </td>
   	<td> <?php echo form_input($pregunta_100_A_V_T_2); ?> </td>
   	<td> <?php echo form_input($pregunta_100_A_V_M_2); ?> </td>
   	<td> <?php echo form_input($pregunta_100_A_C_K_2); ?> </td>
   	<td> <?php echo form_input($pregunta_100_A_C_T_2); ?> </td>
   	<td> <?php echo form_input($pregunta_100_A_T_K_2); ?> </td>
   	<td> <?php echo form_input($pregunta_100_A_T_T_2); ?> </td>
   	<td> <?php echo form_input($pregunta_100_A_E_K_2); ?> </td>
   	<td> <?php echo form_input($pregunta_100_A_E_T_2); ?> </td>
	<td> <?php echo form_input($pregunta_100_A_O_K_2); ?> </td>
   	<td> <?php echo form_input($pregunta_100_A_O_T_2); ?> </td>
   </tr>
</table>
<table class="table table-bordered">
	<tr>
		<th>Seccion B. Gastos por la actividad de caza de animales silvestres</th>
	</tr>
</table>

<table class="table table-bordered">
	<tr>1. En los ultimos 12 meses, gasto en:
		<td>
			<table class="table">
				<tr>	
					<td colspan="2" align="right">Valor S/.</td>
				</tr>
				<tr>
					<td> a.  Cables, redes? </td>
					<td> <?php echo form_input($pregunta_100_B_a); ?> </td>
				</tr>
				<tr>
					<td> b.  Trampas? </td>
					<td> <?php echo form_input($pregunta_100_B_b); ?> </td>
				</tr>
				<tr>
					<td> c.  Envases? (bolsas, canastas) </td>
					<td> <?php echo form_input($pregunta_100_B_c); ?> </td>
				</tr>
				<tr>
					<td> d.  Mano de obra? (ayudante, cargadores) </td>
					<td> <?php echo form_input($pregunta_100_B_d); ?> </td>
				</tr>
				<tr>
					<td> e.  Transporte?(incluye fletes) </td>
					<td> <?php echo form_input($pregunta_100_B_e); ?> </td>
				</tr>
				<tr>
					<td> f.  Mantenimiento/reparacion de vehiculo para uso exclusivo de la actividad?</td>
					<td> <?php echo form_input($pregunta_100_B_f); ?> </td>
				</tr>
			</table>
		</td>
		<td>
			<table class="table">
				<tr>	
					<td colspan="2" align="right">Valor S/.</td>
				</tr>
				<tr>
					<td> g.  Mantenimiento/reparacion de otros equipos? </td>
					<td> <?php echo form_input($pregunta_100_B_g); ?> </td>
			    </tr>
				<tr>
					<td> h.  Combustible? </td>
					<td> <?php echo form_input($pregunta_100_B_h); ?> </td>
				</tr>
				<tr>
					<td> i.  Municiones? </td>
					<td> <?php echo form_input($pregunta_100_B_i); ?> </td>
				</tr>
				<tr>
					<td> j.  Otros? (Especifique) <?php echo form_input($pregunta_100_B_j_o); ?> </td>
					<td> <?php echo form_input($pregunta_100_B_j); ?> </td>
				</tr>
				<tr>
					<td align="center"> TOTAL </td>
					<td> <?php echo form_input($pregunta_100_B_total); ?> </td>
				</tr>
			</table>
		</td>
		<td>
			<table>
				<tr>
					<td > OBSERVACIONES <?php echo form_textarea($pregunta_100_B_obs); ?> </td>
				</tr>
			</table>
		</td>
	</tr>
</table>

<table class="table table-bordered">
	<tr>
		<th>Seccion C. Ingresos y gastos por subproductos de la caza de animales silvestres</th>
	</tr>
</table>
<table class="table table-bordered">
	<tr>
		1. En los ultimos 12 meses, de
	</tr>
	<tr>
		<td> <?php echo form_input($mes_inicio_100_C); ?> </td>
		<td colspan="3" align="center"> a </td>
		<td colspan="3"><?php echo form_input($mes_fin_100_C); ?> </td>
		<td align="center">¿Obtuvo o elaboro subproductos tales como: Cecina, pieles, etc.? </td>
		<td> <?php echo form_input($resp_100_C); ?> </td>
	</tr>
</table>

<table class="table table-bordered">
	<tr>
      <td rowspan="4"> Nro de orden </td>
      <td rowspan="4"> 1A. ¿Que sub-producto obtuvo y/o elaboro? </td>
      <td rowspan="4"> 1B. ¿Que cantidad de ........ obtubo?(Kilos) </td>
      <td colspan="9" align="center"> 1C. Del total del sub-producto,¿Cuanto destino para: </td>
      
   </tr>
   <tr>
     <td colspan="3">Venta</td>
     <td colspan="2" rowspan="2">Consumo de hogar?</td>
     <td colspan="2" rowspan="2">Trueque?</td>
     <td colspan="2" rowspan="2">Otros?</td>
   </tr><tr>
     <td rowspan="2">Cant. Kilos</td>
     <td rowspan="2">Monto Total S/.</td>
     <td rowspan="2">La venta la realizo en un mercado:</td>
   </tr>
   <tr>
     <td>Cant. Kilos</td>
     <td>Monto Total S/.</td>
     <td>Cant. Kilos</td>
     <td>Monto Total S/.</td>
     <td>Cant. Kilos</td>
     <td>Monto Total S/.</td>
   </tr>
   <tr>
   	<td>1</td>
   	<td> <?php echo form_input($pregunta_100_C_1A_1); ?> </td>
   	<td> <?php echo form_input($pregunta_100_C_1B_1); ?> </td>
   	<td> <?php echo form_input($pregunta_100_C_V_K_1); ?> </td>
   	<td> <?php echo form_input($pregunta_100_C_V_T_1); ?> </td>
   	<td> <?php echo form_input($pregunta_100_C_V_M_1); ?> </td>
   	<td> <?php echo form_input($pregunta_100_C_C_K_1); ?> </td>
   	<td> <?php echo form_input($pregunta_100_C_C_T_1); ?> </td>
   	<td> <?php echo form_input($pregunta_100_C_T_K_1); ?> </td>
   	<td> <?php echo form_input($pregunta_100_C_T_T_1); ?> </td>
	<td> <?php echo form_input($pregunta_100_C_O_K_1); ?> </td>
   	<td> <?php echo form_input($pregunta_100_C_O_T_1); ?> </td>
   </tr>
   <tr>
   	<td>2</td>
   	<td> <?php echo form_input($pregunta_100_C_1A_2); ?> </td>
   	<td> <?php echo form_input($pregunta_100_C_1B_2); ?> </td>
   	<td> <?php echo form_input($pregunta_100_C_V_K_2); ?> </td>
   	<td> <?php echo form_input($pregunta_100_C_V_T_2); ?> </td>
   	<td> <?php echo form_input($pregunta_100_C_V_M_2); ?> </td>
   	<td> <?php echo form_input($pregunta_100_C_C_K_2); ?> </td>
   	<td> <?php echo form_input($pregunta_100_C_C_T_2); ?> </td>
   	<td> <?php echo form_input($pregunta_100_C_T_K_2); ?> </td>
   	<td> <?php echo form_input($pregunta_100_C_T_T_2); ?> </td>
	<td> <?php echo form_input($pregunta_100_C_O_K_2); ?> </td>
   	<td> <?php echo form_input($pregunta_100_C_O_T_2); ?> </td>
   </tr>
</table>
<table class="table table-bordered">
	<tr>
		<th>Seccion D. Gatos en sub-productos</th>
	</tr>
</table>
<table class="table table-bordered">
	<tr>
		1. En los ultimos 12 meses, gasto en:
		<td colspan="3" align="right">Valor S/.</td>
	</tr>
	<tr>
		<td colspan="2"> a.  Insumo y materia prima? </td>
		<td colspan="2"> <?php echo form_input($pregunta_100_D_a); ?> </td>
	<tr>
		<td colspan="2"> b.  Emvases?(Bolsas, canastas) </td>
		<td> <?php echo form_input($pregunta_100_D_b); ?> </td>
	</tr>
	<tr>
		<td colspan="2"> c.  Mano de obra? (ayudante, cargadores) </td>
		<td colspan="2"> <?php echo form_input($pregunta_100_D_c); ?> </td>
	</tr>
	<tr>
		<td colspan="2"> d.  Transporte?(incluye fletes) </td>
		<td colspan="2"> <?php echo form_input($pregunta_100_D_d); ?> </td>
	</tr>
	<tr>
		<td colspan="2"> e.  Mantenimiento/reparacion de vehiculo para uso exclusivo de la actividad?</td>
		<td colspan="2"> <?php echo form_input($pregunta_100_D_e); ?> </td>
	</tr>
	<tr>
		<td colspan="2"> f.  Mantenimiento/reparacion de otros equipos?</td>
		<td colspan="2"> <?php echo form_input($pregunta_100_D_f); ?> </td>
	</tr>
	<tr>
		<td colspan="2"> g.  Combustible?</td>
		<td colspan="2"> <?php echo form_input($pregunta_100_D_g); ?> </td>
	</tr>
	<tr>
		<td colspan="2"> h.  otros? (Especifique) <?php echo form_input($pregunta_100_D_h_o); ?> </td>
		<td> <?php echo form_input($pregunta_100_D_h); ?> </td>
	</tr>
	<tr><td colspan="2" align="center"> TOTAL </td>
		<td> <?php echo form_input($pregunta_100_D_total); ?> </td>
	</tr>
</table>
<table class="table table-bordered">
	<tr>
		<td align="center"> OBSERVACIONES <?php echo form_textarea($pregunta_100_D_obs); ?> </td>
	</tr>
</table>
<!--///////////////////////////////////////////////////////////////////////PREGUNTA 200///////////////////////////////////////////////////////////////////////////-->
<table class="table table-bordered">
	<tr>
		<th>200. Ingresos y gastos por la recoleccion de plantas, frutos y/o hojas silvestres</th>
	</tr>
	<tr>
		<th>Seccion A. ingreso por la recoleccion de plantas, frutos y/o hojas silvestres</th>
	</tr>
</table>
<!-- Item 200 --> 
<?php
$mes_inicio_200_A = array(
			'id' => 'mes_inicio_200_A', 
			'name' => 'mes_inicio_200_A', 
			'class' => 'form-control'
			);
$mes_fin_200_A = array(
			'id' => 'mes_fin_200_A', 
			'name' => 'mes_fin_200_A', 
			'class' => 'form-control'
			);
$resp_200_A = array(
			'id' => 'resp_200_A', 
			'name' => 'resp_200_A', 
			'class' => 'form-control'
			);
$pregunta_200_A_1A_1 = array(
					'id' => 'pregunta_200_A_1A_1',
					'name' => 'pregunta_200_A_1A_1',
					'class' => 'form-control'
				);
$pregunta_200_A_1A_2 = array(
					'id' => 'pregunta_200_A_1A_2',
					'name' => 'pregunta_200_A_1A_2',
					'class' => 'form-control'
				);

$pregunta_200_A_1B_1 = array(
					'id' => 'pregunta_200_A_1B_1',
					'name' => 'pregunta_200_A_1B_1',
					'class' => 'form-control'
				);
$pregunta_200_A_1B_2 = array(
					'id' => 'pregunta_200_A_1B_2',
					'name' => 'pregunta_200_A_1B_2',
					'class' => 'form-control'
				);

$pregunta_200_A_1C_1 = array(
					'id' => 'pregunta_200_A_1C_1',
					'name' => 'pregunta_200_A_1C_1',
					'class' => 'form-control'
				);
$pregunta_200_A_1C_2 = array(
					'id' => 'pregunta_200_A_1C_2',
					'name' => 'pregunta_200_A_1C_2',
					'class' => 'form-control'
				);
$pregunta_200_A_1D_1 = array(
					'id' => 'pregunta_200_A_1D_1',
					'name' => 'pregunta_200_A_1D_1',
					'class' => 'form-control'
				);
$pregunta_200_A_1D_2 = array(
					'id' => 'pregunta_200_A_1D_2',
					'name' => 'pregunta_200_A_1D_2',
					'class' => 'form-control'
				);

$pregunta_200_A_V_K_1 = array(
					'id' => 'pregunta_200_A_V_K_1',
					'name' => 'pregunta_200_A_V_K_1',
					'class' => 'form-control'
				);
$pregunta_200_A_V_K_2 = array(
					'id' => 'pregunta_200_A_V_K_2',
					'name' => 'pregunta_200_A_V_K_2',
					'class' => 'form-control'
				);

$pregunta_200_A_V_T_1 = array(
					'id' => 'pregunta_200_A_V_T_1',
					'name' => 'pregunta_200_A_V_T_1',
					'class' => 'form-control'
				);
$pregunta_200_A_V_T_2 = array(
					'id' => 'pregunta_200_A_V_T_2',
					'name' => 'pregunta_200_A_V_T_2',
					'class' => 'form-control'
				);

$pregunta_200_A_V_M_1 = array(
					'id' => 'pregunta_200_A_V_M_1',
					'name' => 'pregunta_200_A_V_M_1',
					'class' => 'form-control'
				);
$pregunta_200_A_V_M_2 = array(
					'id' => 'pregunta_200_A_V_M_2',
					'name' => 'pregunta_200_A_V_M_2',
					'class' => 'form-control'
				);

$pregunta_200_A_C_K_1 = array(
					'id' => 'pregunta_200_A_C_K_1',
					'name' => 'pregunta_200_A_C_K_1',
					'class' => 'form-control'
				);
$pregunta_200_A_C_K_2 = array(
					'id' => 'pregunta_200_A_C_K_2',
					'name' => 'pregunta_200_A_C_K_2',
					'class' => 'form-control'
				);
$pregunta_200_A_C_T_1 = array(
					'id' => 'pregunta_200_A_C_T_1',
					'name' => 'pregunta_200_A_C_T_1',
					'class' => 'form-control'
				);
$pregunta_200_A_C_T_2 = array(
					'id' => 'pregunta_200_A_C_T_2',
					'name' => 'pregunta_200_A_C_T_2',
					'class' => 'form-control'
				);
$pregunta_200_A_T_K_1 = array(
					'id' => 'pregunta_200_A_T_K_1',
					'name' => 'pregunta_200_A_T_K_1',
					'class' => 'form-control'
				);
$pregunta_200_A_T_K_2 = array(
					'id' => 'pregunta_200_A_T_K_2',
					'name' => 'pregunta_200_A_T_K_2',
					'class' => 'form-control'
				);
$pregunta_200_A_T_T_1 = array(
					'id' => 'pregunta_200_A_T_T_1',
					'name' => 'pregunta_200_A_T_T_1',
					'class' => 'form-control'
				);
$pregunta_200_A_T_T_2 = array(
					'id' => 'pregunta_200_A_T_T_2',
					'name' => 'pregunta_200_A_T_T_2',
					'class' => 'form-control'
				);
$pregunta_200_A_E_K_1 = array(
					'id' => 'pregunta_200_A_E_K_1',
					'name' => 'pregunta_200_A_E_K_1',
					'class' => 'form-control'
				);
$pregunta_200_A_E_K_2 = array(
					'id' => 'pregunta_200_A_E_K_2',
					'name' => 'pregunta_200_A_E_K_2',
					'class' => 'form-control'
				);
$pregunta_200_A_E_T_1 = array(
					'id' => 'pregunta_200_A_E_T_1',
					'name' => 'pregunta_200_A_E_T_1',
					'class' => 'form-control'
				);
$pregunta_200_A_E_T_2 = array(
					'id' => 'pregunta_200_A_E_T_2',
					'name' => 'pregunta_200_A_E_T_2',
					'class' => 'form-control'
				);
$pregunta_200_A_O_K_1 = array(
					'id' => 'pregunta_200_A_O_K_1',
					'name' => 'pregunta_200_A_O_K_1',
					'class' => 'form-control'
				);
$pregunta_200_A_O_K_2 = array(
					'id' => 'pregunta_200_A_O_K_2',
					'name' => 'pregunta_200_A_O_K_2',
					'class' => 'form-control'
				);
$pregunta_200_A_O_T_1 = array(
					'id' => 'pregunta_200_A_O_T_1',
					'name' => 'pregunta_200_A_O_T_1',
					'class' => 'form-control'
				);
$pregunta_200_A_O_T_2 = array(
					'id' => 'pregunta_200_A_O_T_2',
					'name' => 'pregunta_200_A_O_T_2',
					'class' => 'form-control'
				);
$pregunta_200_B_a = array(
					'id' => 'pregunta_200_B_a',
					'name' => 'pregunta_200_B_a',
					'class' => 'form-control'
				);
$pregunta_200_B_b = array(
					'id' => 'pregunta_200_B_b',
					'name' => 'pregunta_200_B_b',
					'class' => 'form-control'
				);
$pregunta_200_B_c = array(
					'id' => 'pregunta_200_B_c',
					'name' => 'pregunta_200_B_c',
					'class' => 'form-control'
				);
$pregunta_200_B_d = array(
					'id' => 'pregunta_200_B_d',
					'name' => 'pregunta_200_B_d',
					'class' => 'form-control'
				);
$pregunta_200_B_e = array(
					'id' => 'pregunta_200_B_e',
					'name' => 'pregunta_200_B_e',
					'class' => 'form-control'
				);
$pregunta_200_B_f = array(
					'id' => 'pregunta_200_B_f',
					'name' => 'pregunta_200_B_f',
					'class' => 'form-control'
				);
$pregunta_200_B_g = array(
					'id' => 'pregunta_200_B_g',
					'name' => 'pregunta_200_B_g',
					'class' => 'form-control'
				);
$pregunta_200_B_h_o = array(
					'id' => 'pregunta_200_B_h_o',
					'name' => 'pregunta_200_B_h_o',
					'class' => 'form-control'
				);
$pregunta_200_B_h = array(
					'id' => 'pregunta_200_B_h',
					'name' => 'pregunta_200_B_h',
					'class' => 'form-control'
				);
$pregunta_200_B_total = array(
					'id' => 'pregunta_200_B_total',
					'name' => 'pregunta_200_B_total',
					'class' => 'form-control'
				);
$pregunta_200_B_obs = array(
					'id' => 'pregunta_200_B_obs',
					'name' => 'pregunta_200_B_obs',
					'class' => 'form-control',
					'rows' => 2,
			        'cols' => 13
				);
$mes_inicio_200_C = array(
			'id' => 'mes_inicio_200_C', 
			'name' => 'mes_inicio_200_C', 
			'class' => 'form-control'
			);
$mes_fin_200_C = array(
			'id' => 'mes_fin_200_C', 
			'name' => 'mes_fin_200_C', 
			'class' => 'form-control'
			);
$resp_200_C = array(
			'id' => 'resp_200_C', 
			'name' => 'resp_200_C', 
			'class' => 'form-control'
			);
$pregunta_200_C_1A_1 = array(
					'id' => 'pregunta_200_C_1A_1',
					'name' => 'pregunta_200_C_1A_1',
					'class' => 'form-control'
				);
$pregunta_200_C_1A_2 = array(
					'id' => 'pregunta_200_C_1A_2',
					'name' => 'pregunta_200_C_1A_2',
					'class' => 'form-control'
				);

$pregunta_200_C_1B_1 = array(
					'id' => 'pregunta_200_C_1B_1',
					'name' => 'pregunta_200_C_1B_1',
					'class' => 'form-control'
				);
$pregunta_200_C_1B_2 = array(
					'id' => 'pregunta_200_C_1B_2',
					'name' => 'pregunta_200_C_1B_2',
					'class' => 'form-control'
				);
$pregunta_200_C_V_K_1 = array(
					'id' => 'pregunta_200_C_V_K_1',
					'name' => 'pregunta_200_C_V_K_1',
					'class' => 'form-control'
				);
$pregunta_200_C_V_K_2 = array(
					'id' => 'pregunta_200_C_V_K_2',
					'name' => 'pregunta_200_C_V_K_2',
					'class' => 'form-control'
				);

$pregunta_200_C_V_T_1 = array(
					'id' => 'pregunta_200_C_V_T_1',
					'name' => 'pregunta_200_C_V_T_1',
					'class' => 'form-control'
				);
$pregunta_200_C_V_T_2 = array(
					'id' => 'pregunta_200_C_V_T_2',
					'name' => 'pregunta_200_C_V_T_2',
					'class' => 'form-control'
				);

$pregunta_200_C_V_M_1 = array(
					'id' => 'pregunta_200_C_V_M_1',
					'name' => 'pregunta_200_C_V_M_1',
					'class' => 'form-control'
				);
$pregunta_200_C_V_M_2 = array(
					'id' => 'pregunta_200_C_V_M_2',
					'name' => 'pregunta_200_C_V_M_2',
					'class' => 'form-control'
				);

$pregunta_200_C_C_K_1 = array(
					'id' => 'pregunta_200_C_C_K_1',
					'name' => 'pregunta_200_C_C_K_1',
					'class' => 'form-control'
				);
$pregunta_200_C_C_K_2 = array(
					'id' => 'pregunta_200_C_C_K_2',
					'name' => 'pregunta_200_C_C_K_2',
					'class' => 'form-control'
				);
$pregunta_200_C_C_T_1 = array(
					'id' => 'pregunta_200_C_C_T_1',
					'name' => 'pregunta_200_C_C_T_1',
					'class' => 'form-control'
				);
$pregunta_200_C_C_T_2 = array(
					'id' => 'pregunta_200_C_C_T_2',
					'name' => 'pregunta_200_C_C_T_2',
					'class' => 'form-control'
				);
$pregunta_200_C_T_K_1 = array(
					'id' => 'pregunta_200_C_T_K_1',
					'name' => 'pregunta_200_C_T_K_1',
					'class' => 'form-control'
				);
$pregunta_200_C_T_K_2 = array(
					'id' => 'pregunta_200_C_T_K_2',
					'name' => 'pregunta_200_C_T_K_2',
					'class' => 'form-control'
				);
$pregunta_200_C_T_T_1 = array(
					'id' => 'pregunta_200_C_T_T_1',
					'name' => 'pregunta_200_C_T_T_1',
					'class' => 'form-control'
				);
$pregunta_200_C_T_T_2 = array(
					'id' => 'pregunta_200_C_T_T_2',
					'name' => 'pregunta_200_C_T_T_2',
					'class' => 'form-control'
				);
$pregunta_200_C_O_K_1 = array(
				    'id' => 'pregunta_200CA_O_K_1',
					'name' => 'pregunta_200_C_O_K_1',
					'class' => 'form-control'
				);
$pregunta_200_C_O_K_2 = array(
					'id' => 'pregunta_200_C_O_K_2',
					'name' => 'pregunta_200_C_O_K_2',
					'class' => 'form-control'
				);
$pregunta_200_C_O_T_1 = array(
					'id' => 'pregunta_200_C_O_T_1',
					'name' => 'pregunta_200_C_O_T_1',
					'class' => 'form-control'
				);
$pregunta_200_C_O_T_2 = array(
					'id' => 'pregunta_200_C_O_T_2',
					'name' => 'pregunta_200_C_O_T_2',
					'class' => 'form-control'
				);
$pregunta_200_D_a = array(
					'id' => 'pregunta_200_D_a',
					'name' => 'pregunta_200_D_a',
					'class' => 'form-control'
				);
$pregunta_200_D_b = array(
					'id' => 'pregunta_200_D_b',
					'name' => 'pregunta_200_D_b',
					'class' => 'form-control'
				);
$pregunta_200_D_c = array(
					'id' => 'pregunta_200_D_c',
					'name' => 'pregunta_200_D_c',
					'class' => 'form-control'
				);
$pregunta_200_D_d = array(
					'id' => 'pregunta_200_D_d',
					'name' => 'pregunta_200_D_d',
					'class' => 'form-control'
				);
$pregunta_200_D_e = array(
					'id' => 'pregunta_200_D_e',
					'name' => 'pregunta_200_D_e',
					'class' => 'form-control'
				);
$pregunta_200_D_f = array(
					'id' => 'pregunta_200_D_f',
					'name' => 'pregunta_200_D_f',
					'class' => 'form-control'
				);
$pregunta_200_D_g = array(
					'id' => 'pregunta_200_D_g',
					'name' => 'pregunta_200_D_g',
					'class' => 'form-control'
				);
$pregunta_200_D_h_o = array(
					'id' => 'pregunta_200_D_h_o',
					'name' => 'pregunta_200_D_h_o',
					'class' => 'form-control'
				);
$pregunta_200_D_h = array(
					'id' => 'pregunta_200_D_h',
					'name' => 'pregunta_200_D_h',
					'class' => 'form-control'
				);
$pregunta_200_D_total = array(
					'id' => 'pregunta_200_D_total',
					'name' => 'pregunta_200_D_total',
					'class' => 'form-control'
				);
$pregunta_200_D_obs = array(
					'id' => 'pregunta_200_D_obs',
					'name' => 'pregunta_200_D_obs',
					'class' => 'form-control',
					'rows' => 2,
			        'cols' => 13
				);
?>

<table class="table table-bordered">
	<tr>
		1. En los ultimos 12 meses, de
	</tr>
	<tr>
		<td> <?php echo form_input($mes_inicio_200_A); ?> </td>
		<td colspan="3" align="center"> a </td>
		<td colspan="3"><?php echo form_input($mes_fin_200_A); ?> </td>
		<td align="center">¿recolectó plantas, frutos y/o hojas silvestres? </td>
		<td> <?php echo form_input($resp_200_A); ?> </td>
	</tr>
</table>

<table class="table table-bordered">
	<tr>
      <td rowspan="4">Nro de orden</td>
      <td rowspan="4">1A. ¿Que plantas, frutos y/o hojas silvestres obtubo de la recolección?</td>
      <td rowspan="4">1B. ¿Que cantidad de ........ obtubo?</td>
      <td rowspan="4">1C. Unidad de medida</td>
      <td rowspan="4">1D. Peso total (En Kilos)</td>
      <td colspan="11" align="center">1E. Del total de la recoleccion,¿Cuantos destino para:</td>
      
   </tr>
   <tr>
     <td colspan="3">Venta</td>
     <td colspan="2" rowspan="2">Consumo de hogar?</td>
     <td colspan="2" rowspan="2">Trueque?</td>
     <td colspan="2" rowspan="2">Elaboracion de subproductos?</td>
     <td colspan="2" rowspan="2">Otros?</td>
   </tr><tr>
     <td rowspan="2">Cant. Kg./Lt.</td>
     <td rowspan="2">Monto Total S/.</td>
     <td rowspan="2">La venta la realizo en un mercado:</td>
   </tr>
   <tr>
     <td>Cant. Kg./Lt.</td>
     <td>Monto Total S/.</td>
     <td>Cant. Kg./Lt.</td>
     <td>Monto Total S/.</td>
     <td>Cant. Kg./Lt.</td>
     <td>Monto Total S/.</td>
     <td>Cant. Kg./Lt.</td>
     <td>Monto Total S/.</td>
   </tr>
  <tr>
   	<td>1</td>
   	<td> <?php echo form_input($pregunta_200_A_1A_1); ?> </td>
   	<td> <?php echo form_input($pregunta_200_A_1B_1); ?> </td>
   	<td> <?php echo form_input($pregunta_200_A_1C_1); ?> </td>
   	<td> <?php echo form_input($pregunta_200_A_1D_1); ?> </td>
   	<td> <?php echo form_input($pregunta_200_A_V_K_1); ?> </td>
   	<td> <?php echo form_input($pregunta_200_A_V_T_1); ?> </td>
   	<td> <?php echo form_input($pregunta_200_A_V_M_1); ?> </td>
   	<td> <?php echo form_input($pregunta_200_A_C_K_1); ?> </td>
   	<td> <?php echo form_input($pregunta_200_A_C_T_1); ?> </td>
   	<td> <?php echo form_input($pregunta_200_A_T_K_1); ?> </td>
   	<td> <?php echo form_input($pregunta_200_A_T_T_1); ?> </td>
   	<td> <?php echo form_input($pregunta_200_A_E_K_1); ?> </td>
   	<td> <?php echo form_input($pregunta_200_A_E_T_1); ?> </td>
	<td> <?php echo form_input($pregunta_200_A_O_K_1); ?> </td>
   	<td> <?php echo form_input($pregunta_200_A_O_T_1); ?> </td>
   </tr>
   <tr>
   	<td>2</td>
   	<td> <?php echo form_input($pregunta_200_A_1A_2); ?> </td>
   	<td> <?php echo form_input($pregunta_200_A_1B_2); ?> </td>
   	<td> <?php echo form_input($pregunta_200_A_1C_2); ?> </td>
   	<td> <?php echo form_input($pregunta_200_A_1D_2); ?> </td>
   	<td> <?php echo form_input($pregunta_200_A_V_K_2); ?> </td>
   	<td> <?php echo form_input($pregunta_200_A_V_T_2); ?> </td>
   	<td> <?php echo form_input($pregunta_200_A_V_M_2); ?> </td>
   	<td> <?php echo form_input($pregunta_200_A_C_K_2); ?> </td>
   	<td> <?php echo form_input($pregunta_200_A_C_T_2); ?> </td>
   	<td> <?php echo form_input($pregunta_200_A_T_K_2); ?> </td>
   	<td> <?php echo form_input($pregunta_200_A_T_T_2); ?> </td>
   	<td> <?php echo form_input($pregunta_200_A_E_K_2); ?> </td>
   	<td> <?php echo form_input($pregunta_200_A_E_T_2); ?> </td>
	<td> <?php echo form_input($pregunta_200_A_O_K_2); ?> </td>
   	<td> <?php echo form_input($pregunta_200_A_O_T_2); ?> </td>
   </tr>
</table>
<table class="table table-bordered">
	<tr>
		<th>Seccion B. Gastos por la recolección de plantas, frutas y/o hojas silvestres</th>
	</tr>
</table>

<table class="table table-bordered">
	<tr>1. En los ultimos 12 meses, gasto en:
		<td>
			<table class="table">
				<tr>	
					<td colspan="2" align="right">Valor S/.</td>
				</tr>
				<tr>
					<td> a.  Cables, redes? </td>
					<td> <?php echo form_input($pregunta_200_B_a); ?> </td>
				</tr>
				<tr>
					<td> b.  Envases? (bolsas, canastas) </td>
					<td> <?php echo form_input($pregunta_200_B_b); ?> </td>
				</tr>
				<tr>
					<td> c.  Mano de obra? (ayudante, cargadores)  </td>
					<td> <?php echo form_input($pregunta_200_B_c); ?> </td>
				</tr>
				<tr>
					<td> d.  Transporte?(incluye fletes) </td>
					<td> <?php echo form_input($pregunta_200_B_d); ?> </td>
				</tr>
				<tr>
					<td> e.  Mantenimiento/reparacion de vehiculo para uso exclusivo de la actividad? </td>
					<td> <?php echo form_input($pregunta_200_B_e); ?> </td>
				</tr>
				
			</table>
		</td>
		<td>
			<table class="table">
				<tr>	
					<td colspan="2" align="right">Valor S/.</td>
				</tr>
				<tr>
					<td> f.  Mantenimiento/reparacion de otros equipos? </td>
					<td> <?php echo form_input($pregunta_200_B_f); ?> </td>
				</tr>
				<tr>
					<td> g.  Combustible? </td>
					<td> <?php echo form_input($pregunta_200_B_g); ?> </td>
			    </tr>
				<tr>
					<td> h.  Otros? (Especifique)<?php echo form_input($pregunta_200_B_h_o); ?> </td>
					<td> <?php echo form_input($pregunta_200_B_h); ?> </td>
				</tr>
				<tr>
					
						<tr>
						<td align="center"> TOTAL </td>
						<td> <?php echo form_input($pregunta_200_B_total); ?> </td>
					    </tr>

				</tr>
			</table>
		</td>
		<td>
			<table>
				<tr>
					<td > OBSERVACIONES <?php echo form_textarea($pregunta_200_B_obs); ?> </td>
				</tr>
			</table>
		</td>
	</tr>
</table>

<table class="table table-bordered">
	<tr>
		<th>Seccion C. Ingresos y gastos por subproductos de recolección</th>
	</tr>
</table>
<table class="table table-bordered">
	<tr>
		1. En los ultimos 12 meses, de
	</tr>
	<tr>
		<td> <?php echo form_input($mes_inicio_200_C); ?> </td>
		<td colspan="3" align="center"> a </td>
		<td colspan="3"><?php echo form_input($mes_fin_200_C); ?> </td>
		<td align="center">¿Elaboro subproductos tales como: Abanicos, collares, canastas, etc.? </td>
		<td> <?php echo form_input($resp_200_C); ?> </td>
	</tr>
</table>

<table class="table table-bordered">
	<tr>
      <td rowspan="4"> Nro de orden </td>
      <td rowspan="4"> 1A. ¿Que sub-producto elaboro? </td>
      <td rowspan="4"> 1B. ¿Peso total?(Kilos) </td>
      <td colspan="9" align="center"> 1C. Del total del sub-producto,¿Cuanto destino para: </td>
      
   </tr>
   <tr>
     <td colspan="3">Venta</td>
     <td colspan="2" rowspan="2">Consumo de hogar?</td>
     <td colspan="2" rowspan="2">Trueque?</td>
     <td colspan="2" rowspan="2">Otros?</td>
   </tr><tr>
     <td rowspan="2">Cant. Kg./Lt.</td>
     <td rowspan="2">Monto Total S/.</td>
     <td rowspan="2">La venta la realizo en un mercado:</td>
   </tr>
   <tr>
     <td>Cant. Kg./Lt.</td>
     <td>Monto Total S/.</td>
     <td>Cant. Kg./Lt.</td>
     <td>Monto Total S/.</td>
     <td>Cant. Kg./Lt.</td>
     <td>Monto Total S/.</td>
   </tr>
    <tr>
   	<td>1</td>
   	<td> <?php echo form_input($pregunta_200_C_1A_1); ?> </td>
   	<td> <?php echo form_input($pregunta_200_C_1B_1); ?> </td>
   	<td> <?php echo form_input($pregunta_200_C_V_K_1); ?> </td>
   	<td> <?php echo form_input($pregunta_200_C_V_T_1); ?> </td>
   	<td> <?php echo form_input($pregunta_200_C_V_M_1); ?> </td>
   	<td> <?php echo form_input($pregunta_200_C_C_K_1); ?> </td>
   	<td> <?php echo form_input($pregunta_200_C_C_T_1); ?> </td>
   	<td> <?php echo form_input($pregunta_200_C_T_K_1); ?> </td>
   	<td> <?php echo form_input($pregunta_200_C_T_T_1); ?> </td>
	<td> <?php echo form_input($pregunta_200_C_O_K_1); ?> </td>
   	<td> <?php echo form_input($pregunta_200_C_O_T_1); ?> </td>
   </tr>
   <tr>
   	<td>2</td>
   	<td> <?php echo form_input($pregunta_200_C_1A_2); ?> </td>
   	<td> <?php echo form_input($pregunta_200_C_1B_2); ?> </td>
   	<td> <?php echo form_input($pregunta_200_C_V_K_2); ?> </td>
   	<td> <?php echo form_input($pregunta_200_C_V_T_2); ?> </td>
   	<td> <?php echo form_input($pregunta_200_C_V_M_2); ?> </td>
   	<td> <?php echo form_input($pregunta_200_C_C_K_2); ?> </td>
   	<td> <?php echo form_input($pregunta_200_C_C_T_2); ?> </td>
   	<td> <?php echo form_input($pregunta_200_C_T_K_2); ?> </td>
   	<td> <?php echo form_input($pregunta_200_C_T_T_2); ?> </td>
	<td> <?php echo form_input($pregunta_200_C_O_K_2); ?> </td>
   	<td> <?php echo form_input($pregunta_200_C_O_T_2); ?> </td>
   </tr>
</table>
<table class="table table-bordered">
	<tr>
		<th>Seccion D. Gatos en subproductos</th>
	</tr>
</table>
<table class="table table-bordered">
	<tr>
		1. En los ultimos 12 meses, gasto en:
		<td colspan="3" align="right">Valor S/.</td>
	</tr>
	<tr>
		<td colspan="2"> a.  Insumo y materia prima? </td>
		<td colspan="2"> <?php echo form_input($pregunta_200_D_a); ?> </td>
	<tr>
		<td colspan="2"> b.  Emvases?(Bolsas, canastas) </td>
		<td> <?php echo form_input($pregunta_200_D_b); ?> </td>
	</tr>
	<tr>
		<td colspan="2"> c.  Mano de obra? (ayudante, cargadores) </td>
		<td colspan="2"> <?php echo form_input($pregunta_200_D_c); ?> </td>
	</tr>
	<tr>
		<td colspan="2"> d.  Transporte?(incluye fletes) </td>
		<td colspan="2"> <?php echo form_input($pregunta_200_D_d); ?> </td>
	</tr>
	<tr>
		<td colspan="2"> e.  Mantenimiento/reparacion de vehiculo para uso exclusivo de la actividad?</td>
		<td colspan="2"> <?php echo form_input($pregunta_200_D_e); ?> </td>
	</tr>
	<tr>
		<td colspan="2"> f.  Mantenimiento/reparacion de otros equipos? </td>
		<td colspan="2"> <?php echo form_input($pregunta_200_D_f); ?> </td>
	</tr>
	<tr>
		<td colspan="2"> g.  Combustible?</td>
		<td colspan="2"> <?php echo form_input($pregunta_200_D_g); ?> </td>
	</tr>
	<tr>
		<td> h.  otros? (Especifique)<?php echo form_input($pregunta_200_D_h_o); ?> </td>
		<td> <?php echo form_input($pregunta_200_D_h); ?> </td>
	</tr>
	<tr><td colspan="2" align="center"> TOTAL </td>
		<td> <?php echo form_input($pregunta_200_D_total); ?> </td>
	</tr>
</table>
<table class="table table-bordered">
	<tr>
		<td align="center"> OBSERVACIONES <?php echo form_textarea($pregunta_200_D_a); ?> </td>
	</tr>
</table>	

<!--- //////////////////////////////////////////////////PREGUNTA 300//////////////////////////////////// -->

<table class="table table-bordered">
	<tr>
		<th>300. Ingresos y gastos por la pesca</th>
	</tr>
	<tr>
		<th>Seccion A. ingreso por la pesca</th>
	</tr>
</table>
<!-- Item 300 --> 

<?php
$mes_inicio_300_A = array(
			'id' => 'mes_inicio_300_A', 
			'name' => 'mes_inicio_300_A', 
			'class' => 'form-control'
			);
$mes_fin_300_A = array(
			'id' => 'mes_fin_300_A', 
			'name' => 'mes_fin_300_A', 
			'class' => 'form-control'
			);
$resp_300_A = array(
			'id' => 'resp_300_A', 
			'name' => 'resp_300_A', 
			'class' => 'form-control'
			);
$pregunta_300_A_1A_1 = array(
					'id' => 'pregunta_300_A_1A_1',
					'name' => 'pregunta_300_A_1A_1',
					'class' => 'form-control'
				);
$pregunta_300_A_1A_2 = array(
					'id' => 'pregunta_300_A_1A_2',
					'name' => 'pregunta_300_A_1A_2',
					'class' => 'form-control'
				);

$pregunta_300_A_1B_1 = array(
					'id' => 'pregunta_300_A_1B_1',
					'name' => 'pregunta_300_A_1B_1',
					'class' => 'form-control'
				);
$pregunta_300_A_1B_2 = array(
					'id' => 'pregunta_300_A_1B_1',
					'name' => 'pregunta_300_A_1B_1',
					'class' => 'form-control'
				);

$pregunta_300_A_1C_1 = array(
					'id' => 'pregunta_300_A_1C_1',
					'name' => 'pregunta_300_A_1C_1',
					'class' => 'form-control'
				);
$pregunta_300_A_1C_2 = array(
					'id' => 'pregunta_300_A_1C_2',
					'name' => 'pregunta_300_A_1C_2',
					'class' => 'form-control'
				);
$pregunta_300_A_1D_1 = array(
					'id' => 'pregunta_300_A_1D_1',
					'name' => 'pregunta_300_A_1D_1',
					'class' => 'form-control'
				);
$pregunta_300_A_1D_2 = array(
					'id' => 'pregunta_300_A_1D_2',
					'name' => 'pregunta_300_A_1D_2',
					'class' => 'form-control'
				);

$pregunta_300_A_V_K_1 = array(
					'id' => 'pregunta_300_A_V_K_1',
					'name' => 'pregunta_300_A_V_K_1',
					'class' => 'form-control'
				);
$pregunta_300_A_V_K_2 = array(
					'id' => 'pregunta_300_A_V_K_2',
					'name' => 'pregunta_300_A_V_K_2',
					'class' => 'form-control'
				);

$pregunta_300_A_V_T_1 = array(
					'id' => 'pregunta_300_A_V_T_1',
					'name' => 'pregunta_300_A_V_T_1',
					'class' => 'form-control'
				);
$pregunta_300_A_V_T_2 = array(
					'id' => 'pregunta_300_A_V_T_2',
					'name' => 'pregunta_300_A_V_T_2',
					'class' => 'form-control'
				);

$pregunta_300_A_V_M_1 = array(
					'id' => 'pregunta_300_A_V_M_1',
					'name' => 'pregunta_300_A_V_M_1',
					'class' => 'form-control'
				);
$pregunta_300_A_V_M_2 = array(
					'id' => 'pregunta_300_A_V_M_2',
					'name' => 'pregunta_300_A_V_M_2',
					'class' => 'form-control'
				);

$pregunta_300_A_C_K_1 = array(
					'id' => 'pregunta_300_A_C_K_1',
					'name' => 'pregunta_300_A_C_K_1',
					'class' => 'form-control'
				);
$pregunta_300_A_C_K_2 = array(
					'id' => 'pregunta_300_A_C_K_2',
					'name' => 'pregunta_300_A_C_K_2',
					'class' => 'form-control'
				);
$pregunta_300_A_C_T_1 = array(
					'id' => 'pregunta_300_A_C_T_1',
					'name' => 'pregunta_300_A_C_T_1',
					'class' => 'form-control'
				);
$pregunta_300_A_C_T_2 = array(
					'id' => 'pregunta_300_A_C_T_2',
					'name' => 'pregunta_300_A_C_T_2',
					'class' => 'form-control'
				);
$pregunta_300_A_T_K_1 = array(
					'id' => 'pregunta_300_A_T_K_1',
					'name' => 'pregunta_300_A_T_K_1',
					'class' => 'form-control'
				);
$pregunta_300_A_T_K_2 = array(
					'id' => 'pregunta_300_A_T_K_2',
					'name' => 'pregunta_300_A_T_K_2',
					'class' => 'form-control'
				);
$pregunta_300_A_T_T_1 = array(
					'id' => 'pregunta_300_A_T_T_1',
					'name' => 'pregunta_300_A_T_T_1',
					'class' => 'form-control'
				);
$pregunta_300_A_T_T_2 = array(
					'id' => 'pregunta_300_A_T_T_2',
					'name' => 'pregunta_300_A_T_T_2',
					'class' => 'form-control'
				);
$pregunta_300_A_E_K_1 = array(
					'id' => 'pregunta_300_A_E_K_1',
					'name' => 'pregunta_300_A_E_K_1',
					'class' => 'form-control'
				);
$pregunta_300_A_E_K_2 = array(
					'id' => 'pregunta_300_A_E_K_2',
					'name' => 'pregunta_300_A_E_K_2',
					'class' => 'form-control'
				);
$pregunta_300_A_E_T_1 = array(
					'id' => 'pregunta_300_A_E_T_1',
					'name' => 'pregunta_300_A_E_T_1',
					'class' => 'form-control'
				);
$pregunta_300_A_E_T_2 = array(
					'id' => 'pregunta_300_A_E_T_1',
					'name' => 'pregunta_300_A_E_T_1',
					'class' => 'form-control'
				);
$pregunta_300_A_O_K_1 = array(
					'id' => 'pregunta_300_A_O_K_1',
					'name' => 'pregunta_300_A_O_K_1',
					'class' => 'form-control'
				);
$pregunta_300_A_O_K_2 = array(
					'id' => 'pregunta_300_A_O_K_2',
					'name' => 'pregunta_300_A_O_K_2',
					'class' => 'form-control'
				);
$pregunta_300_A_O_T_1 = array(
					'id' => 'pregunta_300_A_O_T_1',
					'name' => 'pregunta_300_A_O_T_1',
					'class' => 'form-control'
				);
$pregunta_300_A_O_T_2 = array(
					'id' => 'pregunta_300_A_O_T_2',
					'name' => 'pregunta_300_A_O_T_2',
					'class' => 'form-control'
				);
$pregunta_300_B_a = array(
					'id' => 'pregunta_300_B_a',
					'name' => 'pregunta_300_B_a',
					'class' => 'form-control'
				);
$pregunta_300_B_b = array(
					'id' => 'pregunta_300_B_b',
					'name' => 'pregunta_300_B_b',
					'class' => 'form-control'
				);
$pregunta_300_B_c = array(
					'id' => 'pregunta_300_B_c',
					'name' => 'pregunta_300_B_c',
					'class' => 'form-control'
				);
$pregunta_300_B_d = array(
					'id' => 'pregunta_300_B_d',
					'name' => 'pregunta_300_B_d',
					'class' => 'form-control'
				);
$pregunta_300_B_e = array(
					'id' => 'pregunta_300_B_e',
					'name' => 'pregunta_300_B_e',
					'class' => 'form-control'
				);
$pregunta_300_B_f = array(
					'id' => 'pregunta_300_B_f',
					'name' => 'pregunta_300_B_f',
					'class' => 'form-control'
				);
$pregunta_300_B_g = array(
					'id' => 'pregunta_300_B_g',
					'name' => 'pregunta_300_B_g',
					'class' => 'form-control'
				);
$pregunta_300_B_h = array(
					'id' => 'pregunta_300_B_h',
					'name' => 'pregunta_300_B_h',
					'class' => 'form-control'
				);
$pregunta_300_B_i = array(
					'id' => 'pregunta_300_B_i',
					'name' => 'pregunta_300_B_i',
					'class' => 'form-control'
				);
$pregunta_300_B_i_o = array(
					'id' => 'pregunta_300_B_i_o',
					'name' => 'pregunta_300_B_i_o',
					'class' => 'form-control'
				);
$pregunta_300_B_total = array(
					'id' => 'pregunta_300_B_total',
					'name' => 'pregunta_300_B_total',
					'class' => 'form-control'
				);
$pregunta_300_B_obs = array(
					'id' => 'pregunta_300_B_obs',
					'name' => 'pregunta_300_B_obs',
					'class' => 'form-control',
					'rows' => 2,
			        'cols' => 13
				);
$mes_inicio_300_C = array(
			'id' => 'mes_inicio_300_C', 
			'name' => 'mes_inicio_300_C', 
			'class' => 'form-control'
			);
$mes_fin_300_C = array(
			'id' => 'mes_fin_300_C', 
			'name' => 'mes_fin_300_C', 
			'class' => 'form-control'
			);
$resp_300_C = array(
			'id' => 'resp_300_C', 
			'name' => 'resp_300_C', 
			'class' => 'form-control'
			);
$pregunta_300_C_1A_1 = array(
					'id' => 'pregunta_300_C_1A_1',
					'name' => 'pregunta_300_C_1A_1',
					'class' => 'form-control'
				);
$pregunta_300_C_1A_2 = array(
					'id' => 'pregunta_300_C_1A_2',
					'name' => 'pregunta_300_C_1A_2',
					'class' => 'form-control'
				);

$pregunta_300_C_1B_1 = array(
					'id' => 'pregunta_300_C_1B_1',
					'name' => 'pregunta_300_C_1B_1',
					'class' => 'form-control'
				);
$pregunta_300_C_1B_2 = array(
					'id' => 'pregunta_300_C_1B_1',
					'name' => 'pregunta_300_C_1B_1',
					'class' => 'form-control'
				);
$pregunta_300_C_V_K_1 = array(
					'id' => 'pregunta_300_C_V_K_1',
					'name' => 'pregunta_300_C_V_K_1',
					'class' => 'form-control'
				);
$pregunta_300_C_V_K_2 = array(
					'id' => 'pregunta_300_C_V_K_2',
					'name' => 'pregunta_300_C_V_K_2',
					'class' => 'form-control'
				);

$pregunta_300_C_V_T_1 = array(
					'id' => 'pregunta_300_C_V_T_1',
					'name' => 'pregunta_300_C_V_T_1',
					'class' => 'form-control'
				);
$pregunta_300_C_V_T_2 = array(
					'id' => 'pregunta_300_C_V_T_2',
					'name' => 'pregunta_300_C_V_T_2',
					'class' => 'form-control'
				);

$pregunta_300_C_V_M_1 = array(
					'id' => 'pregunta_300_C_V_M_1',
					'name' => 'pregunta_300_C_V_M_1',
					'class' => 'form-control'
				);
$pregunta_300_C_V_M_2 = array(
					'id' => 'pregunta_300_C_V_M_2',
					'name' => 'pregunta_300_C_V_M_2',
					'class' => 'form-control'
				);

$pregunta_300_C_C_K_1 = array(
					'id' => 'pregunta_300_C_C_K_1',
					'name' => 'pregunta_300_C_C_K_1',
					'class' => 'form-control'
				);
$pregunta_300_C_C_K_2 = array(
					'id' => 'pregunta_300_A_C_K_2',
					'name' => 'pregunta_300_A_C_K_2',
					'class' => 'form-control'
				);
$pregunta_300_C_C_T_1 = array(
					'id' => 'pregunta_300_C_C_T_1',
					'name' => 'pregunta_300_C_C_T_1',
					'class' => 'form-control'
				);
$pregunta_300_C_C_T_2 = array(
					'id' => 'pregunta_300_C_C_T_2',
					'name' => 'pregunta_300_C_C_T_2',
					'class' => 'form-control'
				);
$pregunta_300_C_T_K_1 = array(
					'id' => 'pregunta_300_C_T_K_1',
					'name' => 'pregunta_300_C_T_K_1',
					'class' => 'form-control'
				);
$pregunta_300_C_T_K_2 = array(
					'id' => 'pregunta_300_C_T_K_2',
					'name' => 'pregunta_300_C_T_K_2',
					'class' => 'form-control'
				);
$pregunta_300_C_T_T_1 = array(
					'id' => 'pregunta_300_C_T_T_1',
					'name' => 'pregunta_300_C_T_T_1',
					'class' => 'form-control'
				);
$pregunta_300_C_T_T_2 = array(
					'id' => 'pregunta_300_C_T_T_2',
					'name' => 'pregunta_300_C_T_T_2',
					'class' => 'form-control'
				);
$pregunta_300_C_O_K_1 = array(
				    'id' => 'pregunta_300CA_O_K_1',
					'name' => 'pregunta_300_C_O_K_1',
					'class' => 'form-control'
				);
$pregunta_300_C_O_K_2 = array(
					'id' => 'pregunta_300_C_O_K_2',
					'name' => 'pregunta_300_C_O_K_2',
					'class' => 'form-control'
				);
$pregunta_300_C_O_T_1 = array(
					'id' => 'pregunta_300_C_O_T_1',
					'name' => 'pregunta_300_C_O_T_1',
					'class' => 'form-control'
				);
$pregunta_300_C_O_T_2 = array(
					'id' => 'pregunta_300_C_O_T_2',
					'name' => 'pregunta_300_C_O_T_2',
					'class' => 'form-control'
				);
$pregunta_300_D_a = array(
					'id' => 'pregunta_300_D_a',
					'name' => 'pregunta_300_D_a',
					'class' => 'form-control'
				);
$pregunta_300_D_b = array(
					'id' => 'pregunta_300_D_b',
					'name' => 'pregunta_300_D_b',
					'class' => 'form-control'
				);
$pregunta_300_D_c = array(
					'id' => 'pregunta_300_D_c',
					'name' => 'pregunta_300_D_c',
					'class' => 'form-control'
				);
$pregunta_300_D_d = array(
					'id' => 'pregunta_300_D_d',
					'name' => 'pregunta_300_D_d',
					'class' => 'form-control'
				);
$pregunta_300_D_e = array(
					'id' => 'pregunta_300_D_e',
					'name' => 'pregunta_300_D_e',
					'class' => 'form-control'
				);
$pregunta_300_D_f = array(
					'id' => 'pregunta_300_D_f',
					'name' => 'pregunta_300_D_f',
					'class' => 'form-control'
				);
$pregunta_300_D_g = array(
					'id' => 'pregunta_300_D_g',
					'name' => 'pregunta_300_D_g',
					'class' => 'form-control'
				);
$pregunta_300_D_h_o = array(
					'id' => 'pregunta_300_D_h_o',
					'name' => 'pregunta_300_D_h_o',
					'class' => 'form-control'
				);
$pregunta_300_D_h = array(
					'id' => 'pregunta_300_D_h',
					'name' => 'pregunta_300_D_h',
					'class' => 'form-control'
				);
$pregunta_300_D_total = array(
					'id' => 'pregunta_300_D_total',
					'name' => 'pregunta_30_D_total',
					'class' => 'form-control'
				);
$pregunta_300_D_obs = array(
					'id' => 'pregunta_300_D_obs',
					'name' => 'pregunta_300_D_obs',
					'class' => 'form-control',
					'rows' => 2,
			        'cols' => 13
				);
?>

<table class="table table-bordered">
	<tr>
		1. En los ultimos 12 meses, de
	</tr>
	<tr>
		<td> <?php echo form_input($mes_inicio_300_A); ?> </td>
		<td colspan="3" align="center"> a </td>
		<td colspan="3"><?php echo form_input($mes_fin_300_A); ?> </td>
		<td align="center">¿pesco? </td>
		<td> <?php echo form_input($resp_300_A); ?> </td>
	</tr>
</table>

<table class="table table-bordered">
	<tr>
      <td rowspan="4">Nro de orden</td>
      <td rowspan="4">1A. ¿Que especies obtubo de la pesca?</td>
      <td rowspan="4">1B. Peso total (En Kilos)</td>
      <td colspan="11" align="center">1C. Del total de la pesca en rio,¿Cuantos destino para:</td>
      
   </tr>
   <tr>
     <td colspan="3">Venta</td>
     <td colspan="2" rowspan="2">Consumo de hogar?</td>
     <td colspan="2" rowspan="2">Trueque?</td>
     <td colspan="2" rowspan="2">Elaboracion de subproductos?</td>
     <td colspan="2" rowspan="2">Otros?</td>
   </tr><tr>
     <td rowspan="2">Cant. Kilo</td>
     <td rowspan="2">Monto Total S/.</td>
     <td rowspan="2">La venta la realizo en un mercado:</td>
   </tr>
   <tr>
     <td>Cant. Kilo</td>
     <td>Monto Total S/.</td>
     <td>Cant. Kilo</td>
     <td>Monto Total S/.</td>
     <td>Cant. Kilo</td>
     <td>Monto Total S/.</td>
     <td>Cant. Kilo</td>
     <td>Monto Total S/.</td>
   </tr>
   <tr>
   	<td>1</td>
   	<td> <?php echo form_input($pregunta_300_A_1A_1); ?> </td>
   	<td> <?php echo form_input($pregunta_300_A_1B_1); ?> </td>
   	<td> <?php echo form_input($pregunta_300_A_V_K_1); ?> </td>
   	<td> <?php echo form_input($pregunta_300_A_V_T_1); ?> </td>
   	<td> <?php echo form_input($pregunta_300_A_V_M_1); ?> </td>
   	<td> <?php echo form_input($pregunta_300_A_C_K_1); ?> </td>
   	<td> <?php echo form_input($pregunta_300_A_C_T_1); ?> </td>
   	<td> <?php echo form_input($pregunta_300_A_T_K_1); ?> </td>
   	<td> <?php echo form_input($pregunta_300_A_T_T_1); ?> </td>
   	<td> <?php echo form_input($pregunta_300_A_E_K_1); ?> </td>
   	<td> <?php echo form_input($pregunta_300_A_E_T_1); ?> </td>
	<td> <?php echo form_input($pregunta_300_A_O_K_1); ?> </td>
   	<td> <?php echo form_input($pregunta_300_A_O_T_1); ?> </td>
   </tr>
   <tr>
   	<td>2</td>
   	<td> <?php echo form_input($pregunta_300_A_1A_2); ?> </td>
   	<td> <?php echo form_input($pregunta_300_A_1B_2); ?> </td>
   	<td> <?php echo form_input($pregunta_300_A_V_K_2); ?> </td>
   	<td> <?php echo form_input($pregunta_300_A_V_T_2); ?> </td>
   	<td> <?php echo form_input($pregunta_300_A_V_M_2); ?> </td>
   	<td> <?php echo form_input($pregunta_300_A_C_K_2); ?> </td>
   	<td> <?php echo form_input($pregunta_300_A_C_T_2); ?> </td>
   	<td> <?php echo form_input($pregunta_300_A_T_K_2); ?> </td>
   	<td> <?php echo form_input($pregunta_200_A_T_T_2); ?> </td>
   	<td> <?php echo form_input($pregunta_300_A_E_K_2); ?> </td>
   	<td> <?php echo form_input($pregunta_300_A_E_T_2); ?> </td>
	<td> <?php echo form_input($pregunta_300_A_O_K_2); ?> </td>
   	<td> <?php echo form_input($pregunta_300_A_O_T_2); ?> </td>
   </tr>
</table>
<table class="table table-bordered">
	<tr>
		<th>Seccion B. Gastos la pesca</th>
	</tr>
</table>

<table class="table table-bordered">
	<tr>1. En los ultimos 12 meses, gasto en:
		<td>
			<table class="table">
				<tr>	
					<td colspan="2" align="right">Valor S/.</td>
				</tr>
				<tr>
					<td> a.  Cables, redes? </td>
					<td> <?php echo form_input($pregunta_300_B_a); ?> </td>
				</tr>
				<tr>
					<td> b.  Anzuelo? </td>
					<td> <?php echo form_input($pregunta_300_B_b); ?> </td>
				</tr>
				<tr>
					<td> c.  Envases? (Bolsas, canastas) </td>
					<td> <?php echo form_input($pregunta_300_B_c); ?> </td>
				</tr>
				<tr>
					<td> d.  Mano de obra? (Ayudantes cargadores) </td>
					<td> <?php echo form_input($pregunta_300_B_d); ?> </td>
				</tr>
				<tr>
					<td> e.  Mantenimiento/reparacion de vehiculo para uso exclusivo de la actividad?</td>
					<td> <?php echo form_input($pregunta_300_B_e); ?> </td>
				</tr>
				
			</table>
		</td>
		<td>
			<table class="table">
				<tr>	
					<td colspan="2" align="right">Valor S/.</td>
				</tr>
				<tr>
					<td> f.  Mantenimiento/reparacion de otros equipos? </td>
					<td> <?php echo form_input($pregunta_300_B_f); ?> </td>
				</tr>
				<tr>
					<td> g.  Mantenimiento/reparacion de otros equipos? </td>
					<td> <?php echo form_input($pregunta_300_B_g); ?> </td>
			    </tr>
				<tr>
					<td> h. Combustible? </td>
					<td> <?php echo form_input($pregunta_300_B_h); ?> </td>
				</tr>
				<tr>	
					<td align="center"> TOTAL </td>
					<td> <?php echo form_input($pregunta_300_B_total); ?> </td>
				</tr>
			</table>
		</td>
		<td>
			<table>
				<tr>
					<td> OBSERVACIONES <?php echo form_textarea($pregunta_300_B_obs); ?> </td>
				</tr>
			</table>
		</td>
	</tr>
</table>


<table class="table table-bordered">
	<tr>
		<th>Seccion C. Ingresos y gastos por subproductos de la pesca</th>
	</tr>
</table>
<table class="table table-bordered">
	<tr>
		1. En los ultimos 12 meses, de
	</tr>
	<tr>
		<td> <?php echo form_input($mes_inicio_300_C); ?> </td>
		<td colspan="3" align="center"> a </td>
		<td colspan="3"><?php echo form_input($mes_fin_300_C); ?> </td>
		<td align="center">¿Elaboro subproductos tales como: Sabalo ahumado, paiche salado, etc.? </td>
		<td> <?php echo form_input($resp_300_C); ?> </td>
	</tr>
</table>

<table class="table table-bordered">
	<tr>
      <td rowspan="4"> Nro de orden </td>
      <td rowspan="4"> 1A. ¿Que sub-producto elaboro? </td>
      <td rowspan="4"> 1B. ¿Peso total?(Kilos) </td>
      <td colspan="9" align="center"> 1C. Del total del sub-producto,¿Cuanto destino para: </td>
      
   </tr>
   <tr>
     <td colspan="3">Venta</td>
     <td colspan="2" rowspan="2">Consumo de hogar?</td>
     <td colspan="2" rowspan="2">Trueque?</td>
     <td colspan="2" rowspan="2">Otros?</td>
   </tr><tr>
     <td rowspan="2">Cant. Kilo</td>
     <td rowspan="2">Monto Total S/.</td>
     <td rowspan="2">La venta la realizo en un mercado:</td>
   </tr>
   <tr>
     <td>Cant. Kilo</td>
     <td>Monto Total S/.</td>
     <td>Cant. Kilo</td>
     <td>Monto Total S/.</td>
     <td>Cant. Kilo</td>
     <td>Monto Total S/.</td>
   </tr>
  </tr>
    <tr>
   	<td>1</td>
   	<td> <?php echo form_input($pregunta_300_C_1A_1); ?> </td>
   	<td> <?php echo form_input($pregunta_300_C_1B_1); ?> </td>
   	<td> <?php echo form_input($pregunta_300_C_V_K_1); ?> </td>
   	<td> <?php echo form_input($pregunta_300_C_V_T_1); ?> </td>
   	<td> <?php echo form_input($pregunta_300_C_V_M_1); ?> </td>
   	<td> <?php echo form_input($pregunta_300_C_C_K_1); ?> </td>
   	<td> <?php echo form_input($pregunta_300_C_C_T_1); ?> </td>
   	<td> <?php echo form_input($pregunta_300_C_T_K_1); ?> </td>
   	<td> <?php echo form_input($pregunta_300_C_T_T_1); ?> </td>
	<td> <?php echo form_input($pregunta_300_C_O_K_1); ?> </td>
   	<td> <?php echo form_input($pregunta_300_C_O_T_1); ?> </td>
   </tr>
   <tr>
   	<td>2</td>
   	<td> <?php echo form_input($pregunta_300_C_1A_2); ?> </td>
   	<td> <?php echo form_input($pregunta_300_C_1B_2); ?> </td>
   	<td> <?php echo form_input($pregunta_300_C_V_K_2); ?> </td>
   	<td> <?php echo form_input($pregunta_300_C_V_T_2); ?> </td>
   	<td> <?php echo form_input($pregunta_300_C_V_M_2); ?> </td>
   	<td> <?php echo form_input($pregunta_300_C_C_K_2); ?> </td>
   	<td> <?php echo form_input($pregunta_300_C_C_T_2); ?> </td>
   	<td> <?php echo form_input($pregunta_300_C_T_K_2); ?> </td>
   	<td> <?php echo form_input($pregunta_300_C_T_T_2); ?> </td>
	<td> <?php echo form_input($pregunta_300_C_O_K_2); ?> </td>
   	<td> <?php echo form_input($pregunta_300_C_O_T_2); ?> </td>
   </tr>
</table>
<table class="table table-bordered">
	<tr>
		<th>Seccion D. Gatos en subproductos</th>
	</tr>
</table>
<table class="table table-bordered">
	<tr>
		1. En los ultimos 12 meses, gasto en:
		<td colspan="3" align="right">Valor S/.</td>
	</tr>
	<tr>
		<td colspan="2"> a.  Insumo y materia prima? </td>
		<td colspan="2"> <?php echo form_input($pregunta_300_D_a); ?> </td>
	<tr>
		<td colspan="2"> b.  Emvases?(Bolsas, canastas) </td>
		<td> <?php echo form_input($pregunta_300_D_b); ?> </td>
	</tr>
	<tr>
		<td colspan="2"> c.  Mano de obra? (ayudante, cargadores) </td>
		<td colspan="2"> <?php echo form_input($pregunta_300_D_c); ?> </td>
	</tr>
	<tr>
		<td colspan="2"> d.  Transporte?(incluye fletes) </td>
		<td colspan="2"> <?php echo form_input($pregunta_300_D_d); ?> </td>
	</tr>
	<tr>
		<td colspan="2"> e.  Mantenimiento/reparacion de vehiculo para uso exclusivo de la actividad?</td>
		<td colspan="2"> <?php echo form_input($pregunta_300_D_e); ?> </td>
	</tr>
	<tr>
		<td colspan="2"> f.  Mantenimiento/reparacion de otros equipos? </td>
		<td colspan="2"> <?php echo form_input($pregunta_300_D_f); ?> </td>
	</tr>
	<tr>
		<td colspan="2"> g.  Combustible?</td>
		<td colspan="2"> <?php echo form_input($pregunta_300_D_g); ?> </td>
	</tr>
	<tr>
		<td> h.  otros? (Especifique)<?php echo form_input($pregunta_300_D_h_o); ?> </td>
		<td> <?php echo form_input($pregunta_300_D_h); ?> </td>
	</tr>
	<tr><td colspan="2" align="center"> TOTAL </td>
		<td> <?php echo form_input($pregunta_300_D_total); ?> </td>
	</tr>
</table>
<table class="table table-bordered">
	<tr>
		<td align="center"> OBSERVACIONES <?php echo form_textarea($pregunta_300_D_obs); ?> </td>
	</tr>
</table>
</form>
<script src="<?php echo base_url('assets/js/cedula1b.js'); ?>"></script>
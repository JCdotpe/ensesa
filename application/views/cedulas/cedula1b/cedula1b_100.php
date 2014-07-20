<!-- *********************** PREGUNTA 100 *********************** -->
<?php 
	
	$attr = array('id' => '1B_100');
	
	echo form_open( $this->uri->uri_string(), $attr); 

?>

	<table class="table table-bordered">
		<tr>
			<th> 100. Ingresos y gastos por la caza de animales silvestres </th>
		</tr>
		<tr>
			<th> Seccion A. ingreso por la caza de animales </th>
		</tr>
	</table>
	<!-- Item 100 --> 
	<?php

	$E1B_Ini_M = array(
				'id' => 'E1B_Ini_M', 
				'name' => 'E1B_Ini_M', 
				'class' => 'form-control'
				);

	$E1B_Ini_A = array(
				'id' => 'E1B_Ini_A', 
				'name' => 'E1B_Ini_A', 
				'class' => 'form-control'
				);

	$E1B_Fin_M = array(
				'id' => 'E1B_Fin_M', 
				'name' => 'E1B_Fin_M', 
				'class' => 'form-control'
				);

	$E1B_Fin_A = array(
				'id' => 'E1B_Fin_A', 
				'name' => 'E1B_Fin_A', 
				'class' => 'form-control'
				);

	$E1B_101_A = array(
				'id' => 'E1B_101_A', 
				'name' => 'E1B_101_A', 
				'class' => 'form-control'
				);


	$E1B_Tipo_Nro = array(
						'id' => 'E1B_Tipo_Nro',
						'name' => 'E1B_Tipo_Nro',
						'class' => 'form-control',
						'readonly' => 'readonly'
					);

	$E1B_1A_Nombre = array(
						'id' => 'E1B_1A_Nombre',
						'name' => 'E1B_1A_Nombre',
						'class' => 'form-control'
					);


	$E1B_101_B_a = array(
						'id' => 'E1B_101_B_a',
						'name' => 'E1B_101_B_a',
						'class' => 'form-control C1_B_table',
					);

	$E1B_101_B_b = array(
						'id' => 'E1B_101_B_b',
						'name' => 'E1B_101_B_b',
						'class' => 'form-control C1_B_table',
					);

	$E1B_101_B_c = array(
						'id' => 'E1B_101_B_c',
						'name' => 'E1B_101_B_c',
						'class' => 'form-control',
						'class' => 'form-control C1_B_table',
					);

	$E1B_101_B_d = array(
						'id' => 'E1B_101_B_d',
						'name' => 'E1B_101_B_d',
						'class' => 'form-control C1_B_table',
					);

	$E1B_101_B_e = array(
						'id' => 'E1B_101_B_e',
						'name' => 'E1B_101_B_e',
						'class' => 'form-control C1_B_table',
					);

	$E1B_101_B_f = array(
						'id' => 'E1B_101_B_f',
						'name' => 'E1B_101_B_f',
						'class' => 'form-control C1_B_table',
					);

	$E1B_101_B_g = array(
						'id' => 'E1B_101_B_g',
						'name' => 'E1B_101_B_g',
						'class' => 'form-control C1_B_table',
					);

	$E1B_101_B_h = array(
						'id' => 'E1B_101_B_h',
						'name' => 'E1B_101_B_h',
						'class' => 'form-control C1_B_table',
					);

	$E1B_101_B_i = array(
						'id' => 'E1B_101_B_i',
						'name' => 'E1B_101_B_i',
						'class' => 'form-control C1_B_table',
					);

	$E1B_101_B_j = array(
						'id' => 'E1B_101_B_j',
						'name' => 'E1B_101_B_j',
						'class' => 'form-control C1_B_table',
					);

	$E1B_101_B_j_O = array(
						'id' => 'E1B_101_B_j_O',
						'name' => 'E1B_101_B_j_O',
						'class' => 'form-control C1_B_table',
					);

	$E1B_101_B_Total = array(
						'id' => 'E1B_101_B_Total',
						'name' => 'E1B_101_B_Total',
						'class' => 'form-control C1_B_table',
					);

	$E1B_101_B_Obs = array(
						'id' => 'E1B_101_B_Obs',
						'name' => 'E1B_101_B_Obs',
						'class' => 'form-control C1_B_table',
						'rows' => 2,
				        'cols' => 13
					);

	$E1B_101_C = array(
				'id' => 'E1B_101_C', 
				'name' => 'E1B_101_C', 
				'class' => 'form-control'
				);

	$E1B_101_D_a = array(
						'id' => 'E1B_101_D_a',
						'name' => 'E1B_101_D_a',
						'class' => 'form-control C1_D_table'
					);

	$E1B_101_D_b = array(
						'id' => 'E1B_101_D_b',
						'name' => 'E1B_101_D_b',
						'class' => 'form-control C1_D_table'
					);

	$E1B_101_D_c = array(
						'id' => 'E1B_101_D_c',
						'name' => 'E1B_101_D_c',
						'class' => 'form-control C1_D_table'
					);

	$E1B_101_D_d = array(
						'id' => 'E1B_101_D_d',
						'name' => 'E1B_101_D_d',
						'class' => 'form-control C1_D_table'
					);

	$E1B_101_D_e = array(
						'id' => 'E1B_101_D_e',
						'name' => 'E1B_101_D_e',
						'class' => 'form-control C1_D_table'
					);

	$E1B_101_D_f = array(
						'id' => 'E1B_101_D_f',
						'name' => 'E1B_101_D_f',
						'class' => 'form-control C1_D_table'
					);

	$E1B_101_D_g = array(
						'id' => 'E1B_101_D_g',
						'name' => 'E1B_101_D_g',
						'class' => 'form-control C1_D_table'
					);

	$E1B_101_D_h_O = array(
						'id' => 'E1B_101_D_h_O',
						'name' => 'E1B_101_D_h_O',
						'class' => 'form-control C1_D_table'
					);

	$E1B_101_D_h = array(
						'id' => 'E1B_101_D_h',
						'name' => 'E1B_101_D_h',
						'class' => 'form-control C1_D_table'
					);

	$E1B_101_D_Total = array(
						'id' => 'E1B_101_D_Total',
						'name' => 'E1B_101_D_Total',
						'class' => 'form-control C1_D_table'
					);

	$E1B_101_D_Obs = array(
						'id' => 'E1B_101_D_Obs',
						'name' => 'E1B_101_D_Obs',
						'class' => 'form-control C1_D_table',
						'rows' => 2,
				        'cols' => 13
					);

	$button_1B_100 = array(
						'id' => 'button_1B_100',
						'name' => 'button_1B_100',
						'class' => 'btn btn-primary',
						'value' => 'Guardar',
					);

	?>

	<table class="table table-bordered">
		<tr>
			<td> 1. En los ultimos 12 meses, de	</td>
			<td> <?php echo form_input($E1B_Ini_M); ?>(Mes) <div class="help-block error"></div> </td>
			<td> <?php echo form_input($E1B_Ini_A); ?>(Año) </td>
			<td align="center"> a </td>
			<td> <?php echo form_input($E1B_Fin_M); ?>(Mes) </td>
			<td> <?php echo form_input($E1B_Fin_A); ?>(Año) </td>
			<td align="center"> ¿Cazó animales silvestres? </td>
			<td> <?php echo form_input($E1B_101_A); ?> </td>
		</tr>
	</table>

	<table id="table_100_A" class="table table-bordered">
		<tr>
			<td rowspan="4"> Nro de orden </td>
			<td rowspan="4"> 1A. ¿Que animales obtubo de la caza? </td>
			<td rowspan="4"> 1B. ¿Que cantidad de ........ obtubo? </td>
			<td rowspan="4"> 1C. Peso total (En Kilos) </td>
			<td colspan="14" align="center"> 1D. Del total de la caza,¿Cuantos destino para: </td>
			<td rowspan="4"></td>
		</tr>
		<tr>
			<td colspan="6"> Venta </td>
			<td colspan="2"> Consumo de hogar? </td>
			<td colspan="2"> Trueque? </td>
			<td colspan="2"> Elaboracion de subproductos? </td>
			<td colspan="2"> Otros? </td>
		</tr>
		<tr>
			<td rowspan="2"> Cant. Kilos </td>
			<td rowspan="2"> Monto Total S/. </td>
			<td colspan="4"> La venta la realizo en un mercado: </td>
			<td rowspan="2"> Cant. Kilos </td>
			<td rowspan="2"> Monto Total S/. </td>
			<td rowspan="2"> Cant. Kilos </td>
			<td rowspan="2"> Monto Total S/. </td>
			<td rowspan="2"> Cant. Kilos </td>
			<td rowspan="2"> Monto Total S/. </td>
			<td rowspan="2"> Cant. Kilos </td>
			<td rowspan="2"> Monto Total S/. </td>
		</tr>
		<tr>
			<td> local? </td>
			<td> Regional? </td>
			<td> Nacional? </td>
			<td> N.A? </td>
		</tr>
	</table>

	<table class="table table-bordered">
		<tr>
			<th>Seccion B. Gastos por la actividad de caza de animales silvestres</th>
		</tr>
	</table>

	<table class="table table-bordered">
		<tr>
			<td colspan="2">
				1. En los ultimos 12 meses, gasto en:
			</td>
		</tr>
		<tr>
			<td>
				<table class="table">
					<tr>	
						<td colspan="2" align="right">Valor S/.</td>
					</tr>
					<tr>
						<td> a.  Cables, redes? </td>
						<td> <?php echo form_input($E1B_101_B_a); ?> </td>
					</tr>
					<tr>
						<td> b.  Trampas? </td>
						<td> <?php echo form_input($E1B_101_B_b); ?> </td>
					</tr>
					<tr>
						<td> c.  Envases? (bolsas, canastas) </td>
						<td> <?php echo form_input($E1B_101_B_c); ?> </td>
					</tr>
					<tr>
						<td> d.  Mano de obra? (ayudante, cargadores) </td>
						<td> <?php echo form_input($E1B_101_B_d); ?> </td>
					</tr>
					<tr>
						<td> e.  Transporte?(incluye fletes) </td>
						<td> <?php echo form_input($E1B_101_B_e); ?> </td>
					</tr>
					<tr>
						<td> f.  Mantenimiento/reparacion de vehiculo para uso exclusivo de la actividad?</td>
						<td> <?php echo form_input($E1B_101_B_f); ?> </td>
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
						<td> <?php echo form_input($E1B_101_B_g); ?> </td>
				    </tr>
					<tr>
						<td> h.  Combustible? </td>
						<td> <?php echo form_input($E1B_101_B_h); ?> </td>
					</tr>
					<tr>
						<td> i.  Municiones? </td>
						<td> <?php echo form_input($E1B_101_B_i); ?> </td>
					</tr>
					<tr>
						<td> j.  Otros? </td>
						<td> <?php echo form_input($E1B_101_B_j); ?> </td>
					</tr>
					<tr>
						<td> (Especifique) </td>
						<td> <?php echo form_input($E1B_101_B_j_O); ?> </td>
					</tr>
					<tr>
						<td align="center"> TOTAL </td>
						<td> <?php echo form_input($E1B_101_B_Total); ?> </td>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<table width="100%">
					<tr>
						<td> OBSERVACIONES <?php echo form_textarea($E1B_101_B_Obs); ?> </td>
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
			<td> 1. En los ultimos 12 meses, de	</td>
			<td> mes / anio </td>
			<td align="center"> a </td>
			<td> mes / anio </td>
			<td align="center">¿Obtuvo o elaboro subproductos tales como: Cecina, pieles, etc.? </td>
			<td> <?php echo form_input($E1B_101_C); ?> </td>
		</tr>
	</table>

	<table id="table_100_C" class="table table-bordered">
		<tr>
			<td rowspan="4"> Nro de orden </td>
			<td rowspan="4"> 1A. ¿Que sub-producto obtuvo y/o elaboro? </td>
			<td rowspan="4"> 1B. ¿Que cantidad de ........ obtubo?(Kilos) </td>
			<td colspan="12" align="center"> 1C. Del total del sub-producto,¿Cuanto destino para: </td>
			<td rowspan="4"></td>
		</tr>
		<tr>
			<td colspan="6"> Venta </td>
			<td colspan="2"> Consumo de hogar? </td>
			<td colspan="2"> Trueque? </td>
			<td colspan="2"> Otros? </td>
		</tr>
		<tr>
			<td rowspan="2"> Cant. Kilos </td>
			<td rowspan="2"> Monto Total S/. </td>
			<td colspan="4"> La venta la realizo en un mercado: </td>
			<td rowspan="2"> Cant. Kilos </td>
			<td rowspan="2"> Monto Total S/. </td>
			<td rowspan="2"> Cant. Kilos </td>
			<td rowspan="2"> Monto Total S/. </td>
			<td rowspan="2"> Cant. Kilos </td>
			<td rowspan="2"> Monto Total S/. </td>
		</tr>
		<tr>
			<td> local? </td>
			<td> Regional? </td>
			<td> Nacional? </td>
			<td> N.A? </td>
		</tr>
		
	</table>

	<table class="table table-bordered">
		<tr>
			<th> Seccion D. Gatos en sub-productos </th>
		</tr>
	</table>
	<table class="table table-bordered">
		<tr>
			<td> 1. En los ultimos 12 meses, gasto en: </td>
			<td align="right"> Valor S/. </td>
		</tr>
		<tr>
			<td> a.  Insumo y materia prima? </td>
			<td> <?php echo form_input($E1B_101_D_a); ?> </td>
		<tr>
			<td> b.  Emvases?(Bolsas, canastas) </td>
			<td> <?php echo form_input($E1B_101_D_b); ?> </td>
		</tr>
		<tr>
			<td> c.  Mano de obra? (ayudante, cargadores) </td>
			<td> <?php echo form_input($E1B_101_D_c); ?> </td>
		</tr>
		<tr>
			<td> d.  Transporte?(incluye fletes) </td>
			<td> <?php echo form_input($E1B_101_D_d); ?> </td>
		</tr>
		<tr>
			<td> e.  Mantenimiento/reparacion de vehiculo para uso exclusivo de la actividad?</td>
			<td> <?php echo form_input($E1B_101_D_e); ?> </td>
		</tr>
		<tr>
			<td> f.  Mantenimiento/reparacion de otros equipos?</td>
			<td> <?php echo form_input($E1B_101_D_f); ?> </td>
		</tr>
		<tr>
			<td> g.  Combustible?</td>
			<td> <?php echo form_input($E1B_101_D_g); ?> </td>
		</tr>
		<tr>
			<td> h.  otros? </td>
			<td> <?php echo form_input($E1B_101_D_h); ?> </td>
		</tr>
		<tr>
			<td> (Especifique) </td>
			<td> <?php echo form_input($E1B_101_D_h_O); ?> </td>
		</tr>
		<tr>
			<td align="center"> TOTAL </td>
			<td> <?php echo form_input($E1B_101_D_Total); ?> </td>
		</tr>
	</table>
	<table class="table table-bordered">
		<tr>
			<td align="center"> OBSERVACIONES <?php echo form_textarea($E1B_101_D_Obs); ?> </td>
		</tr>
	</table>
	<div class="row">
		<div class="pull-right">
			<?php echo form_submit($button_1B_100); ?>
		</div>
	</div>
<?php echo form_close(); ?>
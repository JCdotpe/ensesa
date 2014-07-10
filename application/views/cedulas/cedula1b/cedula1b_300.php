<!-- *********************** PREGUNTA 300 *********************** -->
<?php echo form_open('table1b_300') ?>

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

	$E1B_301_A = array(
				'id' => 'E1B_301_A', 
				'name' => 'E1B_301_A', 
				'class' => 'form-control'
				);

	$E1B_301_B_a = array(
						'id' => 'E1B_301_B_a',
						'name' => 'E1B_301_B_a',
						'class' => 'form-control'
					);

	$E1B_301_B_b = array(
						'id' => 'E1B_301_B_b',
						'name' => 'E1B_301_B_b',
						'class' => 'form-control'
					);

	$E1B_301_B_c = array(
						'id' => 'E1B_301_B_c',
						'name' => 'E1B_301_B_c',
						'class' => 'form-control'
					);

	$E1B_301_B_d = array(
						'id' => 'E1B_301_B_d',
						'name' => 'E1B_301_B_d',
						'class' => 'form-control'
					);

	$E1B_301_B_e = array(
						'id' => 'E1B_301_B_e',
						'name' => 'E1B_301_B_e',
						'class' => 'form-control'
					);

	$E1B_301_B_f = array(
						'id' => 'E1B_301_B_f',
						'name' => 'E1B_301_B_f',
						'class' => 'form-control'
					);

	$E1B_301_B_g = array(
						'id' => 'E1B_301_B_g',
						'name' => 'E1B_301_B_g',
						'class' => 'form-control'
					);

	$E1B_301_B_h = array(
						'id' => 'E1B_301_B_h',
						'name' => 'E1B_301_B_h',
						'class' => 'form-control'
					);

	$E1B_301_B_i = array(
						'id' => 'E1B_301_B_i',
						'name' => 'E1B_301_B_i',
						'class' => 'form-control'
					);

	$E1B_301_B_i_O = array(
						'id' => 'E1B_301_B_i_O',
						'name' => 'E1B_301_B_i_O',
						'class' => 'form-control'
					);

	$E1B_301_B_Total = array(
						'id' => 'E1B_301_B_Total',
						'name' => 'E1B_301_B_Total',
						'class' => 'form-control'
					);

	$E1B_301_B_Obs = array(
						'id' => 'E1B_301_B_Obs',
						'name' => 'E1B_301_B_Obs',
						'class' => 'form-control',
						'rows' => 2,
				        'cols' => 13
					);

	$E1B_301_C = array(
				'id' => 'E1B_301_C', 
				'name' => 'E1B_301_C', 
				'class' => 'form-control'
				);

	$E1B_301_D_a = array(
						'id' => 'E1B_301_D_a',
						'name' => 'E1B_301_D_a',
						'class' => 'form-control'
					);

	$E1B_301_D_b = array(
						'id' => 'E1B_301_D_b',
						'name' => 'E1B_301_D_b',
						'class' => 'form-control'
					);

	$E1B_301_D_c = array(
						'id' => 'E1B_301_D_c',
						'name' => 'E1B_301_D_c',
						'class' => 'form-control'
					);

	$E1B_301_D_d = array(
						'id' => 'E1B_301_D_d',
						'name' => 'E1B_301_D_d',
						'class' => 'form-control'
					);

	$E1B_301_D_e = array(
						'id' => 'E1B_301_D_e',
						'name' => 'E1B_301_D_e',
						'class' => 'form-control'
					);

	$E1B_301_D_f = array(
						'id' => 'E1B_301_D_f',
						'name' => 'E1B_301_D_f',
						'class' => 'form-control'
					);

	$E1B_301_D_g = array(
						'id' => 'E1B_301_D_g',
						'name' => 'E1B_301_D_g',
						'class' => 'form-control'
					);

	$E1B_301_D_h = array(
						'id' => 'E1B_301_D_h',
						'name' => 'E1B_301_D_h',
						'class' => 'form-control'
					);

	$E1B_301_D_h_O = array(
						'id' => 'E1B_301_D_h_O',
						'name' => 'E1B_301_D_h_O',
						'class' => 'form-control'
					);

	$E1B_301_D_Total = array(
						'id' => 'E1B_301_D_Total',
						'name' => 'E1B_301_D_Total',
						'class' => 'form-control'
					);

	$E1B_301_D_Obs = array(
						'id' => 'E1B_301_D_Obs',
						'name' => 'E1B_301_D_Obs',
						'class' => 'form-control',
						'rows' => 2,
				        'cols' => 13
					);

	$button_1B_300 = array(
						'id' => 'button_1B_300',
						'name' => 'button_1B_300',
						'class' => 'btn btn-primary',
						'value' => 'Guardar',
					);
	?>

	<table class="table table-bordered">
		<tr>
			<td> 1. En los ultimos 12 meses, de </td>
			<td> mes / anio </td>
			<td align="center"> a </td>
			<td> mes / anio </td>
			<td align="center"> ¿pesco? </td>
			<td> <?php echo form_input($E1B_301_A); ?> </td>
		</tr>
	</table>

	<table class="table table-bordered">
		<tr>
			<td rowspan="4"> Nro de orden </td>
			<td rowspan="4"> 1A. ¿Que especies obtubo de la pesca? </td>
			<td rowspan="4"> 1B. Peso total (En Kilos) </td>
			<td colspan="14" align="center"> 1C. Del total de la pesca en rio,¿Cuantos destino para: </td>
		</tr>
		<tr>
			<td colspan="6"> Venta </td>
			<td colspan="2"> Consumo de hogar? </td>
			<td colspan="2"> Trueque? </td>
			<td colspan="2"> Elaboracion de subproductos? </td>
			<td colspan="2"> Otros? </td>
		</tr>
		<tr>
			<td rowspan="2"> Cant. Kilo </td>
			<td rowspan="2"> Monto Total S/. </td>
			<td colspan="4"> La venta la realizo en un mercado: </td>
			<td rowspan="2"> Cant. Kilo </td>
			<td rowspan="2"> Monto Total S/. </td>
			<td rowspan="2"> Cant. Kilo </td>
			<td rowspan="2"> Monto Total S/. </td>
			<td rowspan="2"> Cant. Kilo </td>
			<td rowspan="2"> Monto Total S/. </td>
			<td rowspan="2"> Cant. Kilo </td>
			<td rowspan="2"> Monto Total S/. </td>
		</tr>
		<tr>
			<td> local? </td>
			<td> Regional? </td>
			<td> Nacional? </td>
			<td> N.A? </td>
		</tr>
		<tr>
			<td> <input type="text" id="E1B_Tipo_Nro_9" name="E1B_Tipo_Nro[]" class="form-control" value="" readonly /> </td>
			<td> <input type="text" id="E1B_1A_Nombre_9" name="E1B_1A_Nombre[]" class="form-control" value="" /> </td>
			<td> <input type="text" id="E1B_1C_Peso_9" name="E1B_1C_Peso[]" class="form-control" value="" /> </td>
			<td> <input type="text" id="E1B_1D_Venta_K_9" name="E1B_1D_Venta_K[]" class="form-control" value="" /> </td>
			<td> <input type="text" id="E1B_1D_Venta_T_9" name="E1B_1D_Venta_T[]" class="form-control" value="" /> </td>

			<td> <input type="text" id="E1B_1D_Venta_M_Local_9" name="E1B_1D_Venta_M_Local[]" class="form-control" value="" /> </td>
			<td> <input type="text" id="E1B_1D_Venta_M_Region_9" name="E1B_1D_Venta_M_Region[]" class="form-control" value="" /> </td>
			<td> <input type="text" id="E1B_1D_Venta_M_Nacion_9" name="E1B_1D_Venta_M_Nacion[]" class="form-control" value="" /> </td>
			<td> <input type="text" id="E1B_1D_Venta_M_NA_9" name="E1B_1D_Venta_M_NA[]" class="form-control" value="" /> </td>

			<td> <input type="text" id="E1B_1D_Consumo_K_9" name="E1B_1D_Consumo_K[]" class="form-control" value="" /> </td>
			<td> <input type="text" id="E1B_1D_Consumo_T_9" name="E1B_1D_Consumo_T[]" class="form-control" value="" /> </td>
			<td> <input type="text" id="E1B_1D_Trueque_K_9" name="E1B_1D_Trueque_K[]" class="form-control" value="" /> </td>
			<td> <input type="text" id="E1B_1D_Trueque_T_9" name="E1B_1D_Trueque_T[]" class="form-control" value="" /> </td>
			<td> <input type="text" id="E1B_1D_Sub_K_9" name="E1B_1D_Sub_K[]" class="form-control" value="" /> </td>
			<td> <input type="text" id="E1B_1D_Sub_T_9" name="E1B_1D_Sub_T[]" class="form-control" value="" /> </td>
			<td> <input type="text" id="E1B_1D_Otro_K_9" name="E1B_1D_Otro_K[]" class="form-control" value="" /> </td>
			<td> <input type="text" id="E1B_1D_Otro_T_9" name="E1B_1D_Otro_T[]" class="form-control" value="" /> </td>
		</tr>
		<tr>
			<td> <input type="text" id="E1B_Tipo_Nro_10" name="E1B_Tipo_Nro[]" class="form-control" value="" readonly /> </td>
			<td> <input type="text" id="E1B_1A_Nombre_10" name="E1B_1A_Nombre[]" class="form-control" value="" /> </td>
			<td> <input type="text" id="E1B_1C_Peso_10" name="E1B_1C_Peso[]" class="form-control" value="" /> </td>
			<td> <input type="text" id="E1B_1D_Venta_K_10" name="E1B_1D_Venta_K[]" class="form-control" value="" /> </td>
			<td> <input type="text" id="E1B_1D_Venta_T_10" name="E1B_1D_Venta_T[]" class="form-control" value="" /> </td>

			<td> <input type="text" id="E1B_1D_Venta_M_Local_10" name="E1B_1D_Venta_M_Local[]" class="form-control" value="" /> </td>
			<td> <input type="text" id="E1B_1D_Venta_M_Region_10" name="E1B_1D_Venta_M_Region[]" class="form-control" value="" /> </td>
			<td> <input type="text" id="E1B_1D_Venta_M_Nacion_10" name="E1B_1D_Venta_M_Nacion[]" class="form-control" value="" /> </td>
			<td> <input type="text" id="E1B_1D_Venta_M_NA_10" name="E1B_1D_Venta_M_NA[]" class="form-control" value="" /> </td>

			<td> <input type="text" id="E1B_1D_Consumo_K_10" name="E1B_1D_Consumo_K[]" class="form-control" value="" /> </td>
			<td> <input type="text" id="E1B_1D_Consumo_T_10" name="E1B_1D_Consumo_T[]" class="form-control" value="" /> </td>
			<td> <input type="text" id="E1B_1D_Trueque_K_10" name="E1B_1D_Trueque_K[]" class="form-control" value="" /> </td>
			<td> <input type="text" id="E1B_1D_Trueque_T_10" name="E1B_1D_Trueque_T[]" class="form-control" value="" /> </td>
			<td> <input type="text" id="E1B_1D_Sub_K_10" name="E1B_1D_Sub_K[]" class="form-control" value="" /> </td>
			<td> <input type="text" id="E1B_1D_Sub_T_10" name="E1B_1D_Sub_T[]" class="form-control" value="" /> </td>
			<td> <input type="text" id="E1B_1D_Otro_K_10" name="E1B_1D_Otro_K[]" class="form-control" value="" /> </td>
			<td> <input type="text" id="E1B_1D_Otro_T_10" name="E1B_1D_Otro_T[]" class="form-control" value="" /> </td>
		</tr>
	</table>
	<table class="table table-bordered">
		<tr>
			<th>Seccion B. Gastos la pesca</th>
		</tr>
	</table>

	<table class="table table-bordered">
		<tr>
			<td colspan="2"> 1. En los ultimos 12 meses, gasto en: </td>
		</tr>
		<tr>
			<td>
				<table class="table">
					<tr>	
						<td colspan="2" align="right"> Valor S/. </td>
					</tr>
					<tr>
						<td> a.  Cables, redes? </td>
						<td> <?php echo form_input($E1B_301_B_a); ?> </td>
					</tr>
					<tr>
						<td> b.  Anzuelo? </td>
						<td> <?php echo form_input($E1B_301_B_b); ?> </td>
					</tr>
					<tr>
						<td> c.  Envases? (Bolsas, canastas) </td>
						<td> <?php echo form_input($E1B_301_B_c); ?> </td>
					</tr>
					<tr>
						<td> d.  Mano de obra? (Ayudantes cargadores) </td>
						<td> <?php echo form_input($E1B_301_B_d); ?> </td>
					</tr>
					<tr>
						<td> e.  Mantenimiento/reparacion de vehiculo para uso exclusivo de la actividad?</td>
						<td> <?php echo form_input($E1B_301_B_e); ?> </td>
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
						<td> <?php echo form_input($E1B_301_B_f); ?> </td>
					</tr>
					<tr>
						<td> g.  Mantenimiento/reparacion de otros equipos? </td>
						<td> <?php echo form_input($E1B_301_B_g); ?> </td>
				    </tr>
					<tr>
						<td> h. Combustible? </td>
						<td> <?php echo form_input($E1B_301_B_h); ?> </td>
					</tr>
					<tr>
						<td> i. Otros? </td>
						<td> <?php echo form_input($E1B_301_B_i); ?> </td>
					</tr>
					<tr>
						<td> (especifique) </td>
						<td> <?php echo form_input($E1B_301_B_i_O); ?> </td>
					</tr>
					<tr>	
						<td align="center"> TOTAL </td>
						<td> <?php echo form_input($E1B_301_B_Total); ?> </td>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<table width="100%">
					<tr>
						<td> OBSERVACIONES <?php echo form_textarea($E1B_301_B_Obs); ?> </td>
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
			<td> 1. En los ultimos 12 meses, de </td>
			<td> mes / anio </td>
			<td align="center"> a </td>
			<td> mes / anio </td>
			<td align="center"> ¿Elaboro subproductos tales como: Sabalo ahumado, paiche salado, etc.? </td>
			<td> <?php echo form_input($E1B_301_C); ?> </td>
		</tr>
	</table>

	<table class="table table-bordered">
		<tr>
			<td rowspan="4"> Nro de orden </td>
			<td rowspan="4"> 1A. ¿Que sub-producto elaboro? </td>
			<td rowspan="4"> 1B. ¿Peso total?(Kilos) </td>
			<td colspan="12" align="center"> 1C. Del total del sub-producto,¿Cuanto destino para: </td>
		</tr>
		<tr>
			<td colspan="6"> Venta </td>
			<td colspan="2"> Consumo de hogar? </td>
			<td colspan="2"> Trueque? </td>
			<td colspan="2"> Otros? </td>
		</tr>
		<tr>
			<td rowspan="2"> Cant. Kilo </td>
			<td rowspan="2"> Monto Total S/. </td>
			<td colspan="4"> La venta la realizo en un mercado: </td>
			<td rowspan="2"> Cant. Kilo </td>
			<td rowspan="2"> Monto Total S/. </td>
			<td rowspan="2"> Cant. Kilo </td>
			<td rowspan="2"> Monto Total S/. </td>
			<td rowspan="2"> Cant. Kilo </td>
			<td rowspan="2"> Monto Total S/. </td>
		</tr>
		<tr>
			<td> local? </td>
			<td> regional? </td>
			<td> nacional? </td>
			<td> N.A? </td>
		</tr>
		<tr>
			<td> <input type="text" id="E1B_Tipo_Nro_11" name="E1B_Tipo_Nro[]" class="form-control" value="" readonly /> </td>
			<td> <input type="text" id="E1B_1A_Nombre_11" name="E1B_1A_Nombre[]" class="form-control" value="" /> </td>
			<td> <input type="text" id="E1B_1C_Peso_11" name="E1B_1C_Peso[]" class="form-control" value="" /> </td>
			<td> <input type="text" id="E1B_1D_Venta_K_11" name="E1B_1D_Venta_K[]" class="form-control" value="" /> </td>
			<td> <input type="text" id="E1B_1D_Venta_T_11" name="E1B_1D_Venta_T[]" class="form-control" value="" /> </td>

			<td> <input type="text" id="E1B_1D_Venta_M_Local_11" name="E1B_1D_Venta_M_Local[]" class="form-control" value="" /> </td>
			<td> <input type="text" id="E1B_1D_Venta_M_Region_11" name="E1B_1D_Venta_M_Region[]" class="form-control" value="" /> </td>
			<td> <input type="text" id="E1B_1D_Venta_M_Nacion_11" name="E1B_1D_Venta_M_Nacion[]" class="form-control" value="" /> </td>
			<td> <input type="text" id="E1B_1D_Venta_M_NA_11" name="E1B_1D_Venta_M_NA[]" class="form-control" value="" /> </td>

			<td> <input type="text" id="E1B_1D_Consumo_K_11" name="E1B_1D_Consumo_K[]" class="form-control" value="" /> </td>
			<td> <input type="text" id="E1B_1D_Consumo_T_11" name="E1B_1D_Consumo_T[]" class="form-control" value="" /> </td>
			<td> <input type="text" id="E1B_1D_Trueque_K_11" name="E1B_1D_Trueque_K[]" class="form-control" value="" /> </td>
			<td> <input type="text" id="E1B_1D_Trueque_T_11" name="E1B_1D_Trueque_T[]" class="form-control" value="" /> </td>
			<td> <input type="text" id="E1B_1D_Otro_K_11" name="E1B_1D_Otro_K[]" class="form-control" value="" /> </td>
			<td> <input type="text" id="E1B_1D_Otro_T_11" name="E1B_1D_Otro_T[]" class="form-control" value="" /> </td>
		</tr>
		<tr>
			<td> <input type="text" id="E1B_Tipo_Nro_12" name="E1B_Tipo_Nro[]" class="form-control" value="" readonly /> </td>
			<td> <input type="text" id="E1B_1A_Nombre_12" name="E1B_1A_Nombre[]" class="form-control" value="" /> </td>
			<td> <input type="text" id="E1B_1C_Peso_12" name="E1B_1C_Peso[]" class="form-control" value="" /> </td>
			<td> <input type="text" id="E1B_1D_Venta_K_12" name="E1B_1D_Venta_K[]" class="form-control" value="" /> </td>
			<td> <input type="text" id="E1B_1D_Venta_T_12" name="E1B_1D_Venta_T[]" class="form-control" value="" /> </td>

			<td> <input type="text" id="E1B_1D_Venta_M_Local_12" name="E1B_1D_Venta_M_Local[]" class="form-control" value="" /> </td>
			<td> <input type="text" id="E1B_1D_Venta_M_Region_12" name="E1B_1D_Venta_M_Region[]" class="form-control" value="" /> </td>
			<td> <input type="text" id="E1B_1D_Venta_M_Nacion_12" name="E1B_1D_Venta_M_Nacion[]" class="form-control" value="" /> </td>
			<td> <input type="text" id="E1B_1D_Venta_M_NA_12" name="E1B_1D_Venta_M_NA[]" class="form-control" value="" /> </td>

			<td> <input type="text" id="E1B_1D_Consumo_K_12" name="E1B_1D_Consumo_K[]" class="form-control" value="" /> </td>
			<td> <input type="text" id="E1B_1D_Consumo_T_12" name="E1B_1D_Consumo_T[]" class="form-control" value="" /> </td>
			<td> <input type="text" id="E1B_1D_Trueque_K_12" name="E1B_1D_Trueque_K[]" class="form-control" value="" /> </td>
			<td> <input type="text" id="E1B_1D_Trueque_T_12" name="E1B_1D_Trueque_T[]" class="form-control" value="" /> </td>
			<td> <input type="text" id="E1B_1D_Otro_K_12" name="E1B_1D_Otro_K[]" class="form-control" value="" /> </td>
			<td> <input type="text" id="E1B_1D_Otro_T_12" name="E1B_1D_Otro_T[]" class="form-control" value="" /> </td>
		</tr>
	</table>
	<table class="table table-bordered">
		<tr>
			<th>Seccion D. Gatos en subproductos</th>
		</tr>
	</table>
	<table class="table table-bordered">
		<tr>
			<td> 1. En los ultimos 12 meses, gasto en: </td>
			<td align="right"> Valor S/. </td>
		</tr>
		<tr>
			<td> a.  Insumo y materia prima? </td>
			<td> <?php echo form_input($E1B_301_D_a); ?> </td>
		<tr>
			<td> b.  Emvases?(Bolsas, canastas) </td>
			<td> <?php echo form_input($E1B_301_D_b); ?> </td>
		</tr>
		<tr>
			<td> c.  Mano de obra? (ayudante, cargadores) </td>
			<td> <?php echo form_input($E1B_301_D_c); ?> </td>
		</tr>
		<tr>
			<td> d.  Transporte?(incluye fletes) </td>
			<td> <?php echo form_input($E1B_301_D_d); ?> </td>
		</tr>
		<tr>
			<td> e.  Mantenimiento/reparacion de vehiculo para uso exclusivo de la actividad?</td>
			<td> <?php echo form_input($E1B_301_D_e); ?> </td>
		</tr>
		<tr>
			<td> f.  Mantenimiento/reparacion de otros equipos? </td>
			<td> <?php echo form_input($E1B_301_D_f); ?> </td>
		</tr>
		<tr>
			<td> g.  Combustible?</td>
			<td> <?php echo form_input($E1B_301_D_g); ?> </td>
		</tr>
		<tr>
			<td> h.  otros? </td>
			<td> <?php echo form_input($E1B_301_D_h); ?> </td>
		</tr>
		<tr>
			<td> (Especifique) </td>
			<td> <?php echo form_input($E1B_301_D_h_O); ?> </td>
		</tr>
		<tr>
			<td align="center"> TOTAL </td>
			<td> <?php echo form_input($E1B_301_D_Total); ?> </td>
		</tr>
	</table>
	<table class="table table-bordered">
		<tr>
			<td align="center"> OBSERVACIONES <?php echo form_textarea($E1B_301_D_Obs); ?> </td>
		</tr>
	</table>
	<div class="row">
		<div class="pull-right">
			<?php echo form_submit($button_1B_300); ?>
		</div>
	</div>

<?php echo form_close(); ?>

<?php
$total_hectareas = array(
				'id' => 'total_hectareas',
				'name' => 'total_hectareas',
				'class' => 'form-control',
			);
$cantidad_hectareas = array(
				'id' => 'cantidad_hectareas',
				'name' => 'cantidad_hectareas',
				'class' => 'form-control',
			);

$especifique = array(
				'id' => 'especifique',
				'name' => 'especifique',
				'class' => 'form-control',
			);
$provincia = array(
				'id' => 'provincia',
				'name' => 'provincia',
				'class' => 'form-control',
			);
$distrito = array(
				'id' => 'distrito',
				'name' => 'distrito',
				'class' => 'form-control',
			);
$ciudad_comunidad = array(
				'id' => 'ciudad_comunidad',
				'name' => 'ciudad_comunidad',
				'class' => 'form-control',
			);

$observaciones = array(
				'id' => 'observaciones',
				'name' => 'observaciones',
				'class' => 'form-control',
			);
$rpta = array(
				'id' => 'rpta',
				'name' => 'rpta',
				'class' => 'form-control',
			);
$rpta2 = array(
				'id' => 'rpta2',
				'name' => 'rpta2',
				'class' => 'form-control',
			);
$cod_campo = array(
				'id' => 'cod_campo',
				'name' => 'cod_campo',
				'class' => 'form-control',
			);
$actividad_economica = array(
				'id' => 'actividad_economica',
				'name' => 'actividad_economica',
				'class' => 'form-control',
			);

?>


<table class="table table-bordered">
<tr>
	<tr>
		<th colspan="4"><center> 600. ACTIVIDADES ECONÓMICAS QUE SE DESARROLLAN EN LA COMUNIDAD 111111<center></th>
	</tr>
</tr>
</table>

<table class="table table-bordered">

	<tr>
		<th colspan="2">601. CUANTAS HECTAREAS EN TOTAL TIENE LA COMUNIDAD?<p> Total de Hectáreas<?php echo form_input($total_hectareas);?></th>
		<th rowspan ="2">603. CUANTAS HECTAREAS ESTAN DESTINADAS A LA:
			<table class="table table-bordered">
				<tr>
					<th><center>Actividades Economicas</center></th>
					<th><center>Cantidad de Hectáreas</center></th>
				</tr>
				<tr>
					<td>1. Agricultura? </td>
					<td><?php echo form_input($cantidad_hectareas);?></td>
				</tr>
				<tr>
					<td>2. Ganaderia?</td>
					<td><?php echo form_input($cantidad_hectareas);?></td>

				</tr>
				<tr>
					<td>3. Extraccion de Madera?</td>
					<td><?php echo form_input($cantidad_hectareas);?></td>
				</tr>
				<tr>
					<td>4. Otra Actividad? <p> Especifique <?php echo form_input($especifique);?> </td>
					<td><?php echo form_input($cantidad_hectareas);?></td>
				</tr>
				<tr>
					<td>5. Otra Actividad?<p> Especifique <?php echo form_input($especifique);?></td>
					<td><?php echo form_input($cantidad_hectareas);?></td>
				</tr>
				<tr>
					<td>6. Otra Actividad?<p> Especifique <?php echo form_input($especifique);?></td>
					<td><?php echo form_input($cantidad_hectareas);?></td>
				</tr>

			</table>	

		</th>
	</tr>

	<tr>
		<th colspan="2">602. CUANTAS HECTAREAS SON PARA LA CONSERVACION DE BOSQUES? <p>Total de Hectareas <?php echo form_input($total_hectareas); ?> </th>
	</tr>
	<tr>
		<th colspan ="3">604. A QUE LUGAR ACUDEN REGULARMENTE:
	<table class="table table-bordered">
		<th>Detalle</th>
		<th>Provincia</th>
		<th>Distrito</th>
		<th>(Centro Poblado) Ciudad /Comunidad</th>
		<th>En la misma comunidad</th>

		<tr>
			<td>1. Los miembros de la comunidad para realizar sus compras?</td>
			<td><?php echo form_input ($provincia); ?></td>
			<td><?php echo form_input ($distrito); ?></td>
			<td><?php echo form_input ($ciudad_comunidad); ?></td>
			<td><center>1</cente></td>
		</tr>
		<tr>
			<td>2. Los miembros de la comunidad para vender sus productos agricolas</td>
			<td><?php echo form_input ($provincia); ?></td>
			<td><?php echo form_input ($distrito); ?></td>
			<td><?php echo form_input ($ciudad_comunidad); ?></td>
			<td><center>1</cente></td>
		</tr>
	</table>
		</th>
	</tr>
</table>

<table class ="table table-bordered">
	<tr>
	<th>OBSERVACIONES: </th>
	</tr>
	<tr>
	<td> <?php echo form_input ($observaciones); ?></th>
	</tr>
</table>

<table class = "table table-bordered">
<table class = "table table-bordered">

	<tr>
		<th colspan ="3"><center>605. LAS ACTIVIDADES ECONOMICAS QUE REALIZAN LOS MIEMBROS DE SU COMUNIDAD SON:</center></th>
		<th colspan ="3"><center>606. QUE DESTINO TIENE?</center></th>
		<th><center>607. EN QUE MERCADO SE VENDE: (Acepte una o más alternativas) <p> Local?............1 <p> Regional?......2 <p> Nacional.........3<center></th>
	</tr>
	<tr>
		<th> </th>
		<th><center>SI</center></th>
		<th><center>NO</center></th>
		<th> <center>Venta</center></th>
		<th><center>Autoconsumo</center></th>
		<th><center>Trueque</center></th>
		<th> <center> Código</center></th>
	</tr>
	<tr>
		<td>1. ¿Agricultura?</td>
		<td> <?php echo form_input ($rpta); ?></td>
		<td> <?php echo form_input ($rpta); ?></td>
		<td> <?php echo form_input ($rpta2); ?></td>
		<td> <?php echo form_input ($rpta2); ?></td>
		<td> <?php echo form_input ($rpta2); ?></td>
		<td> <?php echo form_input ($cod_campo); ?></td>
	</tr>
	<tr>
		<td>2. ¿Pesca?</td>
		<td> <?php echo form_input ($rpta); ?></td>
		<td> <?php echo form_input ($rpta); ?></td>
		<td> <?php echo form_input ($rpta2); ?></td>
		<td> <?php echo form_input ($rpta2); ?></td>
		<td> <?php echo form_input ($rpta2); ?></td>
		<td> <?php echo form_input ($cod_campo); ?></td>
	</tr>
	<tr>
		<td>3. ¿Acuicultura?</td>
		<td> <?php echo form_input ($rpta); ?></td>
		<td> <?php echo form_input ($rpta); ?></td>
		<td> <?php echo form_input ($rpta2); ?></td>
		<td> <?php echo form_input ($rpta2); ?></td>
		<td> <?php echo form_input ($rpta2); ?></td>
		<td> <?php echo form_input ($cod_campo); ?></td>
	</tr>
	<tr>
		<td>4. ¿Extraccion de madera?</td>
		<td> <?php echo form_input ($rpta); ?></td>
		<td> <?php echo form_input ($rpta); ?></td>
		<td> <?php echo form_input ($rpta2); ?></td>
		<td> <?php echo form_input ($rpta2); ?></td>
		<td> <?php echo form_input ($rpta2); ?></td>
		<td> <?php echo form_input ($cod_campo); ?></td>
	</tr>
	<tr>
		<td>5. ¿Recolección de frutos, hojas,etc...?</td>
		<td> <?php echo form_input ($rpta); ?></td>
		<td> <?php echo form_input ($rpta); ?></td>
		<td> <?php echo form_input ($rpta2); ?></td>
		<td> <?php echo form_input ($rpta2); ?></td>
		<td> <?php echo form_input ($rpta2); ?></td>
		<td> <?php echo form_input ($cod_campo); ?></td>
	</tr>
	<tr>
		<td>6.¿Crianza de Animales?</td>
		<td> <?php echo form_input ($rpta); ?></td>
		<td> <?php echo form_input ($rpta); ?></td>
		<td> <?php echo form_input ($rpta2); ?></td>
		<td> <?php echo form_input ($rpta2); ?></td>
		<td> <?php echo form_input ($rpta2); ?></td>
		<td> <?php echo form_input ($cod_campo); ?></td>
	</tr>
	<tr>
		<td>7. ¿Caza de animales?</td>
		<td> <?php echo form_input ($rpta); ?></td>
		<td> <?php echo form_input ($rpta); ?></td>
		<td> <?php echo form_input ($rpta2); ?></td>
		<td> <?php echo form_input ($rpta2); ?></td>
		<td> <?php echo form_input ($rpta2); ?></td>
		<td> <?php echo form_input ($cod_campo); ?></td>
	</tr>
	<tr>
		<td>8. ¿Artesania?</td>
		<td> <?php echo form_input ($rpta); ?></td>
		<td> <?php echo form_input ($rpta); ?></td>
		<td> <?php echo form_input ($rpta2); ?></td>
		<td> <?php echo form_input ($rpta2); ?></td>
		<td> <?php echo form_input ($rpta2); ?></td>
		<td> <?php echo form_input ($cod_campo); ?></td>
	</tr>
	<tr>
		<td>9. ¿Ecoturismo?</td>
		<td> <?php echo form_input ($rpta); ?></td>
		<td> <?php echo form_input ($rpta); ?></td>
		<td> <?php echo form_input ($rpta2); ?></td>
		<td> <?php echo form_input ($rpta2); ?></td>
		<td> <?php echo form_input ($rpta2); ?></td>
		<td> <?php echo form_input ($cod_campo); ?></td>
	</tr>
	<tr>
		<td>10. ¿Silvicultura?</td>
		<td> <?php echo form_input ($rpta); ?></td>
		<td> <?php echo form_input ($rpta); ?></td>
		<td> <?php echo form_input ($rpta2); ?></td>
		<td> <?php echo form_input ($rpta2); ?></td>
		<td> <?php echo form_input ($rpta2); ?></td>
		<td> <?php echo form_input ($cod_campo); ?></td>
	</tr>
	<tr>
		<td>11. ¿Agroforesteria?</td>
		<td> <?php echo form_input ($rpta); ?></td>
		<td> <?php echo form_input ($rpta); ?></td>
		<td> <?php echo form_input ($rpta2); ?></td>
		<td> <?php echo form_input ($rpta2); ?></td>
		<td> <?php echo form_input ($rpta2); ?></td>
		<td> <?php echo form_input ($cod_campo); ?></td>
	</tr>
	<tr>
		<td>12. ¿Otro? <p>Especifique <?php echo form_input ($especifique); ?></td>
		<td> <?php echo form_input ($rpta); ?></td>
		<td> <?php echo form_input ($rpta); ?></td>
		<td> <?php echo form_input ($rpta2); ?></td>
		<td> <?php echo form_input ($rpta2); ?></td>
		<td> <?php echo form_input ($rpta2); ?></td>
		<td> <?php echo form_input ($cod_campo); ?></td>
	</tr>
	<tr>
		<td>13. ¿Otro? <p>Especifique <?php echo form_input ($especifique); ?> </td>
		<td> <?php echo form_input ($rpta); ?></td>
		<td> <?php echo form_input ($rpta); ?></td>
		<td> <?php echo form_input ($rpta2); ?></td>
		<td> <?php echo form_input ($rpta2); ?></td>
		<td> <?php echo form_input ($rpta2); ?></td>
		<td> <?php echo form_input ($cod_campo); ?></td>
	</tr>
	<tr>
		<td>14. ¿Otro? <p>Especifique <?php echo form_input ($especifique); ?></td>
		<td> <?php echo form_input ($rpta); ?></td>
		<td> <?php echo form_input ($rpta); ?></td>
		<td> <?php echo form_input ($rpta2); ?></td>
		<td> <?php echo form_input ($rpta2); ?></td>
		<td> <?php echo form_input ($rpta2); ?></td>
		<td> <?php echo form_input ($cod_campo); ?></td>
	</tr>

</table>
	
	<tr>
		<th>608. DETALLE DE LOS PRODUCTOS PRINCIPALES QUE SE OBTIENEN DE LAS ACTIVIDADES ECONÓMICAS: (Anote en las lineas punteadas las actividades economicas y en los recuadros numerados subsiguientes, indicque los principales productos que se obtiene en cada actividad)</th>

	</tr>

	<table class = "table table-bordered">
		<tr>
			<th><center> Actividad Económica 1 </center></th>
			<th><center> Actividad Económica 2 </center></th>
			<th><center> Actividad Económica 3 </center></th>
			<th><center> Actividad Económica 4 </center></th>
		</tr>

		<tr>
			<td><?php echo form_input ($actividad_economica); ?></td>
			<td><?php echo form_input ($actividad_economica); ?></td>
			<td><?php echo form_input ($actividad_economica); ?></td>
			<td><?php echo form_input ($actividad_economica); ?></td>
		</tr>

		<tr>
			<td>1.<?php echo form_input ($actividad_economica); ?></td>
			<td>1.<?php echo form_input ($actividad_economica); ?></td>
			<td>1.<?php echo form_input ($actividad_economica); ?></td>
			<td>1.<?php echo form_input ($actividad_economica); ?></td>
		</tr>
		<tr>
			<td>2.<?php echo form_input ($actividad_economica); ?></td>
			<td>2.<?php echo form_input ($actividad_economica); ?></td>
			<td>2.<?php echo form_input ($actividad_economica); ?></td>
			<td>2.<?php echo form_input ($actividad_economica); ?></td>
		</tr>
		<tr>
			<td>3.<?php echo form_input ($actividad_economica); ?></td>
			<td>3.<?php echo form_input ($actividad_economica); ?></td>
			<td>3.<?php echo form_input ($actividad_economica); ?></td>
			<td>3.<?php echo form_input ($actividad_economica); ?></td>
		</tr>
		<tr>
			<td>4.<?php echo form_input ($actividad_economica); ?></td>
			<td>4.<?php echo form_input ($actividad_economica); ?></td>
			<td>4.<?php echo form_input ($actividad_economica); ?></td>
			<td>4.<?php echo form_input ($actividad_economica); ?></td>
		</tr>
		<tr>
			<td>5.<?php echo form_input ($actividad_economica); ?></td>
			<td>5.<?php echo form_input ($actividad_economica); ?></td>
			<td>5.<?php echo form_input ($actividad_economica); ?></td>
			<td>5.<?php echo form_input ($actividad_economica); ?></td>
		</tr>

	</table>

	<table class = "table table-bordered">
		<tr>
			<th><center>Actividad Económica 5</th>
			<th><center>Actividad Económica 6</th>
			<th><center>Actividad Económica 7</th>
			<th><center>Actividad Económica 8</th>
		</tr>
		<tr>
			<td><?php echo form_input ($actividad_economica); ?></td>
			<td><?php echo form_input ($actividad_economica); ?></td>
			<td><?php echo form_input ($actividad_economica); ?></td>
			<td><?php echo form_input ($actividad_economica); ?></td>
		</tr>

		<tr>
			<td>1.<?php echo form_input ($actividad_economica); ?></td>
			<td>1.<?php echo form_input ($actividad_economica); ?></td>
			<td>1.<?php echo form_input ($actividad_economica); ?></td>
			<td>1.<?php echo form_input ($actividad_economica); ?></td>
		</tr>
		<tr>
			<td>2.<?php echo form_input ($actividad_economica); ?></td>
			<td>2.<?php echo form_input ($actividad_economica); ?></td>
			<td>2.<?php echo form_input ($actividad_economica); ?></td>
			<td>2.<?php echo form_input ($actividad_economica); ?></td>
		</tr>
		<tr>
			<td>3.<?php echo form_input ($actividad_economica); ?></td>
			<td>3.<?php echo form_input ($actividad_economica); ?></td>
			<td>3.<?php echo form_input ($actividad_economica); ?></td>
			<td>3.<?php echo form_input ($actividad_economica); ?></td>
		</tr>
		<tr>
			<td>4.<?php echo form_input ($actividad_economica); ?></td>
			<td>4.<?php echo form_input ($actividad_economica); ?></td>
			<td>4.<?php echo form_input ($actividad_economica); ?></td>
			<td>4.<?php echo form_input ($actividad_economica); ?></td>
		</tr>
		<tr>
			<td>5.<?php echo form_input ($actividad_economica); ?></td>
			<td>5.<?php echo form_input ($actividad_economica); ?></td>
			<td>5.<?php echo form_input ($actividad_economica); ?></td>
			<td>5.<?php echo form_input ($actividad_economica); ?></td>
		</tr>


	</table>

</table>

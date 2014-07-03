
<?php
$pregunta_601 = array(
				'id' => 'pregunta_601',
				'name' => 'pregunta_601',
				'class' => 'form-control'
			);
$pregunta_602 = array(
				'id' => 'pregunta_602',
				'name' => 'pregunta_602',
				'class' => 'form-control'
			);

$pregunta_603_1 = array(
				'id' => 'pregunta_603_1',
				'name' => 'pregunta_603_1',
				'class' => 'form-control'
			);
$pregunta_603_2 = array(
				'id' => 'pregunta_603_2',
				'name' => 'pregunta_603_2',
				'class' => 'form-control'
			);
$pregunta_603_3 = array(
				'id' => 'pregunta_603_3',
				'name' => 'pregunta_603_3',
				'class' => 'form-control'
			);
$pregunta_603_4_especifique = array(
				'id' => 'pregunta_603_4_especifique',
				'name' => 'pregunta_603_4_especifique',
				'class' => 'form-control'
			);
$pregunta_603_4 = array(
				'id' => 'pregunta_603_4',
				'name' => 'pregunta_603_4',
				'class' => 'form-control'
			);
$pregunta_603_5_especifique = array(
				'id' => 'pregunta_603_5_especifique',
				'name' => 'pregunta_603_5_especifique',
				'class' => 'form-control'
			);
$pregunta_603_5 = array(
				'id' => 'pregunta_603_5',
				'name' => 'pregunta_603_5',
				'class' => 'form-control'
			);
$pregunta_603_6_especifique = array(
				'id' => 'pregunta_603_6_especifique',
				'name' => 'pregunta_603_6_especifique',
				'class' => 'form-control'
			);
$pregunta_603_6 = array(
				'id' => 'pregunta_603_6',
				'name' => 'pregunta_603_6',
				'class' => 'form-control'
			);

$pregunta_604_1_provincia = array(
				'id' => 'pregunta_604_1_provincia',
				'name' => 'pregunta_604_1_provincia',
				'class' => 'form-control'
			);
$pregunta_604_2_provincia = array(
				'id' => 'pregunta_604_2_provincia',
				'name' => 'pregunta_604_2_provincia',
				'class' => 'form-control'
			);
$pregunta_604_1_distrito = array(
				'id' => 'pregunta_604_1_distrito',
				'name' => 'pregunta_604_1_distrito',
				'class' => 'form-control'
			);
$pregunta_604_2_distrito = array(
				'id' => 'pregunta_604_2_distrito',
				'name' => 'pregunta_604_2_distrito',
				'class' => 'form-control'
			);
$pregunta_604_1_centro_poblado = array(
				'id' => 'pregunta_604_1_centro_poblado',
				'name' => 'pregunta_604_1_centro_poblado',
				'class' => 'form-control'
			);
$pregunta_604_2_centro_poblado = array(
				'id' => 'pregunta_604_1_centro_poblado',
				'name' => 'pregunta_604_1_centro_poblado',
				'class' => 'form-control'
			);

$pregunta_604_1_misma_comunidad = array(
				'id' => 'pregunta_604_1_misma_comunidad',
				'name' => 'pregunta_604_1_misma_comunidad',
				'class' => 'form-control'
			);
$pregunta_604_2_misma_comunidad = array(
				'id' => 'pregunta_604_2_misma_comunidad',
				'name' => 'pregunta_604_2_misma_comunidad',
				'class' => 'form-control'
			);



$provincia = array(
				'id' => 'provincia',
				'name' => 'provincia',
				'class' => 'form-control'
			);
$distrito = array(
				'id' => 'distrito',
				'name' => 'distrito',
				'class' => 'form-control'
			);
$ciudad_comunidad = array(
				'id' => 'ciudad_comunidad',
				'name' => 'ciudad_comunidad',
				'class' => 'form-control'
			);

$observaciones = array(
				'id' => 'observaciones',
				'name' => 'observaciones',
				'class' => 'form-control'
			);
$rpta = array(
				'id' => 'rpta',
				'name' => 'rpta',
				'class' => 'form-control'
			);
$rpta2 = array(
				'id' => 'rpta2',
				'name' => 'rpta2',
				'class' => 'form-control'
			);
$cod_campo = array(
				'id' => 'cod_campo',
				'name' => 'cod_campo',
				'class' => 'form-control'
			);
$actividad_economica = array(
				'id' => 'actividad_economica',
				'name' => 'actividad_economica',
				'class' => 'form-control'
			);
$nro_comunidad = array(
				'id' => 'nro_comunidad',
				'name' => 'nro_comunidad',
				'class' => 'form-control'
			);
$tecnicas_aprovechamiento = array(
				'id' => 'tecnicas_aprovechamiento',
				'name' => 'tecnicas_aprovechamiento',
				'class' => 'form-control'
			);
$n = array(
				'id' => 'n',
				'name' => 'n',
				'class' => 'form-control'
			);

?>

<!-- Inicio del CAP 600-->

<table class ="table table-bordered">
	<tr>
		<td> <!-- Lado Izquierdo -->
			<table class ="table table-bordered">
				<tr>
					<th colspan ="2">601. CUANTAS HECTAREAS EN TOTAL TIENE LA COMUNIDAD?</th>
				</tr>
				<tr>
					<th>Total de Hectáreas</th>
					<th><?php echo form_input ($observaciones); ?></th>
				</tr>

			</table>
			<table class ="table table-bordered">
				<tr>
					<th colspan ="2">602. CUANTAS HECTAREAS SON PARA LA CONSERVACIÓN DE BOSQUES?</th>
				</tr>
				<tr>
					<th>Total de Hectáreas</th>
					<th><?php echo form_input ($observaciones); ?></th>
				</tr>

			</table>

		</td>

		<td> <!-- Lado Derecho -->
			<table class ="table table-bordered">
				<tr>
					<th colspan ="2">603. CUANTAS HECTAREAS ESTÁN DESTINADAS A LA:</th>
				</tr>
				<tr>
					<th>Actividades Económicas</th>
					<th>Cantidad de Hectáreas</th>
				</tr>
				<tr>
					<td>1. Agricultura?</td>
					<td><?php echo form_input ($n); ?></td>
				</tr>
				<tr>
					<td>2. Ganaderia?</td>
					<td><?php echo form_input ($n); ?></td>
				</tr>
				<tr>
					<td>3. Extracción de Madera?</td>
					<td><?php echo form_input ($n); ?></td>
				</tr>
				<tr>
					<td>4. Otra Actividad? <?php echo form_input ($n); ?> (Especifique) </td>
					<td><?php echo form_input ($n); ?></td>
				</tr>
				<tr>
					<td>5. Otra Actividad? <?php echo form_input ($n); ?> (Especifique) </td>
					<td><?php echo form_input ($n); ?></td>
				</tr>
				<tr>
					<td>6. Otra Actividad? <?php echo form_input ($n); ?> (Especifique) </td>
					<td><?php echo form_input ($n); ?></td>
				</tr>
			</table>
		</td>
	</tr>
</table>

<table class ="table table-bordered">
	<tr>
	<th>OBSERVACIONES: </th>
	</tr>
	<tr>
	<td> <?php echo form_textarea ($observaciones); ?></th>
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
		<td>12. ¿Otro? <p>Especifique <?php echo form_input ($n); ?></td>
		<td> <?php echo form_input ($rpta); ?></td>
		<td> <?php echo form_input ($rpta); ?></td>
		<td> <?php echo form_input ($rpta2); ?></td>
		<td> <?php echo form_input ($rpta2); ?></td>
		<td> <?php echo form_input ($rpta2); ?></td>
		<td> <?php echo form_input ($cod_campo); ?></td>
	</tr>
	<tr>
		<td>13. ¿Otro? <p>Especifique <?php echo form_input ($n); ?> </td>
		<td> <?php echo form_input ($rpta); ?></td>
		<td> <?php echo form_input ($rpta); ?></td>
		<td> <?php echo form_input ($rpta2); ?></td>
		<td> <?php echo form_input ($rpta2); ?></td>
		<td> <?php echo form_input ($rpta2); ?></td>
		<td> <?php echo form_input ($cod_campo); ?></td>
	</tr>
	<tr>
		<td>14. ¿Otro? <p>Especifique <?php echo form_input ($n); ?></td>
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
			<td><?php echo form_input ($actividad_economica); ?></td>
			<td><?php echo form_input ($actividad_economica); ?></td>
			<td><?php echo form_input ($actividad_economica); ?></td>
			<td><?php echo form_input ($actividad_economica); ?></td>
		</tr>
		<tr>
			<td><?php echo form_input ($actividad_economica); ?></td>
			<td><?php echo form_input ($actividad_economica); ?></td>
			<td><?php echo form_input ($actividad_economica); ?></td>
			<td><?php echo form_input ($actividad_economica); ?></td>
		</tr>
		<tr>
			<td><?php echo form_input ($actividad_economica); ?></td>
			<td><?php echo form_input ($actividad_economica); ?></td>
			<td><?php echo form_input ($actividad_economica); ?></td>
			<td><?php echo form_input ($actividad_economica); ?></td>
		</tr>
		<tr>
			<td><?php echo form_input ($actividad_economica); ?></td>
			<td><?php echo form_input ($actividad_economica); ?></td>
			<td><?php echo form_input ($actividad_economica); ?></td>
			<td><?php echo form_input ($actividad_economica); ?></td>
		</tr>
		<tr>
			<td><?php echo form_input ($actividad_economica); ?></td>
			<td><?php echo form_input ($actividad_economica); ?></td>
			<td><?php echo form_input ($actividad_economica); ?></td>
			<td><?php echo form_input ($actividad_economica); ?></td>
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
			<td><?php echo form_input ($actividad_economica); ?></td>
			<td><?php echo form_input ($actividad_economica); ?></td>
			<td><?php echo form_input ($actividad_economica); ?></td>
			<td><?php echo form_input ($actividad_economica); ?></td>
		</tr>
		<tr>
			<td><?php echo form_input ($actividad_economica); ?></td>
			<td><?php echo form_input ($actividad_economica); ?></td>
			<td><?php echo form_input ($actividad_economica); ?></td>
			<td><?php echo form_input ($actividad_economica); ?></td>
		</tr>
		<tr>
			<td><?php echo form_input ($actividad_economica); ?></td>
			<td><?php echo form_input ($actividad_economica); ?></td>
			<td><?php echo form_input ($actividad_economica); ?></td>
			<td><?php echo form_input ($actividad_economica); ?></td>
		</tr>
		<tr>
			<td><?php echo form_input ($actividad_economica); ?></td>
			<td><?php echo form_input ($actividad_economica); ?></td>
			<td><?php echo form_input ($actividad_economica); ?></td>
			<td><?php echo form_input ($actividad_economica); ?></td>
		</tr>
		<tr>
			<td><?php echo form_input ($actividad_economica); ?></td>
			<td><?php echo form_input ($actividad_economica); ?></td>
			<td><?php echo form_input ($actividad_economica); ?></td>
			<td><?php echo form_input ($actividad_economica); ?></td>
		</tr>


	</table>

	<table class ="table table-bordered">
		<tr>
			<th>609. PARA REALIZAR SUS ACTIVIDADES ECONÓMICAS EN LA COMUNIDAD, REALIZAN LAS SIGUIENTES PRÁCTICAS: (Circule uno o más códigos)</th>
		</tr>
	</table>

	<table class = "table table-bordered">
		<td> <!-- Lado Izquierdo -->
			<table class ="table table-bordered">
				<tr>
					<td>Uso de abono /fertilizante químico?</td>
					<td><?php echo form_input ($n); ?></td>
				</tr>
				<tr>
					<td>Uso de pesticidas?</td>
					<td><?php echo form_input ($n); ?></td>
				</tr>
				<tr>
					<td>Uso de barbasco / huaca?</td>
					<td><?php echo form_input ($n); ?></td>
				</tr>
				<tr>
					<td>Roza / quema de árboles?</td>
					<td><?php echo form_input ($n); ?></td>
				</tr>
			</table>

		</td>

		<td> <!-- Lado Derecho -->
			<table class ="table table-bordered">
				<tr>
					<td>Otro <?php echo form_input ($n); ?> (Especifique)</td>
					<td><?php echo form_input ($n); ?></td>
				</tr>
				<tr>
					<td>Otro <?php echo form_input ($n); ?> (Especifique)</td>
					<td><?php echo form_input ($n); ?></td>
				</tr>
				<tr>
					<td>Otro <?php echo form_input ($n); ?> (Especifique)</td>
					<td><?php echo form_input ($n); ?></td>
				</tr>
			</table>

		</td>

	</table>

</table>

<table class = "table table-bordered">

	<tr>
		<th><center>700. CAPACITACION EN TÉCNICAS DE APROVECHAMIENTO SOSTENIBLE</center></th>
	</tr>

</table>

<table class = "table table-bordered">

	<tr>
		<td><b>APROVECHAMIENTO SOSTENIBLE:</b> Es el desarrollo que satisface las necesidades actuales de las personas sin comprometer la capacidad de las futuras generaciones para satidfacer las suyas.</td>
	</tr>

</table>
<!--
<table class = "table table-bordered">
	<tr>
		<th colspan = "2">701. EN LOS ULTIMOS 2 AÑOS ¿LA COMUNIDAD HA RECIBIDO CAPACITACION EN TÉCNICAS DE APROVECHAMIENTO SOSTENIBLE?</th>
	</tr>
	<tr>
		<td>SI <?php echo form_input ($actividad_economica); ?></td>
		<td>NO <?php echo form_input ($actividad_economica); ?></td>
	</tr>

		<table class ="table table-bordered"> 
			<tr>
				<th>702. ¿LA(S) INSTITUCION(ES) U ORGANIZACIÓN(ES) QUE HAN BRINDADO ESTAS TÉCNICAS SON: (Lea cada alternativa y circule uno o mas codigos)</th>
				<th>703.¿QUÉ TECNICAS DE APROVECHAMIENTO SOSTENIBLE RECIBIO?</th>
			</tr>

			<tr>
				<td>1. Programa Nacional de Bosques?</td>
				<td><?php echo form_input ($tecnicas_aprovechamiento); ?></td>
			</tr>
			<tr>
				<td>2. Servicio Nacional de Area Naturales Protegidas por el estado - SERNANP?</td>
				<td><?php echo form_input ($tecnicas_aprovechamiento); ?></td>
			</tr>
			<tr>
				<td>3. Ministerio de Agricultura?</td>
				<td><?php echo form_input ($tecnicas_aprovechamiento); ?></td>
			</tr>
			<tr>
				<td>4. Gobierno Regional?</td>
				<td><?php echo form_input ($tecnicas_aprovechamiento); ?></td>
			</tr>
			<tr>
				<td>5. Gobierno Provincial?</td>
				<td><?php echo form_input ($tecnicas_aprovechamiento); ?></td>
			</tr>
			<tr>
				<td>6. Gobierno Distrital / Local?</td>
				<td><?php echo form_input ($tecnicas_aprovechamiento); ?></td>
			</tr>
			<tr>
				<td>7. Organizacion no Gubernamental - ONG?</td>
				<td><?php echo form_input ($tecnicas_aprovechamiento); ?></td>
			</tr>
			<tr>
				<td><p>8. Otro - Especifique<?php echo form_input ($n); ?></td>
				<td><?php echo form_input ($tecnicas_aprovechamiento); ?></td>
			</tr>

		</table>
</table>
-->

<table = class =" table table-bordered">
	<tr>
		<td> <!-- Lado Izquierdo -->
			<table class ="table">
				<tr>
					<th colspa="2">702.¿LA(S) INSTITUCION(ES) U ORGANIZACIÓN(ES) QUE HAN BRINDADO ESTAS TÉCNICAS SON: (Lea cada alternativa y circule uno o mas codigos)</th>
				</tr>
				<tr>
					<td>1. Programa Nacional de Bosques?</td>
					<td><?php echo form_input ($tecnicas_aprovechamiento); ?></td>
				</tr>
				<tr>
					<td>2. Servicio Nacional de Area Naturales Protegidas por el estado - SERNANP?</td>
					<td><?php echo form_input ($tecnicas_aprovechamiento); ?></td>
				</tr>
				<tr>
					<td>3. Ministerio de Agricultura?</td>
					<td><?php echo form_input ($tecnicas_aprovechamiento); ?></td>
				</tr>
				<tr>
					<td>4. Gobierno Regional?</td>
					<td><?php echo form_input ($tecnicas_aprovechamiento); ?></td>
				</tr>
				<tr>
					<td>5. Gobierno Provincial?</td>
					<td><?php echo form_input ($tecnicas_aprovechamiento); ?></td>
				</tr>
				<tr>
					<td>6. Gobierno Distrital / Local?</td>
					<td><?php echo form_input ($tecnicas_aprovechamiento); ?></td>
				</tr>
				<tr>
					<td>7. Organizacion no Gubernamental - ONG?</td>
					<td><?php echo form_input ($tecnicas_aprovechamiento); ?></td>
				</tr>
				<tr>
					<td><p>8. Otro - Especifique<?php echo form_input ($n); ?></td>
					<td><?php echo form_input ($tecnicas_aprovechamiento); ?></td>
				</tr>
			</table>
		</td>

		<td> <!-- Lado Derecho -->
			<table class ="table">
				<tr>
					<th>703.¿QUÉ TECNICAS DE APROVECHAMIENTO SOSTENIBLE RECIBIO?</th>
				</tr>
				<tr>
					<td><?php echo form_input ($tecnicas_aprovechamiento); ?></td>
				</tr>
				<tr>
					<td><?php echo form_input ($tecnicas_aprovechamiento); ?></td>
				</tr>
				<tr>
					<td><?php echo form_input ($tecnicas_aprovechamiento); ?></td>
				</tr>
				<tr>
					<td><?php echo form_input ($tecnicas_aprovechamiento); ?></td>
				</tr>
				<tr>
					<td><?php echo form_input ($tecnicas_aprovechamiento); ?></td>
				</tr>
				<tr>
					<td><?php echo form_input ($tecnicas_aprovechamiento); ?></td>
				</tr>
				<tr>
					<td><?php echo form_input ($tecnicas_aprovechamiento); ?></td>
				</tr>
				<tr>
					<td><?php echo form_input ($tecnicas_aprovechamiento); ?></td>
				</tr>

			</table>

		</td>

	</tr>

</table>



<table class="table table-bordered">
	<tr>
		<th><center>800. ACTIVIDADES SOSTENIBLES QUE DESARROLLAN EN LA COMUNIDAD</center></th>
	</tr>
</table>

<table class ="table table-bordered">
	<tr><th colspan ="2">801.  LAS SIGUIENTES PRÁCTICAS SE DESARROLLAN EN SU COMUNIDAD:</th></tr>
	<tr>
		<td><!-- Lado Izquierdo -->

			<table class ="table">
				<tr>
					<th> </th>
					<th>SI / NO</th>
				</tr>
				<tr>
					<td>1. ¿Censo de especies? </td>
					<td><?php echo form_input ($rpta2); ?></td>
				</tr>
				<tr>
					<td>2. ¿Inventario forestal? </td>
					<td><?php echo form_input ($rpta2); ?></td>
				</tr>
				<tr>
					<td>3. ¿Repoblacion de especies? </td>
					<td><?php echo form_input ($rpta2); ?></td>
				</tr>
				<tr>
					<td>4. ¿Planificacion y control de tala de árboles? </td>
					<td><?php echo form_input ($rpta2); ?></td>
				</tr>
				<tr>
					<td>5. ¿Pesca Controlada? </td>
					<td><?php echo form_input ($rpta2); ?></td>
				</tr>
				<tr>
					<td>6.. ¿Prohibicion de productos tóxicos para pescar? </td>
					<td><?php echo form_input ($rpta2); ?></td>
				</tr>
				<tr>
					<td>7. ¿Caza selectiva de animales machos / adultos? </td>
					<td><?php echo form_input ($rpta2); ?></td>
				</tr>
			</table>
		</td>
		<td> <!-- Lado Derecho -->
			<table class ="table">
				<tr>
					<th> </th>
					<th>SI / NO</th>
				</tr>
				<tr>
					<td>8. ¿Cuotas de caza?</td>
					<td><?php echo form_input ($rpta2); ?></td>
				</tr>
				<tr>
					<td> 9. ¿Vedas temporales de caza?</td>
					<td><?php echo form_input ($rpta2); ?></td>
				</tr>
				<tr>
					<td> 10. ¿Obtencion de fibras, lianas, hojas, frutos, resinas sin cortar árboles?</td>
					<td><?php echo form_input ($rpta2); ?></td>
				</tr>
				<tr>
					<td> 11. ¿Uso de abono / fertilizante orgánico?</td>
					<td><?php echo form_input ($rpta2); ?></td>
				</tr>
				<tr>
					<td> Otro Especifique <?php echo form_input ($rpta2); ?></td>
					<td><?php echo form_input ($rpta2); ?></td>
				</tr>
				<tr>
					<td> Otro Especifique <?php echo form_input ($rpta2); ?></td>
					<td><?php echo form_input ($rpta2); ?></td>
				</tr>
				<tr>
					<td> Otro Especifique <?php echo form_input ($rpta2); ?></td>
					<td><?php echo form_input ($rpta2); ?></td>
				</tr>
			</table>

		</td>
	</tr>
</table>

<table class ="table table-bordered">
	<tr>
		<th>Observaciones</th>
	</tr>
	<tr>
		<td><?php echo form_textarea ($observaciones); ?></td>
	</tr>
</table>

<table class = "table table-bordered">
	<tr>
		<th><center>900. ACTIVIDADES FORESTALES Y RIEGOS DE DEFORESTACIÓN</center></th>
	</tr>

</table>

<table class = "table table-bordered">
	<tr>
		<td>	
			<table class = "table table-bordered">	
				<th>PERMISO DE APROVECHAMIENTO FORESTAL</th>
			</table>
		</td>
	</tr>
	<tr>
		<th>901. ¿LA COMUNIDAD TIENE PERMMISO DE APROVECHAMIENTO FORESTAL?</th>
		<th>908. ¿COMO DECIDIÓ LA COMUNIDAD CEDER SU PERMISO DE APROVECHAMIENTO FORESTAL A UN TERCERO?</th>
	</tr>

		<td>
			<table class = "table table-bordered">
				<tr>
					<th>SI</th>
					<th><?php echo form_input ($observaciones); ?></th>
					<th>901A. ¿Se Encuentra Vigente?</th>
					<th>SI</th>
					<th><?php echo form_input ($observaciones); ?> </th>
				</tr>
				<tr>
					<th>NO</th>
					<th><?php echo form_input ($observaciones); ?> </th>
					<th>PASE A 913</th>
					<th>NO</th>
					<th><?php echo form_input ($observaciones); ?></th>

				</tr>	
			</table>
		</td>
		<td><?php echo form_input ($rpta2); ?> </td>

	</tr>
	<tr>
		<th>902. ¿EN QUE AÑO OBTUVO EL ULTIMO PERMISO DE APROVECHAMIENTO FORESTAL?</th>
		<th>909. ¿QUE RECIBIO A CAMBIO LA COMUNIDAD POR CEDER SU PERMISO DE APROVECHAMIENTO FORESTAL A UN TERCERO?</th>
	</tr>
	<tr>
		<th>Año <?php echo form_input ($rpta2); ?></th>
		<th><?php echo form_input ($rpta2); ?></th>
	</tr>

	<tr>
		<th>903. POR LA EXTRACCION DE LA MADERA DENTRO DE SUS TIERRAS, LA COMUNIDAD TIENE?: (Lea cada alternativa y circule uno o mas codigos)</th>
		<th>910. ¿SE HA CUMPLIDO LOS COMPROMISIS DE PARTE DE TERCEROS POR HABERLES CEDIDO SU PERMISO DE APROVECHAMIENTO FORESTAL?</th>
	</tr>
	<tr>
		<td>Deuda Tributaria? <?php echo form_input ($rpta2); ?></td>
			<td>
				<table class = "table table-bordered">
					<tr>
						<th>SI</th>
						<th>NO</th>
					</tr>
					<tr>
						<td><?php echo form_input ($rpta2); ?> 910A. Cuales son?</td>
						<td><?php echo form_input ($rpta2); ?></td>
					</tr>
					<tr>
						
					</tr>
				</table>

			</td>
	</tr>
	<tr>
		<td>Multa? <?php echo form_input ($rpta2); ?></td>
		<td>1. <?php echo form_input ($rpta2); ?></td>
	</tr>
	<tr>
		<td>NO TIENE <?php echo form_input ($rpta2); ?></td>
		<td>2. <?php echo form_input ($rpta2); ?></td>
	</tr>

	<tr>
		<th>904. ¿HA TENIDO LA COMUNIDAD ALGUNA VISITA DE SUPERVISION PARA OBTENER EL PERMISO DE APROVECHAMIENTO FORESTAL POR PARTE DE: (Circule uno o mas codigos)</th>
		<th>911. PRODUCTO DE LA EXTRACCION DE MADERA, ¿LA COMUNIDAD OBTUVO O RECIBIO DINERO?, ¿QUE USO LE DIÓ? (indique el año)</th>
	</tr>
	<tr>
		<td>
			<table class = "table table-bordered">
				<tr>
					<th rowspan = "2"><center>Institución</center></th>
					<th colspan ="2"> 904A. ¿Cual es la fecha de la última visita?</th>
				</tr>
				<tr>
					<th>Mes</th>
					<th>Año</th>
				</tr>
				<tr>
					<td>Organismo de supervision de los recursos forestales y fauna silvestre (OSINFOR)</td>
					<td><?php echo form_input ($rpta2); ?></td>
					<td><?php echo form_input ($rpta2); ?></td>
				</tr>
				<tr>
					<td>Servicio nacional de areas naturales protegidas (SENARP)?</td>
					<td><?php echo form_input ($rpta2); ?></td>
					<td><?php echo form_input ($rpta2); ?></td>
				</tr>
				<tr>
					<td>Direccion general forestal y de fauna silvestre (DGFFS)</td>
					<td><?php echo form_input ($rpta2); ?></td>
					<td><?php echo form_input ($rpta2); ?></td>
				</tr>
				<tr>
					<td>Gobierno regional (Direccion Regional de Recursos Naturales)?</td>
					<td><?php echo form_input ($rpta2); ?></td>
					<td><?php echo form_input ($rpta2); ?></td>
				</tr>
				<tr>
					<td>Otros <?php echo form_input ($rpta2); ?> (Especifique)</td>
					<td><?php echo form_input ($rpta2); ?></td>
					<td><?php echo form_input ($rpta2); ?></td>
				</tr>

			</table>

		</td>
		<td>
			<table class = "table table-bordered">
				<th>SI</th>
				<th><?php echo form_input ($rpta2); ?> </th>
				<th> NO</th>
				<th>  <?php echo form_input ($rpta2); ?></th>
			</table>
			<table class ="table table-bordered">
				<tr>
					<th><center>Uso<center></th>
					<th><center>Año<center></th>
				</tr>
				<tr>
					<th>1. <?php echo form_input ($rpta2); ?></th>
					<th><?php echo form_input ($rpta2); ?></th>
				</tr>
				<tr>
					<th>2. <?php echo form_input ($rpta2); ?></th>
					<th><?php echo form_input ($rpta2); ?></th>
				</tr>
				<tr>
					<th>3. <?php echo form_input ($rpta2); ?></th>
					<th><?php echo form_input ($rpta2); ?></th>
				</tr>
				<tr>
					<th>4. <?php echo form_input ($rpta2); ?></th>
					<th><?php echo form_input ($rpta2); ?></th>
				</tr>
			</table>
		</td>
	</tr>

	<tr>
		<th>905. ¿CONOCE SI LA COMUNIDAD TIENE ALGUNA SANCIÓN  DE ENTIDADES DEL SECTOR FORESTAL (OSINFOR, ATFFS, ETC.) POR EL MAL USO DE SU PERMISO DE APROVECHAMIENTO CEDIDO A UN TERCERO?</th>
		<th colspan="2">912. ¿LA COMUNIDAD CUENTA CON UN PLAN DE ACTIVIDADES FORESTALES?</th>
	</tr>
	<tr>
		<td>
			<table class = "table table-bordered">
				<tr>
					<td>Si <?php echo form_input ($rpta2); ?></td>
					<td><b>905A. Cuales fueron esas sanciones?</b></td>
					<td>No <?php echo form_input ($rpta2); ?></td>
				</tr>
				<tr>
					<td colspan ="3"><?php echo form_input ($rpta2); ?></td>
				</tr>
			</table>
		</td>

		<td>
			<table class = "table table-bordered">
				<tr>
					<td>Si</td>
					<td><?php echo form_input ($rpta2); ?></td>
					<td>NO</td>
					<td><?php echo form_input ($rpta2); ?></td>
				</tr>
			</table>
		</td>
	</tr>

	<tr>
		<th><center>APROVECHAMIENTO FORESTAL POR TERCEROS</center></th>
		<th><center>APROVECHAMIENTO FORESTAL POR LA COMUNIDAD</center></th>
	</tr>
	<tr>
		<th>906. ¿LA COMUNIDAD HA CEDIDO A UN TERCERO SU PERMISO DE APROVECHAMIENTO FORESTAL?</th>
		<th>913. ¿LA COMUNIDAD A REALIZADO EXTRACCION DE MADERA??</th>
	</tr>
	<tr>
		<td>
			<table class = "table table-bordered">
				<tr>
					<td>SI</td>
					<td><?php echo form_input ($rpta2); ?></td>
					<td>NO</td>
					<td><?php echo form_input ($rpta2); ?></td>
					<td><b>PASE a 913</b></td>
				</tr>
			</table>
		</td>
		<td>
			<table class ="table table-bordered">
				<tr>
					<td><center>SI</center></td>
					<td><?php echo form_input ($rpta2); ?> 913A. En que año inició la extraccion? <?php echo form_input ($rpta2); ?> </td>
					
				</tr>
				<tr>
					<td><center>NO</center></td>
					<td><?php echo form_input ($rpta2); ?> PASE A 918</td>
				</tr>
			</table>
		</td>
	</tr>
	<tr>
		<th>907. ¿CUAL ES EL NOMBRE DE LA EMPRESA O PERSONA NATURAL QUE HA REALIZADO EXTRACCION DE MADERA DENTOS DE LAS TIERRAS DE LA COMUNIDAD?</th>
		<th>914. ¿LA EXTRACCION DE MADERA EN LA COMUNIDAD SE REALIZÓ: (Lea cada alternativa y circule uno o mas codigos)</th>
	</tr>
	<tr>
		<td>
			<table class = "table table-bordered">
				<tr>
					<th>Nombre de la Empresa o Persona Natural</th>
					<th>907A. ¿Cual fue el año de extraccion?</th>
				</tr>
				<tr>
					<td><?php echo form_input ($rpta2); ?></td>
					<td><?php echo form_input ($rpta2); ?></td>
				</tr>
				<tr>
					<td><?php echo form_input ($rpta2); ?></td>
					<td><?php echo form_input ($rpta2); ?></td>
				</tr>
				<tr>
					<td><?php echo form_input ($rpta2); ?></td>
					<td><?php echo form_input ($rpta2); ?></td>
				</tr>
				<tr>
					<td><?php echo form_input ($rpta2); ?></td>
					<td><?php echo form_input ($rpta2); ?></td>
				</tr>
				<tr>
					<td><?php echo form_input ($rpta2); ?></td>
					<td><?php echo form_input ($rpta2); ?></td>
				</tr>
			</table>
		</td>
		<td>
			<table class = "table table-bordered">
				<tr>	
					<td>Por cuenta propia?</td>
					<td><?php echo form_input ($rpta2); ?></td>
				</tr>
				<td>Con ayuda de un proyecto / programa?</td>
					<td><?php echo form_input ($rpta2); ?></td>
				</tr>
				<td>En convenio con otra empresa o persona natural?</td>
					<td><?php echo form_input ($rpta2); ?></td>
				</tr>
				<td>Otra forma? <?php echo form_input ($rpta2); ?></td>
					<td><?php echo form_input ($rpta2); ?></td>
				</tr>
				<tr>
					<td colspan="2">
						<table class = "table table-bordered">
							<tr>
								<th colspan ="5">915. DE LA MADERA EXTRAIDA, ¿SE PRODUJERON MUEBLES O ARTICULOS PARA LA VENTA?</th>
							</tr>
							<tr>
								<th><center>SI</center></th>
								<th><?php echo form_input ($rpta2); ?></th>
								<th>915A. Actualmente, Cuenta con algun registro de informacion de elaboracion de muebles o artículos de madera?</th>
								<th>SI <?php echo form_input ($rpta2); ?></th>
								<th>NO <?php echo form_input ($rpta2); ?></th>
							</tr>
							<tr>
								<th><center>NO</center></th>
								<th><?php echo form_input ($rpta2); ?></th>
								<th colspan ="3">PASE A 917</th>
							</tr>
						</table>

					</td>
				</tr>
			</table>
		</td>
	</tr>
	<tr>
		<th>916. ¿CON QUE TIPO DE HERRAMIENTAS, EQUIPOS O MAQUINARIAS DISPONE LA COMUNIDAD PARA LA ELABORACION DE MUEBLES?</th>
		<th>920. ¿LA DEFORESTACIÓN ES ORIGINADA POR: (Lea cada alternativa y circule uno o mas códigos)</th>
	</tr>
	<tr>
		<td>
			<table class ="table table-bordered">
				<tr>
					<th><center>Herramientas / Equipos / Maquinarias </center></th>
				</tr>
				<tr>
					<td><?php echo form_input ($rpta2); ?></td>
				</tr>
				<tr>
					<td><?php echo form_input ($rpta2); ?></td>
				</tr>
				<tr>
					<td><?php echo form_input ($rpta2); ?></td>
				</tr>
				<tr>
					<td><?php echo form_input ($rpta2); ?></td>
				</tr>
			</table>
		</td>
		<td>
			<table class = "table table-bordered">
				<tr>
					<td>Madereros?</td>
					<td><?php echo form_input ($rpta2); ?></td>
				</tr>
				<tr>
					<td>Colonos?</td>
					<td><?php echo form_input ($rpta2); ?></td>
				</tr>
				<tr>
					<td>Pobladores de la comunidad?</td>
					<td><?php echo form_input ($rpta2); ?></td>
				</tr>
				<tr>
					<td>Empresas petroleras?</td>
					<td><?php echo form_input ($rpta2); ?></td>
				</tr>
				<tr>
					<td>Empresas mineras?</td>
					<td><?php echo form_input ($rpta2); ?></td>
				</tr>
				<tr>
					<td>Otro? <?php echo form_input ($rpta2); ?> (Especifique)</td>
					<td><?php echo form_input ($rpta2); ?></td>
				</tr>
			</table>
		</td>
	</tr>
	<tr>
		<th>917. LOS COMUNEROS TRABAJAN EN LA EXTRACCION DE MADERA REALIZADA POR UN TERCERO?</th>
		<th>921. CUALES SON LAS CONSECUENCIAS DE LA DEFORESTACIÓN? (Circule uno o mas códigos)</th>
	</tr>
	<tr>
		<td>
			<table class = "table table-bordered">
				<tr>
					<td> SI </td>
					<td> <?php echo form_input ($rpta2); ?> </td>
					<td> 917.A En los últimos 12 meses, Cuántos trabajaron?</td>
				</tr>
				<tr>
					<td> NO </td>
					<td> <?php echo form_input ($rpta2); ?> </td>
					<td><?php echo form_input ($rpta2); ?></td>
				</tr>
			<tr>
				<td colspan="3">
					<table class = "table table-bordered">
						<tr>
							<th colspan ="4"><center>RIEGOS DE DEFORESTACIÓN</center></th>
						</tr>
						<tr>
							<th colspan="2">918. ACTUALMENTE, EXISTE DEFORESTACION EN SU COMUNIDAD?</th>
						</tr>
						<tr>
							<th><center>SI</center></th>
							<th><?php echo form_input ($rpta2); ?></th>
						</tr>
						<tr>
							<th><center>NO</center></th>
							<th><?php echo form_input ($rpta2); ?> PASE  A CAP 1000</th>
						</tr>
					</table>
					<table class = "table table-bordered">
						<tr>
							<th colspan ="2">919. ¿EL ORIGEN DE LA DEFORESTACION ES POR: (Lea cada alternativa y circule uno o mas códigos)</th>
						</tr>
						<tr>
							<td>Tala de árboles?</td>
							<td><?php echo form_input ($rpta2); ?></td>
						</tr>
						<tr>
							<td>Cambio del suelo de bosques para la actividad agrícola y/o pecuaria?</td>
							<td><?php echo form_input ($rpta2); ?> </td>
						</tr>
						<tr>
							<td>Cambio de uso del agua para actividades agrícolas y ganaderas??</td>
							<td><?php echo form_input ($rpta2); ?></td>
						</tr>
						<tr>
							<td>Incendios forestales?</td>
							<td><?php echo form_input ($rpta2); ?> </td>
						</tr>
						<tr>
							<td>Construccion de espacios urbanos / crecimiento de la poblacion?</td>
							<td><?php echo form_input ($rpta2); ?></td>
						</tr>
						<tr>
							<td>Desbordamiento de rios?</td>
							<td><?php echo form_input ($rpta2); ?></td>
						</tr>
						<tr>
							<td>Plagas y enfermedades de árboles?</td>
							<td><?php echo form_input ($rpta2); ?></td>
						</tr>
						<tr>
							<td>Migracón de colonos?</td>
							<td><?php echo form_input ($rpta2); ?></td>
						</tr>
						<tr>
							<td>Apertura de carreteras o vias de acceso?</td>
							<td><?php echo form_input ($rpta2); ?></td>
						</tr>
						<tr>
							<td>Explotacion de hidrocarburos?</td>
							<td><?php echo form_input ($rpta2); ?></td>
						</tr>
						<tr>
							<td>Plantaciones ilícitas?</td>
							<td><?php echo form_input ($rpta2); ?></td>
						</tr>
						<tr>
							<td>Otro <?php echo form_input ($rpta2); ?> (Especifique) </td>
							<td><?php echo form_input ($rpta2); ?></td>
						</tr>

					</table>
				</td>
			</tr>
			</table>
		</td>
		<td>
			<table class ="table table-bordered">
				<tr>
					<td>Disminucion de lluvias</td>
					<td><?php echo form_input ($rpta2); ?></td>
				</tr>
				<tr>
					<td>Disminucion de humedad del suelo</td>
					<td><?php echo form_input ($rpta2); ?></td>
				</tr>
				<tr>
					<td>Erosión del suelo</td>
					<td><?php echo form_input ($rpta2); ?></td>
				</tr>
				<tr>
					<td>Extencion de especies vegetales</td>
					<td><?php echo form_input ($rpta2); ?></td>
				</tr>
				<tr>
					<td>Extinción de especies animales</td>
					<td><?php echo form_input ($rpta2); ?></td>
				</tr>
				<tr>
					<td>Emigración de animales</td>
					<td><?php echo form_input ($rpta2); ?></td>
				</tr>
				<tr>
					<td>Enfermedades de la población</td>
					<td><?php echo form_input ($rpta2); ?></td>
				</tr>
				<tr>
					<td>Otro <?php echo form_input ($rpta2); ?> (Especifique)</td>
					<td><?php echo form_input ($rpta2); ?></td>
				</tr>
				<tr>
					<td>NO SABE / NO OPINA</td>
					<td><?php echo form_input ($rpta2); ?></td>
				</tr>
			</table>
			<table class ="table table-bordered">
				<tr>
					<th>OBSERVACIONES:</th>
				</tr>
				<tr>
					<th><?php echo form_input ($rpta2); ?></th>
				</tr>
				
			</table>
		</td>
	</tr>
</table>
<table class ="table table-bordered">
	<tr>	
		<th><center>1000. RECURSOS Y SERVICIOS QUE BRINDA EL BOSQUE</center></th>
	</tr>
</table>

<table class ="table table-bordered">
	<tr>
		<th colspan="2">1001. CUALES SON LOS RECURSOS QUE LE BRINDA EL BOSQUE? (Circule uno o mas códigos)</th>
		<th colspan = "2">1002. CUALES SON LOS SERVICIOS QUE LE BRINDA EL BOSQUE? (Circule uno o mas códigos)</th>
	</tr>
	<tr>
		<th colspan="2">RECURSOS:</th>
		<th colspan="2">SERVICIOS:</th>
	</tr>
	<tr>
		<td>Agua</td>
		<td><?php echo form_input ($rpta2); ?></td>
		<td>Ecoturismo</td>
		<td><?php echo form_input ($rpta2); ?></td>
	</tr>
	<tr>
		<td>Aire</td>
		<td><?php echo form_input ($rpta2); ?></td>
		<td>Calidad de agua</td>
		<td><?php echo form_input ($rpta2); ?></td>
	</tr>
	<tr>
		<td>Suelo</td>
		<td><?php echo form_input ($rpta2); ?></td>
		<td>Regulacion de clima</td>
		<td><?php echo form_input ($rpta2); ?></td>
	</tr>
	<tr>
		<td>Fauna</td>
		<td><?php echo form_input ($rpta2); ?></td>
		<td>Produccion de semillas</td>
		<td><?php echo form_input ($rpta2); ?></td>
	</tr>
	<tr>
		<td>Flora</td>
		<td><?php echo form_input ($rpta2); ?></td>
		<td>Hábitat de animales</td>
		<td><?php echo form_input ($rpta2); ?></td>
	</tr>
	<tr>
		<td>Madera</td>
		<td><?php echo form_input ($rpta2); ?></td>
		<td>Culturales</td>
		<td><?php echo form_input ($rpta2); ?></td>
	</tr>
	<tr>
		<td>Medicinales</td>
		<td><?php echo form_input ($rpta2); ?></td>
		<td>Recreativos</td>
		<td><?php echo form_input ($rpta2); ?></td>
	</tr>
	<tr>
		<td>Otro? <?php echo form_input ($rpta2); ?>(Especifique)</td>
		<td><?php echo form_input ($rpta2); ?></td>
		<td>Otro <?php echo form_input ($rpta2); ?>(Especifique)</td>
		<td><?php echo form_input ($rpta2); ?></td>
	</tr>
	<tr>
		<td>Otro? <?php echo form_input ($rpta2); ?>(Especifique)</td>
		<td><?php echo form_input ($rpta2); ?></td>
		<td>Otro <?php echo form_input ($rpta2); ?>(Especifique)</td>
		<td><?php echo form_input ($rpta2); ?></td>
	</tr>
	<tr>
		<td>No Sabe</td>
		<td><?php echo form_input ($rpta2); ?></td>
		<td>No Sabe</td>
		<td><?php echo form_input ($rpta2); ?></td>
	</tr>
	<tr>
		<td colspan = "2"><b>Uso sostenible:</b> Es el aprovechamiento de los recursos del bosque que satisface las necesidades actuales de las personas sin comprometer la capacidad de las futuras generaciones para satisfacer las suyas.</td>
		<td rowspan ="5" colspan="2">
			<table class = "table table-bordered">
				<tr>
					<th colspan = "2">1005. CONOCE UD. ALGUNAS ACCIONES QYE GENERAN UNA AMENAZA AL BOSQUE COMO: (Leer cada alternativa y circule uno o mas códigos)</th>
				</tr>
				<tr>
					<td>Tala ilegal?</td>
					<td><?php echo form_input ($rpta2); ?></td>
				</tr>
				<tr>
					<td>Incendio forestal?</td>
					<td><?php echo form_input ($rpta2); ?></td>
				</tr>
				<tr>
					<td>Cultivo de plantaciones ilícitas?</td>
					<td><?php echo form_input ($rpta2); ?></td>
				</tr>
				<tr>
					<td>Explotación de hidrocarburos?</td>
					<td><?php echo form_input ($rpta2); ?></td>
				</tr>
				<tr>
					<td>Apertura de carreteras?</td>
					<td><?php echo form_input ($rpta2); ?></td>
				</tr>
				<tr>
					<td>Cambio de uso de suelo para actividades agrícolas?</td>
					<td><?php echo form_input ($rpta2); ?></td>
				</tr>
				<tr>
					<td>Otro? <?php echo form_input ($rpta2); ?> (Especifique)</td>
					<td><?php echo form_input ($rpta2); ?></td>
				</tr>
				<tr>
					<td>Otro? <?php echo form_input ($rpta2); ?> (Especifique)</td>
					<td><?php echo form_input ($rpta2); ?></td>
				</tr>
				<tr>
					<td>No Sabe</td>
					<td><?php echo form_input ($rpta2); ?></td>
				</tr>


			</table>


		</td>
	</tr>
	<tr>
		<th colspan = "2">1003. EN SU COMUNIDAD CONSIDERAN QUE EL USO SOSTENIBLE DE LOS RECUROS DEL BOSQUE PERMITE MEJORAR EL NIVEL DE VIDA DE LOS HOGARES?</th>
	</tr>
	<tr>
		<td colspan ="2">
			<table class = "table table-bordered">
 				<tr>
 					<td>SI</td>
 					<td><?php echo form_input ($rpta2); ?></td>
 					<td rowspan= "2"><b>1003A. Porqué?</b><?php echo form_input ($rpta2); ?></td>
 				</tr>
 				<tr>
 					<td>NO</td>
 					<td><?php echo form_input ($rpta2); ?></td>
 				</tr>
 			</table>
		</td>
	</tr>
	<tr>
		<th colspan ="2">1004. EN SU COMUNIDAD CONSIDERAN QUE EL BOSQUE ES IMPORTANTE PARA LA POBLACION  MUNDIAL?</th>
	</tr>
	<td colspan = "2">	
		<table class = "table table-bordered">
			<tr>
				<td>SI</td>
				<td><?php echo form_input ($rpta2); ?></td>
				<td>NO</td>
				<td><?php echo form_input ($rpta2); ?></td>
			</tr>
		</table>
	</td>
	<tr>
		<th colspan ="4"> <center> OBTENCIÓN DE RECURSOS DEL BOSQUE</center></th>
	</tr>
</table>
<table class ="table table-bordered">
	<tr>
		<th colspan ="6">1006. EN LOS ULTIMOS 12 MESES, LA COMUNIDAD HA TENIDO HA TENIDO ALGUNA DIFICULTAD PARA OBTENER:</th>
	</tr>
	<tr>
		<th colspan="2">Especie</th>
		<th>1006A. La dificultad que tuvo fue:</th>
		<th>1006B. Si respondió "Mucha", Porque?</th>
	</tr>
	<tr>
		<th></th>
		<th>SI / NO</th>
		<th>Mucha / Poca / Ninguna</th>
		<th>Código</th>
	</tr>
	<tr>
		<td>1. Animales terrestres para la caza?</td>
		<td><?php echo form_input ($rpta2); ?></td>
		<td><?php echo form_input ($rpta2); ?></td>
		<td><?php echo form_input ($rpta2); ?></td>
	</tr>
	<tr>
		<td>2. Aves para la caza?</td>
		<td><?php echo form_input ($rpta2); ?></td>
		<td><?php echo form_input ($rpta2); ?></td>
		<td><?php echo form_input ($rpta2); ?></td>
	</tr>
	<tr>
		<td>3. Pescar para pescar?</td>
		<td><?php echo form_input ($rpta2); ?></td>
		<td><?php echo form_input ($rpta2); ?></td>
		<td><?php echo form_input ($rpta2); ?></td>
	</tr>
	<tr>
		<td>4. Madera?</td>
		<td><?php echo form_input ($rpta2); ?></td>
		<td><?php echo form_input ($rpta2); ?></td>
		<td><?php echo form_input ($rpta2); ?></td>
	</tr>
	<tr>
		<td>5. Palmiche u hojas para el techo?</td>
		<td><?php echo form_input ($rpta2); ?></td>
		<td><?php echo form_input ($rpta2); ?></td>
		<td><?php echo form_input ($rpta2); ?></td>
	</tr>
	<tr>
		<td>6. Vegetales, frutos, plantas medicinales para consumo?</td>
		<td><?php echo form_input ($rpta2); ?></td>
		<td><?php echo form_input ($rpta2); ?></td>
		<td><?php echo form_input ($rpta2); ?></td>
	</tr>
</table>
<table class = "table table-bordered">
	<tr>
		<th><center>1100. CONFLICTOS RELACIONADOS CON EL USO Y CONSERVACION DE LOS RECURSOS DEL BOSQUE</center></th>
	</tr>

</table>



<table class = "table table-bordered">
	<tr>
		<th colspan="2">1101. EN LOS ULTIMOS 12 MESES, ¿LOS PRINCIPALES PROBLEMAS Y/O CONFLICTOS QUE AFRONTAN LA COMUNIDAD SON:</th>
		<th>1102. ¿CUANTAS DENUNCIAS SOBRE <?php echo form_input ($rpta2); ?> SE HAN REALIZADO?</th>
		<th>1103. CUANTAS DENUNCIAS CON RESULTADO SATISFACTORIA FAVOR DE LA CC.NN?</th>
		<th>1104. CUANTAS DENUNCIAS CON RESULTADO INSATISFACTORIA FAVOR DE LA CC.NN?</th>
		<th>1105. CUANTAS DENUNCIAS ESTAN EN PROCESO?</th>
		<th>1106. QUE INSTITUCION(ES) INTERVIENEN EN ESTE(OS) PROBLEMA(S) Y/O CONFLICTOS(S)?</th>
	</tr>
	<tr>
		<th></th>
		<th><center>SI / NO</center></th>
		<th><center>Total</center></th>
		<th><center>Cantidad</center></th>
		<th><center>Cantidad</center></th>
		<th><center>Cantidad</center></th>
		<th><center>Código</center></th>
	</tr>
	<tr>
		<td>1. Ocupacion ilegal?</td>
		<td><?php echo form_input ($rpta2); ?></td>
		<td><?php echo form_input ($rpta2); ?></td>
		<td><?php echo form_input ($rpta2); ?></td>
		<td><?php echo form_input ($rpta2); ?></td>
		<td><?php echo form_input ($rpta2); ?></td>
		<td><?php echo form_input ($rpta2); ?></td>
	</tr>
	<tr>
		<td>2. Tala no autorizada?</td>
		<td><?php echo form_input ($rpta2); ?></td>
		<td><?php echo form_input ($rpta2); ?></td>
		<td><?php echo form_input ($rpta2); ?></td>
		<td><?php echo form_input ($rpta2); ?></td>
		<td><?php echo form_input ($rpta2); ?></td>
		<td><?php echo form_input ($rpta2); ?></td>
	</tr>
	<tr>
		<td>3. Ampliación de frontera agrícola</td>
		<td><?php echo form_input ($rpta2); ?></td>
		<td><?php echo form_input ($rpta2); ?></td>
		<td><?php echo form_input ($rpta2); ?></td>
		<td><?php echo form_input ($rpta2); ?></td>
		<td><?php echo form_input ($rpta2); ?></td>
		<td><?php echo form_input ($rpta2); ?></td>
	</tr>
	<tr>
		<td>4. Cultivos ilicitos</td>
		<td><?php echo form_input ($rpta2); ?></td>
		<td><?php echo form_input ($rpta2); ?></td>
		<td><?php echo form_input ($rpta2); ?></td>
		<td><?php echo form_input ($rpta2); ?></td>
		<td><?php echo form_input ($rpta2); ?></td>
		<td><?php echo form_input ($rpta2); ?></td>
	</tr>
	<tr>
		<td>5. Actividades por empresas petroleras?</td>
		<td><?php echo form_input ($rpta2); ?></td>
		<td><?php echo form_input ($rpta2); ?></td>
		<td><?php echo form_input ($rpta2); ?></td>
		<td><?php echo form_input ($rpta2); ?></td>
		<td><?php echo form_input ($rpta2); ?></td>
		<td><?php echo form_input ($rpta2); ?></td>
	</tr>
	<tr>
		<td>6. Actividades por empresas mineras?</td>
		<td><?php echo form_input ($rpta2); ?></td>
		<td><?php echo form_input ($rpta2); ?></td>
		<td><?php echo form_input ($rpta2); ?></td>
		<td><?php echo form_input ($rpta2); ?></td>
		<td><?php echo form_input ($rpta2); ?></td>
		<td><?php echo form_input ($rpta2); ?></td>
	</tr>
	<tr>
		<td>7. Apertura de caminos / carreteras?</td>
		<td><?php echo form_input ($rpta2); ?></td>
		<td><?php echo form_input ($rpta2); ?></td>
		<td><?php echo form_input ($rpta2); ?></td>
		<td><?php echo form_input ($rpta2); ?></td>
		<td><?php echo form_input ($rpta2); ?></td>
		<td><?php echo form_input ($rpta2); ?></td>
	</tr>
	<tr>
		<td>8. Otro? <?php echo form_input ($rpta2); ?> (Especifique)</td>
		<td><?php echo form_input ($rpta2); ?></td>
		<td><?php echo form_input ($rpta2); ?></td>
		<td><?php echo form_input ($rpta2); ?></td>
		<td><?php echo form_input ($rpta2); ?></td>
		<td><?php echo form_input ($rpta2); ?></td>
		<td><?php echo form_input ($rpta2); ?></td>
	</tr>
	<tr>
		<td>9. Otro? <?php echo form_input ($rpta2); ?> (Especifique)</td>
		<td><?php echo form_input ($rpta2); ?></td>
		<td><?php echo form_input ($rpta2); ?></td>
		<td><?php echo form_input ($rpta2); ?></td>
		<td><?php echo form_input ($rpta2); ?></td>
		<td><?php echo form_input ($rpta2); ?></td>
		<td><?php echo form_input ($rpta2); ?></td>
	</tr>
	<tr>
		<td>10. Otro? <?php echo form_input ($rpta2); ?>(Especifique)</td>
		<td><?php echo form_input ($rpta2); ?></td>
		<td><?php echo form_input ($rpta2); ?></td>
		<td><?php echo form_input ($rpta2); ?></td>
		<td><?php echo form_input ($rpta2); ?></td>
		<td><?php echo form_input ($rpta2); ?></td>
		<td><?php echo form_input ($rpta2); ?></td>
	</tr>
	<tr>
		<td colspan ="7"><b>Encuestador: </b> No olvide que las cantidades de las preguntas 1103, 1104 y 1105 debe ser igaul a la cantidad de la pregunta 1102</td>
	</tr>

	<tr>
		<th colspan="7">1107. LA COMUNIDAD TIENE CONFLICTOS DE TIERRAS CON: (Lea cada alternativa y circule uno o mas códigos)</th>
	</tr>
	<tr>
		<td colspan ="3">
			<table class ="table table-bordered"> <!-- Left Side -->
				<tr>
					<td>Otras comunidades indigenas?</td>
					<td><?php echo form_input ($rpta2); ?></td>
				</tr>
				<tr>
					<td>Los colonos?</td>
					<td><?php echo form_input ($rpta2); ?></td>
				</tr>
				<tr>
					<td>EL Estado?</td>
					<td><?php echo form_input ($rpta2); ?></td>
				</tr>
			</table>
		</td>
		<td colspan ="3">
			<table class ="table table-bordered"> <!--Center Side-->
				<tr>
					<td>Empresas privadas?</td>
					<td><?php echo form_input ($rpta2); ?> </td>
				</tr>
				<tr>
					<td>Otro? <?php echo form_input ($rpta2); ?> (Especifique) </td>
					<td><?php echo form_input ($rpta2); ?> </td>
				</tr>
			</table>
		</td>
		<td colspan ="2">
			<table class ="table table-bordered"> <!--Rigth Side-->
				<tr>
					<td>NINGUNO</td>
					<td><?php echo form_input ($rpta2); ?> </td>
				</tr>
			</table>
		</td>

	</tr>
</table>

	<table class = "table table-bordered">
	<tr>
		<th><center>1200. COMITÉ DE GESTIÓN DE CONSERVACIONES DE BOSQUES</center></th>
	</tr>
	</table>
	<table class ="table table-bordered">
	<tr>
		<td rowspan ="2">
			<table class = "table table-bordered">
				<tr>	
					<th>1201. EN SU COMUNIDAD SE HA CONFORMADO EL COMITE DE GESTION DE CONSERVACION DE BOSQUES?</th>
				</tr>
				<tr>	
					<td>
						<table class ="table table-bordered">
							<tr>
								<td>SI</td>
								<td><?php echo form_input ($rpta2); ?></td>
								<td>NO</td>
								<td><?php echo form_input ($rpta2); ?><b>PASE A CAP. 1300</b></td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
		</td>
		<td>
			<table class = "table table-bordered">
				<tr>
					<th colspan ="2">1202. EL COMITÉ ESTA CONFORMADO POR: (Lea cada alternativa y circule uno o más codigos)</th>
				</tr>
				<tr>
					<td> <table class ="table table-bordered">
						<tr>  
							<td>Presidente?</td> 
							<td><?php echo form_input ($rpta2); ?></td> 
						</tr>
						<tr>  
							<td>Secretario?</td> 
							<td><?php echo form_input ($rpta2); ?></td> 
						</tr>
						<tr>  
							<td>Tesorero?</td> 
							<td><?php echo form_input ($rpta2); ?></td> 
						</tr>
					</table>
					<td>
						<table class = "table table-bordered">
							<tr>
								<td>Vocal?</td> 
								<td><?php echo form_input ($rpta2); ?></td>
							</tr>
							<tr>
								<td>Otro? <?php echo form_input ($rpta2); ?> (Especifique)</td> 
								<td><?php echo form_input ($rpta2); ?></td>
							</tr>
						</table>
					</td>
					 </td>
				</tr>
				<tr>
					<td colspan ="2">
						<table class ="table table-bordered">
							<tr>
								<th colspan ="2">1202A. CUANTAS PERSONAS PARTICIPAN EN ESTE COMITÉ?</th>
							</tr>
							<tr>
								<th>N° de Personas</th>
								<th><?php echo form_input ($rpta2); ?></th>
							</tr>
						</table>
					</td>
				</tr>
			</table>
		</td>
	</tr>
	<table class ="table table-bordered"> 
		<tr>
			<th rowspan ="2">1203. EL PROGRAMA O INSTITUCION AL QUE PERTENECE ESTE COMITÉ DE GESTIÓN ES:</th>
			<th>1204. LOS BENEFICIOS LOGRADOS POR ESTE COMITÉ SON:</th>
			<th>1205. CADA CUANTO TIEMPO SE ELIGE A ESTE COMITÉ?</th>
			<th>1206. CON QUE FRECUENCIA SE REÚNEN EN ASAMBLEA PARA TRATAR TEMAS DE OBSERVACIONES DE BOSQUES:</th>
		</tr>
		<tr>
			<th><center>Código</center></th>
			<th><center>Código</center></th>
			<th><center>Código</center></th>
		</tr>
		<tr>
			<td>Programa Nacional de Conservacion de Bosques - PNCBMCC?</td>
			<td><?php echo form_input ($rpta2); ?></td>
			<td><?php echo form_input ($rpta2); ?></td>
			<td><?php echo form_input ($rpta2); ?></td>
		</tr>
		<tr>
			<td>Servicio Nacional de Areas naturales protegidas por el Estado - SENARP?</td>
			<td><?php echo form_input ($rpta2); ?></td>
			<td><?php echo form_input ($rpta2); ?></td>
			<td><?php echo form_input ($rpta2); ?></td>
		</tr>
		<tr>
			<td>Otro? <?php echo form_input ($rpta2); ?> (Especifique) </td>
			<td><?php echo form_input ($rpta2); ?></td>
			<td><?php echo form_input ($rpta2); ?></td>
			<td><?php echo form_input ($rpta2); ?></td>
		</tr>
		<tr>
			<td>Otro? <?php echo form_input ($rpta2); ?> (Especifique) </td>
			<td><?php echo form_input ($rpta2); ?></td>
			<td><?php echo form_input ($rpta2); ?></td>
			<td><?php echo form_input ($rpta2); ?></td>
		</tr>
		<tr>
			<td>Otro? <?php echo form_input ($rpta2); ?> (Especifique) </td>
			<td><?php echo form_input ($rpta2); ?></td>
			<td><?php echo form_input ($rpta2); ?></td>
			<td><?php echo form_input ($rpta2); ?></td>
		</tr>
		<tr>
			<td>NINGUNO</td>
			<td><?php echo form_input ($rpta2); ?></td>
			<td><?php echo form_input ($rpta2); ?></td>
			<td><?php echo form_input ($rpta2); ?></td>
		</tr>
		<tr>
			<th colspan ="2">1207. EL COMITÉ DE GESTIÓN REALIZA ACTIVIDADES COMO:</th>
		</tr>
		<td colspan ="2">
			<table class ="table table-bordered">
				<tr>
					<td>Convocar a Asamblea Comunal?</td>
					<td><?php echo form_input ($rpta2); ?></td>
				</tr>
				<tr>
					<td>Velar por el funcionamiento del Área natural protegida?</td>
					<td><?php echo form_input ($rpta2); ?></td>
				</tr>
				<tr>
					<td>Elaborar y proponer en Asamblea Comunal el Plan  de Inversiones?</td>
					<td><?php echo form_input ($rpta2); ?></td>
				</tr>
				<tr>
					<td>Velar por el Cumplimiento del Plan de Inversiones de la Comunidad?</td>
					<td><?php echo form_input ($rpta2); ?></td>
				</tr>
				<tr>
					<td>Supervisar el cumplimiento de los contratos y/o convenios relacionados al manejo del área?</td>
					<td><?php echo form_input ($rpta2); ?></td>
				</tr>
			</table>
		</td>
		<td colspan ="2">
			<table class ="table table-bordered">
				<tr>
					<td>Proponer las políticas de desarrollo y planes de Áreas Naturales Protegidas para su aprobación por el SENARP?</td>
					<td><?php echo form_input ($rpta2); ?></td>
				</tr>
				<tr>
					<td>Seguimiento al Plan Maestro y de Monitoreo de las ANP?</td>
					<td><?php echo form_input ($rpta2); ?></td>
				</tr>
				<tr>
					<td>Otro? <?php echo form_input ($rpta2); ?> (Especifique)</td>
					<td><?php echo form_input ($rpta2); ?></td>
				</tr>
				<tr>
					<td>Otro? <?php echo form_input ($rpta2); ?> (Especifique)</td>
					<td><?php echo form_input ($rpta2); ?></td>
				</tr>
			</table>
		</td>
	</table>

	<table class ="table table-bordered">
	<tr>
		<th><center>1300. IMPLEMENTACIÓN DE RECOMENDACIONES DEL SISTEMA DE ALERTA TEMPRANA</center></th>
	</tr>
	</table>

	<table class = "table table-bordered">
	<tr>
		<th colspan ="4">1301. EL SISTEMA DE MONITOREO Y ALERTA TEMPRANA DEL PROGRAMA DE BOSQUES HAN BRINDADO RECOMENDACIONES A LA COMUNIDAD?</th>
	</tr>
	<tr>
		<td>SI</td>
		<td><?php echo form_input ($rpta2); ?></td>
		<td>NO</td>
		<td><?php echo form_input ($rpta2); ?> <b>PASE A CAP. 1400</b></td>
	</tr>
		<td colspan="4">
			<table class ="table table-bordered">
				<tr>
					<th rowspan ="2">1302. CUALES SON LAS RECOMENDACIONES QUE BRINDARON?</th>
					<th colspan ="4"><center>1303. HA SIDO IMPLEMENTADO?</center></th>
				</tr>
				<tr>
					<th colspan = "4"><center>SI / NO</center></th>
				</tr>
				<tr>
					<td><?php echo form_input ($rpta2); ?></td>
					<td><?php echo form_input ($rpta2); ?></td>
				</tr>
				<tr>
					<td><?php echo form_input ($rpta2); ?></td>
					<td><?php echo form_input ($rpta2); ?></td>
				</tr>
				<tr>
					<td><?php echo form_input ($rpta2); ?></td>
					<td><?php echo form_input ($rpta2); ?></td>
				</tr>
				<tr>
					<td><?php echo form_input ($rpta2); ?></td>
					<td><?php echo form_input ($rpta2); ?></td>
				</tr>
				<tr>
					<td><?php echo form_input ($rpta2); ?></td>
					<td><?php echo form_input ($rpta2); ?></td>
				</tr>
				<tr>
					<td><?php echo form_input ($rpta2); ?></td>
					<td><?php echo form_input ($rpta2); ?></td>
				</tr>
			</table>
		</td>
	</table>
	<tr>
		<td>
			<table class ="table table-bordered">

			</table>
		</td>
	</tr>

	<table class ="table table-bordered"> 

			<tr>
				<th colspan="2"><center>1400. VISIÓN DE DESARROLLO DE LA COMUNIDAD: PERCEPCIONES Y BIENESTAR</center></th>
			</tr>
			<tr>
				<td><!--Lado Izquierdo -->
					<table>
						<tr>
							<td>
								<table class ="table table-bordered">
									<th><center>GOBERNABILIDAD</center></th>
								</table>
							</td>		
						</tr>
						<tr>
							<th>1401. ACTUALMENTE, USTED CONFIA EN ORGANIZACIONES COMO:</th>
						</tr>
						<tr>
							<td>
								<table class ="table table-bordered">
									<tr>
										<th><center>Institución</center></th>
										<th><center>SI / NO / NO OPINA / NO CONOCE</center></th>
									</tr>
									<tr>
										<th>1. AIDESEP?</th>
										<th><?php echo form_input ($rpta2); ?></th>
									</tr>
									<tr>
										<th>2. 	COMARU?</th>
										<th><?php echo form_input ($rpta2); ?></th>
									</tr>
									<tr>
										<th>3. CONAFU?</th>
										<th><?php echo form_input ($rpta2); ?></th>
									</tr>
									<tr>
										<th>4. ORPIAN?</th>
										<th><?php echo form_input ($rpta2); ?></th>
									</tr>
									<tr>
										<th>5. OPIWAK?</th>
										<th><?php echo form_input ($rpta2); ?></th>
									</tr>
									<tr>
										<th>6. FECAS?</th>
										<th><?php echo form_input ($rpta2); ?></th>
									</tr>
									<tr>
										<th>7. FAD?</th>
										<th><?php echo form_input ($rpta2); ?></th>
									</tr>
									<tr>
										<th>8. FECOHRSA?</th>
										<th><?php echo form_input ($rpta2); ?></th>
									</tr>
									<tr>
										<th>9. OCCAAM?</th>
										<th><?php echo form_input ($rpta2); ?></th>
									</tr>
									<tr>
										<th>10. ODECABM?</th>
										<th><?php echo form_input ($rpta2); ?></th>
									</tr>
									<tr>
										<th>11. AIDESEP?</th>
										<th><?php echo form_input ($rpta2); ?></th>
									</tr>
									<tr>
										<th>12. FECONARIN?</th>
										<th><?php echo form_input ($rpta2); ?></th>
									</tr>
									<tr>
										<th>13. CAH?</th>
										<th><?php echo form_input ($rpta2); ?></th>
									</tr>
									<tr>
										<th>14. KANUJA?</th>
										<th><?php echo form_input ($rpta2); ?></th>
									</tr>
									<tr>
										<th>15. FECONACA?</th>
										<th><?php echo form_input ($rpta2); ?></th>
									</tr>
									<tr>
										<th>16. FECONABAP?</th>
										<th><?php echo form_input ($rpta2); ?></th>
									</tr>
									<tr>
										<th>17. CART?</th>
										<th><?php echo form_input ($rpta2); ?></th>
									</tr>
									<tr>
										<th>18. FECONAYA?</th>
										<th><?php echo form_input ($rpta2); ?></th>
									</tr>
									<tr>
										<th>19. ANAP?</th>
										<th><?php echo form_input ($rpta2); ?></th>
									</tr>
									<tr>
										<th>20. OARA?</th>
										<th><?php echo form_input ($rpta2); ?></th>
									</tr>
									<tr>
										<th>21. Otra? <?php echo form_input ($rpta2); ?> (Especifique)</th>
										<th><?php echo form_input ($rpta2); ?></th>
									</tr>
								</table>
							</td>
						</tr>
						<tr>
							<th>1402. EN SU OPINIÓN, SIENTE QUE EL ESTADO Y SUS INSTANCIAS DESCENTRALIZADAS (Ministerios, Gobiernos Regionales, Municipalidades, etc.) RECONOCEN EL DOMINIO DE LA COMUNIDAD SOBRE SUS TERRITORIOS?</th>
						</tr>
						<tr>
							<td>
								<table class ="table table-bordered">
									<tr>
										<td><center>SI</center></td>
										<td><?php echo form_input ($rpta2); ?></td>
									</tr>
									<tr>
										<td><center>NO</center></td>
										<td><?php echo form_input ($rpta2); ?></td>
									</tr>
									<tr>
										<td><center>En algunos casos</center></td>
										<td><?php echo form_input ($rpta2); ?></td>
									</tr>
								</table>
							</td>
						</tr>


					</table>

				</td>


				<td><!--Lado derecho -->
					<table>
						<tr>
							<td>
								<table class ="table table-bordered">
									<th><center>CULTURA</center></th>
								</table>
							</td>
						</tr>
						<tr>
							<th>1403. CREE UD. QUE LOS JÓVENES DE SU COMUNIDAD VALORAN:</th>
						</tr>
						<tr>
							<td>
								<table class ="table table-bordered">
									<tr>
										<th><center>Características</center></th>
										<th><center>SI / NO </center></th>
									</tr>
									<tr>
										<td><center>1. Las festividades o manifestaciones culturales, danzas, lengua, etc?</center></td>
										<td><?php echo form_input ($rpta2); ?></td>
									</tr>
									<tr>
										<td><center>2. El manejo tradicional de resursos?</center></td>
										<td><?php echo form_input ($rpta2); ?></td>
									</tr>
									<tr>
										<td><center>3. Las visitas a lugares sagrados de su comunidad?</center></td>
										<td><?php echo form_input ($rpta2); ?></td>
									</tr>
									
								</table>
							</td>
						</tr>
						<tr>
							<td>
								<table class ="table table-bordered">
									<th>1404. SIENTE QUE EN SU COMUNIDAD SE VIVE EN UN AMBIENTE DE TRANQUILIDAD Y PAZ?</th>
								</table>
							</td>	
						</tr>
						<tr>
							<td>
								<table class ="table table-bordered">
									<tr>
										<td><center>SI /NO</center></td>
										<td><?php echo form_input ($rpta2); ?></td>
									</tr>
									<tr>
										<td><center><b>1404A. Porque?</b></center></td>
										<td><?php echo form_input ($rpta2); ?></td>
									</tr>
								</table>
							</td>
						</tr>
						<tr>
							<td>
								<table class ="table table-bordered">
									<tr>
										<th><center>DEL HOGAR Y LA COMUNIDAD </center></th>
									</tr>
								</table>
							</td>
						</tr>
						<tr>
							<th>1405. DESDE QUE SE AFILIARON AL PROGRAMA, EL NIVEL DE VIDA<?php echo form_input ($rpta2); ?> </th>
						</tr>
						<tr>
							<td>
								<table class ="table table-bordered">
									<tr>
										<th></th>
										<th>Mejoró? / Está igual / Empeoró</th>
									</tr>
									<tr>
										<th>De los hogares de su comunidad</th>
										<th><?php echo form_input ($rpta2); ?></th>
									</tr>
									<tr>
										<th>No intervino el programa nacional de conservación de bosques?</th>
										<th><center><b>PASE A 1407</b></center></th>
									</tr>
									<tr>
										<th colspan ="2"><center>Lea la siguiente pregunta, solo si en pregunta 1405 circuló código "1".</center></th>
								</table>
							</td>
						</tr>
						<tr>
							<td>
								<table class = "table table-bordered">
									<td>
										<tr>
											<th colspan ="2">1406. DE QUE MANERA MEJORÓ EL NIVEL DE VIDA DE LOS HOGARES DE SU COMUNIDAD? (Circule uno o más Códigos)</th>
										</tr>
										<tr>
											<td>Aumento de empleo</td>
											<td><?php echo form_input ($rpta2); ?></td>
										</tr>
										<tr>
											<td>Mejoró el nivel educativo</td>
											<td><?php echo form_input ($rpta2); ?></td>
										</tr>
										<tr>
											<td>Acceso a programas sociales</td>
											<td><?php echo form_input ($rpta2); ?></td>
										</tr>
										<tr>
											<td>Mejora de las condiciones de salud de la población</td>
											<td><?php echo form_input ($rpta2); ?></td>
										</tr>
										<tr>
											<td>Otro <?php echo form_input ($rpta2); ?> (Especifique)</td>
											<td><?php echo form_input ($rpta2); ?></td>
										</tr>
									</td>
								</table>
							</td>
						</tr>

					</table>
				</td>
			</tr>
		</table>

<table class ="table table-bordered">
	<tr>
		<th><center>VISIÓN DE DESARROLLO</center></th>
	</tr>
</table>

<table class ="table table-bordered">
	<tr>
		<th colspan ="2">1407. USTED NOTA DESAROOLLO EN SU COMUNIDAD EN EL ASPECTO:</th>
		<th>1408. COMO VE A SU COMUNIDAD EN 5 AÑOS EN EL ASPECTO <?php echo form_input ($rpta2); ?> (Circule un código)</th>
	</tr>
	<tr>
		<th> </th>
		<th><center>SI / NO</center></th>
		<th><center>Código</center></th>
	</tr>
	<tr>
		<th>1. Político?</th>
		<th><?php echo form_input ($rpta2); ?></th>
		<th><?php echo form_input ($rpta2); ?></th>
	</tr>
	<tr>
		<th>2. Cultural?</th>
		<th><?php echo form_input ($rpta2); ?></th>
		<th><?php echo form_input ($rpta2); ?></th>
	</tr>
	<tr>
		<th>3. Social?</th>
		<th><?php echo form_input ($rpta2); ?></th>
		<th><?php echo form_input ($rpta2); ?></th>
	</tr>
	<tr>
		<th>4. Económico?</th>
		<th><?php echo form_input ($rpta2); ?></th>
		<th><?php echo form_input ($rpta2); ?></th>
	</tr>
	<tr>
		<th>5. Ambiental?</th>
		<th><?php echo form_input ($rpta2); ?></th>
		<th><?php echo form_input ($rpta2); ?></th>
	</tr>
	<tr>
		<th>6. Otro? <?php echo form_input ($rpta2); ?> (Especifique)</th>
		<th><?php echo form_input ($rpta2); ?></th>
		<th><?php echo form_input ($rpta2); ?></th>
	</tr>
</table>

<table class = "table table-bordered">
	<tr>
		<th><center>Solo lea estas preguntas si en la pregunta 1407, circuló al menos un código 1 "Con mayor desarrollo"</center></th>
	</tr>
</table>

<table class ="table table-bordered">
	<tr>
		<td> <!--Lado Izquierdo-->
			<table class ="table">
				<tr>
					<th colspan ="2">1409. CONSIDERA UD. QUE ESTE MAYOR DESARROLLO LO LOGRAN CON APOYO DE ALGUNA INSTITUCION U ORGANIZACION?</th>
				</tr>
				<tr>
					<th><center>SI / NO </center></th>
					<th><?php echo form_input ($rpta2); ?><b>PASE A CAP. 1500</b></th>
				</tr>
			</table>

		</td>

		<td> <!-- Lado Derecho -->
			<table = class ="table">
				<tr>
					<th colspan ="2"> 1410. DE QUE INSTITUCION (ES) Y ORGANIZACION(ES) ESPERA UD. APOYO PARA LOGRAR ESTE MAYOR DESAROLLO (Circule uno o más códigos)</th>
				</tr>
				<tr>
					<td>Ministerio de Ambiente</td>
					<td><?php echo form_input ($rpta2); ?></td>
				</tr>
				<tr>
					<td>Ministerio de Agricultura</td>
					<td><?php echo form_input ($rpta2); ?></td>
				</tr>
				<tr>
					<td>ONG's</td>
					<td><?php echo form_input ($rpta2); ?></td>
				</tr>
				<tr>
					<td>Cooperación Internacional</td>
					<td><?php echo form_input ($rpta2); ?></td>
				</tr>
				<tr>
					<td>La Iglesia</td>
					<td><?php echo form_input ($rpta2); ?></td>
				</tr>
				<tr>
					<td>Gobierno Local</td>
					<td><?php echo form_input ($rpta2); ?></td>
				</tr>
				<tr>
					<td>Gobierno Central</td>
					<td><?php echo form_input ($rpta2); ?></td>
				</tr>
				<tr>
					<td>Otro <?php echo form_input ($rpta2); ?> (Especifique)</td>
					<td><?php echo form_input ($rpta2); ?></td>
				</tr>
			</table>
		</td>
	</tr>
</table>

<table class = "table table-bordered">
	<tr>
		<th><center>1500. MIGRACIÓN </center></th>
	</tr>
</table>

<table class ="table table-bordered">
	<tr>
		<td> <!-- Lado Izquierdo -->
			<table class ="table table-bordered">
				<tr>
					<th colspan ="4">1501. EN LOS ÚLTIMOS 5 AÑOS, HAN LLEGADO NUEVAS FAMILIAS Y POBLADORES DE OTRAS COMUNIDADES O COMUNIDAD?</th>
				</tr>
				<tr>
					<th> SI / NO</th>
					<th> <?php echo form_input ($rpta2); ?><b>1501A. Cuantas llegaron?</b></th>
					<th> <?php echo form_input ($rpta2); ?> <b>Familias</b></th>
					<th> <?php echo form_input ($rpta2); ?> <b>Pobladores</b></th>
				</tr>
			</table>

			<table class ="table table-bordered">
				<tr>
					<th colspan ="4">1502. EN LOS ULTIMOS 5 AÑOS, HAN RETORNADO FAMILIAS Y POBLADORES QUE SE HABÍAN RETIRADO DE SU COMUNIDAD?</th>
				</tr>
				<tr>
					<th> SI / NO</th>
					<th> <?php echo form_input ($rpta2); ?><b>1502A. Cuantas retornaron?</b></th>
					<th> <?php echo form_input ($rpta2); ?> <b>Familias</b></th>
					<th> <?php echo form_input ($rpta2); ?> <b>Pobladores</b></th>
				</tr>
			</table>
		</td>

		<td> <!-- Lado Derecho -->
			<table class ="table table-bordered">
				<tr>
					<th colspan ="4">1503. EN LOS ULTIMOS 5 AÑOS, HAN EMIGRADO FAMILIAS COMPLETAS (PADRES E HIJOS) Y POBLADORES DE SU COMUNIDAD?</th>
				</tr>
				<tr>
					<th> SI / NO</th>
					<th> <?php echo form_input ($rpta2); ?><b>1502A. Cuantas emigraron?</b></th>
					<th> <?php echo form_input ($rpta2); ?> <b>Familias</b></th>
					<th> <?php echo form_input ($rpta2); ?> <b>Pobladores</b></th>
				</tr>
			</table>
		</td>
	</tr>
</table>

<table class ="table table-bordered">
	<tr>
		<th>OBSERVACIONES: <?php echo form_textarea ($rpta2); ?></th>
	</tr>
</table>

<table class ="table table-bordered">
	<tr>
		<th><center>EL Jefe o Autoridad de la comunidad Nativa deja constancia que toda información resgistrada en esta cédula ha sido recopilada por el Encuestador(a) responsable de la ENSESA 2013, dando conformidad a la misma.</center></th>
		<th><?php echo form_input($rpta2); ?><b><center> Sello y Firma </center></b></th>
	</tr>
</table>
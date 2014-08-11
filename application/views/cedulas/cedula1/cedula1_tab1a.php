<?php 
/*******************************************************************************
*******************************************************************************
		C O M B O S
*******************************************************************************
*******************************************************************************/



$E1_Cuestionario_Nro = array(
				'id' => 'E1_Cuestionario_Nro',
				'name' => 'E1_Cuestionario_Nro',
				'class' => 'form-control',
				'disabled'	=> 'disabled',
			);

$cuestionario_adicional = array(
				'id' => 'cuestionario_adicional',
				'name' => 'cuestionario_adicional',
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
				'maxlenght'=>'2',
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
				'maxlenght'=>'2',
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
				'maxlenght'=>'2',
			);

$A_4_Centro_Poblado = array(
				'id' => 'A_4_Centro_Poblado',
				'name' => 'A_4_Centro_Poblado',
				'class' => 'form-control',
				'value' => set_value('A_4_Centro_Poblado'),
			);

$A_5_Comunidad_Nativa = array(
				'id' => 'A_5_Comunidad_Nativa',
				'name' => 'A_5_Comunidad_Nativa',
				'class' => 'form-control',
				'value' => set_value('A_5_Comunidad_Nativa'),
			);

$A_6_Anexo_Cn = array(
				'id' => 'A_6_Anexo_Cn',
				'name' => 'A_6_Anexo_Cn',
				'class' => 'form-control',
				'value' => set_value('A_6_Anexo_Cn'),
			);
$B_7_Zona = array(
			'id' => 'B_7_Zona',
			'name' => 'B_7_Zona',
			'class' => 'form-control',
			'value' => set_value('B_7_Zona'),
		);

$B_8_Manzana = array(
			'id' => 'B_8_Manzana',
			'name' => 'B_8_Manzana',
			'class' => 'form-control',
			'value' => set_value('B_8_Manzana'),
		);
$B_9_1_AER_ini = array(
			'id' => 'B_9_1_AER_ini',
			'name' => 'B_9_1_AER_ini',
			'class' => 'form-control',
			'value' => set_value('B_9_1_AER_ini'),
		);
$B_9_2_AER_fin = array(
			'id' => 'B_9_2_AER_fin',
			'name' => 'B_9_2_AER_fin',
			'class' => 'form-control',
			'value' => set_value('B_9_2_AER_fin'),
		);
$B_10_Vivienda_nro = array(
			'id' => 'B_10_Vivienda_nro',
			'name' => 'B_10_Vivienda_nro',
			'class' => 'form-control',
			'value' => set_value('B_10_Vivienda_nro'),
		);
?>




<!--************************************************************************************************************************************************************************************************************************************************************
****************************************************************************************************************************************************************************************************************************************************************
																				TAB I
****************************************************************************************************************************************************************************************************************************************************************
*************************************************************************************************************************************************************************************************************************************************************-->
<?php echo form_open('','id="frmTab1"'); ?>
	<br><br>
	<table class="table table-bordered E1_Vivienda_Hogar">
		<tr>
			<th colspan="3"><center><h3>VIVIENDA, HOGAR, EDUCACIÓN, SALUD, EMPLEO E INGRESOS, CONSERVACIÓN DE BOSQUES, RECURSOS Y SERVICIOS DEL BOSQUE, DEFORESTACIÓN Y COMITÉ DE VIGILANCIA DEL BOSQUE</h3></center>   </th>
		</tr>
		<tr>			
			<td rowspan="2"> Cuestionario Confidencial: Amparado por el decreto legislativo Nro 604 y por el decreto supremo 043-2001-PCM: Secreto Estadistico </td>
			<th> Cuestionario  </th>
		</tr>
		<tr>
			<th> <?php echo form_input($E1_Cuestionario_Nro); ?> </th>
		</tr>
	</table><br>

	<?php echo validation_errors(); ?>
	<?php if(isset($msgBox)){ 
		echo '<div class="alert '.$msgBox['type'].' alert-dismissable">
		  <button type="button" class="close" data-dismiss="alert">&times;</button>
		  <strong>¡'.$msgBox['title'].'!</strong> '.$msgBox['msg'].'.
		</div>';
	} ?>
	<table id="PadVivienda" name="PadVivienda" class="table table-bordered"><!-- ubigeo-->
		<tr>
			<td>
				<table class="table">
					<tr><td colspan="2"><h4>A. UBICACIÓN GEOGRÁFICA</h4></td></tr>
					<tr><td> 1. DEPARTAMENTO </td><td> <?php echo form_dropdown('A_1_Cod_Dpto',$arrayDepartamento,null,'id="A_1_Cod_Dpto" class="form-control"'); ?> </td></tr>
					<tr><td> 2. PROVINCIA </td><td> <?php echo form_dropdown('A_2_Cod_Prov',$arrayProvincia,null,'id="A_2_Cod_Prov" class="form-control"'); ?> </td></tr>
					<tr><td> 3. DISTRITO </td><td> <?php echo form_dropdown('A_3_Cod_Dist',$arrayProvincia,null,'id="A_3_Cod_Dist" class="form-control"'); ?> </td></tr>
					<tr><td> 4. CENTRO POBLADO </td><td> <?php echo form_input($A_4_Centro_Poblado); ?> </td></tr>
					<tr><td> 5. COMUNIDAD NATIVA </td><td> <?php echo form_input($A_5_Comunidad_Nativa); ?> </td></tr>
					<tr><td> 6. ANEXO CC.NN. </td><td> <?php echo form_input($A_6_Anexo_Cn); ?> </td></tr>
				</table>
			</td>
			<td>
				<table class="table">
					<tr><td colspan="3"><h4>B. UBICACIÓN CENSAL</h4></td></tr>
					<tr><td colspan="2"> 7. ZONA N° </td><td> <?php echo form_input($B_7_Zona); ?> </td></tr>
					<tr><td colspan="2"> 8. MANZANA N° </td><td> <?php echo form_input($B_8_Manzana); ?> </td></tr>
					<tr><td rowspan="2"> 9. A.E.R.N </td><td> Inicial </td><td> <?php echo form_input($B_9_1_AER_ini); ?> </td></tr>
					<tr><td> Final </td><td> <?php echo form_input($B_9_2_AER_fin); ?> </td></tr>
					<tr><td colspan="2"> 10. VIVIENDA N° </td><td> <?php echo form_input($B_10_Vivienda_nro); ?> </td></tr>
				</table>
			</td>
		</tr>
	</table>




	<?php 
		if (isset($Cod_Vivienda) && !is_null($Cod_Vivienda)) {
			echo '<input type="hidden" id="Cod_Vivienda" name="Cod_Vivienda" value="'.$Cod_Vivienda. '">'; 
			echo '<br><table class="table table-bordered">
				<tr>
					<td colspan="4"> <div class="col-md-2">HOGAR N°</div><div class="col-md-2"><input type="input" id="hogarFind" name="hogarFind" class="form-control" required/></div><div class="col-md-2">'.form_button('find1','Buscar','id="find1" class="btn btn-info"').'</div> </td>
					<td>'.form_button('nuevoHogar','Nuevo hogar','id="nuevoHogar" class="btn btn-info"').'</td>
					<td>'.anchor('/cedulas/cedula1','Nuevo ubigeo','class="btn btn-info"').'</td>
				</tr>
			</table>';
			$this->load->view('cedulas/cedula1/cedula1_tab1b');
			echo form_button('save1','Guardar','id="save1" class="btn btn-info hide"'); 
		}
	?>
	

<?php echo form_close(); ?>




<script type="text/javascript">

    $("#A_1_Cod_Dpto").change(function () {
    	var depVal = parseInt($(this).val())-1;
    	var prov = $("#A_2_Cod_Prov");
    	var dist = $("#A_3_Cod_Dist");
    	prov.html('<option value="-1"> Seleccione </option>');
    	dist.html('<option value="-1"> Seleccione </option>');
    	if (depVal >= 0) {
    		$.each(jsonUbigeo[depVal].PROVINCIA,function (idx,value) {
    			prov.append('<option value="'+value.CCPP+'"> '+value.Nombre+' </option>');
    		})
    	};
    })
    $("#A_2_Cod_Prov").change(function () {
    	var depVal = parseInt($("#A_1_Cod_Dpto").val())-1;
    	var provVal = parseInt($(this).val())-1;
    	var dist = $("#A_3_Cod_Dist");
    	dist.html('<option value="-1"> Seleccione </option>');
    	if (depVal >= 0 && provVal >= 0) {
    		$.each(jsonUbigeo[depVal].PROVINCIA[provVal].DISTRITO,function (idx,value) {
    			dist.append('<option value="'+value.CCDI+'"> '+value.Nombre+' </option>');
    		})
    	};
    })


    $("#nuevoHogar").click(function () {
    	$('body').find('li, button, table').removeClass('hide');
		$("#E1_Cuestionario_Nro").removeAttr('disabled');
		$("#E1_Cuestionario_Nro").focus();
		$('.liUbigeo a').html('UBIGEO - CAP. 100');
    })

    $("#find1").click(function () {
    	var btn = $(this);
    	var hogarFind = $("#hogarFind").val();
    	if (hogarFind!=""  && hogarFind.match(/^[0-9]+$/) ) {
    		btn.attr('disabled','disabled');
	    	$.ajax({
	    		url:"<?php echo current_url(); ?>"+"/"+hogarFind,
	    		type:'GET',
	    		dataType:'JSON',
	    		//data:{'E1_B_13_Nro_Hogar':hogarFind},
	    		success:function (returnData) {
	    			if ($.type(returnData.E1_Vivienda_Hogar) !== 'null') {
		    			$.each(returnData.E1_Vivienda_Hogar[0],function (fName,fValue) {
		    				$("#"+fName).val(fValue);
		    				//console.log(fName);
		    			})	    				
	    			};
	    			if ($.type(returnData.E1_Visita_VH) !== 'null') {
	    				for (var i = 0; i < 7; i++) {
			    			$.each(returnData.E1_Visita_VH[i],function (fName,fValue) {
			    				$("#"+fName+"_"+(i+1)).val(fValue);
			    			})	  
	    				};
  				
	    			};	    			
	    			$('.liUbigeo a').html('UBIGEO - CAP. 100');
	    			btn.removeAttr('disabled');
			    	$('body').find('li, button, table').removeClass('hide');
					$("#E1_Cuestionario_Nro").removeAttr('disabled');
					$("#E1_Cuestionario_Nro").focus();
					$("#E1_B_13_Nro_Hogar").attr('readonly','readonly');
	    		}
	    	})    		
    	}else{
    		$("#hogarFind").focus().select();
    		alert('Ingrese número válido para hogar');
    	}

    })

    $("#save1").click(function () {
    	//$("#PadVivienda :input").attr('disabled','disabled');
    	var formData = $(".E1_Vivienda_Hogar :input").serializeArray();
    	formData.push({name:'Cod_Vivienda',value:$('#Cod_Vivienda').val()});
    	var visitaData = {};
    	for (var i = 1; i <= 7; i++) {
    		visitaData[i-1] = ($("#tableVisitaRow-"+i+" input").serializeArray());
    	};
    	//formData.push({name :'visitaData', value: visitaData});
    	var nana = {hola:15,quehace:45};
    	formData.push({name :'visitaData', value: JSON.stringify(visitaData)});
    	console.log(formData);
    	$.ajax({
    		url:"<?php echo site_url(); ?>"+"/cedulas/cedula1/save/1",
    		type:'POST',
    		dataType:'JSON',
    		data:formData,
    		success:function (argument) {
    			alert("ok");
    		}
    	})
    })
    


$(function () {


	var PadVivienda = <?php echo (isset($PadVivienda)? json_encode($PadVivienda) : "''"); ?>;
	if (PadVivienda.length>=1) {

		$.each(PadVivienda,function (idx,row) {
			$.each(row,function (fieldName,fieldValue) {
				if (fieldName == "A_1_Cod_Dpto" || fieldName == "A_2_Cod_Prov") {
					$("#"+fieldName).val(fieldValue).trigger('change');
				}else{
					$("#"+fieldName).val(fieldValue);
				};
				$("#"+fieldName).attr('disabled','disabled');
			})
		})
	};





})





</script>

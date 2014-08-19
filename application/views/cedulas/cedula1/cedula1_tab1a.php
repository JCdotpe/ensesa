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
			echo '<div class="row" id="divBuscador">
				<div class="col-md-1">'.form_button('nuevoHogar','Nuevo hogar','id="nuevoHogar" class="btn btn-info"').'</div>
				<div class="col-md-1">'.anchor('/cedulas/cedula1','Nuevo ubigeo','class="btn btn-info"').'</div>
				<div class="col-md-1 col-md-offset-7">HOGAR N°</div>
				<div class="col-md-1"><input type="input" id="hogarFind" name="hogarFind" class="form-control" required/></div>
				<div class="col-md-1">'.form_button('find1','Buscar','id="find1" class="btn btn-info"').'</div>
			</div>';
			$this->load->view('cedulas/cedula1/cedula1_tab1b');
			echo '<div class="row" id="divGuardar1" style="display:none;">
				<div class="col-md-1"><a href="'.current_url().'" class="btn btn-info">Nuevo registro</a></div>
				<div class="col-md-1 col-md-offset-10">'.form_submit('save1','Guardar','id="save1" class="btn btn-info"').'</div>
			</div>';			
		}
	?>
	

<?php echo form_close(); ?>




<script type="text/javascript">

var errorTablasDinamicas = [];

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
		    			})	    				
	    			};
	    			if ($.type(returnData.E1_Visita_VH) !== 'null') {
	    				for (var i = 0; i < 7; i++) {
			    			$.each(returnData.E1_Visita_VH[i],function (fName,fValue) {
			    				$("#"+fName+"_"+(i+1)).val(fValue);
			    			})	  
	    				};
	    			};
	    			if ($.type(returnData.E1_Persona) !== 'null') {
	    				for (var i = 0; i < returnData.E1_Persona.length; i++) {
	    					var nRow = returnData.E1_Persona[i].E1_201_Nro;
	    					addRow(nRow);
			    			$.each(returnData.E1_Persona[i],function (fName,fValue) {
			    				$("#"+fName+"-"+(i+1)).val(fValue);
			    			})	  
	    				};
	    			};	    
	    			if ($.type(returnData.E1_Persona_Empleo) !== 'null') {
	    				for (var i = 0; i < returnData.E1_Persona_Empleo.length; i++) {
			    			$.each(returnData.E1_Persona_Empleo[i],function (fName,fValue) {
			    				$("#"+fName+"-"+(i+1)).val(fValue);
			    			})	  
	    				};
	    			};
	    			if ($.type(returnData.E1_Conservacion_Bosque) !== 'null') {
		    			$.each(returnData.E1_Conservacion_Bosque[0],function (fName,fValue) {
		    				$("#"+fName).val(fValue);
		    			})	  
	    			};
	    			$('input').trigger('change');// disparar validaciones
	    			$('.liUbigeo a').html('UBIGEO - CAP. 100');
	    			btn.removeAttr('disabled');
			    	$('body').find('li, button, table').removeClass('hide');
					$("#E1_Cuestionario_Nro").removeAttr('disabled');
					$("#E1_Cuestionario_Nro").focus();
					$("#E1_B_13_Nro_Hogar").attr('readonly','readonly');
					$("#divBuscador").hide();
					$("#divGuardar1").show();
					
	    		}
	    	})    		
    	}else{
    		$("#hogarFind").focus().select();
    		alert('Ingrese número válido para hogar');
    	}

    })





$("#frmTab1").validate({
	//rules:{'E1_C_Ec_Res[]':{required:true},},
	//rules:{E1_B_11_Tipovia:{required:true}},
	//messages:{E1_B_11_Tipovia:{required:"ingres caracteres"}},
    errorPlacement: function(error, element) {
        $(element).after(error);
    },	
	submitHandler:function(){

	    	var formData = $(".E1_Vivienda_Hogar :input").serializeArray();
	    	formData.push({name:'Cod_Vivienda',value:$('#Cod_Vivienda').val()});
	    	var visitaData = {};
	    	for (var i = 1; i <= 7; i++) {
	    		visitaData[i-1] = ($("#tableVisitaRow-"+i+" input").serializeArray());console.log(visitaData[i-1]);
	    	};
	    	formData.push({name :'visitaData', value: JSON.stringify(visitaData)});
	    	if(errorTablasDinamicas.length>0){
	    		var objPosition = parseInt($("#"+errorTablasDinamicas[0]).offset().top)-100;
				var body = $("html, body");
				body.animate({scrollTop: objPosition}, '500', 'swing', function() { 
				});
				$("#"+errorTablasDinamicas[0]).focus().select(); 		    	
	    		return;
	    	}
	    	$.ajax({
	    		url:"<?php echo site_url(); ?>"+"/cedulas/cedula1/save/1",
	    		type:'POST',
	    		dataType:'JSON',
	    		data:formData,
	    		success:function (argument) {
	    			alert("ok");
	    		}
	    	})  

	},

})

    
/*
* Reglas de validacion
*
*
*/

jQuery.validator.addClassRules("ruleLen2", {
  maxlength: 2,
});
jQuery.validator.addClassRules("ruleLen3", {
  maxlength: 3,
});
jQuery.validator.addClassRules("ruleLen4", {
  maxlength: 4,
});
jQuery.validator.addClassRules("ruleLen5", {
  maxlength: 5,
});
jQuery.validator.addClassRules("ruleLen6", {
  maxlength: 6,
});
jQuery.validator.addClassRules("ruleLen7", {
  maxlength: 7,
});
jQuery.validator.addClassRules("ruleLen8", {
  maxlength: 8,
});
jQuery.validator.addClassRules("ruleLenE8", {
  minlength: 8, maxlength: 8,
});
jQuery.validator.addClassRules("ruleLen11", {
  maxlength: 11,
});
jQuery.validator.addClassRules("ruleLenE11", {
  minlength: 11, maxlength: 11,
});
jQuery.validator.addClassRules("ruleNombres", {
  required: true, maxlength: 80, validName: true,
});
jQuery.validator.addClassRules("ruleEnteros", {
  required: true, maxlength: 80, enteros: true,
});
jQuery.validator.addClassRules("ruleAlfanumerico", {
  required: true, maxlength: 80, alfaNumerico: true,
});
jQuery.validator.addClassRules("ruleBinario", {
  required: true, maxlength: 1, enteros: true, ranges: [ [0,1], [9] ],
});
jQuery.validator.addClassRules("ruleDig1-2", {
  required: true, maxlength: 1, enteros: true, ranges: [ [1,2], [9] ],
});
jQuery.validator.addClassRules("ruleDig1-3", {
  required: true, maxlength: 1, enteros: true, ranges: [ [1,3], [9] ],
});
jQuery.validator.addClassRules("ruleDig1-4", {
  required: true, maxlength: 1, enteros: true, ranges: [ [1,4], [9] ],
});
jQuery.validator.addClassRules("ruleDig1-5", {
  required: true, maxlength: 1, enteros: true, ranges: [ [1,5], [9] ],
});
jQuery.validator.addClassRules("ruleDig1-6", {
  required: true, maxlength: 1, enteros: true, ranges: [ [1,6], [9] ],
});
jQuery.validator.addClassRules("ruleDig1-7", {
  required: true, maxlength: 1, enteros: true, ranges: [ [1,7], [9] ],
});
jQuery.validator.addClassRules("ruleDig1-8", {
  required: true, maxlength: 1, enteros: true, ranges: [ [1,8], [9] ],
});
jQuery.validator.addClassRules("ruleDig1-9", {
  required: true, maxlength: 2, enteros: true, ranges: [ [1,9], [99] ],
});
jQuery.validator.addClassRules("ruleDig1-10", {
  required: true, maxlength: 2, enteros: true, ranges: [ [1,10], [99] ],
});
jQuery.validator.addClassRules("ruleDig1-11", {
  required: true, maxlength: 2, enteros: true, ranges: [ [1,11], [99] ],
});
jQuery.validator.addClassRules("ruleDig1-12", {
  required: true, maxlength: 2, enteros: true, ranges: [ [1,12], [99] ],
});
jQuery.validator.addClassRules("ruleDig1-13", {
  required: true, maxlength: 2, enteros: true, ranges: [ [1,13], [99] ],
});
jQuery.validator.addClassRules("ruleDig1-14", {
  required: true, maxlength: 2, enteros: true, ranges: [ [1,14], [99] ],
});
jQuery.validator.addClassRules("ruleDig1-15", {
  required: true, maxlength: 2, enteros: true, ranges: [ [1,15], [99] ],
});
jQuery.validator.addClassRules("ruleDig1-16", {
  required: true, maxlength: 2, enteros: true, ranges: [ [1,16], [99] ],
});
jQuery.validator.addClassRules("ruleFecha", {
  maxlength: 10, fechaLocal: true,
});
jQuery.validator.addClassRules("ruleHora", {
  maxlength: 6, horaLocal: true,
});
jQuery.validator.addClassRules("ruleRequerid", {
  required: true,
});

/*
* Metodos de validacion
*/

jQuery.validator.addMethod("validName", function(value, element) {
    return this.optional(element) || /^[a-zA-ZàáâäãåąćęèéêëìíîïłńòóôöõøùúûüÿýżźñçčšžÀÁÂÄÃÅĄĆĘÈÉÊËÌÍÎÏŁŃÒÓÔÖÕØÙÚÛÜŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]+$/.test(value);
}, "Caracteres no permitidos"); 

 jQuery.validator.addMethod("exactlength", function(value, element, param) {
    return this.optional(element) || value.length == param;
}, jQuery.validator.format("Ingrese {0} caracteres."));

jQuery.validator.addMethod("alfaNumerico", function(value, element) {
    return this.optional(element) || /^[a-z0-9 ]+$/i.test(value);
}, "Solo letras o numeros");
jQuery.validator.addMethod("enteros", function(value, element) {
    return this.optional(element) || /^[0-9]+$/i.test(value);
}, "Solo numeros");

jQuery.validator.addMethod("domain", function(value, element) {
  return this.optional(element) || /^http:\/\/mycorporatedomain.com/.test(value);
}, "Please specify the correct domain for your documents");

 $.validator.addMethod( "ranges", function(value, element, ranges) {
        var noUpperBound = false;
        var valid = false;
        for(var i=0; i<ranges.length; i++) {
            if(ranges[i].length == 1) { 
                noUpperBound = true;
            }
            if(value >= ranges[i][0] && (value <= ranges[i][1] || noUpperBound)) {
                valid = true;
                break;
            }            
        }
        return this.optional(element) || valid;
    },
    "Ingrese valores permitidos"
 );
$.validator.addMethod("fechaLocal",function(value, element) {
    //return value.match(/^\d\d?\-\d\d?\-\d\d\d\d$/);
    return this.optional(element) || /^[0-9-]+$/i.test(value);
}, "Formato: dd-mm-aaaa");
$.validator.addMethod("horaLocal",function(value, element) {
    //return value.match(/^\d\d?\:\d\d$/);
    return this.optional(element) || /^[0-9:]+$/i.test(value);
}, "Formato: 00:00");


function validarValue(obj,valores,requerido){/* obj:input ; valores:array ; requerido: 0 (no),1 (simple), 2(array) */

	if(requerido == 1 && $(obj).val()=="" && $(obj).attr('disabled')!= 'disabled'){
		if(!$(obj).next('label').hasClass("errorD")){
			$(obj).after('<label class="errorD">Campo requerido</label>');
			errorTablasDinamicas.push($(obj).attr('id'));
		}else{
			$(obj).next('.errorD').show();
		}
	}else if(requerido !="" && valores.length>0 && $.inArray(parseInt($(obj).val()),valores)<0){
		if(!$(obj).next('label').hasClass("errorD")){
			$(obj).after('<label class="errorD">Valor no permitido</label>');
			errorTablasDinamicas.push($(obj).attr('id'));
		}else{
			$(obj).next('.errorD').show();
		}
	}else{
		errorTablasDinamicas.splice($.inArray(parseInt($(obj).val()), errorTablasDinamicas),1);
		$(obj).next('.errorD').hide();
	}
}

/*
 * Activando desactivando ESPECIFIQUE
 */

$(document).on('change','.change',function(event){
 	var arrayEspecifique = [];
	arrayEspecifique[1] = ['E1_108','E1_110_7','E1_111_8','E1_403_15','E1_405_5'];
	arrayEspecifique[4] = ['E1_305'];
	arrayEspecifique[7] = ['E1_C_17_Res','E1_103','E1_106'];
	arrayEspecifique[8] = ['E1_101','E1_104'];
	arrayEspecifique[10] = ['E1_102'];
	arrayEspecifique[11] = ['E1_301'];
	arrayEspecifique[17] = ['E1_404'];
	arrayEspecifique[20] = ['E1_308'];
	arrayEspecifique['d1'] = ['E1_C_Ec_Res','E1_C_Je_Res'];
	if($.inArray($(this).attr('id'),arrayEspecifique[1])>=0 || $.inArray($(this).attr('name'),arrayEspecifique[1])>=0){
		var espec = $(':input:eq(' + ($(':input').index(this) + 1) + ')');  if($(this).val()==1){espec.removeAttr('disabled');}else{espec.attr('disabled','disabled'); espec.val("");} 
		//var espec = $("#"+$(this).attr('id')+"_O"); if($(this).val()==1){espec.removeAttr('disabled');}else{espec.attr('disabled','disabled'); espec.val("");} 
	}else if($.inArray($(this).attr('id'),arrayEspecifique[4])>=0 || $.inArray($(this).attr('name'),arrayEspecifique[4])>=0){
		var espec = $(':input:eq(' + ($(':input').index(this) + 1) + ')');  if($(this).val()==4){espec.removeAttr('disabled');}else{espec.attr('disabled','disabled'); espec.val("");} 
	}else if($.inArray($(this).attr('id'),arrayEspecifique[7])>=0 || $.inArray($(this).attr('name'),arrayEspecifique[7])>=0){
		var espec = $("#"+$(this).attr('id')+"_O");  if($(this).val()==7){espec.removeAttr('disabled');}else{espec.attr('disabled','disabled'); espec.val("");} 
	}else if($.inArray($(this).attr('id'),arrayEspecifique[8])>=0 || $.inArray($(this).attr('name'),arrayEspecifique[8])>=0){
		var espec = $("#"+$(this).attr('id')+"_O");  if($(this).val()==8){espec.removeAttr('disabled');}else{espec.attr('disabled','disabled'); espec.val("");} 
	}else if($.inArray($(this).attr('id'),arrayEspecifique[10])>=0 || $.inArray($(this).attr('name'),arrayEspecifique[10])>=0){
		var espec = $("#"+$(this).attr('id')+"_O");  if($(this).val()==10){espec.removeAttr('disabled');}else{espec.attr('disabled','disabled'); espec.val("");} 
	}else if($.inArray($(this).attr('id'),arrayEspecifique[11])>=0 || $.inArray($(this).attr('name'),arrayEspecifique[11])>=0){
		var espec = $(':input:eq(' + ($(':input').index(this) + 1) + ')');  if($(this).val()==11){espec.removeAttr('disabled');}else{espec.attr('disabled','disabled'); espec.val("");} 
	}else if($.inArray($(this).attr('id'),arrayEspecifique[17])>=0 || $.inArray($(this).attr('name'),arrayEspecifique[17])>=0){
		var espec = $(':input:eq(' + ($(':input').index(this) + 1) + ')');  if($(this).val()==17){espec.removeAttr('disabled');}else{espec.attr('disabled','disabled'); espec.val("");} 
	}else if($.inArray($(this).attr('id'),arrayEspecifique[20])>=0 || $.inArray($(this).attr('name'),arrayEspecifique[20])>=0){
		var espec = $(':input:eq(' + ($(':input').index(this) + 1) + ')');  if($(this).val()==20){espec.removeAttr('disabled');}else{espec.attr('disabled','disabled'); espec.val("");} 
	}else if($.inArray($(this).attr('name'),arrayEspecifique['d1'])>=0){
		var trPadre = $(this).closest('tr').attr('id'); var trId = trPadre.toString().split('-');
		var espec = $("#"+$(this).attr('name')+"_O_"+trId[1]);
		if($(this).val()=='7'){
			espec.removeAttr('disabled'); espec.trigger('blur');
		}else{
			espec.attr('disabled','disabled'); espec.trigger('blur');
		}
	}
});



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

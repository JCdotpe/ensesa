<?php 

		$data['arrayDepartamento'] = array(
			'-1'=> " Seleccione",
			"01" => "AMAZONAS",
			"02" => "ANCASH",
			"03" => "APURIMAC",
			"04" => "AREQUIPA",
			"05" => "AYACUCHO",
			"06" => "CAJAMARCA",
			"07" => "CALLAO",
			"08" => "CUSCO",
			"09" => "HUANCAVELICA",
			"10" => "HUANUCO",
			"11" => "ICA",
			"12" => "JUNIN",
			"13" => "LA LIBERTAD",
			"14" => "LAMBAYEQUE",
			"15" => "LIMA",
			"16" => "LORETO",
			"17" => "MADRE DE DIOS",
			"18" => "MOQUEGUA",
			"19" => "PASCO",
			"20" => "PIURA",
			"21" => "PUNO",
			"22" => "SAN MARTIN",
			"23" => "TACNA",
			"24" => "TUMBES",
			"25" => "UCAYALI"
			);
		$data['arrayProvincia'] = array('-1'=> " Seleccione");
		$data['arrayDistrito'] = array('-1'=> " Seleccione");


?>



<!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">
  <li class="liUbigeo active"><a href="#cedula1_tab1" role="tab" data-toggle="tab">UBIGEO</a></li>
  <!--<li class="hide"><a href="#cedula1_tab2" role="tab" data-toggle="tab">CAP. 100</a></li>-->
  <li class="hide"><a href="#cedula1_tab2" role="tab" data-toggle="tab">CAP. 200 - 400</a></li>
  <li class="hide"><a href="#cedula1_tab3" role="tab" data-toggle="tab">CAP. 500</a></li>
  <li class="hide"><a href="#cedula1_tab4" role="tab" data-toggle="tab">CAP. 600 - 900</a></li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
  <div class="tab-pane active" id="cedula1_tab1"> <?php echo $this->load->view('cedulas/cedula1/cedula1_tab1a',$data); ?> </div>
  <div class="tab-pane" id="cedula1_tab2"> <?php echo $this->load->view('cedulas/cedula1/cedula1_tab2'); ?> </div>
  <div class="tab-pane" id="cedula1_tab3"> <?php echo $this->load->view('cedulas/cedula1/cedula1_tab3'); ?> </div>
  <div class="tab-pane" id="cedula1_tab4"> <?php echo $this->load->view('cedulas/cedula1/cedula1_tab4'); ?> </div>
</div>






<style type="text/css">

.pd146{
	padding-bottom: 146px !important;
}

.pad-td div:nth-child(1){
	padding-left: 0px !important;
}

.pad-td div:last-child{
	padding-left: 0px !important;
	padding-right: 0px !important;
}

</style>

<script type="text/javascript">
    /*
     * Obtiene json para generar ubigeo
	 *
     */
    var jsonUbigeo = (function () {
          var json = null;
          $.ajax({
              type: 'GET',
              'async': false,
              'global': false,
              'url': "<?php echo base_url(); ?>" + 'assets/json/ubigeo.json' ,// json file en servidor
              'dataType': "json",
              'success': function(data) {
                  json = data;
              }
          });
          return json.Ubigeo;
    })();

    /*
     * Agrega TR a las tablas dinamicas, del capitulo 200, 400 y 500
	 *
     */
	function addRow(k){

			var rowTable200 = '<tr id="table200Row-'+k+'" name="table200Row-'+k+'">';
			rowTable200 +='<td> <input type="text" class="form-control" id="E1_201_Nro-'+k+'" value="'+k+'" name="E1_201_Nro" readonly="readonly"> </td>';
			rowTable200 +='<td> <input type="text" class="form-control" id="E1_202_Nombre-'+k+'" value="" name="E1_202_Nombre"> </td>';
			rowTable200 +='<td> <input type="text" class="form-control" id="E1_202_Apellidos-'+k+'" value="" name="E1_202_Apellidos"> </td>';
			rowTable200 +='<td> <input type="text" class="form-control" id="E1_203-'+k+'" value="" name="E1_203"> </td>';
			rowTable200 +='<td> <input type="text" class="form-control" id="E1_204-'+k+'" value="" name="E1_204"> </td>';
			rowTable200 +='<td> <input type="text" class="form-control" id="E1_205-'+k+'" value="" name="E1_205"> </td>';
			rowTable200 +='<td> <input type="text" class="form-control" id="E1_206-'+k+'" value="" name="E1_206"> </td>';
			rowTable200 +='<td> <input type="text" class="form-control" id="E1_207_A-'+k+'" value="" name="E1_207_A"> </td>';
			rowTable200 +='<td> <input type="text" class="form-control" id="E1_207_M-'+k+'" value="" name="E1_207_M"> </td>';
			rowTable200 +='<td> <input type="text" class="form-control" id="E1_208-'+k+'" value="" name="E1_208"> </td>';
			rowTable200 +='<td> <input type="text" class="form-control" id="E1_209_Nro-'+k+'" value="" name="E1_209_Nro"> </td>';
			rowTable200 +='<td> <input type="text" class="form-control" id="E1_209_Ninguno-'+k+'" value="" name="E1_209_Ninguno"> </td>';
			rowTable200 +='<td> <input type="text" class="form-control" id="E1_210-'+k+'" value="" name="E1_210"> </td></tr>';


			var rowTable300 = '<tr id="table300Row-'+k+'" name="table300Row-'+k+'">';
			rowTable300 += '<td> '+k+' </td>';
			rowTable300 += '<td> <input type="text" class="form-control change" id="E1_301-'+k+'" value="" name="E1_301"> </td>';
			rowTable300 += '<td> <input type="text" class="form-control" id="E1_301_O-'+k+'" value="" name="E1_301_O"> (espc.) </td>';
			rowTable300 += '<td> <input type="text" class="form-control" id="E1_302-'+k+'" value="" name="E1_302"> </td>';
			rowTable300 += '<td> <input type="text" class="form-control" id="E1_302_Ano-'+k+'" value="" name="E1_302_Ano"> </td>';
			rowTable300 += '<td> <input type="text" class="form-control" id="E1_302_Grado-'+k+'" value="" name="E1_302_Grado"> </td>';
			rowTable300 += '<td> <input type="text" class="form-control" id="E1_303-'+k+'" value="" name="E1_303"> </td>';
			rowTable300 += '<td> <input type="text" class="form-control" id="E1_304-'+k+'" value="" name="E1_304"> </td>';
			rowTable300 += '<td> <input type="text" class="form-control change" id="E1_305-'+k+'" value="" name="E1_305"> </td>';
			rowTable300 += '<td> <input type="text" class="form-control" id="E1_305_O-'+k+'" value="" name="E1_305_O"> (espc.) </td>';
			rowTable300 += '<td> <input type="text" class="form-control" id="E1_306-'+k+'" value="" name="E1_306"> </td>';
			rowTable300 += '<td> <input type="text" class="form-control" id="E1_307-'+k+'" value="" name="E1_307"> </td>';
			rowTable300 += '<td> <input type="text" class="form-control" id="E1_307_Ano-'+k+'" value="" name="E1_307_Ano"> </td>';
			rowTable300 += '<td> <input type="text" class="form-control" id="E1_307_Grado-'+k+'" value="" name="E1_307_Grado"> </td>';
			rowTable300 += '<td> <input type="text" class="form-control change" id="E1_308-'+k+'" value="" name="E1_308"> </td>';
			rowTable300 += '<td> <input type="text" class="form-control" id="E1_308_O-'+k+'" value="" name="E1_308_O"> (espc.) </td>';
			rowTable300 += '</tr>';


			var rowTable400 = '<tr id="table400Row-'+k+'" name="table400Row-'+k+'">';	
			rowTable400 += '<td>'+k+'</td>';
			rowTable400 += '<td><input type="text" class="form-control" id="E1_401-'+k+'" value="" name="E1_401"></td>';
			rowTable400 += '<td class="sub-table"><table class="table"><tbody>';
			rowTable400 += '<tr><td><input type="text" placeholder="P1" class="form-control" id="E1_402_1-'+k+'" value="" name="E1_402_1"></td><td><input type="text" placeholder="P2" class="form-control" id="E1_402_2-'+k+'" value="" name="E1_402_2"></td><td><input type="text" placeholder="P3" class="form-control" id="E1_402_3-'+k+'" value="" name="E1_402_3"></td><td><input type="text" placeholder="P4" class="form-control" id="E1_402_4-'+k+'" value="" name="E1_402_4"></td></tr>';
			rowTable400 += '<tr><td><input type="text" placeholder="P5" class="form-control" id="E1_402_5-'+k+'" value="" name="E1_402_5"></td><td colspan="3"></td></tr>';
			rowTable400 += '</tbody></table></td>';
			rowTable400 += '<td class="sub-table"><table class="table"><tbody>';
			rowTable400 += '<tr><td><input type="text" placeholder="P1" class="form-control" id="E1_403_1-'+k+'" value="" name="E1_403_1"></td><td><input type="text" placeholder="P2" class="form-control" id="E1_403_2-'+k+'" value="" name="E1_403_2"></td><td><input type="text" placeholder="P3" class="form-control" id="E1_403_3-'+k+'" value="" name="E1_403_3"></td><td><input type="text" placeholder="P4" class="form-control" id="E1_403_4-'+k+'" value="" name="E1_403_4"></td></tr>';
			rowTable400 += '<tr><td><input type="text" placeholder="P5" class="form-control" id="E1_403_5-'+k+'" value="" name="E1_403_5"></td><td><input type="text" placeholder="P6" class="form-control" id="E1_403_6-'+k+'" value="" name="E1_403_6"></td><td><input type="text" placeholder="P7" class="form-control" id="E1_403_7-'+k+'" value="" name="E1_403_7"></td><td><input type="text" placeholder="P8" class="form-control" id="E1_403_8-'+k+'" value="" name="E1_403_8"></td></tr>';
			rowTable400 += '<tr><td><input type="text" placeholder="P9" class="form-control" id="E1_403_9-'+k+'" value="" name="E1_403_9"></td><td><input type="text" placeholder="P10" class="form-control" id="E1_403_10-'+k+'" value="" name="E1_403_10"></td><td><input type="text" placeholder="P11" class="form-control" id="E1_403_11-'+k+'" value="" name="E1_403_11"></td><td><input type="text" placeholder="P12" class="form-control" id="E1_403_12-'+k+'" value="" name="E1_403_12"></td></tr>';
			rowTable400 += '<tr><td><input type="text" placeholder="P13" class="form-control" id="E1_403_13-'+k+'" value="" name="E1_403_13"></td><td><input type="text" placeholder="P14" class="form-control" id="E1_403_14-'+k+'" value="" name="E1_403_14"></td><td colspan="2"></td></tr>';
			rowTable400 += '<tr><td><input type="text" placeholder="P15" class="form-control change" id="E1_403_15-'+k+'" value="" name="E1_403_15"></td><td colspan="3"><input type="text" placeholder="Especifique" class="form-control" id="E1_403_15_O-'+k+'" value="" name="E1_403_15_O"></td></tr>';
			rowTable400 += '<tr><td><input type="text" placeholder="P16" class="form-control" id="E1_403_16-'+k+'" value="" name="E1_403_16"></td><td colspan="3"></td></tr>';
			rowTable400 += '</tbody></table></td>';
			rowTable400 += '<td class="pad-td"><div class="col-md-5"><input type="text" class="form-control change" id="E1_404-1" value="" name="E1_404"></div><div class="col-md-7"><input type="text" class="form-control" id="E1_404_O-1" value="" name="E1_404_O"></div></td>	';
			rowTable400 += '<td class="sub-table"><table class="table"><tbody>';
			rowTable400 += '<tr><td><input type="text" placeholder="P1" class="form-control" id="E1_405_1-'+k+'" value="" name="E1_405_1"></td><td><input type="text" placeholder="P2" class="form-control" id="E1_405_2-'+k+'" value="" name="E1_405_2"></td><td><input type="text" placeholder="P3" class="form-control" id="E1_405_3-'+k+'" value="" name="E1_405_3"></td><td><input type="text" placeholder="P4" class="form-control" id="E1_405_4-'+k+'" value="" name="E1_405_4"></td></tr>';
			rowTable400 += '<tr><td><input type="text" placeholder="P5" class="form-control change" id="E1_405_5-'+k+'" value="" name="E1_405_5"></td><td colspan="3"><input type="text" placeholder="Especifique" class="form-control change" id="E1_405_5_O-'+k+'" value="" name="E1_405_5_O"></td></tr>';
			rowTable400 += '<tr><td><input type="text" placeholder="P6" class="form-control" id="E1_405_6-'+k+'" value="" name="E1_405_6"></td></tr>';
			rowTable400 += '</tbody></table></td>';
			rowTable400 += '<td><input type="text" maxlength="1" class="form-control" id="E1_406_A-'+k+'" value="" name="E1_406_A"></td>';
			rowTable400 += '<td><input type="text" maxlength="1" class="form-control" id="E1_406_B-'+k+'" value="" name="E1_406_B"></td>';
			rowTable400 += '<td><input type="text" maxlength="1" class="form-control" id="E1_406_C-'+k+'" value="" name="E1_406_C"></td>';
			rowTable400 += '<td><input type="text" maxlength="1" class="form-control" id="E1_406_D-'+k+'" value="" name="E1_406_D"></td>';
			rowTable400 += '<td><input type="text" maxlength="1" class="form-control" id="E1_406_E-'+k+'" value="" name="E1_406_E"></td>';
			rowTable400 += '<td><input type="text" maxlength="1" class="form-control" id="E1_406_F-'+k+'" value="" name="E1_406_F"></td>';
			rowTable400 += '</tr>';

			var rowTable501 = '<tr id="table501Row-'+k+'" name="table501Row-'+k+'">';
			rowTable501 += '<td>'+k+'</td>';
			rowTable501 += '<td><input type="text" maxlength="1" class="form-control" id="E1_500-'+k+'" value="1" name="E1_500"></td>';
			rowTable501 += '<td><input type="text" maxlength="1" class="form-control" id="E1_501-'+k+'" value="" name="E1_501"></td>';
			rowTable501 += '<td class="sub-table"><table class="table"><tbody>';
			rowTable501 += '<tr><td><input type="text" maxlength="1" placeholder="P1" class="form-control" id="E1_502_1-'+k+'" value="" name="E1_502_1"></td><td><input type="text" maxlength="1" placeholder="P2" class="form-control" id="E1_502_2-'+k+'" value="" name="E1_502_2"></td><td><input type="text" maxlength="1" placeholder="P3" class="form-control" id="E1_502_3-'+k+'" value="" name="E1_502_3"></td><td><input type="text" maxlength="1" placeholder="P4" class="form-control" id="E1_502_4-'+k+'" value="" name="E1_502_4"></td><td><input type="text" maxlength="1" placeholder="P5" class="form-control" id="E1_502_5-'+k+'" value="" name="E1_502_5"></td><td><input type="text" maxlength="1" placeholder="P6" class="form-control" id="E1_502_6-'+k+'" value="" name="E1_502_6"></td><td><input type="text" maxlength="1" placeholder="P5" class="form-control" id="E1_502_7-'+k+'" value="" name="E1_502_7"></td></tr>';
			rowTable501 += '<tr><td><input type="text" maxlength="1" placeholder="P8" class="form-control" id="E1_502_8-'+k+'" value="" name="E1_502_8"></td><td><input type="text" maxlength="1" placeholder="P9" class="form-control" id="E1_502_9-'+k+'" value="" name="E1_502_9"></td><td><input type="text" maxlength="1" placeholder="P10" class="form-control" id="E1_502_10-'+k+'" value="" name="E1_502_10"></td><td><input type="text" maxlength="1" placeholder="P11" class="form-control" id="E1_502_11-'+k+'" value="" name="E1_502_11"></td><td colspan="2"><input type="text" maxlength="100" placeholder="Especifique" class="form-control" id="E1_502_11_O-'+k+'" value="" name="E1_502_11_O"></td>	<td><input type="text" maxlength="1" placeholder="P12" class="form-control" id="E1_502_12-'+k+'" value="" name="E1_502_12"></td></tr>';
			rowTable501 += '</tbody></table></td>';
			rowTable501 += '<td><input type="text" maxlength="100" class="form-control" id="E1_503-'+k+'" value="" name="E1_503"></td>';
			rowTable501 += '<td><input type="text" maxlength="100" class="form-control" id="E1_504-'+k+'" value="" name="E1_504"></td>';
			rowTable501 += '</tr>';

			var rowTable502 = '<tr id="table502Row-'+k+'" name="table502Row-'+k+'">';
			rowTable502 += '<td>'+k+'</td>';
			rowTable502 += '<td><table class="table"><tbody><tr><td><input type="text" maxlength="1" class="form-control" id="E1_505-'+k+'" value="" name="E1_505"></td></tr><tr><td><input type="text" maxlength="200" class="form-control" id="E1_505_O-'+k+'" value="" name="E1_505_O">(Especifique)</td></tr></tbody></table></td>';
			rowTable502 += '<td><input type="text" maxlength="1" class="form-control" id="E1_506-'+k+'" value="" name="E1_506"></td>';
			rowTable502 += '<td><input type="text" maxlength="1" class="form-control" id="E1_507-'+k+'" value="" name="E1_507"></td>';
			rowTable502 += '<td><table class="table"><tbody><tr><td><input type="text" maxlength="1" class="form-control" id="E1_508-'+k+'" value="" name="E1_508"></td></tr><tr><td><input type="text" maxlength="200" class="form-control" id="E1_508_O-'+k+'" value="" name="E1_508_O">(Especifique)</td></tr></tbody></table></td>';
			rowTable502 += '<td class="sub-table"><table class="table"><tbody>';
			rowTable502 += '<tr><td><input type="text" maxlength="1" placeholder="P1" class="form-control" id="E1_509_1-'+k+'" value="" name="E1_509_1"></td><td><input type="text" maxlength="1" placeholder="P2" class="form-control" id="E1_509_2-'+k+'" value="" name="E1_509_2"></td><td><input type="text" maxlength="1" placeholder="P3" class="form-control" id="E1_509_3-'+k+'" value="" name="E1_509_3"></td><td><input type="text" maxlength="1" placeholder="P4" class="form-control" id="E1_509_4-'+k+'" value="" name="E1_509_4"></td></tr>';
			rowTable502 += '<tr><td><input type="text" maxlength="1" placeholder="P5" class="form-control" id="E1_509_5-'+k+'" value="" name="E1_509_5"></td><td><input type="text" maxlength="1" placeholder="P6" class="form-control" id="E1_509_6-'+k+'" value="" name="E1_509_6"></td><td><input type="text" maxlength="1" placeholder="P7" class="form-control" id="E1_509_7-'+k+'" value="" name="E1_509_7"></td><td><input type="text" maxlength="1" placeholder="P8" class="form-control" id="E1_509_8-'+k+'" value="" name="E1_509_8"></td></tr>';
			rowTable502 += '<tr><td><input type="text" maxlength="1" placeholder="P9" class="form-control" id="E1_509_9-'+k+'" value="" name="E1_509_9"></td><td><input type="text" maxlength="1" placeholder="P10" class="form-control" id="E1_509_10-'+k+'" value="" name="E1_509_10"></td></tr>';
			rowTable502 += '<tr><td><input type="text" maxlength="1" placeholder="P11" class="form-control" id="E1_509_11-'+k+'" value="" name="E1_509_11"></td><td colspan="2"><input type="text" maxlength="100" placeholder="Especifique" class="form-control" id="E1_509_11_O-'+k+'" value="" name="E1_509_11_O"></td>	<td><input type="text" maxlength="1" placeholder="P12" class="form-control" id="E1_509_12-'+k+'" value="" name="E1_509_12"></td></tr>';
			rowTable502 += '</tbody></table></td>	';
			rowTable502 += '<td><table class="table"><tbody>';
			rowTable502 += '<tr><td><input type="text" maxlength="1" class="form-control" id="E1_510-'+k+'" value="" name="E1_510"></td></tr>';
			rowTable502 += '<tr><td><input type="text" maxlength="100" class="form-control" id="E1_510_O-'+k+'" value="" name="E1_510_O">(Especifique)</td></tr>';
			rowTable502 += '</tbody></table></td>	';
			rowTable502 += '<td><input type="text" maxlength="3" class="form-control" id="E1_511-'+k+'" value="" name="E1_511"></td>';
			rowTable502 += '<td><input type="text" maxlength="3" class="form-control" id="E1_512-'+k+'" value="" name="E1_512"></td>';
			rowTable502 += '</tr>';

			var rowTable503 = '<tr id="table503Row-'+k+'" name="table503Row-'+k+'">';
			rowTable503 += '<td>'+k+'</td>';
			rowTable503 += '<td><input type="text" maxlength="6" class="form-control" id="E1_513_A-'+k+'" value="" name="E1_513_A"></td>';
			rowTable503 += '<td><input type="text" maxlength="6" class="form-control" id="E1_513_A_ns-'+k+'" value="" name="E1_513_A_ns"></td>';
			rowTable503 += '<td><input type="text" maxlength="6" class="form-control" id="E1_513_B-'+k+'" value="" name="E1_513_B"></td>';
			rowTable503 += '<td><input type="text" maxlength="6" class="form-control" id="E1_513_B_ns-'+k+'" value="" name="E1_513_B_ns"></td>';
			rowTable503 += '<td><input type="text" maxlength="6" class="form-control" id="E1_513_C-'+k+'" value="" name="E1_513_C"></td>';
			rowTable503 += '<td><input type="text" maxlength="6" class="form-control" id="E1_513_C_ns-'+k+'" value="" name="E1_513_C_ns"></td>';
			rowTable503 += '<td><input type="text" maxlength="6" class="form-control" id="E1_513_D-'+k+'" value="" name="E1_513_D"></td>';
			rowTable503 += '<td><input type="text" maxlength="6" class="form-control" id="E1_513_D_ns-'+k+'" value="" name="E1_513_D_ns"></td>';
			rowTable503 += '<td><input type="text" maxlength="6" class="form-control" id="E1_513_E-'+k+'" value="" name="E1_513_E"></td>';
			rowTable503 += '<td><input type="text" maxlength="6" class="form-control" id="E1_513_E_ns-'+k+'" value="" name="E1_513_E_ns"></td>';
			rowTable503 += '<td><input type="text" maxlength="3" class="form-control" id="E1_514-'+k+'" value="" name="E1_514"></td>';
			rowTable503 += '<td><input type="text" maxlength="3" class="form-control" id="E1_515-'+k+'" value="" name="E1_515"></td>';
			rowTable503 += '<td><input type="text" maxlength="1" class="form-control" id="E1_515_ns-'+k+'" value="" name="E1_515_ns"></td>';
			rowTable503 += '<td><input type="text" maxlength="1" class="form-control" id="E1_516-'+k+'" value="" name="E1_516"></td>';
			rowTable503 += '<td><input type="text" maxlength="6" class="form-control" id="E1_517-'+k+'" value="" name="E1_517"></td>';
			rowTable503 += '</tr>';

			var rowTable504 = '<tr id="table504Row-'+k+'" name="table504Row-'+k+'">';
			rowTable504 += '<td>'+k+'</td>';
			rowTable504 += '<td><input type="text" maxlength="1" class="form-control" id="E1_518-'+k+'" value="" name="E1_518"></td>';
			rowTable504 += '<td><input type="text" maxlength="100" class="form-control" id="E1_519-'+k+'" value="" name="E1_519"></td>';
			rowTable504 += '<td class="pad-td"><div class="col-md-5"><input type="text" maxlength="1" class="form-control" id="E1_520-'+k+'" value="" name="E1_520"></div><div class="col-md-7"><input type="text" maxlength="1" class="form-control" id="E1_520_O-'+k+'" value="" name="E1_520_O"></div></td>';
			rowTable504 += '<td><input type="text" maxlength="3" class="form-control" id="E1_521-'+k+'" value="" name="E1_521"></td>';
			rowTable504 += '<td><input type="text" maxlength="1" class="form-control" id="E1_522-'+k+'" value="" name="E1_522"></td>';
			rowTable504 += '</tr>';

			var rowTable505 = '<tr id="table505Row-'+k+'" name="table505Row-'+k+'">';
			rowTable505 += '<td>'+k+'</td>';
			rowTable505 += '<td><input type="text" maxlength="6" class="form-control" id="E1_523_A-'+k+'" value="" name="E1_523_A"></td>';
			rowTable505 += '<td><input type="text" maxlength="6" class="form-control" id="E1_523_A_ns-'+k+'" value="" name="E1_523_A_ns"></td>';
			rowTable505 += '<td><input type="text" maxlength="6" class="form-control" id="E1_523_B-'+k+'" value="" name="E1_523_B"></td>';
			rowTable505 += '<td><input type="text" maxlength="6" class="form-control" id="E1_523_B_ns-'+k+'" value="" name="E1_523_B_ns"></td>';
			rowTable505 += '<td><input type="text" maxlength="6" class="form-control" id="E1_523_C-'+k+'" value="" name="E1_523_C"></td>';
			rowTable505 += '<td><input type="text" maxlength="6" class="form-control" id="E1_523_C_ns-'+k+'" value="" name="E1_523_C_ns"></td>';
			rowTable505 += '<td><input type="text" maxlength="6" class="form-control" id="E1_523_D-'+k+'" value="" name="E1_523_D"></td>';
			rowTable505 += '<td><input type="text" maxlength="6" class="form-control" id="E1_523_D_ns-'+k+'" value="" name="E1_523_D_ns"></td>';
			rowTable505 += '<td><input type="text" maxlength="6" class="form-control" id="E1_523_E-'+k+'" value="" name="E1_523_E"></td>';
			rowTable505 += '<td><input type="text" maxlength="6" class="form-control" id="E1_523_E_ns-'+k+'" value="" name="E1_523_E_ns"></td>';
			rowTable505 += '<td><input type="text" maxlength="6" class="form-control" id="E1_524-'+k+'" value="" name="E1_524"></td>';
			rowTable505 += '<td><input type="text" maxlength="6" class="form-control" id="E1_525-'+k+'" value="" name="E1_525"></td>';
			rowTable505 += '<td><input type="text" maxlength="1" class="form-control" id="E1_526-'+k+'" value="" name="E1_526"></td>';
			rowTable505 += '<td><input type="text" maxlength="6" class="form-control" id="E1_527-'+k+'" value="" name="E1_527"></td>';
			rowTable505 += '<td class="sub-table"><table class="table"><tbody>';
			rowTable505 += '<tr><td><input type="text" maxlength="1" placeholder="P1" class="form-control" id="E1_528_1-'+k+'" value="" name="E1_528_1"></td><td><input type="text" maxlength="1" placeholder="P2" class="form-control" id="E1_528_2-'+k+'" value="" name="E1_528_2"></td><td><input type="text" maxlength="1" placeholder="P3" class="form-control" id="E1_528_3-'+k+'" value="" name="E1_528_3"></td><td><input type="text" maxlength="1" placeholder="P4" class="form-control" id="E1_528_4-'+k+'" value="" name="E1_528_4"></td><td><input type="text" maxlength="1" placeholder="P5" class="form-control" id="E1_528_5-'+k+'" value="" name="E1_528_5"></td></tr>';
			rowTable505 += '<tr><td><input type="text" maxlength="1" placeholder="P6" class="form-control" id="E1_528_6-'+k+'" value="" name="E1_528_6"></td><td><input type="text" maxlength="1" placeholder="P7" class="form-control" id="E1_528_7-'+k+'" value="" name="E1_528_7"></td><td><input type="text" maxlength="1" placeholder="P8" class="form-control" id="E1_528_8-'+k+'" value="" name="E1_528_8"></td><td colspan="2"><input type="text" maxlength="1" placeholder="Especifique" class="form-control" id="E1_528_8_O-'+k+'" value="" name="E1_528_8_O"></td></tr>';
			rowTable505 += '<tr><td><input type="text" maxlength="1" placeholder="P9" class="form-control" id="E1_528_9-'+k+'" value="" name="E1_528_9"></td><td><input type="text" maxlength="1" placeholder="P10" class="form-control" id="E1_528_10-'+k+'" value="" name="E1_528_10"></td></tr>						';
			rowTable505 += '</tbody></table></td>';
			rowTable505 += '<td><input type="text" maxlength="6" class="form-control" id="E1_528_Total-'+k+'" value="" name="E1_528_Total"></td>	';
			rowTable505 += '</tr>';

			var rowTable506 = '<tr id="table506Row-'+k+'" name="table506Row-'+k+'">';
			rowTable506 += '<td>'+k+'</td>';
			rowTable506 += '<td><input type="text" maxlength="1" class="form-control" id="E1_529-'+k+'" value="" name="E1_529"></td>';
			rowTable506 += '<td><table class="table"><tbody><tr><td><input type="text" maxlength="1" class="form-control" id="E1_530-'+k+'" value="" name="E1_530"></td></tr><tr><td><input type="text" disabled="disabled" maxlength="100" class="form-control" id="E1_530_O-'+k+'" value="" name="E1_530_O">(Especifique)</td></tr></tbody></table></td>		';
			rowTable506 += '<td><input type="text" maxlength="1" class="form-control" id="E1_531-'+k+'" value="" name="E1_531"></td>		';
			rowTable506 += '<td><input type="text" maxlength="1" class="form-control" id="E1_532-'+k+'" value="" name="E1_532"></td>	';
			rowTable506 += '<td><table class="table"><tbody><tr><td><input type="text" maxlength="1" class="form-control" id="E1_533-'+k+'" value="" name="E1_533"></td></tr><tr><td><input type="text" disabled="disabled" maxlength="1" class="form-control" id="E1_533_O-'+k+'" value="" name="E1_533_O">(Especifique)</td></tr></tbody></table></td>	';
			rowTable506 += '<td><table class="table"><tbody><tr><td><input type="text" maxlength="1" class="form-control" id="E1_534-'+k+'" value="" name="E1_534"></td></tr><tr><td><input type="text" maxlength="1" disabled="disabled" class="form-control" id="E1_534_O-'+k+'" value="" name="E1_534_O">(Especifique)</td></tr></tbody></table></td>	';
			rowTable506 += '<td class="sub-table"><table class="table"><tbody>';
			rowTable506 += '<tr><td><input type="text" maxlength="1" placeholder="P1" class="form-control" id="E1_535_1-'+k+'" value="" name="E1_535_1"></td><td><input type="text" maxlength="1" placeholder="P2" class="form-control" id="E1_535_2-'+k+'" value="" name="E1_535_2"></td><td><input type="text" maxlength="1" placeholder="P3" class="form-control" id="E1_535_3-'+k+'" value="" name="E1_535_3"></td><td><input type="text" maxlength="1" placeholder="P4" class="form-control" id="E1_535_4-'+k+'" value="" name="E1_535_4"></td></tr>';
			rowTable506 += '<tr><td><input type="text" maxlength="1" placeholder="P5" class="form-control" id="E1_535_5-'+k+'" value="" name="E1_535_5"></td><td><input type="text" maxlength="1" placeholder="P6" class="form-control" id="E1_535_6-'+k+'" value="" name="E1_535_6"></td></tr>';
			rowTable506 += '<tr><td><input type="text" maxlength="1" placeholder="P7" class="form-control" id="E1_535_7-'+k+'" value="" name="E1_535_7"></td><td colspan="3"><input type="text" disabled="disabled" maxlength="100" placeholder="Especifique" class="form-control" id="E1_535_7_O-'+k+'" value="" name="E1_535_7_O"></td></tr>	';
			rowTable506 += '<tr><td><input type="text" maxlength="1" placeholder="P8" class="form-control" id="E1_535_8-'+k+'" value="" name="E1_535_8"></td></tr>';
			rowTable506 += '</tbody></table></td>';
			rowTable506 += '<td><input type="text" maxlength="6" class="form-control" id="E1_535_Total-'+k+'" value="" name="E1_535_Total"></td>		';
			rowTable506 += '<td class="sub-table"><table class="table"><tbody>';
			rowTable506 += '<tr><td><input type="text" maxlength="1" placeholder="P1" class="form-control" id="E1_536_1-'+k+'" value="" name="E1_536_1"></td><td><input type="text" maxlength="1" placeholder="P2" class="form-control" id="E1_536_2-'+k+'" value="" name="E1_536_2"></td><td><input type="text" maxlength="1" placeholder="P3" class="form-control" id="E1_536_3-'+k+'" value="" name="E1_536_3"></td><td><input type="text" maxlength="1" placeholder="P4" class="form-control" id="E1_536_4-'+k+'" value="" name="E1_536_4"></td></tr>';
			rowTable506 += '<tr><td><input type="text" maxlength="1" placeholder="P5" class="form-control" id="E1_536_5-'+k+'" value="" name="E1_536_5"></td><td><input type="text" maxlength="1" placeholder="P6" class="form-control" id="E1_536_6-'+k+'" value="" name="E1_536_6"></td><td><input type="text" maxlength="1" placeholder="P7" class="form-control" id="E1_536_7-'+k+'" value="" name="E1_536_7"></td></tr>	';
			rowTable506 += '<tr><td><input type="text" maxlength="1" placeholder="P8" class="form-control" id="E1_536_8-'+k+'" value="" name="E1_536_8"></td><td colspan="3"><input type="text" maxlength="100" placeholder="Especifique" class="form-control" id="E1_536_8_O-'+k+'" value="" name="E1_536_8_O"></td></tr>';
			rowTable506 += '<tr><td><input type="text" maxlength="1" placeholder="P9" class="form-control" id="E1_536_9-'+k+'" value="" name="E1_536_9"></td></tr>	';
			rowTable506 += '</tbody></table></td>';
			rowTable506 += '<td><input type="text" maxlength="100" class="form-control" id="E1_536_Total-'+k+'" value="" name="E1_536_Total"></td>';
			rowTable506 += '</tr>';

			$("#table200 tbody").append(rowTable200);
			$("#table300 tbody").append(rowTable300);
			$("#table400 tbody:eq(0)").append(rowTable400);
			$("#table501 tbody:eq(0)").append(rowTable501);
			$("#table502 tbody:eq(0)").append(rowTable502);
			$("#table503 tbody:eq(0)").append(rowTable503);
			$("#table504 tbody:eq(0)").append(rowTable504);
			$("#table505 tbody:eq(0)").append(rowTable505);
			$("#table506 tbody:eq(0)").append(rowTable506);
			$(numRowsTable200).val(k);

	}

</script>








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
  <li class="hide"><a href="#cedula1_tab3" role="tab" data-toggle="tab">CAP. 200 - 400</a></li>
  <li class="hide"><a href="#cedula1_tab4" role="tab" data-toggle="tab">CAP. 500</a></li>
  <li class="hide"><a href="#cedula1_tab5" role="tab" data-toggle="tab">CAP. 600 - 900</a></li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
  <div class="tab-pane active" id="cedula1_tab1"> <?php echo $this->load->view('cedulas/cedula1_tab1a',$data); ?> </div>
  <div class="tab-pane" id="cedula1_tab2"> <?php echo $this->load->view('cedulas/cedula1_tab2'); ?> </div>
  <div class="tab-pane" id="cedula1_tab3"> <?php echo $this->load->view('cedulas/cedula1_tab3'); ?> </div>
  <div class="tab-pane" id="cedula1_tab4"> <?php echo $this->load->view('cedulas/cedula1_tab4'); ?> </div>
  <div class="tab-pane" id="cedula1_tab5"> <?php echo $this->load->view('cedulas/cedula1_tab5'); ?> </div>
</div>
<?php 



?>




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



</script>








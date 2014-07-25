<div class="row-fluid">
	<!-- Nav tabs -->
	<ul class="nav nav-tabs" role="tablist">
		<li class="active"> <a href="#home" role="tab" data-toggle="tab"> Ubigeo </a> </li>
		<li> <a href="#sec_100" role="tab" data-toggle="tab"> 100 </a> </li>
		<li> <a href="#sec_200" role="tab" data-toggle="tab"> 200 </a> </li>
		<li> <a href="#sec_300" role="tab" data-toggle="tab"> 300 </a> </li>
		<li> <a href="#sec_400" role="tab" data-toggle="tab"> 400  - 600 </a> </li>
	</ul>

	<!-- Tab panes -->
	<div class="tab-content">
		<div class="tab-pane active" id="home">
			<?php $this->load->view('cedulas/cedula2/cedula2_ubigeo'); ?>
		</div>
		<div class="tab-pane" id="sec_100">
			<?php $this->load->view('cedulas/cedula2/cedula2_base'); ?>
		</div>
		<div class="tab-pane" id="sec_200">
			200
		</div>
	</div>

</div>
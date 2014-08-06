<div class="row-fluid">
	<!-- Nav tabs -->
	<ul class="nav nav-tabs" role="tablist">
		<li class="active"> <a href="#home" role="tab" data-toggle="tab"> Ubigeo </a> </li>
		<li> <a href="#sec_100" role="tab" data-toggle="tab"> 100 </a> </li>
		<li> <a href="#sec_200" role="tab" data-toggle="tab"> 200 </a> </li>
		<li> <a href="#sec_300" role="tab" data-toggle="tab"> 300 </a> </li>
		<li> <a href="#sec_400_500" role="tab" data-toggle="tab"> 400 - 500 </a> </li>
		<li> <a href="#sec_600" role="tab" data-toggle="tab"> 600 </a> </li>
		<li> <a href="#sec_700_800" role="tab" data-toggle="tab"> 700 - 800 </a> </li>
		<li> <a href="#sec_900" role="tab" data-toggle="tab"> 900 </a> </li>
		<li> <a href="#sec_1000" role="tab" data-toggle="tab"> 1000 </a> </li>
		<li> <a href="#sec_1100_1300" role="tab" data-toggle="tab"> 1100 - 1300 </a> </li>
		<li> <a href="#sec_1400_1500" role="tab" data-toggle="tab"> 1400 - 1500 </a> </li>
	</ul>

	<!-- Tab panes -->
	<div class="tab-content">
		<div class="tab-pane active" id="home">
			<?php $this->load->view('cedulas/cedula2/cedula2_ubigeo'); ?>
		</div>
		<div class="tab-pane" id="sec_100">
			<?php $this->load->view('cedulas/cedula2/cedula2_100'); ?>
		</div>
		<div class="tab-pane" id="sec_200">
			<?php $this->load->view('cedulas/cedula2/cedula2_200'); ?>
		</div>
		<div class="tab-pane" id="sec_300">
			<?php $this->load->view('cedulas/cedula2/cedula2_300'); ?>
		</div>
		<div class="tab-pane" id="sec_400_500">
			<?php $this->load->view('cedulas/cedula2/cedula2_400_500'); ?>
		</div>
		<div class="tab-pane" id="sec_600">
			<?php $this->load->view('cedulas/cedula2/cedula2_600'); ?>
		</div>
		<div class="tab-pane" id="sec_700_800">
			<?php $this->load->view('cedulas/cedula2/cedula2_700_800'); ?>
		</div>
		<div class="tab-pane" id="sec_900">
			<?php #$this->load->view('cedulas/cedula2/cedula2_900'); ?>
		</div>
		<div class="tab-pane" id="sec_1000">
			<?php $this->load->view('cedulas/cedula2/cedula2_1000'); ?>
		</div>
		<div class="tab-pane" id="sec_1100_1300">
			<?php $this->load->view('cedulas/cedula2/cedula2_1100_1300'); ?>
		</div>
		<div class="tab-pane" id="sec_1400_1500">
			<?php $this->load->view('cedulas/cedula2/cedula2_1400_1500'); ?>
		</div>

	</div>
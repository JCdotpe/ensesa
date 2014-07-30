<div class="row-fluid">
	<!-- Nav tabs -->
	<ul class="nav nav-tabs" role="tablist">
		<li class="active"><a href="#home" role="tab" data-toggle="tab"> Ubigeo </a></li>
		<li><a href="#sec_100" role="tab" data-toggle="tab"> 100 </a></li>
		<li><a href="#sec_200" role="tab" data-toggle="tab"> 200 </a></li>
		<li><a href="#sec_300" role="tab" data-toggle="tab"> 300 </a></li>
	</ul>

	<!-- Tab panes -->
	<div class="tab-content">
		<div class="tab-pane active" id="home">
			<?php $this->load->view('cedulas/cedula1b/cedula1b_ubigeo'); ?>
		</div>
		<div class="tab-pane" id="sec_100">
			<?php $this->load->view('cedulas/cedula1b/cedula1b_100'); ?>
		</div>

		<div class="tab-pane" id="sec_200">
			<?php $this->load->view('cedulas/cedula1b/cedula1b_200'); ?>
		</div>

		<div class="tab-pane" id="sec_300">
			<?php $this->load->view('cedulas/cedula1b/cedula1b_300'); ?>
		</div>
	</div>
	<input type="hidden" id="vivienda" name="vivienda" value="" />
</div>

<script src="<?php echo base_url('assets/js/cedula1b.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/common1b.js'); ?>"></script>
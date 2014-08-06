<?php 
	
	$this->load->view('frontend/includes/header');

	$this->load->view('frontend/includes/navbar');

?>
	<div class="container-fluid">
		<div class="row">
			<?php $this->load->view('frontend/includes/sidebar'); ?>
			<!-- 
				width por defecto del template
				<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main"> 
			-->
			<div class="main">
				<h1 class="page-header">
					<?php echo $title; ?>
				</h1>
				<?php 

					if ($main_content != null) {
						$this->load->view($main_content); 	
					}
					
				?>
			</div>
		</div>
	</div>
<?php 
	$this->load->view('frontend/includes/footer');
?>
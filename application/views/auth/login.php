<!DOCTYPE html>
<html lang="es">
<head>
	
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="shortcut icon" href="../../assets/ico/favicon.ico">

	<title>Login</title>

	<!-- Bootstrap core CSS -->
	<link href="<?php echo base_url('bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="<?php echo base_url('bootstrap/assets/signin.css'); ?>" rel="stylesheet">

	<!-- Just for debugging purposes. Don't actually copy this line! -->
	<!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<?php 

	$form_attributes = array(
							'class' => 'form-signin', 
							'role' 	=> 'form'
						);

	$identity = array(
					'id' 			=> 'identity',
					'name' 			=> 'identity',
					'value' 		=> '',
					'class'			=> 'form-control',
					'placeholder' 	=> 'Email address',
					'required'		=> 'true',
					'autofocus'		=> 'true'
				);

	$password = array(
					'id' 			=> 'password',
					'name' 			=> 'password',
					'class'			=> 'form-control',
					'placeholder' 	=> 'Password',
					'required'		=> 'true'
				);

	$remember = array(
					'name'	=> 'remember'
				);


	$submit_attributes = array(
							'class' => 'btn btn-lg btn-primary btn-block',
							'name' 	=> 'submit'
						);

	?>
	<div class="container">

	<?php 
		echo form_open("auth/login", $form_attributes);
	?>
		<h2 class="form-signin-heading">
			<?php echo lang('login_heading');?>
		</h2>
		<p>
			<?php echo lang('login_subheading');?>
		</p>

		<div id="infoMessage">
			<?php echo $message;?>
		</div>

		<p>
			<?php echo form_input($identity); ?>
		</p>

		<p>
			<?php echo form_password($password); ?>
		</p>

		<label class="checkbox">
			<?php echo form_checkbox($remember, '1', FALSE, 'id="remember"');?>
			Remember me
		</label>


		<p>
			<?php echo form_submit($submit_attributes, lang('login_submit_btn'));?>
		</p>

		<p>
			<a href="forgot_password">
				<?php echo lang('login_forgot_password');?>
			</a>
		</p>

		<?php echo form_close();?>
	</div> <!-- /container -->
</body>
</html>
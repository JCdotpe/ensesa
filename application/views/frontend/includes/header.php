<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="EDNOM">
	<meta name="author" content="INEI">
	<link rel="shortcut icon" href="../../assets/ico/favicon.ico">

	<title>Index Page</title>

	<!-- Bootstrap core CSS -->
	<link href="<?php echo base_url('bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="<?php echo base_url('bootstrap/assets/dashboard.css') ?>" rel="stylesheet">

	<!-- Just for debugging purposes. Don't actually copy this line! -->
	<!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->

	<link href="<?php echo base_url('assets/css/common.css') ?>" rel="stylesheet">
	
	<script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/jquery.validate.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/common.js'); ?>"></script>

	<script type="text/javascript">
		<!--
		var CI = {
			'base_url': '<?php echo base_url(); ?>',
			'site_url': '<?php echo site_url(); ?>',
			'year': <?php echo date("Y"); ?>
		};
		-->
    </script>
	<script type="text/javascript">
		
		$.extend(jQuery.validator.messages, {
			required: "Campo obligatorio",
			// remote: "Please fix this field.",
			email: "Ingrese un email válido",
			// url: "Please enter a valid URL.",
			date: "Ingrese una fecha válida",
			// dateISO: "Please enter a valid date (ISO).",
			number: "Solo se permiten números enteros o decimlaes",
			digits: "Solo se permiten números",
			range: jQuery.validator.format("Por favor ingrese un valor  entre {0} y {1}."),
			// creditcard: "Please enter a valid credit card number.",
			// equalTo: "Please enter the same value again.",
			// accept: "Please enter a value with a valid extension.",
			// maxlength: jQuery.validator.format("Please enter no more than {0} characters."),
			// minlength: jQuery.validator.format("Please enter at least {0} characters."),
			// rangelength: jQuery.validator.format("Please enter a value between {0} and {1} characters long."),
			// range: jQuery.validator.format("Please enter a value between {0} and {1}."),
			// max: jQuery.validator.format("Please enter a value less than or equal to {0}."),
			// min: jQuery.validator.format("Please enter a value greater than or equal to {0}.")
		});

		$.validator.addMethod("year", function(value, element, param) {
			return this.optional(element) || ( (value > 1950 && value <= CI.year) || value == 9999 ) ;
		}, "Ingrese un año válido");

		$.validator.addMethod("mes", function(value, element)
		{
			var flag = false;

			var meses = new Array('ENE','FEB','MAR','ABR','MAY','JUN','JUL','AGO','SEP','OCT','NOV','DIC');

			position = $.inArray(value.toUpperCase(), meses);

			if ( position != -1)
			{
				flag = true;
			}

			return flag;

		}, "Ingrese un mes válido");
		
	</script>

</head>
<body>
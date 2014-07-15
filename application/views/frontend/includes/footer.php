	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script> -->
	<script src="<?php echo base_url('bootstrap/js/bootstrap.min.js'); ?>"></script>
	<script src="<?php echo base_url('bootstrap/assets/docs.min.js') ?>"></script>
	<script type="text/javascript">


		(function($, window, document)
		{
			
			$(function() 
			{
				// the DOM is ready
				$(document).on("keyup",'.btn-primary,.btn-warning',function(e) {    
					var key = e.charCode ? e.charCode : e.keyCode ? e.keyCode : 0;
					if(key == 13)
					$(this).trigger('click');
				});

				$(window).keydown(function(event){

					if(event.keyCode == 13) {
						event.preventDefault();
						return false;
					}

				});

				$(document).on("keyup",'input,select,textarea,.btn-warning', event_keyup_jump());

				$.extend(jQuery.validator.messages, {
					required: "Campo obligatorio",
					// remote: "Please fix this field.",
					email: "Ingrese un email válido",
					// url: "Please enter a valid URL.",
					date: "Ingrese una fecha válida",
					// dateISO: "Please enter a valid date (ISO).",
					number: "Solo se permiten números",
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

			});

			// The rest of the code goes here!

		}(window.jQuery, window, document));

	</script>
</body>
</html>
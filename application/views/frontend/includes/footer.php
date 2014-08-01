	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script> -->
	<script src="<?php echo base_url('bootstrap/js/bootstrap.min.js'); ?>"></script>
	<script src="<?php echo base_url('bootstrap/assets/docs.min.js') ?>"></script>
	<script type="text/javascript">


		(function($, window, document)
		{
			
			$(function() 
			{
				// the DOM is ready

				$(window).keydown(function(event){

					if(event.keyCode == 13) {
						event.preventDefault();
						return false;
					}

				});
				
				$(document).on("keyup",'.btn-primary,.btn-warning',function(e) {    
					var key = e.charCode ? e.charCode : e.keyCode ? e.keyCode : 0;
					if(key == 13)
					$(this).trigger('click');
				});

				$(document).on("keyup",'.change',function(e) {
					var key = e.charCode ? e.charCode : e.keyCode ? e.keyCode : 0;
					if(key == 13)
					$(this).trigger('change');
				});

				$(document).on("keyup",'input,select,textarea,.btn-warning', event_keyup_jump());

			});
			

			// The rest of the code goes here!

		}(window.jQuery, window, document));

	</script>
</body>
</html>
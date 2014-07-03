	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script> -->
	<script src="<?php echo base_url('bootstrap/js/bootstrap.min.js'); ?>"></script>
	<script src="<?php echo base_url('bootstrap/assets/docs.min.js') ?>"></script>
	<script type="text/javascript">
	
		$(function(argument) {

			// $(window).keydown(function(event){

			// 	if(event.keyCode == 13) {
			// 		event.preventDefault();
			// 		return false;
			// 	}

			// });

			// $(document).on("keyup",'input,select,textarea',function(e) {    
			// 	var key = e.charCode ? e.charCode : e.keyCode ? e.keyCode : 0;
			// 	if(key == 13)
			// 	$(this).trigger('change');
			// });

			$(document).on("keyup",'input,select,textarea',function(e) {

				var key = e.charCode ? e.charCode : e.keyCode ? e.keyCode : 0;
				var inputs = $(this).closest('form').find(":input:not(:disabled, [readonly='readonly'],:hidden)");
				
				if(key == 13) {
					inputs.eq( inputs.index(this)+1).focus(); 
				}
				else if (key == 27) {
					inputs.eq( inputs.index(this)-1).focus(); 
				}

			});

		});

	</script>
</body>
</html>
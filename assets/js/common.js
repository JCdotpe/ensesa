function event_keyup_jump()
{
	return 	function(e) 
			{
				var key = e.charCode ? e.charCode : e.keyCode ? e.keyCode : 0;
				var inputs = $(this).closest('form').find(":input:not(:disabled, [readonly='readonly'],:hidden)");
						
				if(key == 13) {
					inputs.eq( inputs.index(this)+1).focus(); 
				}
				else if (key == 27) {
					inputs.eq( inputs.index(this)-1).focus(); 
				}
			}
}

function clear_by_class ( name_class )
{
	$(':input.' + name_class +'[type="text"]').val('');
	$('.' + name_class).empty();
}
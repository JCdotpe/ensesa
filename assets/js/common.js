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

	for (var i = 0; i < name_class.length; i++)
	{
		$(':input.' + name_class[i] +'[type="text"],textarea').val('');
		$('.' + name_class[i]).empty();
	}
}


function clean_dropdown( list_dropdown )
{
	for (var i = 0; i < list_dropdown.length; i++)
	{
		$('#' + list_dropdown[i]).empty();
	}
}
$('#E1B_101_A').change(function(event) {

	value = $(this).val();

	if ( value == 1 )
	{
		$('.C1_B_table').closest('tr').find(':input').removeAttr('disabled');
		$('.C1_D_table').closest('tr').find(':input').removeAttr('disabled');
	}
	else if ( value == 2 ) 
	{
		$('.C1_B_table').closest('tr').find(':input').attr('disabled','disabled');
		$('.C1_D_table').closest('tr').find(':input').attr('disabled','disabled');
	}
	 
});

$('#E1B_101_C').change(function(event) {
	
	value = $(this).val();

	if ( value == 1 )
	{
		$('.C1_D_table').closest('tr').find(':input').removeAttr('disabled');
	}
	else if ( value == 2 )
	{
		$('.C1_D_table').closest('tr').find(':input').attr('disabled','disabled');
	}

});
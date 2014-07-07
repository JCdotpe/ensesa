var name_class = [];

$('#E1B_101_A').change(function(event) {

	value = $(this).val();
	name_class = [ 'C1_B_table', 'C1_D_table' ];
	input_disabled = 'E1B_101_C';

	salt_input(value, name_class, input_disabled);
	 
});

$('#E1B_101_C').change(function(event) {
	
	value = $(this).val();
	name_class = ['C1_D_table'];

	salt_input(value, name_class);

});

$('#E1B_201_A').change(function(event) {
	
	value = $(this).val();
	name_class = ['C2_B_table', 'C2_D_table'];
	input_disabled = 'E1B_201_C';

	salt_input(value, name_class, input_disabled);

});

$('#E1B_201_C').change(function(event) {
	
	value = $(this).val();
	name_class = ['C2_D_table'];

	salt_input(value, name_class);

});

function salt_input(input_value, name_class, input_disabled)
{
	if ( input_value == 1 )
	{
		for (var i = 0; i < name_class.length; i++) 
		{
			$('.' + name_class[i]).closest('tr').find(':input').removeAttr('disabled');
		}

		if ( input_disabled != undefined )
		{
			$('#' + input_disabled).removeAttr('disabled');
		}
	}
	else if ( value == 2 )
	{
		for (var i = 0; i < name_class.length; i++)
		{
			$('.' + name_class[i]).closest('tr').find(':input').attr('disabled','disabled');
		}

		if ( input_disabled != undefined )
		{
			$('#' + input_disabled).attr('disabled', 'disabled');
		}
	}

}
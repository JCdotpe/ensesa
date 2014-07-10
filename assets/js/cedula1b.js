// general variables //
var this_value;

// specific variables //
var E1B_101_A = $('#E1B_101_A');
var table_100_A = $('#table_100_A');

var E1B_101_C = $('#E1B_101_C');
var table_100_C = $('#table_100_C');


// Question 100 //

// --> section A
E1B_101_A.on( 
	{ change : function( event ) 
				{
					this_value = $(this).val();

					common_event_group( table_100_A.attr('id'), [ 'C1_B_table', 'C1_D_table' ], this_value, E1B_101_C.attr('id'), 'PC' );

					E1B_101_C.val('');
					E1B_101_C.trigger('change');
				},
	  keyup : event_keyup_jump()
	}
);

table_100_A.on( 'click', 'button', 
	function( event ) 
	{
		add_remove_row(event.target, [ table_100_A.attr('id'), 'PC' ]);
	}

);


// --> section C
E1B_101_C.on( 
	{ change : function( event ) 
		{
			this_value = $(this).val();

			common_event_group( table_100_C.attr('id'), [ 'C1_D_table' ], this_value, null, 'SC' );
		},
	  keyup : event_keyup_jump()
	}
);

table_100_C.on('click', 'button', 
	function( event ) 
	{
		add_remove_row(event.target, [ table_100_C.attr('id'), 'SC' ]);
	}
);







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


function common_event_group ( id_table, name_class, input_value, input_disabled, suffix )
{
	salt_input( input_value, name_class, input_disabled );
	validate_table( input_value, id_table, suffix );
}
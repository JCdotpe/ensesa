// general variables //
var this_value;

// specific variables //
var E1B_101_A = $('#E1B_101_A');
var table_100_A = $('#table_100_A');

var E1B_101_C = $('#E1B_101_C');
var table_100_C = $('#table_100_C');


var E1B_201_A = $('#E1B_201_A');
var table_200_A = $('#table_200_A');

var E1B_201_C = $('#E1B_201_C');
var table_200_C = $('#table_200_C');


var E1B_301_A = $('#E1B_301_A');
var table_300_A = $('#table_300_A');

var E1B_301_C = $('#E1B_301_C');
var table_300_C = $('#table_300_C');


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


// Question 200 //
// --> section A
E1B_201_A.on( 
	{ change : function(event) 
		{
			this_value = $(this).val();

			common_event_group( table_200_A.attr('id'), [ 'C2_B_table', 'C2_D_table' ], this_value, E1B_201_C.attr('id'), 'PR' );

			E1B_201_C.val('');
			E1B_201_C.trigger('change');
		},
	  keyup : event_keyup_jump()
	}
);

table_200_A.on('click', 'button',
	function( event ) 
	{
		add_remove_row(event.target, [ table_200_A.attr('id'), 'PR' ]);	
	}
);

// --> section C
E1B_201_C.on(
	{ change : function(event) 
		{
			this_value = $(this).val();

			common_event_group( table_200_C.attr('id'), [ 'C2_D_table' ], this_value, null, 'SR' );
		},
	  keyup : event_keyup_jump()
	}
);

table_200_C.on('click', 'button',
	function( event ) 
	{
		add_remove_row(event.target, [ table_200_C.attr('id'), 'SR' ]);	
	}
);


// Question 300 //
// --> section A
E1B_301_A.on( 
	{ change : function(event) 
		{
			this_value = $(this).val();

			common_event_group( table_300_A.attr('id'), [ 'C3_B_table', 'C3_D_table' ], this_value, E1B_301_C.attr('id'), 'PA' );

			E1B_301_C.val('');
			E1B_301_C.trigger('change');
		},
	  keyup : event_keyup_jump()
	}
);

table_300_A.on('click', 'button',
	function( event ) 
	{
		add_remove_row(event.target, [ table_300_A.attr('id'), 'PA' ]);	
	}
);

// --> section C
E1B_301_C.on(
	{ change : function(event) 
		{
			this_value = $(this).val();

			common_event_group( table_300_C.attr('id'), [ 'C3_D_table' ], this_value, null, 'SA' );
		},
	  keyup : event_keyup_jump()
	}
);

table_300_C.on('click', 'button',
	function( event ) 
	{
		add_remove_row(event.target, [ table_300_C.attr('id'), 'SA' ]);	
	}
);


function common_event_group ( id_table, name_class, input_value, input_disabled, suffix )
{
	salt_input( input_value, name_class, input_disabled );
	validate_table( input_value, id_table, suffix );
}


// Form 1B_100 //

var frm_1B_100 = $('#1B_100');

frm_1B_100.validate(
	{
		rules : {
			E1B_Ini_M : {
				required : true,
				valmes : 'E1B_Ini_M'
			}
		},
		messages : {

		},
		errorPlacement: function(error, element) {
			$(element).next().after(error);
		},
		invalidHandler: function(form, validator) {
			var errors = validator.numberOfInvalids();
			if (errors) 
			{
				var message = errors == 1
				? 'Por favor corrige estos errores:\n'
				: 'Por favor corrige los ' + errors + ' errores.\n';
				var errors = "";
				if (validator.errorList.length > 0) 
				{
					for (x=0;x<validator.errorList.length;x++) 
					{
						errors += "\n\u25CF " + validator.errorList[x].message;
					}
				}
				alert(message + errors);
			}
			validator.focusInvalid();
		},
		submitHandler: function(form)
		{

		}
	}
);
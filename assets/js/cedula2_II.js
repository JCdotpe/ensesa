$('#2_D').on( 'click', 'button', function ( event )
			{
				var method = $(event.target).closest('button').text();

				contador = $(event.target).closest('tr').find('#nro_visita').val();
				contador = parseInt(contador) + 1;

				if ( method.trim() == 'Add' )
				{
					if ( contador < 6)
					{
						var row = '<tr>' +
									'<td> <input type="text" id="nro_visita" name="nro_visita" class="form-control liz_callada" value="' + contador + '" readonly> </td>' +
									'<td> <input type="text" id="E2_D_V1_Ec_Fecha_' + contador + '" name="E2_D_V1_Ec_Fecha[]" class="form-control" value=""> </td>' +
									'<td> <input type="text" id="E2_D_V1_Ec_Hini_1" name="E2_D_V1_Ec_Hini[]" class="form-control" value=""> </td>' +
									'<td> <input type="text" id="E2_D_V1_Ec_Hfin_1" name="E2_D_V1_Ec_Hfin[]" class="form-control" value=""> </td>' +
									'<td> <input type="text" id="E2_D_V1_Ec_Prox_F_1" name="E2_D_V1_Ec_Prox_F[]" class="form-control" value=""> </td>' +
									'<td> <input type="text" id="E2_D_V1_Ec_Prox_H_1" name="E2_D_V1_Ec_Prox_H[]" class="form-control" value=""> </td>' +
									'<td> <input type="text" id="E2_D_V1_Ec_Res_1" name="E2_D_V1_Ec_Res[]" class="form-control" value=""> </td>' +
									'<td> <input type="text" id="E2_D_V1_Je_Fecha_1" name="E2_D_V1_Je_Fecha[]" class="form-control" value=""> </td>' +
									'<td> <input type="text" id="E2_D_V1_Je_Hini_1" name="E2_D_V1_Je_Hini[]" class="form-control" value=""> </td>' +
									'<td> <input type="text" id="E2_D_V1_Je_Hfin_1" name="E2_D_V1_Je_Hfin[]" class="form-control" value=""> </td>' +
									'<td> <input type="text" id="E2_D_V1_Je_Res_1" name="E2_D_V1_Je_Res[]" class="form-control" value=""> </td>' +
									'<td> <button type="button" id="button_1" class="btn btn-warning"> Add </button> </td>' +
								'</tr>';
						$('#2_D').append(row);

						$(event.target).closest('button').text('Remove');
					}else{
						alert('liz no quiere que agregres');
					}

					

				}
				else if ( method == 'Remove')
				{
					var index = $(event.target).closest('tr').index() - 4;
					var i = 0;

					$(event.target).closest('tr').remove();

					$('.liz_callada').each(function() 
					{
						++i;
						$(this).val(i);
					});
					
				}
			}
		);
row = 1;
$('#vendor').autocomplete({
	source:function(request,response){
		$.ajax({
			url: "http://localhost/kms/kms/php/autofill.php",
			dataType: "json",
			method: "post",
			data: {
				name_startsWith: request.term,
				type: 'vendor_table',
				row_num : row
			},
			success:function(data){
				response($.map(data,function(item){
					// var code = item.split("|");
					return{
						label:item,
						value:item,
						data:item
					}
				}));
			}
		});
	},
	// autoFocus: true,	      	
 //  	minLength: 0,
 //  	select: function( event, ui ) {
	// 	var names = ui.item.data.split("|");
	// 	id_arr = $(this).attr('id');
 //  		// id = id_arr.split("_");					
	// 	$('#ingrident').val(names[1]);
	// 	$('#Quantity').val(names[3]);
	// 	$('#Unit').val(names[4]);
	// 	$('#Price').val(names[2]);
	// 	$('#Total').val(names[2]*names[3])
	// }		      	
});

$('#vendor').change(function() {
        $.ajax({
            method: "POST",
            url: "http://localhost/kms/kms/php/autofill.php",
            data: {
                type: "vendor",
                vendor: $(this).val()
            },
            success: function(data){
                console.log(data);
                $('#result').html(data);
                // var item="<tr><td><input list='ingridents' type='text' name='Item_code[]' id='ingrident' class='form-control'></td><td><input type='number' name='Quantity[]' min='1' class='form-control' id='Quantity'></td><td><input type='number' name='Quantity[]' min='1' class='form-control' id='Quantity'></td><td><input type='text' name='Unit[]' id='Unit' class='form-control'></td><td><input type='number' name='Unit_price[]' step='0.01' min='0.01' class='form-control' id='Price'></td><td><input type='number' name='Total[]' step='0.01' min='0.01' class='form-control' id='Total></td></tr>";
                // var names = data.split("|");
                // $('#ingrident').val(names[1]);
                // $('#Quantity').val(names[3]);
                // $('#Unit').val(names[4]);
                // $('#Price').val(names[2]);
                // $('#Total').val(names[2]* 	names[3])
                // var i = data.split("]");
                // console.log("Success");
    //             var table = document.getElementById(tableID);
    //             var rowCount = table.rows.length;
    //             var row = table.insertRow(rowCount);
				// var colCount = table.rows[0].cells.length;
				// for(var i=0; i<colCount; i++) {
				// 	var newcell = row.insertCell(i);
				// 	newcell.innerHTML = table.rows[0].cells[i].innerHTML;
				// }
					// var i=$('table tr').length;
					// count=$('table tr').length;
					
				 //    // var item="<tr><td><input list='ingridents' type='text' name='Item_code[]' id='ingrident' class='form-control'></td><td><input type='number' name='Quantity[]' min='1' class='form-control' id='Quantity'></td></td><td><input type='number' name='Unit_price[]' step='0.01' min='0.01' class='form-control' id='Price'></td><td><input type='number' name='Total[]' step='0.01' min='0.01' class='form-control' id='Total></td></tr>";
					// $('table').append(item);
            }
        });


    });



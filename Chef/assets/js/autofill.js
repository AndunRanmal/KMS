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
		      	
});

// $('#vendor').change(function() {
//         $.ajax({
//             method: "POST",
//             url: "http://localhost/kms/kms/php/autofill.php",
//             data: {
//                 type: "vendor",
//                 vendor: $(this).val()
//             },
//             success: function(data){
//                 console.log(data);
//                 $('#address').val(data);
//                 // $('#result').html(data);
//             }	
//         });


//     });


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
     
            }	
        });


    });



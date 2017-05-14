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
					var code = item.split("|");
					return{
						label:code[0],
						value:code[0],
						data:item
					}
				}));
			}
		});
	},
	autoFocus: true,	      	
  	minLength: 0,
  	select: function( event, ui ) {
		var names = ui.item.data.split("|");
		id_arr = $(this).attr('id');
  		// id = id_arr.split("_");					
		$('#ingrident').val(names[1]);
		$('#Quantity').val(names[3]);
		$('#Unit').val(names[4]);
		$('#Price').val(names[2]);
		$('#Total').val(names[2]*names[3])
	}		      	
})
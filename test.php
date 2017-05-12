<?php
include("../include/nav.php");
include("../include/stock_keeper.php");
?>
<form>
	<input type="text" name="email" id="email" />
	<input type="text" name="first_name" id="first_name" />
	<input type="text" name="last_name" id="last_name" />
</form>

<script type="text/javascript">
	$("#email").bind("change", function(e){
	  $.getJSON("json.php?email=" + $("#email").val(),
	        function(data){
	          $.each(data, function(i,item){
	            if (item.field == "first_name") {
	              $("#first_name").val(item.value);
	            } else if (item.field == "last_name") {
	              $("#last_name").val(item.value);
	            }
	          });
	        });
	});
</script>

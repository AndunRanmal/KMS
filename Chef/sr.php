<?php
include ("../config/config.php");

include "datetime.php";
if(isset($_POST["submit"])){
	foreach ($_POST["item"] as $key => $value) {
	
	
	$itemname = $_POST["item"][$key];
	
	$qty_request = $_POST["qty_req"][$key];

	$unit = $_POST["unit"][$key];
	
	$remarks = $_POST["remarks"][$key];
	
	
    $sql = "INSERT INTO `store_requisition` (`Date`,`Item_Name`,`Quantity_Received`,`Unit`,`Remarks`) 
	VALUES ('$date3','$itemname',$qty_request,'$unit','$remarks')";
	// echo $sql;

	mysqli_query($conn,$sql);
	
	echo "<script>
	alert('Store Requisition Forwarded Successfully');
	window.location=('../chef/req.html');
	</script>";
	
	
	
}
}
	
	
	
			
			
	 
?>
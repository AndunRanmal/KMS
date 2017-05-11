<?php

include("../config/config.php");



if(isset($_POST["submit"])){

	$id = $_POST["Requisition_id"];

	$sql1 = "INSERT INTO `requisition_overview` (`Id`,`Issued_date`) VALUES ('$id',NOW())";
	mysqli_query($conn,$sql1);

	foreach ($_POST['Quantity'] as $key => $value) {
		$name = $_POST["Item_code"][$key];
		// $des = $_POST["Description"][$key];
		$req_date = $_POST["Req_date"][$key];
		$quantity = $_POST["Quantity"][$key];
		$unit_price = $_POST["Unit_price"][$key];
		$unit = $_POST["Unit"][$key];
		$vendor = $_POST["Vendor"][$key];
		$remarks = $_POST["Remarks"][$key];


		$sql = "INSERT INTO `department_requisition` (`Item_code`,`Unit_price`,`Quantity`,`Unit`,`Date_wanted`,`Vendor_Id`,`Date`,`Remarks`,`Requisition_id`) VALUES ('$name',$unit_price,$quantity,'$unit','$req_date','$vendor',NOW(),'$remarks','$id')";
		if(mysqli_query($conn,$sql)){
			echo "<script>
			
			window.location('../views/blank.php');
			</script>";
		}else{
			echo "<script>
			
			</script>";
			
		}


		
	}
		
}


	 

?>
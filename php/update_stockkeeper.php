<?php

include("../config/config.php");

if(isset($_POST["save"])){
	$id = $_POST["pr_code"];

	$sql = "UPDATE `requisition_overview` SET `Last_updated` = NOW(), `Status`=1 WHERE `Id`='$id'";
	$res = mysqli_query($conn,$sql);


	foreach ($_POST['Quantity'] as $key => $value) {
		$name = $_POST["Item_code"][$key];
		// $des = $_POST["Description"][$key];
		$req_date = $_POST["Req_date"][$key];
		$quantity = $_POST["Quantity"][$key];
		$unit_price = $_POST["Unit_price"][$key];
		$unit = $_POST["Unit"][$key];
		$vendor = $_POST["Vendor"][$key];
		$remarks = $_POST["Remarks"][$key];

	$sql2 = "UPDATE `department_requisition` SET `Item_code`='$name', `Unit_price`=$unit_price, `Quantity`=$quantity, `Unit`='$unit', `Date_wanted`= '$req_date', `Vendor_Id`= '$vendor', `Remarks` = '$remarks' WHERE `Requisition_id`= '$id' AND `Item_code` = '$name'";
	// echo $sql2;
	$result = mysqli_query($conn,$sql2);

	echo "<script>
			alert('Successfully Updated the Purchase Requisition');
			window.location=('../views/blank.php');
		  </script>";
}
}
?>
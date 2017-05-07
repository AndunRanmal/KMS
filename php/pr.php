<?php

 include("../config/config.php");



if(isset($_POST["submit"])){

	$id = $_POST["Requisition_id"];

	$sql1 = "INSERT INTO `requisition_overview` (`Id`,`Issued_date`) VALUES ('$id',NOW())";
	mysqli_query($conn,$sql1);

	foreach ($_POST['Item_code'] as $key => $value) {
		$code = $_POST["Item_code"][$key];
		$des = $_POST["Description"][$key];
		$req_date = $_POST["Req_date"][$key];
		$quantity = $_POST["Quantity"][$key];
		$unit = $_POST["Unit"][$key];
		$vendor = $_POST["Vendor"][$key];
		$remarks = $_POST["Remarks"][$key];


		$sql = "INSERT INTO `department_requisition` (`Item_code`,`Description`,`Unit_price`,`Quantity`,`Date_wanted`,`Vendor_Id`,`Date`,`Remarks`,`Requisition_id`) VALUES ('$code','$des',$unit,$quantity,'$req_date','$vendor',NOW(),'$remarks','$id')";
		if(mysqli_query($conn,$sql)){
			echo "<script>
			alert('Purchase requisition successfully forwarded to Manager')
			window.location('../views/blank.php');
			</script>";
		}else{
			echo "<script>
			alert('Something went wrong');
			</script>";
			
		}


		
	}
		
}

if(isset($_POST["save"])){

	$id = $_POST['pr_code'];

	foreach ($_POST['Item_code'] as $key => $value) {
		$code = $_POST["Item_code"][$key];
		$des = $_POST["Description"][$key];
		$req_date = $_POST["Req_date"][$key];
		$quantity = $_POST["Quantity"][$key];
		$unit = $_POST["Unit"][$key];
		$vendor = $_POST["Vendor"][$key];
		$remarks = $_POST["Remarks"][$key];
}

	 

?>
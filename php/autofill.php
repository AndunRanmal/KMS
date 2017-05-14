<?php
include("../config/config.php");

if($_POST['type']=='vendor_table'){
	$row_num = $_POST['row_num'];
	$name = $_POST['name_startsWith'];
	$sql = "SELECT * FROM `department_requisition` WHERE UPPER(`Vendor_Id`) LIKE '".strtoupper($name)."%'"; 
	$res = mysqli_query($conn,$sql);
	$data = array();
	while($row = mysqli_fetch_assoc($res)){
		$item = $row['Vendor_Id'].'|'. $row['Item_code']. '|'. $row['Unit_price']. '|'. $row['Quantity']. '|'. $row['Unit'];
		array_push($data,$item);
	}
	echo json_encode($data);
}

?>
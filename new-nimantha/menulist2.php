<?php
include './connect.php';

if(isset($_POST["submit"])){

	$id = $_POST["id"];
	$date = $_POST['date'];
	$count = $_POST['count'];
	$time= $_POST['time'];
	$person = $_POST['person'];
	$number = $_POST['number'];

	$sql1 = "INSERT INTO counts(`Order`,`Date`,`Count`,`person`,`number`,`time`,`Order_Date`) VALUES($id, '$date','$count','$person','$number','$time',NOW())";
	echo $sql1;
	$res = mysqli_query($conn,$sql1);

	foreach ($_POST['menu'] as $key => $value) {
		$name = $_POST["menu"][$key];
		echo $name;
		// $des = $_POST["Description"][$key];
		// $req_date = $_POST["Req_date"][$key];
		// $quantity = $_POST["Quantity"][$key];
		// $unit_price = $_POST["Unit_price"][$key];
		// $unit = $_POST["Unit"][$key];
		// $vendor = $_POST["Vendor"][$key];
		// $remarks = $_POST["Remarks"][$key];


		// $sql = "INSERT INTO `department_requisition` (`Item_code`,`Unit_price`,`Quantity`,`Unit`,`Date_wanted`,`Vendor_Id`,`Date`,`Remarks`,`Requisition_id`,`PO_Id`) VALUES ('$name',$unit_price,$quantity,'$unit','$req_date','$vendor','NOW()','$remarks','$id',0)";
		// echo $sql;
		// if(mysqli_query($conn,$sql)){
		// 	echo "<script>
		// 	alert('Successfully Purchase Requisition Forwarded to Manager');
		// 	window.location=('../views/blank.php');
		// 	</script>";
		// }else{
		// 	echo "<script>
			
		// 	</script>";
			
		// }


		
	}
		
}









?>
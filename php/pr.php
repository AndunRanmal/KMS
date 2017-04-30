<?php

// include("../config/config.php");

// if(isset($_POST["submit"])){
	// $code = $_POST["Item_code"];
	// $des = $_POST["Description"];
	// $req_date = $_POST["Req_date"];
	// $quantity = $_POST["Quantity"];
	// $unit = $_POST["Unit"];
	// $vendor = $_POST["Vendor"];
	// $remarks = $_POST["Remarks"];


	// $sql = "insert into `department_requisition` (`Item_code`,`Description`,`Unit_price`,`Quantity`,`Date_wanted`,`Vendor_Id`,`Date`) values ('$code','$des',$req_date,$quantity,$unit,'$vendor','$remarks')";
	// if(mysqli_query($conn,$sql)){
// 		echo "<script>
// 			alert('New Topic added successfully');
// 			window.location.href=../views/blank.html;
// 			</script>";
// 	}else{
// 		echo "<script>
// 			alert('Something went wrong');
// 			</script>";
// 	}
// }

if(isset($_POST["submit"])){
	foreach ($_POST['submit'] as $key => $value) {
		$code = $_POST["Item_code[]"][$key];
		$des = $_POST["Description[]"][$key];
		$req_date = $_POST["Req_date[]"][$key];
		$quantity = $_POST["Quantity[]"][$key];
		$unit = $_POST["Unit[]"][$key];
		$vendor = $_POST["Vendor[]"][$key];
		$remarks = $_POST["Remarks[]"][$key];

		$sql = "insert into `department_requisition` (`Item_code`,`Description`,`Unit_price`,`Quantity`,`Date_wanted`,`Vendor_Id`,`Date`) values ('$code','$des',$req_date,$quantity,$unit,'$vendor','$remarks')";
		if(mysqli_query($conn,$sql));

	}
}

?>
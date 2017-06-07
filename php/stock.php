<?php
include("../config/config.php");

if(isset($_POST['submit'])){

foreach ($_POST['Quantity'] as $key => $value) {
		$name = $_POST["Item_name"][$key];
		$quantity = $_POST["Quantity"][$key];
		$unit = $_POST["Unit"][$key];


		$sql1 = "INSERT INTO `store_requisition` (`Date`,`Item_Name`,`Quantity_Received`) VALUES (NOW(),'$name',$quantity)";
		mysqli_query($conn,$sql1);

		$sql2 = "UPDATE `stock` SET `Quantity` = `Quantity`+ $quantity WHERE Item_Name = '$name'";
		mysqli_query($conn,$sql2);
		echo $sql1;
		echo $sql2;
		echo "<script>
			alert('Successfully Purchase Order Added');
			window.location=('../views/stock_handling.php');
			</script>";
	}

		
}
?>
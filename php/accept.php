<?php

include("../config/config.php");


	$id = $_GET["ref"];

	$sql = "UPDATE `requisition_overview` SET `Last_updated` = NOW(), `Status`=1, `Approved_date`=NOW() WHERE `Id`='$id'";
	$res = mysqli_query($conn,$sql);

	echo "<script>
			alert('Successfully Accept the Purchase Requisition');
			window.location=('../manager/pr.php');
		  </script>";


?>
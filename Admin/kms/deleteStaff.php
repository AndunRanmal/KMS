<?php

include('db.php');


$staffId=$_REQUEST['staffId'];


$query = "DELETE FROM staff WHERE Emp_Id='$staffId'"; 
$result = mysqli_query($con,$query) or die ( mysqli_error());
header("Location: viewStaff.php"); 
?>
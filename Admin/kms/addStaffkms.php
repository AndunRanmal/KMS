<?php

include('db.php');
$status = "";


$staffId = $_POST['staffId']; 
$name = $_POST['name'];
$designation = $_POST['designation'];
$contactNo= $_POST['contactNo'];
$address = $_POST['address'];
$qualification = $_POST['qualification'];
 


$query = "INSERT INTO employee(Emp_Id,Emp_Name,designation,Emp_address,Contact_No,Qualifications)VALUES(
'$staffId','$name','$designation','$contactNo','$address','$qualification')";
$result = mysqli_query($con,$query); 





if($result) 
	{ 
		
		$status = "New Record Inserted Successfully.</br></br><a href='viewStaff.php'>View Inserted Record</a>";
		echo $status; 

	} 
	else 
		{ 
			die('Error: '.mysqli_error($con)); 
		} 
	mysqli_close($con); 



?>

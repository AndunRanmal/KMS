<?php require 'connection.php';?>
<?php
$error="";
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
} 
if(isset($_POST['user'])){
	session_start();
    
    $file_name = "";
    if(isset($_FILES['Photo'])){
      $errors= array();
      $file_name = $_FILES['Photo']['name'];
      $file_size = $_FILES['Photo']['size'];
      $file_tmp = $_FILES['Photo']['tmp_name'];
      $file_type = $_FILES['Photo']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['Photo']['name'])));
      
      $expensions= array("jpeg","jpg","png");
      
      if(empty($errors)==true) {
         move_uploaded_file($file_tmp,"assets/img/".$file_name);
         echo "Success";
      }else{
         print_r($errors);
      }
   }
	
	$FName=$_POST['FirstName'];
	$LName=$_POST['LastName'];
	$Gender=$_POST['Gender'];
	$Birthday=$_POST['Birthday'];
	$Designation=$_POST['Designation'];
    $Address=$_POST['Address'];
    $Contact=$_POST['ContactNumber'];
    $Email=$_POST['EMail'];
    $sql=$con->query("INSERT INTO employees(fname,lname,gender,birthday,designation,address,contact,email,image)
	Values('{$FName}','{$LName}','{$Gender}','{$Birthday}','{$Designation}', '{$Address}','{$Contact}','{$Email}', 'assets/img/".$file_name."' )");
	
	echo "$sql";
		
		header('Location:main.php');

} 

?>  
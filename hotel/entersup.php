
<?php
//include "config/config.php";
//include "datetime.php";
if(isset($_POST["submit"])){
	$db =mysqli_connect("localhost","root","","kms");
	$name = $_POST["name1"];
	$number = $_POST["number"];
	$address = $_POST["address"];
	//$image = $_FILES["file"];
	
	
	if ($_FILES["image"]["error"] > 0){
     echo "<font size = '5'><font color=\"#e31919\">Error: NO CHOSEN FILE <br />";
     echo"<p><font size = '5'><font color=\"#e31919\">INSERT TO DATABASE FAILED";
   }
   else{
	   move_uploaded_file($_FILES["image"]["tmp_name"],"images/" . $_FILES["image"]["name"]);
	   echo"<font size = '5'><font color=\"#0CF44A\"><br>";
	   $file="images/".$_FILES["image"]["name"];
	   
	   $sql = "INSERT INTO `new_supplier` (`names`,`pnumber`,`address`,`image`)
	   VALUES ('$name','$number','$address','$file')";

	   mysqli_query($db,$sql);
	   //echo $sql;
	  // mysqli_query($conn,$sql);
	
		
	
   }
	   
} 
?>	
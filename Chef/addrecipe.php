<?php
include "../config/config.php";
include "datetime.php";
if(isset($_POST["submit"])){
	$title = $_POST["title"];
	$instructions = $_POST["howtomake"];
	$add_info = $_POST["add"];
	//$image = $_FILES["file"];
	
	
	if ($_FILES["file"]["error"] > 0){
     echo "<font size = '5'><font color=\"#e31919\">Error: NO CHOSEN FILE <br />";
     echo"<p><font size = '5'><font color=\"#e31919\">INSERT TO DATABASE FAILED";
   }
   else{
	   move_uploaded_file($_FILES["file"]["tmp_name"],"image/" . $_FILES["file"]["name"]);
	   //echo"<font size = '5'><font color=\"#0CF44A\"><br>";
	   $file="image/".$_FILES["file"]["name"];
	   
	   $sql = "INSERT INTO `recipes` (`Title`,`Instructions`,`Add_info`,`Image`)
	   VALUES ('$title','$instructions','$add_info','$file')";
	   //echo $sql;
	   mysqli_query($conn,$sql);
	
		
	foreach ($_POST["ingredient"] as $key => $value) {
		$ingredient = $_POST["ingredient"][$key];
	    $qty = $_POST["quantity"][$key];
		
		
	$sql1 = "INSERT INTO ingredients SET Ingredient = '$ingredient', Qty = '$qty',
	RecipeID = (SELECT Recipe_Id FROM recipes WHERE Title = '$title')";
	
	
	//echo $sql1;
	mysqli_query($conn,$sql1);
	//mysqli_query($conn,$sql2);

	echo "<script>
	alert('New Recipe Added Successfully');
	window.location='recipes.php';
	</script>";
	}
   }
	   
}
?>
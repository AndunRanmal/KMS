<?php require 'connection.php';?>
<?php
$error="";
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
} 
if(isset($_POST["submit"])){
	
	$Onumber=$_POST['OrderNumber'];
	$Mtype=$_POST['Meal_Type'];
	$Tomenu=$_POST['Menu_Type'];
	$Toitem=$_POST['Item_Type'];
	$Quantity=$_POST['quantity'];
    $Date=$_POST['Date'];
    $Time=$_POST['Time'];
    $Customercount=$_POST['Customers'];
    $Price=$_POST['total']
   
    $sql=("INSERT INTO `new_orders`(Order_number,Meal_type,Type_of_menu,Type_of_item,Quantity,Date,Time,Customers_count, price )
	Values('{$Onumber}','{$Mtype}','{$Tomenu}','{$Toitem}',{$Quantity}, '{$Date}','{$Time}','{$Customercount}','{$Price}')");
	mysqli_query($con,$sql);
	echo "$sql";
		
		

} 

?>   
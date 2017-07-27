<?php require 'connection.php';?>
<?php
$error="";
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
} 
if(isset($_POST["submit"])){
	
	$Mtype=$_POST['Meal_Type'];
	$Date=$_POST['Date'];
    $Time=$_POST['Time'];
    $Customercount=$_POST['Customers'];
    $tempId=$_POST['tempId'];
    
    $sql0 = "select * from temporder where id = '".$tempId."'";
    $res = mysqli_query($con,$sql0);
    while($row = mysqli_fetch_assoc($res)){
        $Menu=$row['menu'];
        $item=$row['item'];
        $qty=$row['qty'];
        $price=$row['price'];
        $sql=("INSERT INTO `new_orders`(Meal_type,Type_of_menu,Type_of_item,Quantity,Date,Time,Customers_count, price )
            Values('{$Mtype}','{$Menu}','{$item}',{$qty}, '{$Date}','{$Time}','{$Customercount}','{$price}')");
            mysqli_query($con,$sql);
        
    }
    
    $sql2 = "delete from temporder where id = '".$tempId."'";
    mysqli_query($con,$sql2);
    
    
    // echo "<h1>Order Sent! </h1>";
    echo "<script>
    alert('Order Added Successfully');
    window.location='orders.php';
    </script>";
   
	
		
		

} 

?>   
<?php

include("../config/config.php");

$id = $_GET["ref"];
// echo $id;

$sql = "DELETE FROM `new_orders` WHERE `Order_number` = $id";
// echo $sql;
mysqli_query($conn,$sql);

echo "<script>
alert('Order Deleted Successfully');
window.location='../new-nimantha/orders.php';
</script>"; 
?>
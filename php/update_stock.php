<?php
include("../config/config.php");
if(isset($_POST["update"])){
$id = $_POST["id"];
$quantity = $_POST["issued"];
$item = $_POST["item"];
echo $id;

$sql = "UPDATE `store_requisition` SET `Date`= NOW(), `Quantity_Issued`= $quantity WHERE `store_req_Id` = $id";
// echo $sql;
$res = mysqli_query($conn,$sql);

$sql2 =  "UPDATE `stock` SET `Quantity`= `Quantity`-$quantity WHERE `Item_Name` = '$item'";
// echo $sql2;
$result = mysqli_query($conn,$sql2);

echo "<script>
window.location='../views/req.php';
</script>";
}
?>
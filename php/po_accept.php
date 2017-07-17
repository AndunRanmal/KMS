<?php
include("../config/config.php");
$sql = "SELECT * FROM `po_overview`";
  $count = mysqli_query($conn,$sql);
  $n = 1;
  while($row = mysqli_fetch_assoc($count)){
    
    $n++;
  }
  $O_id = "PO_".+$n;
  echo $O_id;


$vendor = $_GET["ref"];
$PR_id = $_GET["id"];
// echo $PR_id;
$sql2 = "INSERT INTO `po_overview` (`O_id`,`Issued_date`,`Vendor`)VALUES('$O_id',NOW(),'$vendor')";
echo $sql2;
mysqli_query($conn,$sql2);
$ven = "SELECT * FROM `department_requisition` WHERE `PO_Id`='0' AND `Vendor_Id`='$vendor' ";
$result = mysqli_query($conn,$ven); 
$pr = "UPDATE `department_requisition` SET PO_Id = '1' WHERE `Vendor_Id`='$vendor' ";
mysqli_query($conn,$pr);
// echo $pr;
$count = 0;
$sum = 0;
while($row = mysqli_fetch_assoc($result)){
$item = $row["Item_code"];
$quantity = $row["Quantity"];
$unit = $row["Unit"];
$unit_price = $row["Unit_price"];
	$date = $row["Date_wanted"];
	$count += 1;
    $sum += $quantity * $unit_price ;
    $sql ="INSERT INTO `purchase_order` (`Item_code`,`Quantity`,`Unit`,`Unit_price`,`Date_wanted`,`Vendor_Id`,`Order_id`)VALUES('$item',$quantity,'$unit',$unit_price,'$date','$vendor','$O_id')";
                       // echo $sql;
    mysqli_query($conn,$sql);
}
echo "<script>
		alert('Successfully Purchase Order Added');
		window.location='../views/po.php';
		</script>";	
?>
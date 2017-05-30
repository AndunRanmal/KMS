<?php 
include("../config/config.php");

if($_POST["type"]=='menu'){
    $quantity = $_POST["no_of"];
    $item = $_POST["item"];
    
    $sql = "SELECT `Price` from items WHERE `Item_Name` = '$item'";
    $res = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_assoc($res)){
        $price = $row["Price"];
        $total = $price * $quantity; 
        
        echo $total;
        ?>
<?php
    }
}
?>    
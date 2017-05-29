<?php require 'connection.php';?>
<?php
$error="";
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}


if($_POST["type"]=='menu'){
    $menu = $_POST["menu"];
    
    $sql = "SELECT * FROM `items`,`menus` WHERE items.Menu_Id = menus.Menu_Id AND `Menu_Name`= '$menu'";
    $res = mysqli_query($con,$sql);
//    while($row=mysqli_fetch_assoc($res)){
//        $Id = $row["Item_Name"];
//        echo $Id;
        
?>

<option value=""> Select the item</option>
<?php
	foreach($res as $state) {
?>
	<option value="<?php echo $state["Item_Name"]; ?>"><?php echo $state["Item_Name"]; ?></option>
<?php
	}
}
     

?>
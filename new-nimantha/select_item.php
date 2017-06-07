<?php 

include("../config/config.php");


if($_POST["type"]=='menu'){
    $menu = $_POST["menu"];
    
    $sql = "SELECT * FROM `items`,`menus` WHERE items.Menu_Id = menus.Menu_Id AND `Menu_Name`= '$menu'";
    $res = mysqli_query($conn,$sql);
?>
<option value=""> Select the item</option>
<?php
   while($row=mysqli_fetch_assoc($res)){
       $name = $row["Item_Name"];
       echo $Id;
        
?>


	<option value="<?php echo $name; ?>"><?php echo $name; ?></option>
<?php
	}
}
     

?>
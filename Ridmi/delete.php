<?php
//delete.php
//$connect = mysqli_connect("localhost", "root", "", "testing");
include './connect.php';
if(isset($_POST["id"]))
{
 foreach($_POST["id"] as $id)
 {
  //$query = ;
  mysqli_query($conn, "DELETE FROM store WHERE Id = '".$id."'");
 }
}
?>
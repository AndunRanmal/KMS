<?php
include("../config/config.php");
if(isset($_POST["view"]))
{

 if($_POST["view"] != '')
 {
  $update_query = "UPDATE `requisition_overview` SET `Notification`=1 WHERE `Notification`=0";
  mysqli_query($conn, $update_query);
 }
 $query = "SELECT * FROM `requisition_overview` WHERE `Status`=1 ORDER BY `Approved_date` DESC LIMIT 5  ";
 $result = mysqli_query($conn, $query);
 $output = '';
 
 if(mysqli_num_rows($result) > 0)
 {
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
   <li>
    <a href="#">
     <strong>'.$row["Id"].'</strong><br />
    </a>
   </li>
   <li class="divider"></li>
   ';
  }
 }
 else
 {
  $output .= '<li><a href="#" class="text-bold text-italic">No Notification Found</a></li>';
 }
 
 $query_1 = "SELECT * FROM `requisition_overview` WHERE `Notification`=0";
 $result_1 = mysqli_query($conn, $query_1);
 $count = mysqli_num_rows($result_1);
 $data = array(
  'notification'   => $output,
  'unseen_notification' => $count
 );
 echo json_encode($data);
}


?>

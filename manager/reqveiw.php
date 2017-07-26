<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Requisition View</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
        $("#remark").click(function(){
            $("#input").toggle('slow');
            // $("#p3").toggle('slow');
            
        });
    });
    $(document).ready(function(){
        $("#edit").click(function(){
            $("#edit_pr").show();
            $("#tableid").hide();
            $("#accept").hide();
            $("#edit").hide();
            $("#remark").hide();
            // $("#p3").toggle('slow');
            
        });
    });
</script>

</head>
<?php
include("../include/nav.php");
include("../include/manager.php");

?>
  
<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
            <ol class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li><a href="pr.php" class="active">Purchase Requisition</a></li>
                <li><a href="pr.php" class="active">Requisition View</a></li>
            </ol>
            <h2>Requisition View</h2><br/><hr>
            <div>
                
                
                <table class="table table-striped" id="tableid">
                  <thead>
                    <tr>
                      <td>Item Name</td>
                      <!-- <td>Description</td> -->
                      <td>Delivery Date</td>
                      <td>Quantity</td>
                      <td>Unit</td>
                      <td>Unit Price</td>
                      <td>Vendor</td>
                      <td>Remarks</td>
                    </tr>   
                  </thead>
                  <tbody>
                  <?php
                  include("../config/config.php");
                  $pr = $_GET["ref"];
                  $sql = "SELECT * FROM `department_requisition` WHERE `Requisition_id` = '$pr'";
                  $res = mysqli_query($conn,$sql);
                  while($row = mysqli_fetch_assoc($res)){
                    $code = $row['Item_code'];
                    $date = $row['Date_wanted'];
                    $quantity = $row['Quantity'];
                    $unit = $row['Unit'];
                    $unit_price =$row['Unit_price'];
                    $vendor = $row['Vendor_Id'];
                    $remarks = $row['Remarks']; 
                    ?>
                    <tr>
                    <td><?php echo $code ?></td>
                    <td><?php echo $date ?></td>
                    <td><?php echo $quantity ?></td>
                    <td><?php echo $unit ?></td>
                    <td><?php echo $unit_price ?></td>
                    <td><?php echo $vendor ?></td>
                    <td><?php echo $remarks ?></td>
                    </tr>
                    <?php 
                     }
                  ?>
               </tbody>
             </table>
             <div style="display: none" id="edit_pr">
                                  <form style="text-align: center;" action="../php/update_pr.php" method="POST">
                                    <input type="hidden" name="pr_code" value="<?php echo $_GET['ref']; ?>">
                                     <table class="table table-striped">
                                       <thead>
                                        <tr>
                                          <td>Item Name</td>
                                          <!-- <td>Description</td> -->
                                          <td>Delivery Date</td>
                                          <td>Quantity</td>
                                          <td>Unit</td>
                                          <td>Unit Price</td>
                                          <td>Vendor</td>
                                          <td>Remarks</td>
                                        </tr>   
                                       </thead>
                                       <tbody>
                                       <?php
                                        $pr = $_GET["ref"];
                                        // echo $pr;

                                        $sql = "SELECT * FROM `department_requisition` WHERE `Requisition_id` = '$pr'";
                                        $res = mysqli_query($conn, $sql);

                                        while($row = mysqli_fetch_assoc($res)){
                                          $code = $row['Item_code'];
                                          // $des = $row['Description'];
                                          $date = $row['Date_wanted'];
                                          $quantity = $row['Quantity'];
                                          $unit = $row['Unit'];
                                          $unit_price =$row['Unit_price'];
                                          $vendor = $row['Vendor_Id'];
                                          $remarks = $row['Remarks']; 
                                          // echo $unit;
                                          // echo $vendor;
                                       ?><input type="hidden" name="pr_id" value="<?php echo $pr ?>">
                                         <tr>
                                           <td><input type="text" name="Item_code[]" class="form-control" value="<?php echo $code ?>"></td>
                                           <!-- <td><input type="text" name="Description" class="form-control" value="<?php echo $des ?>"></td> -->
                                           <td><input type="Date" name="Req_date[]" class="form-control" value="<?php echo $date ?>"></td>
                                           <td><input type="number" name="Quantity[]" min="1" class="form-control" value="<?php echo $quantity ?>"></td>
                                           <td><select class="form-control" name="Unit[]" value="<?php echo $unit ?>">
                                               <option><?php echo $unit ?></option>
                                               <option>kg</option>
                                               <option>L</option>
                                               <option>pcs</option>
                                           </select></td>
                                           <td><input type="number" name="Unit_price[]" step="0.01" min="0.01" class="form-control" value="<?php echo $unit_price ?>"></td>
                                           <td><select class="form-control" name="Vendor[]" value="<?php echo $vendor ?>">
                                             <option><?php echo $vendor ?></option>
                                             <option>Vendor1</option>
                                             <option>Vendor2</option>
                                             <option>Vendor3</option>
                                             <option>Vendor4</option>
                                           </select></td>
                                           <td><input type="text" name="Remarks[]" class="form-control" value="<?php echo $remarks ?>"></td>
                                         </tr>
                                         <?php 
                                   }
                                   ?>
                                       </tbody>
                                      </table>
                                      <input type="submit" class="btn btn-primary" name="save" value="Save and Accept"> 
                                     </form>
                                     
                                </div> 
             <button class="btn btn-primary" id="accept" onclick="window.location=('../php/accept.php?ref=<?php echo $pr ?>')">Accept</button>
             <button class="btn btn-success" id="edit">Edit</button>
             <button class="btn btn-danger" id="remark">Reject</button><br><br>
           
             <div id="input" style="display: none;">
             <form >
              <label>Remark</label>
               <textarea type="text" class="form-control" name="remark"   rows="3"></textarea><br>
               <input type="submit" name="submit" value="Submit" class="btn btn-info">
             </form>
             </div>
           </div> 
            </div>
        </div>
    </div>
</div>        

     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>

<?php
include("../include/nav.php");
include("../include/stock_keeper.php");
include("../config/config.php");

$id = $_GET["ref"];

$sql1 = "SELECT * FROM `requisition_overview` WHERE Id = '$id' ";
$result = mysqli_query($conn, $sql1);
while($row = mysqli_fetch_assoc($result)){
	$issued_date = $row['Issued_date'];
	$last_updated = $row['Last_updated'];
	$apprv_date = $row['Approved_date'];
	$apprv_by = $row['Approved_by'];
 

?>

<div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                      <button class="btn btn-primary fa fa-download" style="float: right;padding-bottom: 12px;" id="cmd">Download</button>
                     <button class="btn btn-primary  fa fa-print" style="float: right; padding-right: 29px;padding-left: 29px;padding-bottom: 12px;margin-right: 5px;">Print</button><br>
                      <div style="background-color: #315AB8; height: 60px;">
                        <h3 style="text-align: center;padding-top: 15px;color: #fff;"><span>Purchase Requsition</span></h3><hr/> 
                      </div>
                      <div style="background-color: #DDF4FF;height: 500px;" id="content">
                        <p style="padding-left: 10px;">
                        <span style="font-weight: bold;">Purchase Requisition No:</span>   <?php echo $id; ?>
                        <br/>
                        <span style="font-weight: bold;">Issued Date: </span> <?php echo $issued_date; ?><br/>
                        <span style="font-weight: bold;">Approved on: </span> <?php echo $apprv_date; ?><br/>
                        <span style="font-weight: bold;">Approved by: </span> <?php echo $apprv_by; ?></p><br>
                        <?php 
                    }
                    ?>
                          <table class="table table-bordered" id="tableid">
                            <thead style="font-weight: bolder;text-align: center;">
                              <tr>
                                <td>Item Code</td>
                                <td>Description</td>
                                <td>Requested Date</td>
                                <td>Quantity</td>
                                <td>Unit Price</td>
                                <td>Vendor</td>
                                <td>Remarks</td>
                              </tr>   
                            </thead>
                            <tbody>

                            <?php 
                            	$id = $_GET["ref"];
                            	$sql = "SELECT * FROM `department_requisition` WHERE `Requisition_id` ='$id'";
                            	$res = mysqli_query($conn, $sql);
                            	$count= 0;
                            	$sum = 0;
                            	while ($row = mysqli_fetch_assoc($res)){
                        			$code = $row['Item_code'];
                                    $des = $row['Description'];
                                    $date = $row['Date_wanted'];
                                    $quantity = $row['Quantity'];
                                    $unit = $row['Unit'];
                                    $unit_price = $row['Unit_price'];
                                    $vendor = $row['Vendor_Id'];
                                    $remarks = $row['Remarks'];
                                    $count += 1;
                                    $sum += $quantity * $unit_price ;
                                    // echo $sum; 
                                // echo $count; 
                            	
                             ?>
                                <tr>
                                  <td><?php echo $code; ?></td>
                                  <td><?php echo $des; ?></td>
                                  <td><?php echo $date; ?></td>
                                  <td><?php echo "$quantity" , "$unit" ; ?></td>
                                  <td><?php echo $unit_price ?></td>
                                  <td><?php echo $vendor; ?></td>
                                  <td><?php echo $remarks; ?></td>
                                </tr>
                                <?php
                                }
                                ?>
                                
                            </tbody>
                        </table>
                        <p style="padding-left: 10px;">

                            <span style="font-weight: bold;">Total Items: </span><?php echo $count; ?><br>
                            <span style="font-weight: bold;">Total Cost: </span><?php echo "Rs. " ,$sum; ?>

                        </p>
                    	</div>
                        
                    </div>
                    <div id="editor"></div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
              
                 <!-- /. ROW  -->           
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
    <div class="footer">
      
    
             <div class="row">
                <div class="col-lg-12" >
                    <!-- &copy;  2014 yourdomain.com | Design by: <a href="http://binarytheme.com" style="color:#fff;"  target="_blank">www.binarytheme.com</a> -->
                </div>
        </div>
        </div>
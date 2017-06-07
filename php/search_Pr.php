<?php
include("../config/config.php");
include("../include/nav.php");
include("../include/stock_keeper.php");
?>

<div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                      <ol class="breadcrumb">
                      <li><a href="index.html">Home</a></li>
                      <li><a href="blank.php">PR</a></li>
                      <li><a href="blank.php">PR Report</a></li>
                      <li><a href="blank.php">PR Preview</a></li>
                      </ol>
                      <button onclick="download();" class="btn btn-primary fa fa-download" style="float: right;padding-bottom: 12px;" id="btn">Download</button>
                     <button class="btn btn-primary  fa fa-print" style="float: right; padding-right: 29px;padding-left: 29px;padding-bottom: 12px;margin-right: 5px;" onclick="doit()">Print</button><br>
                      <div style="background-color: #DDF4FF;height: 500px;width: 1100px;float: center;" id="content">
                      <div style="background-color: #315AB8; height: 60px;">
                        <h3 style="text-align: center;color: #fff;"><span>Purchase Requsition</span></h3><!-- <hr/> --> 
                      </div>
                      
                        <p style="padding-left: 10px;">
                        <span style="font-weight: bold;">Purchase Requisition No:</span> 
                        <br/>
                        <span style="font-weight: bold;">Issued Date: </span> <br/>
                        <span style="font-weight: bold;">Approved on: </span> <br/>
                        <span style="font-weight: bold;">Approved by: </span> </p><br>
                          <table class="table table-bordered" id="tableid">
                            <thead style="font-weight: bolder;text-align: center;">
                              <tr>
                                <td>Item Name</td>
                                <!-- <td>Description</td> -->
                                <td>Delivery Date</td>
                                <td>Quantity</td>
                                <!-- <td>Unit</td> -->
                                <td>Unit Price</td>
                                <td>Vendor</td>
                                <td>Remarks</td>
                              </tr>   
                            </thead>
                            <tbody>
							<?php
							if(isset($_POST["submit"])){
								$Pr = $_POST["search"];

								$sql = "SELECT * FROM `department_requisition` WHERE `Requisition_id` = '$Pr'";
								$res = mysqli_query($conn,$sql);
								$count = 0;
								$sum = 0;
								while($row = mysqli_fetch_assoc($res)){
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
							        ?>
								<tr>
                                  <td><?php echo $code; ?></td>
                                  <!-- <td><?php echo $des; ?></td> -->
                                  <td><?php echo $date; ?></td>
                                  <td><?php echo "$quantity" , "$unit" ; ?></td>
                                  <td><?php echo "Rs. ". $unit_price ?></td>
                                  <td><?php echo $vendor; ?></td>
                                  <td><?php echo $remarks; ?></td>
                                </tr>
                        <?php
                            }
						}
						?>
                          </tbody>
                        </table>
                        <p style="padding-left: 10px;">

                            <span style="font-weight: bold;">No. of Types: </span><?php echo $count; ?><br>
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
<?php
include("../include/footer.php");                  
?>	




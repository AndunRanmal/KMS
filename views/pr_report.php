<?php
include("../config/config.php");
include("../include/nav.php");
include("../include/stock_keeper.php");
?>  




        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                      <ol class="breadcrumb">
                      <li><a href="index.html">Home</a></li>
                      <li><a href="blank.php">PR</a></li>
                      <li><a href="blank.php">PR Report</a></li>
                      </ol>
                     <h3 style="text-align: center;font-weight: bold;">Purchase Requisition Report </h3>
                     <!-- <button class="btn btn-primary fa fa-download" style="float: right;padding-bottom: 12px;">Download</button>
                     <button class="btn btn-primary  fa fa-print" style="float: right; padding-right: 29px;padding-left: 29px;padding-bottom: 12px;margin-right: 5px;">Print</button> -->
                     <!-- <button class="btn btn-primary  fa fa-print" style="float: right; padding-right: 29px;padding-left: 29px;padding-bottom: 12px;margin-right: 5px;" onclick="location.href='pdf.php?ref=<?php echo $_GET["ref"] ?>'">Preview</button> -->
                    </div>

                </div>              
                 <!-- /. ROW  -->
                  <hr />
              
                 <!-- /. ROW  -->
                 <div>
                 				<?php $pr = $_GET["ref"]; ?>
                                  <form style="text-align: center;" action="../php/update_stockkeeper.php" method="POST">
                                    <input type="hidden" name="pr_code" value="<?php echo $_GET['ref']; ?>">
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
                                          echo $vendor;
                                       ?>
                                         <tr><input type="hidden" name="pr_id" value="<?php echo $pr ?>">
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
                                      <input type="submit" class="btn btn-primary" name="save" value="Save"> 
                                     </form>
                                     
                                </div>           
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
    <div class="footer">
      
    
             <div class="row">
                <div class="col-lg-12" >
                    <!-- &copy;  2014 yourdomain.com | Design by: <a href="http://binarytheme.com" style="color:#fff;"  target="_blank">www.binarytheme.com</a>
                </div> -->
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

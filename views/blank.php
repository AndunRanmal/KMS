﻿<?php
include("../config/config.php");
include("../include/nav.php");
include("../include/stock_keeper.php");

  $sql = "SELECT * FROM `requisition_overview`";
  $count = mysqli_query($conn,$sql);
  $n = 1;
  while($row = mysqli_fetch_assoc($count)){
    
    $n++;
  }
  echo $n; 

  ?>
  



        
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                      <!-- <h3>Purchase requsition</h3> --> 
                      
                      <form style="float: right;">
                        <div class="form-group">
                        <input type="text" name="search" class="form-control" placeholder="Search a Purchase requsition" size="30">
                        <!-- <input type="submit" name="submit" class="fa fa-search"> -->
                        <button class="btn btn-info"><i class="fa fa-search" aria-hidden="true"></i></button>
                        </div> 
                      </form>
                      <button class="btn btn-primary" autofocus onclick="location.href='pr.html'">Add New</button>
                    </div>
                </div><br/>       
                 <!-- /. ROW  -->
                <hr />
                
                <div class="col-md-12">
                        <ul class="nav nav-tabs">
                        	<li class="active"><a href="#messages" data-toggle="tab">New</a>
                            </li>
                            <li class=""><a href="#home" data-toggle="tab">Active</a>
                            </li>
                            <li class=""><a href="#profile" data-toggle="tab">Completed</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                        	<div class="tab-pane fade active in " id="messages">
                                <!-- <h4>Messages Tab</h4> --><br>
                                <p>
                                    To make a new Purchase Requisition
                                </p>
                                <div>
                                  <form style="text-align: center;" action="../php/pr.php"  method="post">
                                    <!-- <label class="form-control">Requiition Id</label> -->
                                    <input type="text" name="Requisition_id" value="<?php echo 'PR_'.+$n ?>" class="form-control" style="width: 100px;">
                                     <table class="table table-striped">
                                       <thead>
                                        <tr>
                                          <td>Item Name</td>
                                          <!-- <td>Description</td> -->
                                          <td>Requested Date</td>
                                          <td>Quantity</td>
                                          <td>Unit</td>
                                          <td>Unit Price</td>
                                          <td>Vendor</td>
                                          <td>Remarks</td>
                                        </tr>   
                                       </thead>
                                       </table>
                                       <table class="table table-striped" id="tableid">
                                       <tbody>
                                         <tr>
                                           <td>
                                             
                                              
                                            <input list="ingridents" type="text" name="Item_code[]" class="form-control">
                                            <datalist id="ingridents">
                                            <?php 
                                              $sql = "SELECT * FROM `ingriedents`";
                                              $res = mysqli_query($conn,$sql);
                                              while($row = mysqli_fetch_assoc($res)){
                                                $item = $row['Ingriedents_Name'];
                                                echo $item;
                                            ?>
                                            <option><?php echo $item; ?></option>
                                            <?php    
                                              }
                                            ?>    
                                            
                                              
                                              <!-- <option>Dhal</option>
                                              <option>Cheese</option>
                                              <option>Chicken</option>
                                              <option>Pork</option> --> 
                                                                                      
                                            </datalist>
                                            
                                           
                                           </td>
                                           <!-- <td><input type="text" name="Description[]" class="form-control"></td> -->
                                           <td><input type="Date" name="Req_date[]" class="form-control"></td>
                                           <td><input type="number" name="Quantity[]" min="1" class="form-control"></td>
                                           <td>
	                                            <select class="form-control" name="Unit[]">
	                                           		<option>kg</option>
	                                           		<option>L</option>
	                                           		<option>pcs</option>
	                                            </select>
	                                        </td>
                                           <td><input type="number" name="Unit_price[]" step="0.01" min="0.01" class="form-control"></td>
                                           <td><select class="form-control" name="Vendor[]">
                                             <option>Vendor1</option>
                                             <option>Vendor2</option>
                                             <option>Vendor3</option>
                                             <option>Vendor4</option>
                                           </select></td>
                                           <td><input type="text" name="Remarks[]" class="form-control"></td>
                                         </tr>
                                         <tr>
                                           	<td>
                                             
                                            <input list="ingridents" type="text" name="Item_code[]" class="form-control">
                                            <datalist id="ingridents">
                                                
                                            
                                              
                                              <!-- <option>Dhal</option>
                                              <option>Cheese</option>
                                              <option>Chicken</option>
                                              <option>Pork</option> --> 
                                                                                       
                                            </datalist>
                                            
                                           </td>
                                           <!-- <td><input type="text" name="Description[]" class="form-control"></td> -->
                                           <td><input type="Date" name="Req_date[]" class="form-control"></td>
                                           <td><input type="number" name="Quantity[]" min="1" class="form-control"></td>
                                           <td><select class="form-control" name="Unit[]">
                                           		<option>kg</option>
                                           		<option>L</option>
                                           		<option>pcs</option>
                                           </select></td>
                                           <td><input type="number" name="Unit_price[]" step="0.01" min="0.01" class="form-control"></td>
                                           <td><select class="form-control" name="Vendor[]">
                                             <option>Vendor1</option>
                                             <option>Vendor2</option>
                                             <option>Vendor3</option>
                                             <option>Vendor4</option>
                                           </select></td>
                                           <td><input type="text" name="Remarks[]" class="form-control"></td>
                                         </tr>
                                       </tbody>
                                      </table>
                                      <input type="submit" name="submit" value="Forward" class="btn btn-primary"> 
                                     </form>
                                    <input type="button" value="Add a New Row" class="btn btn-info" onClick="addRow('tableid')" /> 
                                </div>
                            </div>
                            <div class="tab-pane fade " id="home">
                                <!-- <h4>Active</h4> --><br>
                                <p>
                                    Active Purchase Requisitions are displayed here which need to be approved by manager 
                                </p>
                                <div>
                                  <table class="table" id="active">
                                      <thead>
                                        <tr>
                                          <!-- <td><input type="checkbox" name="id" ></td> -->
                                          <td></td>
                                          <td>Requisition #</td>
                                          <td>Status</td>
                                          <td>Created</td>
                                          <td>Last Updated</td>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <?php
                                            $sql2 = "SELECT * FROM `requisition_overview` WHERE `Status`=0 ";
                                            $res = mysqli_query($conn,$sql2);
                                            while ($row = mysqli_fetch_assoc($res)) {
                                              $id = $row['Id'];
                                              $issue_date = $row['Issued_date'];
                                              $last_update = $row['Last_updated'];
                                              $status = $row['Status'];
                                        ?>
                                        <tr class="tablerow" data-href="fffd.html">
                                          <!-- <td><input type="checkbox" name="id" ></td> -->
                                          <td><i class="fa fa-file-word-o" aria-hidden="true"></i></td>
                                          <td><a href="pr_report.php?ref=<?php echo $id ?>"><?php echo $id ?></a></td>
                                          <td><a href="pr_report.php?ref=<?php echo $id ?>"> Active</a></td>
                                          <td><a href="pr_report.php?ref=<?php echo $id ?>"><?php echo $issue_date ?></a></td>
                                          <td><a href="pr_report.php?ref=<?php echo $id ?>"></a></td>
                                          <?php
                                            }
                                          ?> 
                                        </tr>
                                      </tbody>
                                  </table>
                                  </div>
                            </div>
                            <div class="tab-pane fade" id="profile">
                                <!-- <h4>Profile Tab</h4> --><br>
                                <p>
                                    Purchase Requisitions that are approved by manager are displayed here. 
                                </p>  
                                <div>
                                  <table class="table" id="active">
                                      <thead>
                                        <tr>
                                          <!-- <td><input type="checkbox" name="id" ></td> -->
                                          <td></td>
                                          <td>Requisition #</td>
                                          <td>Status</td>
                                          <td>Created</td>
                                          <td>Last Updated</td>
                                        </tr>
                                      </thead>
                                      <tbody>
                                      <?php
                                            $sql2 = "SELECT * FROM `requisition_overview` WHERE `Status`=1 ";
                                            $res = mysqli_query($conn,$sql2);
                                            while ($row = mysqli_fetch_assoc($res)) {
                                              $id = $row['Id'];
                                              $issue_date = $row['Issued_date'];
                                              $last_update = $row['Last_updated'];
                                              $status = $row['Status'];
                                        ?>
                                        <tr class="tablerow" data-href="fffd.html">
                                          <!-- <td><input type="checkbox" name="id" ></td> -->
                                          <td><i class="fa fa-file-word-o" aria-hidden="true"></i></td>
                                          <td><a href="pr_report.php?ref=<?php echo $id ?>"><?php echo $id ?></a></td>
                                          <td><a href="pr_report.php?ref=<?php echo $id ?>"> Completed</a></td>
                                          <td><a href="pr_report.php?ref=<?php echo $id ?>"><?php echo $issue_date ?></a></td>
                                          <td><a href="pr_report.php?ref=<?php echo $id ?>"></a></td> 
                                        </tr>
                                        <?php
                                          }
                                        ?> 
                                      </tbody>
                                  </table>
                                  </div>
                            </div>
                            

                        </div>
                    </div>

                <script type="text/javascript">
                  // function openTab(Active){
                  //   document.getElementById(active).style.display="block";
                  //   document.getElementById(all).style.display="none";
                  //   }
                  // }
                  
                  $('.tablerow').click(function(){
                    window.location = '';
                  });
     </script>
                </script>
              
                 <!-- /. ROW  -->           
        </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
    <div class="footer">
      
    
             <div class="row">
                <div class="col-lg-12" >
                   <!--  &copy;  2014 yourdomain.com | Design by: <a href="http://binarytheme.com" style="color:#fff;"  target="_blank">www.binarytheme.com</a> -->
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
    <script src="assets/js/script.js"></script>
   
</body>
</html>
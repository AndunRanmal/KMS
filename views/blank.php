<head>
  <title>Puchase Requisition</title>
</head>
<?php
include("../config/config.php");
include("../include/nav.php");
include("../include/stock_keeper.php");

  $sql = "SELECT * FROM `requisition_overview`";
  $count = mysqli_query($conn,$sql);
  $n = 1;
  while($row = mysqli_fetch_assoc($count)){
    
    $n++;
  }

?>
  



        
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                    <ol class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="blank.php">PR</a></li>
                    </ol>
                      <!-- <h3>Purchase requsition</h3> --> 
                      
                      <form style="float: left;" method="POST" action="search_Pr.php" id="search" class="form-inline" id="search">
                        <div class="form-group">
                        <input type="text" name="search" class="form-control" placeholder="Search a Purchase Requisition" size="30" ">
                        </div>
                        <div class="form-group">
                        <input type="submit" name="submit" class=" btn btn-info fa fa-search" value="SEARCH">
                        <!-- <button class="btn btn-info"><i class="fa fa-search" aria-hidden="true"></i></button> -->
                        <!-- <button type="submit" form="search" class="btn btn-info"><i class="fa fa-search" aria-hidden="true" form="search"></i></button> -->
                        </div> 

                      </form>
                      

                      <!-- <button class="btn btn-primary" autofocus onclick="location.href='pr.html'">Add New</button> -->
                    </div>
                </div><br/>       
                 <!-- /. ROW  -->
                <hr />
                
                <div>
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
                                    <input type="hidden" name="Requisition_id" value="<?php echo 'PR_'.+$n ?>" class="form-control" style="width: 100px;">
                                     <table class="table table-striped">
                                       <thead>
                                        <tr>
                                          <td style="text-align: center;">Item Name</td>
                                          <!-- <td>Description</td> -->
                                          <td style="text-align: center;">Requested Date</td>
                                          <td style="width:10%;text-align: left;">Quantity</td>
                                          <td style="width: 8%;text-align: left;">Unit</td>
                                          <td style="width:10%;text-align: left;padding-right: 25px;">Unit Price</td>
                                          <td style="">Vendor</td>
                                          <td style="width:20%">Remarks</td>
                                        </tr>   
                                       </thead>
                                       </table>
                                       <table class="table table-striped" id="tableid">
                                       <tbody>
                                         <tr>
                                           <td>
                                             
                                              
                                            <input list="ingridents" type="text" name="Item_code[]" class="form-control" required>
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
                                           <td><input type="Date" name="Req_date[]" class="form-control" required pattern="(0[1-9]|1[012])[- \/.](0[1-9]|[12][0-9]|3[01])[- \/.](19|20)\d\d"></td>
                                           <td style="width:10%">
                                           <input type="number" name="Quantity[]" min="1" class="form-control" required pattern="/^\d+$/"></td>
                                           <td style="width:8%;">
	                                            <select class="form-control" name="Unit[]" required>
	                                           		<option>kg</option>
	                                           		<option>L</option>
	                                           		<option>pcs</option>
	                                            </select>
	                                        </td>
                                           <td style="width:10%;"><input type="number" name="Unit_price[]" step="0.01" min="0.01" class="form-control" required pattern="/^\d+$/"></td>
                                           <td><select class="form-control" name="Vendor[]" required>
                                           <option>Select Vandor</option>
                                           <?php
                                           $sql3 = "SELECT `Name` FROM `vendor`";
                                           $result = mysqli_query($conn,$sql3);
                                           while($row=mysqli_fetch_assoc($result)){
                                            $name = $row["Name"];
                                            // echo $name;
                                           ?>

                                           <option value="<?php echo $name; ?>"><?php echo $name ?></option>
                                           <?php
                                           } 
                                           ?>
                                             <!-- <option>Vendor1</option>
                                             <option>Vendor2</option>
                                             <option>Vendor3</option>
                                             <option>Vendor4</option> -->
                                           </select></td>
                                           <td style="width:20%;"><input type="text" name="Remarks[]" class="form-control" required ></td>
                                         </tr>
                                         <tr>
                                           	<td>
                                             
                                            <input list="ingridents" type="text" name="Item_code[]" class="form-control" required>
                                            <datalist id="ingridents">
                                                
                                            
                                              
                                              <!-- <option>Dhal</option>
                                              <option>Cheese</option>
                                              <option>Chicken</option>
                                              <option>Pork</option> --> 
                                                                                       
                                            </datalist>
                                            
                                           </td>
                                           <!-- <td><input type="text" name="Description[]" class="form-control"></td> -->
                                           <td><input type="Date" name="Req_date[]" class="form-control" required pattern="(0[1-9]|1[012])[- \/.](0[1-9]|[12][0-9]|3[01])[- \/.](19|20)\d\d"></td>
                                           <td style="width:10%"><input type="number" name="Quantity[]" min="1" class="form-control" required pattern="/^\d+$/"></td>
                                           <td style="width: 8%;"><select class="form-control" name="Unit[]" required>
                                           		<option>kg</option>
                                           		<option>L</option>
                                           		<option>pcs</option>
                                           </select></td>
                                           <td style="width: 10%;">
                                           <input type="number" name="Unit_price[]" step="0.01" min="0.01" class="form-control" required pattern="/^\d+$/"></td>
                                           <td><select class="form-control" name="Vendor[]" required>
                                             <option>Select Vandor</option>
                                           <?php
                                           $sql3 = "SELECT `Name` FROM `vendor`";
                                           $result = mysqli_query($conn,$sql3);
                                           while($row=mysqli_fetch_assoc($result)){
                                            $name = $row["Name"];
                                            // echo $name;
                                           ?>

                                           <option value="<?php echo $name; ?>"><?php echo $name ?></option>
                                           <?php
                                           } 
                                           ?>
                                             <!-- <option>Vendor1</option>
                                             <option>Vendor2</option>
                                             <option>Vendor3</option>
                                             <option>Vendor4</option> -->
                                           </select></td>
                                           </select></td>
                                           <td><input type="text" name="Remarks[]" class="form-control" required pattern="[\<|\>|\?|\!|\{|]"></td>
                                         </tr>
                                         <tr>
                                           <td style="text-align: left;"><input type="button" value="Add a New Row" class="btn btn-info" onClick="addRow('tableid')" /></td>
                                         </tr>
                                         <tr>
                                           <td style="text-align: left;"><input type="submit" name="submit" value="Forward" class="btn btn-primary"></td>
                                         </tr>
                                       </tbody>
                                      </table>
                                       
                                     </form>
                                     
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
                                          <td>Requisition Id</td>
                                          <td>Status</td>
                                          <td>Created</td>
                                          <td>Last Updated</td>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <?php
                                            $sql2 = "SELECT * FROM `requisition_overview` WHERE `Status`=0 ORDER BY `Issued_date` DESC LIMIT 10";
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

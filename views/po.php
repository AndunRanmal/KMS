<!DOCTYPE html>
<html>
<head>
	<title>Purchase Order</title>
  <link rel="stylesheet" type="text/css" href="assets/css/jquery-ui.min.css" />
  <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    <script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js" ></script>
    <script src="assets/js/autofill.js"></script>
    <style>
    #pagination div { display: inline-block; margin-right: 5px; margin-top: 5px }
    #pagination .cell a { border-radius: 3px; font-size: 11px; color: #333; padding: 8px; text-decoration:none; border: 1px solid #d3d3d3; background-color: #f8f8f8; }
    #pagination .cell a:hover { border: 1px solid #c6c6c6; background-color: #f0f0f0;  }
    #pagination .cell_active span { border-radius: 3px; font-size: 11px; color: #333; padding: 8px; border: 1px solid #c6c6c6; background-color: #e9e9e9; }
    #pagination .cell_disabled span { border-radius: 3px; font-size: 11px; color: #777777; padding: 8px; border: 1px solid #dddddd; background-color: #ffffff; }
  </style>
</head>
<body>
<?php
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
                    <li><a href="blank.php">PO</a></li>
                    </ol>
                      <!-- <h3>Purchase requsition</h3> --> 
                      
                      <form style="float: left;" id="search" action="PO_report.php" method="get">
                        <div class="form-group">
                        <input type="text" name="ref" class="form-control" placeholder="Search By Purchase Order Id" size="30">
                        <!-- <input type="submit" name="submit" class=" btn btn-info fa fa-search" value="SEARCH"> -->
                        <!-- <button class="btn btn-info"><i class="fa fa-search" aria-hidden="true"></i></button> -->
                        </div> 
                      </form>
                      <button type="submit" class="btn btn-info" form="search"><i class="fa fa-search" aria-hidden="true"></i></button>
                      <br/>
                    </div>
                </div>
                 <!-- /. ROW  -->
                <br/>
                <div class="col-md-6">
                <h4>Pending Purchase Orders: </h4>
                <table border="1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                    <th style="width:40%;text-align: center;">Vendor Name</th>
                    <th style="width: 30%;text-align: center;">Status</th>
                   <!--  <th style="width:30%;text-align: center;"></th> -->
                    <!-- <th>Requisition Date</th> -->
                    </tr>
                  </thead>
                <?php
                include("../config/config.php");
                $sql = "SELECT DISTINCT `Vendor_Id` FROM `department_requisition` WHERE `PO_Id`=0 ";
                $res= mysqli_query($conn,$sql);
                if(mysqli_num_rows($res)==0){
                  echo "<p>No pending Purchase Orders!</p>";
                }else{
                while($row = mysqli_fetch_assoc($res)){
                  $name = $row["Vendor_Id"];
                  
                  // echo $name;
                ?>                
                  <tbody>
                    <td><?php echo $name; ?></td>
                    <td>Pending</td>
<!--                     <td><button class="btn btn-primary btn-sm">Proceed</button> <a class="btn btn-primary" href="">Proceed</td>
 -->                  </tbody>
                
                <?php
                }
                }
                ?>   
                </table><br>
                </div><br><br>

                             

                <hr />
                
                <div class="col-md-12">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#home" data-toggle="tab">New</a>
                            </li>
                            <li class=""><a href="#profile" data-toggle="tab">Completed</a>
                            </li>
                            <!-- <li class=""><a href="#messages" data-toggle="tab">Active</a>
                            </li> -->

                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade active in" id="home">
                                <!-- <h4>Active</h4> --><br>
                                <p>
                                	Procced to a new Purchase Order 
                                </p>
                                <div>
                                	
                                	<form class="form-horizontal">
									  	<div class="form-group" >
									    	<label for="vendor" class="control-label col-sm-2">Vendor: </label>
									    	<input type="text" class="form-control" id="vendor" name="Vendor" list="Vendor" size="30" style="width: 250px;">
									    	

									  	</div>
									  	<!-- <div class="form-group">
									    	<label for="address" class="control-label col-sm-2">Address: </label>
									    	<textarea class="form-control" rows="4" id="address" style="width: 250px;"></textarea>
									  	</div> -->
									  	<div id="result">
                      </div>
									  	
										</form>

                                </div>
                            </div>
                            <div class="tab-pane fade" id="profile">
                                <!-- <h4>Profile Tab</h4> --><br>
                                <p>
                                    <!-- Purchase Requisitions that are approved by manager are displayed here. --> 
                                </p>  

                                  <div id="articleArea"> </div>
                                  <div id="pagination">
                                    <!-- Just tell the system we start with page 1 (id=1) -->
                                    <!-- See the .js file, we trigger a click when page is loaded -->
                                    <div><a href="#" id="1"></a></div>
                                  </div>
                                
                            </div>
                            <div class="tab-pane fade" id="messages">
                                <!-- <h4>Messages Tab</h4> --><br>
                                <!-- <p>
                                    Active Purchase Requisitions are displayed here whichneed to be approved by manager
                                </p> -->
                                <div>
                                  <!-- <form style="text-align: center;" action="../php/pr.php"  method="post">
                                     
                                      <input type="submit" name="submit" value="Forward" class="btn btn-primary"> 
                                     </form>
                                    <input type="button" value="Add a New Row" class="btn btn-info" onClick="addRow('tableid')" /> --> 
                                </div>
                            </div>

                        </div>
                    </div>

               <!--  <script type="text/javascript">
                  // function openTab(Active){
                  //   document.getElementById(active).style.display="block";
                  //   document.getElementById(all).style.display="none";
                  //   }
                  // }
                  
                  $('.tablerow').click(function(){
                    window.location = 'pr_report.html';
                  });
     </script>
                </script> -->
              
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
    <script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js" ></script>
    <script src="assets/js/autofill.js"></script>
    <script type="text/javascript" src="pagination_po.js"></script>
    
   
</body>
</html>

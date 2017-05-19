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
                      
                      <form style="float: left;">
                        <div class="form-group">
                        <input type="text" name="search" class="form-control" placeholder="Search a Purchase Order" size="30">
                        <!-- <input type="submit" name="submit" class=" btn btn-info fa fa-search" value="SEARCH"> -->
                        <!-- <button class="btn btn-info"><i class="fa fa-search" aria-hidden="true"></i></button> -->
                        </div> 
                      </form>
                      <button class="btn btn-info" onclick="location.href='pr.html'"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </div>
                </div><br/>
                <!-- <div class="btn-group">
                  <button class=" btn btn-info" onclick="openTab(event,'Active')">Active</button>
                  <button class="btn btn-info" onclick="openTab(event,'All')">All</button>
                  <button class="btn btn-info" onclick="openTab(event,'Complete')">Completed</button>
                  <button class="btn btn-info" onclick="openTab(event,'Add')">Add New</button>
                  
                </div> -->              
                 <!-- /. ROW  -->
                <hr />
                
                <div class="col-md-12">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#home" data-toggle="tab">New</a>
                            </li>
                            <li class=""><a href="#profile" data-toggle="tab">Completed</a>
                            </li>
                            <li class=""><a href="#messages" data-toggle="tab">Active</a>
                            </li>

                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade active in" id="home">
                                <!-- <h4>Active</h4> --><br>
                                <p>
                                	To make a new Purchase Requisition 
                                </p>
                                <div>
                                	
                                	<form class="form-horizontal">
									  	<div class="form-group" >
									    	<label for="vendor" class="control-label col-sm-2">Vendor: </label>
									    	<input type="text" class="form-control" id="vendor" name="Vendor" list="Vendor" size="30" style="width: 250px;">
									    	

									  	</div>
									  	<div class="form-group">
									    	<label for="address" class="control-label col-sm-2">Address: </label>
									    	<textarea class="form-control" rows="4" id="address" style="width: 250px;"></textarea>
									  	</div>
									  	<div id="result">
                      </div>
									  	
										</form>

                                </div>
                            </div>
                            <div class="tab-pane fade" id="profile">
                                <!-- <h4>Profile Tab</h4> --><br>
                                <p>
                                    Purchase Requisitions that are approved by manager are displayed here. 
                                </p>  
                                <div>
                                  
                                  </div>
                            </div>
                            <div class="tab-pane fade" id="messages">
                                <!-- <h4>Messages Tab</h4> --><br>
                                <p>
                                    Active Purchase Requisitions are displayed here whichneed to be approved by manager
                                </p>
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
    
   
</body>
</html>

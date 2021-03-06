﻿<?
<?php
session_start();
$fname = $_SESSION["FName"];
$lname = $_SESSION["LName"];
?>
<!DOCTYPE html>
<html>
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Chef Dashboard</title>
  <!-- BOOTSTRAP STYLES-->
    <link href="../views/assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="../views/assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="../views/assets/css/custom.css" rel="stylesheet" />
    
   <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>-->
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
  
    
   
   
      
     
   </head>
   
   <body>
     
           
          
    <?php
    include("../include/nav.php");
    ?>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                 


                    <li class="active-link">
                        
                    </li>
                   <li class="active-link">
                        <a href="chef.php" ><i class="fa fa-desktop "></i>Dashboard <!-- <span class="badge">Included</span> --></a>
                        <img src="assets/img/chef.jpg" height="200px" width="238px" style="border-radius: 50%;border: 1px solid #ddd;padding: 5px;">
                    </li>

                    <!-- <li>
                        <a href=""><i class="fa fa-table "></i> Notifications  <span class="badge"></span></a>
                    </li> -->
                    <li>
                        <a href="menumanage.php"><i class="fa fa-edit "></i>Manage Menus  <span class="badge"></span></a>
                    </li>


                    <li>
                        <a href="recipes.php"><i class="fa fa-qrcode "></i>Manage recipes</a>
                    </li>
                    <li>
                        <a href="req.php"><i class="fa fa-bar-chart-o"></i>Store Requestion</a>
                    </li>

                    <li>
                        <a href="bulkorder.php"><i class="fa fa-edit "></i>Calculate Ingredients </a>
                    </li>
                    <li>
                        <a href="users.php"><i class="fa fa-edit "></i>Profile Settings </a>
                    </li>
                    
                    
                </ul>
                            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-lg-12">
                    <ol class="breadcrumb">
                    <li><a href="chef.php">Home</a></li>
                    </ol>
                     <h2>CHEF DASHBOARD</h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                <div class="row">
                    <div class="col-lg-12 ">
                    <div class="alert alert-info">
                             <strong>Welcome Mr.<?php echo $fname ?>! </strong> Your pending Task For Today are listed below .
                        </div>	    
                       
                    </div>
                    </div>
                  <!-- /. ROW  --> 
                            <div class="row text-center pad-top">
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="menumanage.php"  id="trigger">
 <i class="fa fa-cutlery fa-5x" ></i>
                      <h4 >Manage menus</h4>
                      </a>
                      </div>
                     
                     
                  </div> 

                <!-- Modal -->
				                                
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="recipes.php" id="trigger">
 <i class="fa fa-pencil fa-5x" ></i>
                      <h4 >Manage recipes</h4>
                      </a>
                      </div>
                     
                     
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="req.php" id="trigger">
 <i class="fa fa-file-text-o fa-5x" ></i>
                      <h4 >Store requisition</h4>
                      </a>
                      </div>
                     
                     
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="bulkorder.php" id="trigger">
 <i class="fa fa-sort-amount-asc fa-5x" ></i>
                      <h4 >Calculate Ingredients </h4>
                      </a>
                      </div>
                     
                     
                  </div>
                  
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                            <div class="div-square">
                                <a href="users.php" id="trigger">
                  <i class="fa fa-gear fa-5x"></i>
                              <h4>Profile Settings</h4>
                              </a>
                            </div><br><br>

                        </div>
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      
                     
                     
                  </div>
              </div>
                 <!-- /. ROW  --> 
                  
				  <div class="row">
                    <div class="col-lg-12 ">
					<br/>
                        
                       
                    </div>
                    </div>
                  <!-- /. ROW  --> 
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
    <div class="footer">
      
    
            <div class="row">
                <div class="col-lg-12" >
                    <p style="text-align: right;">Sanmira Renaissance Galle - <a>http://www.unawatunasanmirahotel.com</a></p>
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

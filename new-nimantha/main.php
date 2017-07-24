<!DOCTYPE html>
<html>
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cashier Dashboard</title>
  <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    
   <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>-->
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
  
    
   
   
      
     
   </head>
   
   <body>
<?php
include("../include/nav.php");
// include("../include/cashier.php");

?>
<nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li class="active-link">
                        <a href="index.html" ><i class="fa fa-desktop "></i>Dashboard <!-- <span class="badge">Included</span> --></a>
                        <img src="assets/img/cashier.jpg" height="200px" width="238px" style="border-radius: 50%;border: 1px solid #ddd;padding: 5px;">
                    </li>



                    <li>
                        <a href="main.php"><i class="fa fa-desktop "></i>Dashboard </a>
                    </li>



                    <li>
                        <a href="orders.php"><i class="fa fa-edit "></i>New Orders  </a>
                    </li>





                    <li>
                        <a href="users.php"><i class="fa fa-edit "></i>User Profile </a>
                    </li>

                    <li>
                        <a href="ui.html"><i class="fa fa-edit "></i>Notifications </a>
                    </li>


                    <li>
                        <a href="menu.php"><i class="fa fa-edit "></i>View Menus  </a>
                    </li>
					<li>
                        <a href="counts.php"><i class="fa fa-edit "></i>Select Menu </a>
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
                    <li><a href="main.php">Home</a></li>
                    </ol>
                     <h2>Restaurant Cashier</h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                <div class="row">
                    <div class="col-lg-12 ">
                        <div class="alert alert-info">
                             <strong>Welcome Mr.Perera  ! </strong> You Have No pending Task For Today.
                        </div>
                       
                    </div>
                    </div>
                  <!-- /. ROW  --> 
                            <div class="row text-center pad-top">
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="orders.php" id="trigger">
 <i class="fa fa-circle-o-notch fa-5x"></i>
                      <h4> New Orders</h4>
                      </a>
                      </div>
                     
                     
                  </div>               
                 <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="orders.php" id="trigger">
 <i class="fa fa-circle-o-notch fa-5x"></i>
                      <h4> New Bulk Orders</h4>
                      </a>
                      </div>
                     
                     
                  </div>     
                                
                                
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="menu.php" id="trigger" >
 <i class="fa fa-eye fa-5x"></i>
                      <h4>View Menus</h4>
                      </a>
                      </div>
                     
                     
                  </div>
                  <!-- <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="menu.php" id="trigger" >
 <i class="fa fa-eye fa-5x"></i>
                      <h4>View Orders</h4>
                      </a>
                      </div>
                     
                     
                  </div> -->
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="users.php" id="trigger" >
 <i class="fa fa-gear fa-5x"></i>
                      <h4>User Profile</h4>
                      </a>
                      </div>
                     
                     
                  </div>
				  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="counts.php" id="trigger">
 <i class="fa fa-sort-amount-asc fa-5x" ></i>
                      <h4 >Select Menu </h4>
                      </a>
                      </div>
                     
                     
                  </div>
                 
                          

                  
                  
                 
            
                 
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
    <div class="footer">
      
    
            <div class="row">
                <div class="col-lg-12" >
                   
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

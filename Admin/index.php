<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<?php
session_start();
$fname = $_SESSION["FName"];
$lname = $_SESSION["LName"];
?><head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> Admin Dashboard</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
   <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.js"></script>
</head>
<body>
     
           
          
    <div id="wrapper">
         <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="adjust-nav">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">
                   <!--      <img src="assets/img/logo.png" />
 -->
                    </a>
                    
                </div>
           
                <span class="logout-spn" >
                  <a class="btn btn-primary" href="../php/logout.php" style="color:#fff;">LOGOUT</a>  

                </span>
            </div>
        </div>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                 


                    <li class="active-link">
                        <a href="index.html" ><i class="fa fa-desktop "></i>Dashboard <!-- <span class="badge">Included</span> --></a>
                        <img src="assets/img/man2.png" height="200px" width="250px" style="border-radius: 50%;border: 1px solid #ddd;padding: 5px;">
                    </li>
                   

                   
                    <li>
                        <a href="kms1/charttype1.php"><i class="fa fa-edit "></i>Report Generation </a>
                    </li>


                    <li>
                        <a href="viewStaff.php"><i class="fa fa-qrcode "></i>View Staff</a>
                    </li>
                    <li>
                        <a href="charttype1.php"><i class="fa fa-bar-chart-o"></i>Edit Staff</a>
                    </li>

                    <!-- <li>
                        <a href="compareyear.php"><i class="fa fa-edit "></i></a>
                    </li> -->
                    <li>
                        <a href="#"><i class="fa fa-table "></i>Profile Setting</a>
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
                    <li><a href="index.html">Home</a></li>
                    </ol>
                     <h2>ADMIN DASHBOARD</h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                <div class="row">
                    <div class="col-lg-12 ">
                        <div class="alert alert-info">
                             <strong>Welcome Mr.<?php echo $fname ?> ! </strong> Your pending Task For Today are listed below .
                        </div>
                       
                    </div>
                    </div>
                  <!-- /. ROW  --> 
                    <div class="row text-center pad-top">
                  		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      		<div class="div-square">
                            <a href="kms1/charttype1.php" id="trigger">
 							<i class="fa fa-clipboard fa-5x"></i>
                      		<h4>Report Generation</h4>
                      		</a>
                        </div>
                     	</div>

                     	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      		<div class="div-square">
                            <a href="#" id="trigger">
 							<i class="fa fa-circle-o-notch fa-5x"></i>
                      		<h4>View Staff</h4>
                      		</a>
                        </div>
                     	</div> 
                     	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      		<div class="div-square">
                           		<a href="blank.html" >
								<i class="fa fa-clipboard fa-5x"></i>
                      			<h4>Edit Staff</h4>
                      			</a>
                      		</div>
                  		</div>
                  		<!-- <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      		<div class="div-square">
                           		<a href="blank.html" >
								<i class="fa fa-clipboard fa-5x"></i>
                      			<h4>Bin Card</h4>
                      			</a>
                      		</div>
                  		</div>
                  		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      		<div class="div-square">
                           		<a href="blank.html" >
 								<i class="fa fa-bell-o fa-5x"></i>
                      			<h4>Notifications </h4>
                      			</a>
                      		</div>
                  		</div> -->
                  		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      		<div class="div-square">
                           		<a href="blank.html" >
 								<i class="fa fa-gear fa-5x"></i>
                      			<h4>Profile Settings</h4>
                      			</a>
                      		</div><br><br>

                  		</div>

                  		<!-- <div class="col-lg-12 ">
                        <div class="alert alert-info" style="text-align: left;">
                             <strong>Notification 1 </strong> 
                        </div><br>
                       
                    </div>
                    <div class="col-lg-12 ">
                        <div class="alert alert-info" style="text-align: left;">
                             <strong>Notification 2 </strong> 
                        </div><br>
                       
                    </div> -->


                

				   
                  <!-- /. ROW  --> 
    					</div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
    <div class="footer">
      
    
            <div class="row">
                <div class="col-lg-12" >
                    &copy;  2014 yourdomain.com | Design by: <a href="http://binarytheme.com" style="color:#fff;" target="_blank">www.binarytheme.com</a>
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

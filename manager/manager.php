<!DOCTYPE html>
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Simple Responsive Admin</title>
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
                  <a class="btn btn-primary" href="#" style="color:#fff;">LOGOUT</a>  

                </span>
            </div>
        </div>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                 


                    <li class="active-link">
                        <a href="index.html" ><i class="fa fa-desktop "></i>Profile <!-- <span class="badge">Included</span> --></a>
                        <img src="assets/img/manager.jpeg" height="200px" width="250px" style="padding-bottom: 15px;
    padding-left: 15px;">
                    </li>
                   

                    <li>
                        <a href="ui.html"><i class="fa fa-table "></i> Notifications </a>
                    </li>
                    <li>
                        <a href="purreq.php"><i class="fa fa-edit "></i>Purchase Requision </a>
                    </li>


                    <li>
                        <a href="purorde.php"><i class="fa fa-qrcode "></i>Purchase Order</a>
                    </li>
                    <li>
                        <a href="viewrep.php"><i class="fa fa-bar-chart-o"></i>Genarate Reports</a>
                    </li>

                    <li>
                        <a href="supdeta.php"><i class="fa fa-edit "></i>Supplier Details </a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-table "></i>Profile Setting</a>
                    </li>
                     
                    
                </ul>
                            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner" >
                <div class="row">
                    <div class="col-lg-12">
                    <ol class="breadcrumb">
                    <li><a href="manager.php">Home</a></li>
                    </ol>
                     <h2>MANAGER</h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                <div class="row">
                    <div class="col-lg-12 ">
                      <!--  <div class="alert alert-info">
                             <strong>Welcome Jhon Doe ! </strong> You Have No pending Task For Today.
                        </div> -->
                       
                    </div>
                    </div>
                    
                  <!-- /. ROW  --> 
                            <div class="row text-center pad-top">
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="#" id="trigger">
                           <a href="purreq.php" >
 <i class="fa fa-envelope-square fa-5x" style="color:#00BFFF;"></i>
                      <h4 style="color:#4B0082;">Purchase Requistion</h4>
                      </a>
                      </div>
                     
                     
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="purorde.php" >
<i class="fa fa-list-alt fa-5x" style="color:#00BFFF;" ></i>
                      <h4 style="color:#4B0082;">Purchase Order  </h4>
                      </a>
                      </div>
                     
                     
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="viewrep.php" >
<i class="fa fa-file-text-o fa-5x" style="color:#00BFFF;" ></i>
                      <h4 style="color:#4B0082;">Genarate Reports</h4>
                      </a>
                      </div>
                          
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="supdeta.php" >
 <i class="fa fa-users fa-5x" style="color:#00BFFF;"></i>
                      <h4 style="color:#4B0082;">Supplier Details</h4>
                      </a>
                      </div>
                     
                     
                  </div>
                  
              </div>
                 <!-- /. ROW  -->   
				  <div class="row">
                    <div class="col-lg-12 ">
                    <div class="alert alert-info">
                      <strong>Inform</strong> special occasion  111111........
                    </div>
                    <div class="alert alert-info">
                      <strong>Inform</strong> special occasion  222222........
                    </div>
                    <div class="alert alert-info">
                      <strong>Inform</strong> special occasion  333333........
                    </div>
                    <div class="alert alert-info">
                      <strong>Inform</strong> special occasion  444444 ........
                    </div>
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

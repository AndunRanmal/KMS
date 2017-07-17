<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
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
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <ol class="breadcrumb">
                    <li><a href="manager.php">Home</a></li>
                    <li><a href="purreq.php">PURCHASE REQUISTION</a></li>
                     <li class="active">REQUISION VIEW</li>        
                    </ol>
                     <h2>REQUISION VIEW </h2>   
                    </div>

                </div>              
                 <!-- /. ROW  -->
                  <hr />
                
                 <!-- /. ROW  -->           
    </div>      
                 <div class="col-col-sm-4">
               <form action="/html/tags/html_form_tag_action.cfm" method="post">
<textarea name="comments" id="comments" style="width:96%;height:90px;padding:2%;font-size:1.2em;background-color:lightblue;">
Hey... say something!
</textarea>
<button type="button" class="btn btn-primary btn-sm">Submit</button>
</form>
                </div>
             <!-- /. PAGE INNER  -->
            </div>

         <!-- /. PAGE WRAPPER  -->
        </div>
    <div class="footer">
      
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

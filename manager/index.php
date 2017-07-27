<!DOCTYPE html>
<?php
session_start();
$fname = $_SESSION["FName"];
$lname = $_SESSION["LName"];
?>
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Manager Dashboard</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
   <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.js"></script>

    
</head>
,<?php
include("../include/nav.php");
?>     
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                 


                    <li class="active-link">
                        <a href="index.php" ><i class="fa fa-desktop "></i>Profile <!-- <span class="badge">Included</span> --></a>
                        <img src="assets/img/manager.jpeg"height="200px" width="238px" style="border-radius: 50%;border: 1px solid #ddd;padding: 5px;">
                    </li>
                   

                    <!-- <li>
                        <a href="ui.html"><i class="fa fa-table "></i> Notifications </a>
                    </li> -->
                    <li>
                        <a href="purreq.php"><i class="fa fa-edit "></i>Purchase Requision </a>
                    </li>


                 <!--    <li>
                        <a href="purorde.php"><i class="fa fa-qrcode "></i>Purchase Order</a>
                    </li> -->
                    <li>
                        <a href="viewrep.php"><i class="fa fa-bar-chart-o"></i>Genarate Reports</a>
                    </li>

                    <li>
                        <a href="supdeta.php"><i class="fa fa-edit "></i>Supplier Details </a>
                    </li>
                    <li>
                        <a href="users.php"><i class="fa fa-table "></i>Profile Setting</a>
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
                     <h2>MANAGER DASHBOARD</h2>   
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
                            <a href="pr.php" id="trigger">
              <i class="fa fa-circle-o-notch fa-5x"></i>
                          <h4>Purchase Requistion</h4>
                          </a>
                        </div>
                      </div>

                     
                      <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                          <div class="div-square">
                              <a href="viewrep.php" id="trigger" >
                <i class="fa fa-clipboard fa-5x"></i>
                            <h4>Generate Reports</h4>
                            </a>
                          </div>
                      </div>
                      
                      <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                          <div class="div-square">
                              <a href="supdeta.php" id="trigger">
                <i class="fa fa-users fa-5x"></i>
                            <h4>Supplier Details</h4>
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

                      


                

           
                  <!-- /. ROW  --> 
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

<script>
$(document).ready(function(){
 
 function load_unseen_notification(view = '')
 {
  $.ajax({
   url:"http://localhost/kms/kms/php/fetxh.php",
   method:"POST",
   data:{view:view},
   dataType:"json",
   success:function(data)
   {
    $('.dropdown-menu').html(data.notification);
    if(data.unseen_notification > 0)
    {
     $('.count').html(data.unseen_notification);
    }
   }
  });
 }
 
 load_unseen_notification();
 
 
 
 $(document).on('click', '.dropdown-toggle', function(){
  $('.count').html('');
  load_unseen_notification('yes');
 });
 
 setInterval(function(){ 
  load_unseen_notification();; 
 }, 5000);
 
});
</script>
    
   
</body>
</html>

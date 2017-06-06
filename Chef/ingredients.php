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
                    
                </div>
              
                 <span class="logout-spn" >
                  <a href="#" style="color:#fff;">LOGOUT</a>  

                </span>
            </div>
        </div>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                 

 <li >
                        <a href="chef.html" ><i class="fa fa-desktop "></i>Dashboard <span class="badge"></span></a>
                    </li>
                   <li>
                        <a href=""><i class="fa fa-table "></i> Notifications  <span class="badge"></span></a>
                    </li>
                    <li>
                        <a href="menumanage.html"><i class="fa fa-edit "></i>Manage Menus  <span class="badge"></span></a>
                    </li>


                    <li>
                        <a href="recipes.html"><i class="fa fa-qrcode "></i>Manage recipes</a>
                    </li>
                    <li>
                        <a href="request.html"><i class="fa fa-bar-chart-o"></i>Store Requestion</a>
                    </li>

                    <li>
                        <a href="counts.html"><i class="fa fa-edit "></i>Calculate Ingredients </a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-table "></i>View remaining amounts</a>
                    </li>
                    </li>
                </ul>
                            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
				<div class="col-md-3">
				</div>
                    <div class="col-md-8">
					<?php 
					include './connect.php';
					$a = mysqli_query($conn,"select Date, Count, timeperiod, person from counts");
					while($b = mysqli_fetch_array($a)){?>
					<div class="col-md-4">
					<tr>
						<td align="left"><b>Date</b></td><br>
                        
					</tr>
					<tr>
					<td align="left"><b>Time Period</b></td><br>
					</tr>
					<tr>
					<td align="left"><b>Number Of Customers</b></td><br>
					</tr>
					<tr>
					<td align="left"><b>Contact Person</b></td><br>
					</tr>
					</div>
					<div class="col-md-4">
					<?php
						echo $b[0].'<br>';
						echo $b[2].'<br>';
						echo $b[1].'<br>';
						echo $b[3].'<br>';
						?>
						</div>
					<?php	
					}
					
					?>
                       
                    </div>
					
                </div>              
                 <!-- /. ROW  -->
                  <hr />
             
			  <div class="col-lg-3 col-md-3">
			  
			  </div>
				<div class="col-lg-6 col-md-6">
					<?php
					
					$e = mysqli_query($conn,"select menu_name, sum(result), unit from total group by menu_id");
					while($f = mysqli_fetch_array($e)){?>
					<div class="col-lg-6 col-md-6">
						<?php echo $f[0];?>
					</div>
							<?php 
							if($f[2] == "kg" || $f[2] == "L"){
								$result = $f[1]/1000;
							
								echo $result.' '.$f[2].'<br>';
							}else{
								echo $f[1].' '.$f[2].'<br>';
							}
					}
				?>
			  </div>
			  <div class="col-lg-3 col-md-3">
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
                    &copy;  2014 yourdomain.com | Design by: <a href="http://binarytheme.com" style="color:#fff;"  target="_blank">www.binarytheme.com</a>
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

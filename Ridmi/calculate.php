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
                    <div class="col-md-12">
                     <h2>Amounts of Items</h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
				<div class="col-lg-3 col-md-3">
				<img src="assets/img/fruit.jpg" height="100px" width="150px" style="padding-bottom: 15px;
    padding-left: 15px;"><br>
	<img src="assets/img/strawberry.jpg" height="100px" width="150px" style="padding-bottom: 15px;
    padding-left: 15px;">
	<img src="assets/img/onion.jpg" height="100px" width="150px" style="padding-bottom: 15px;
    padding-left: 15px;">
	<img src="assets/img/tomatosalad.jpg" height="100px" width="150px" style="padding-bottom: 15px;
    padding-left: 15px;">
	<img src="assets/img/chilly.jpg" height="100px" width="150px" style="padding-bottom: 15px;
    padding-left: 15px;">
	<img src="assets/img/pork.jpg" height="100px" width="150px" style="padding-bottom: 15px;
    padding-left: 15px;">
			  </div>  
			  <div class="col-lg-7 col-md-7">
			  
			  
			  				
				  <?php
include './connect.php';
//include './datetime.php';


$date = $_POST['date'];
$count = $_POST['count'];
$timeperiod = $_POST['timeperiod'];

$person = $_POST['person'];

$sql4 = "DELETE  FROM insertitem";
	if (mysqli_query($conn, $sql4)) {
				//echo "New record created successfully";
		} else {
				echo "Error: " . $sql4 . "<br>" . mysqli_error($conn);
		}
	$sql5= "DELETE  FROM counts";
	if (mysqli_query($conn, $sql5)) {
				//echo "New record created successfully";
		} else {
				echo "Error: " . $sql5 . "<br>" . mysqli_error($conn);
		}

$a = mysqli_query($conn, "SELECT item FROM insertitem");

	

$checkBox = $_POST['menu'];

if(isset($_POST['submit']))
{
	
    for ($i=0; $i<sizeof($checkBox); $i++)
        {
			
			$query="INSERT INTO insertitem (item) VALUES ('" . $checkBox[$i] . "')"; 
			if (mysqli_query($conn, $query)) {
				
			}else{
            mysqli_query($query) or die (mysqli_error() );
			}
        }
    

}
						while($b = mysqli_fetch_array($a)){
							$sql11 = "INSERT INTO item(Item_id,mark) VALUES('$b[0]','1')";
							$sql22= "Update item SET Item_id='$b[0]', mark='1' WHERE Item_id='$b[0]'";
							
							$result1 = mysqli_query($conn, "SELECT Item_id FROM item WHERE Item_id='$b[0]'");
							$num_rows = mysqli_num_rows($result1);
						
							if ($num_rows == 0) {
								if (mysqli_query($conn, $sql11)) {
									//echo "New record created successfully";
								} else {
									echo "Error: " . $sql11 . "<br>" . mysqli_error($conn);
								}
							}else{
								if (mysqli_query($conn, $sql22)) {
									//echo "New record created updated";
								} else {
									echo "Error: " . $sql22 . "<br>" . mysqli_error($conn);
								}
							}
						}
						
				
						
		
	$sql1 = "INSERT INTO counts(Date,Count,timeperiod,person) VALUES( '$date','$count','$timeperiod','$person')";
	
		if (mysqli_query($conn, $sql1)) {
				//echo "New record created successfully";
		} else {
				echo "Error: " . $sql1 . "<br>" . mysqli_error($conn);
		}
	$d = mysqli_query($conn,"SELECT item.Item_name,amount,unit  FROM item INNER JOIN insertitem ON item.Item_id = insertitem.item");
				while ($e = mysqli_fetch_array($d)){
				
					$result = ($e[1]*$count);
					$result = $result/1000;?>
					
					<div class="col-lg-6 col-md-6">
					<?php
					  echo $e[0].'<br>';?>
					 </div> 
						<?php 
						echo $result.' '.$e[2].'<br>' ;?>
						 
					
					<?php
				 }
				 
	$a = mysqli_query($conn,"SELECT Count FROM counts");
	$b = mysqli_fetch_array($a);
	//echo $b[0];
	$c = mysqli_query($conn, "SELECT ingredients.menu_name, amount_of_ingredients.amount, ingredients.menu_id, ingredients.unit FROM ingredients INNER JOIN amount_of_ingredients ON ingredients.menu_id = amount_of_ingredients.menu_id INNER JOIN insertitem ON insertitem.item = amount_of_ingredients.Item_id;");
	$sql5= "DELETE  FROM total";
			if (mysqli_query($conn, $sql5)) {
				//echo "New record created successfully";
			} else {
				echo "Error: " . $sql5 . "<br>" . mysqli_error($conn);
			}
	while($d = mysqli_fetch_array($c)){
			$result = ($d[1] * $b[0]);
			//echo $result;
			//echo $d[0].' '. $result.'<br>';
			$sql11 = "INSERT INTO total(menu_id,menu_name,result,unit) VALUES('$d[2]','$d[0]','$result','$d[3]')";
			if (mysqli_query($conn, $sql11)) {
				//echo "New record created successfully";
			} else {
				echo "Error: " . $sql11 . "<br>" . mysqli_error($conn);
				
			}
		
	}
	
?>
			  
</div> 			  
			  
			 
			  <div class="col-lg-2 col-md-2">
			  <img src="assets/img/fried.jpg" height="100px" width="150px" style="padding-bottom: 15px;
    padding-left: 15px;">
	<img src="assets/img/biriyani.jpg" height="100px" width="150px" style="padding-bottom: 15px;
    padding-left: 15px;">
	<img src="assets/img/basmathi.jpg" height="100px" width="150px" style="padding-bottom: 15px;
    padding-left: 15px;">
	<img src="assets/img/caramal.jpeg" height="100px" width="150px" style="padding-bottom: 15px;
    padding-left: 15px;">
	<img src="assets/img/pudding.jpg" height="100px" width="150px" style="padding-bottom: 15px;
    padding-left: 15px;">
	<img src="assets/img/fishlemon.jpg" height="100px" width="150px" style="padding-bottom: 15px;
    padding-left: 15px;">
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

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
   <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.js"></script>
	<script src="assets/js/script.js"></script>
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
                        <img src="assets/img/man.jpeg" height="200px" width="238px" style="border-radius: 50%;border: 1px solid #ddd;padding: 5px;">
                    </li>
                   

                    <li>
                        <a href="ui.html"><i class="fa fa-table "></i> Notifications  <span class="badge">Included</span></a>
                    </li>
                    <li>
                        <a href="blank.html"><i class="fa fa-edit "></i>Manage Menus<span class="badge">Included</span></a>
                    </li>


                    <li>
                        <a href="#"><i class="fa fa-qrcode "></i>Mange food items</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-bar-chart-o"></i>Store requisition</a>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-edit "></i>Calculate ingredients</a>
                    </li>
                    
                     
                    
                </ul>
                            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>FOOD ITEMS</h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                  
                  <!-- Content
================================================== -->


<?php
include "config/config.php";
include "datetime.php";
if(isset($_POST["submit"])){
	$title = $_POST["title"];
	$instructions = $_POST["howtomake"];
	$add_info = $_POST["add"];
	//$image = $_FILES["file"];
	
	
	if ($_FILES["file"]["error"] > 0){
     echo "<font size = '5'><font color=\"#e31919\">Error: NO CHOSEN FILE <br />";
     echo"<p><font size = '5'><font color=\"#e31919\">INSERT TO DATABASE FAILED";
   }
   else{
	   move_uploaded_file($_FILES["file"]["tmp_name"],"image/" . $_FILES["file"]["name"]);
	   //echo"<font size = '5'><font color=\"#0CF44A\"><br>";
	   $file="image/".$_FILES["file"]["name"];
	   
	   $sql = "INSERT INTO `recipes` (`Title`,`Instructions`,`Add_info`,`Image`)
	   VALUES ('$title','$instructions','$add_info','$file')";
	   //echo $sql;
	   mysqli_query($conn,$sql);
	
		
	foreach ($_POST["ingredient"] as $key => $value) {
		$ingredient = $_POST["ingredient"][$key];
	    $qty = $_POST["quantity"][$key];
		
		
	$sql1 = "INSERT INTO ingredients SET Ingredient = '$ingredient', Qty = '$qty',
	RecipeID = (SELECT Recipe_Id FROM recipes WHERE Title = '$title')";
	
	
	//echo $sql1;
	mysqli_query($conn,$sql1);
	//mysqli_query($conn,$sql2);
	}
   }
	   
}
?>

<div class="col-lg-12 col-md-12">
		<div class="table-responsive">
		<table class="table">
		
		<thead>
                     <tr>
                     
                     <th>Title</th>
                     <th>Image</th>
                     
					 </tr>
		</thead>
		
	<?php
	include "config/config.php";
	include "datetime.php";
	//$display = "select * from recipe";
	$result = mysqli_query($conn, "select * from recipes");
	
	
	
	while($row = mysqli_fetch_array($result)){
	?>
	<tr id="<?php echo $row["Recipe_Id"]; ?>" class="">
		<td><?php echo "<a href='display.php?id=". $row[1] ."'>$row[1]</a>";?></td>
        <td><?php 
		//echo '<img height="200" width="200" src='".$row[1]."'>';?>
		<img src="<?php echo $row["Image"];?>" height="70" width="120">
		</td>
		
        
	</tr>
	<?php
		}
		
	
?>



	
				   	
</table>
</div>
</div>

<!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
		</div>

 <div class="footer"></div>
          

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
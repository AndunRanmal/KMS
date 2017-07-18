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
					<?php
						include "config/config.php";
						$Rid = $_GET["id"];
						$query = "SELECT Title FROM recipes where Title = '$Rid'";
						$result = mysqli_query($conn, $query);

						$row = mysqli_fetch_assoc($result) ;
							?>
						<h2><?php echo $row["Title"] ?></h2> 
						<?php
						





mysqli_close($conn);


?>
                        
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                  
                  <!-- Content
================================================== -->


<?php
include "config/config.php";
include "datetime.php";
	
	$Rid = $_GET["id"];
	$query = "SELECT * FROM recipes where Title = '$Rid'";
	$result = mysqli_query($conn, $query);
	
	$query2 = "SELECT Recipe_Id FROM recipes WHERE Title = '$Rid'" ;
	$result2 = mysqli_query($conn, $query2);
	$row1=mysqli_fetch_array($result2);
	//echo $row1[0];
	//$query3= "SELECT Ingredients, Qty FROM ingredients WHERE RecipeID = '$row1[0]'";
	$result3 = mysqli_query($conn, "SELECT Ingredient, Qty FROM ingredients WHERE RecipeID = '$row1[0]'");
	
	$result4 = mysqli_query($conn, "SELECT Image FROM recipes WHERE Title = '$Rid'");
	$row2=mysqli_fetch_array($result4);?>
	
<div class="col-md-12" >
	<img src="<?php echo $row2[0];?>" height="300" width="600">
	</div><br><br><br>
	
	<h4>Ingredients</h4>
	<?php
while($row = mysqli_fetch_assoc($result3)) {
	$a =$row["Ingredient"];
	$b = $row["Qty"];?>
	<div class="row" style="padding-left:15px;">
	<div class="col-md-6" >
	<!--<div class="row">-->
        <div class="col-md-8" style="background-color:lavender;"><?php echo $a ?></div>
        <div class="col-md-4" style="background-color:lavenderblush;"><?php echo $b ?></div>
    <!--</div>-->
<?php //}?>
	</div>

	
	
	</div>
	
	
	
	
	<?php 
}?>

	<?php
mysqli_close($conn);
?>
<br>
<h4>Method</h4>

<?php
include "config/config.php";

	
	$Rid = $_GET["id"];
	$query = "SELECT Instructions FROM recipes where Title = '$Rid'";
	$result = mysqli_query($conn, $query);
	
	

while($row = mysqli_fetch_assoc($result)) {
	$a =$row["Instructions"];
	?>
	<div class="col-md-12" "col-lg-12" style="background-color:lavender;">
	<?php echo $a .	"<br>" ?>
	</div><br>
	
	
	
	
	<?php //echo "Name: " .$a . " " . "<br>";
	//
}
mysqli_close($conn);
?><br>
<br><br><br>
<h4>Additional Information</h4>
<?php
include "config/config.php";

	
	$Rid = $_GET["id"];
	$query = "SELECT Add_info FROM recipes where Title = '$Rid'";
	$result = mysqli_query($conn, $query);
	
	

while($row = mysqli_fetch_assoc($result)) {
	$a =$row["Add_info"];
	?>
	<div class="col-md-12" "col-lg-12" style="background-color:lavender;">
	<?php echo $a ?>
	</div>
	
	
	
	
	<?php //echo "Name: " .$a . " " . "<br>";
	//
}
mysqli_close($conn);
?>



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
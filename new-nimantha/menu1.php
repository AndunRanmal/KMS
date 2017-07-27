<html>
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Menu</title>
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
   <?php
   include("../include/nav.php");
   include("../include/cashier.php");
  include("../config/config.php");
   ?>
   <div id="page-wrapper" >
         <div id="page-inner">
               <div class="row">
                    <div class="col-md-12">
                    <ol class="breadcrumb">
                    <li><a href="main.php">Home</a></li>
                    <li><a href="orders.php">View Menus</a></li>
                    </ol>
                    </div>
                    <?php
                    $sql = "SELECT * FROM `menus`";
                    $res = mysqli_query($conn,$sql);
                    while($row=mysqli_fetch_assoc($res)){
                       $Menu_Id = $row['Menu_Id'];
                       $Menu_Name = $row['Menu_Name'];
                       $Price = $row['Price'];
                       $Items = $row['Items'];
                       $Image = $row['Image'];

                  ?>
                    <div class="col-md-4">
                    <h2  align="left">
                         <font size="4">  <b> <?php echo $Menu_Name ?> </b></font> 
                    </h2> 
                    <a href="menu2.php?id=<?php echo $Menu_Id ?> " > 
                      <img alt="" src="<?php echo $Image ?>" width="300" height="200">
                    </a>
                    </div>
                  <?php
                    }
                    ?>
                </div>
          </div>
    </div>
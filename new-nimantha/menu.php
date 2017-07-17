<!DOCTYPE html>
<html>
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Simple Responsive Admin</title>
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
   
   <body>
       
<?php
include("../include/nav.php");
include("../include/cashier.php");
?>

       <div id="page-wrapper" >
         <div id="page-inner">
               <div class="row">
                    <div class="col-md-12">
                    <ol class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="orders.php">View Menus</a></li>
                    </ol>
                        <h2 style="color: black"> Types of Menus</h2>
                    </div>
             </div>  
           
           
    <div class="col-md-4">  <p>
        
        
        <?php
		include('../config/config.php');
		
	?>
       <!-- <p  align="left"> <font size="4">  <b> Sandwiches: </b></font> </p> <a href="menu2.php?id=<?php echo $Menu_Id ?> " > 
    <img border="3" alt="W3Schools" src="assets/img/sand.jpg" width="300" height="200">
    </a>
        </p> --> </br>
       <tbody>   
        <?php
         $sql2= "SELECT * FROM `menus` ";
            
         $res = mysqli_query($conn,$sql2);
         while ($row = mysqli_fetch_assoc($res)) {
         $Menu_Id = $row['Menu_Id'];
         $Menu_Name = $row['Menu_Name'];
         $Price = $row['Price'];
         $Items = $row['Items'];
         $Image = $row['Image'];
            // echo $Image;
                                        ?> 
             <p  align="left">
                 <font size="4">  <b> <?php echo $Menu_Name ?> </b></font> 
             </p> 
    <a href="menu2.php?id=<?php echo $Menu_Id ?> " > 
    <img border="3" alt="W3Schools" src="<?php echo $Image ?>" width="300" height="200">
    </a>
            <?php
                                              }
                                 ?> 
             </tr>
       
           
           
           
           
           
           
           
           
           
           </tbody>  
       
       
       

</div>
</div>

      <div class="footer">
      
    
             <div class="row">
                <div class="col-lg-12" >
                      <a href="" style="color:#fff;"  target="_blank"></a>
                </div> 
        </div>
        </div>
<script src="../views/assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="../views/assets/js/bootstrap.min.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="../views/assets/js/custom.js"></script>
   </body>
</html>
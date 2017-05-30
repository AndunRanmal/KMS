<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
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
      
    <?php
           include("../config/config.php");
           $id = $_GET["id"];
           echo $id;
           $sql2 = "SELECT `Image` FROM `menus` WHERE `Menu_Id` = $id";
           $result = mysqli_query($conn,$sql2);
                 while($row =mysqli_fetch_assoc($result) ){
                     $Image=  $row["Image"];
    ?>
       <div id="page-wrapper" >
         <div id="page-inner">
               <div class="row">
                    <div class="col-md-12">
                        <img  src='<?php echo $Image ?>'/>
                        <?php
                        }
                        ?>
                        <?php
                        
                        $id = $_GET["id"];
                        
                        $sql = "SELECT * FROM `items` WHERE `Menu_Id` = $id";
                        $res = mysqli_query($conn,$sql);
                        
                        while($row = mysqli_fetch_assoc($res)){
                            $name = $row["Item_Name"];
                            $price = $row["Price"];
//                            $Image=  $Image["Image"];
                        
                        
                            
                            
                        
                        ?>
                        
                        <h4> <?php echo $name ?></h4>
                        <h4> <?php echo $price ?></h4>
                          
                        
                    <?php
                        
                            }
                    ?>
                    </div>
             </div>  </br> </br>
           
           
      
           

</div> 
 
 
 </div>
 

           

</div>
</div>

      <div class="footer">
      
    
             <div class="row">
                <div class="col-lg-12" >
                      <a  href="" style="color:#fff;"  target="_blank"></a>
                </div> 
        </div>
        </div>
<script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
   </body>
</html>
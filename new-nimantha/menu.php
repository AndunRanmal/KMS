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
    
   <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>-->
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
  
    
   
   
      
     
   </head>
   
   <body>
       
       <div id ="wrapper">
       <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="adjust-nav">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">
                       <!-- <img src="assets/img/logo.png" />-->
                    </a>
                </div>
                 
                 <span class="logout-spn" >
                  <a class="btn btn-primary" href="#" style="color:#fff;">LOGOUT</a>  

                </span>
             </div>
        </div>
       
         <!--side bar -->  
           <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                 


                     <li> 
                        <a href="main.html" ><i class="fa fa-desktop "></i>Dashboard </a>
                    </li>
                   


                    <li>
                        <a href="orders.html"><i class="fa fa-edit "></i>New Orders  </a>
                    </li>



                    

                    <li>
                        <a href="users.html"><i class="fa fa-edit "></i>User Profile </a>
                    </li>
                   
                     <li>
                        <a href="ui.html"><i class="fa fa-edit "></i>Notifications </a>
                    </li>
                    
                    <li>
                        <a href="menu.html"><i class="fa fa-edit "></i>View Menus </a>
                    </li>
                    
                    
                </ul>
                            </div>

        </nav>
       <div id="page-wrapper" >
         <div id="page-inner">
               <div class="row">
                    <div class="col-md-12">
                        <h2> Types of Menus</h2>
                    </div>
             </div>  </br> </br>
           
           
    <div class="col-md-4">  <p>
        
        
        <?php
		include(  'kms/config/config.php');
		
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
       
       
       <!--
            <p>
        <p  align="left"> <font size="4">  <b> Beverages: </b></font> </p> <a href=""   > 
    <img border="3" alt="W3Schools" src="assets/img/beve.jpg" width="300" height="200">
    </a>
           </p> </br>
       
        <p>
        <p  align="left"> <font size="4">  <b>Salads: </b></font> </p> <a href=""   > 
    <img border="3" alt="W3Schools" src="assets/img/salad.jpg" width="300" height="200">
    </a>
     </p>
       
       
       
       
       
       
       </div>     
           
<div class="col-md-4"> 
    <p>
        <p  align="left"> <font size="4">  <b> Desserts: </b></font> </p> <a href=""   > 
    <img border="3" alt="W3Schools" src="assets/img/dessert.jpg" width="300" height="200">
    </a>
    </p> </br>

  <p>
        <p  align="left"> <font size="4">  <b> Spicy Bites: </b></font> </p> <a href=""   > 
    <img border="3" alt="W3Schools" src="assets/img/spicy.jpg" width="300" height="200">
    </a>
</p> </br>
  <p>
        <p  align="left"> <font size="4">  <b> Sea Foods: </b></font> </p> <a href=""   > 
    <img border="3" alt="W3Schools" src="assets/img/sea.jpg" width="300" height="200">
    </a>
     </p>








</div> 
 
 <div class="col-md-4">

    <p>
        <p  align="left"> <font size="4">  <b> Light Meals: </b></font> </p> <a href=""   > 
    <img border="3" alt="W3Schools" src="assets/img/light.jpg" width="300" height="200">
    </a>
     </p>  </br>

     <p >
        <p  align="left"><font size="4"> <b> Appertizers : </b> </font> </p> <a href=""   > 
    <img border="3" alt="W3Schools" src="assets/img/app.jpeg" width="300" height="200">
    </a>
    </p> </br>



     <p>
    <p  align="left"> <font size="4"> <b> Soup: </b> </font> </p> <a href=""   > 
    <img border="3" alt="W3Schools" src="assets/img/soup.jpg" width="300" height="200">
    </a>
    </p>           
           
</div> -->
             
           

</div>
</div>

      <div class="footer">
      
    
             <div class="row">
                <div class="col-lg-12" >
                      <a href="" style="color:#fff;"  target="_blank"></a>
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
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Store Requisition </title>
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
     
           
   <?php
   include("../include/nav.php");
   include("../include/stock_keeper.php");
   include("../config/config.php");

   ?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                    <ol class="breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <!-- <li><a href="">PR</a></li> -->
                        <!-- <li><a href="blank.php">PO</a></li> -->
                        <li><a href="req.php" class="active">Store Requisition</a></li>
                    </ol>
                     <h2>STORE REQUISITION</h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                  
                  <!-- Content
================================================== -->
<div class="container">

<ul class="nav nav-tabs">
                            <li class="active"><a href="#home" data-toggle="tab">Active</a>
                            </li>
                            <!-- <li class=""><a href="#profile" data-toggle="tab">Complete</a>
                            </li> -->
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade active in" id="home">
                            <table class="table bordered">
                                  <thead>
                                    <th>Item Name</th>
                                    
                                    <th>Date</th>
                                    <th>Quantity Requested</th>
                                    <th >Quantity Issued</th>
                                    <th></th>
                                    
                                  </thead>
                                  <tbody>
                                <?php
                                  $sql = "SELECT * FROM `store_requisition` WHERE `Quantity_Issued`=0";
                                  $res = mysqli_query($conn,$sql);
                                  while($row=mysqli_fetch_assoc($res)){
                                    $id = $row["Store_req_Id"];
                                    $item = $row["Item_Name"];
                                    $req = $row["Quantity_Received"];
                                    $date = $row["Date"];


                                ?>
                               <tr>
                                <form method="post" action="../php/update_stock.php">
                                <input type="hidden" name="id" value="<?php echo $id ?>">
                                <input type="hidden" name="item" value="<?php echo $item ?>">
                                 <td><label class="form-control"><?php echo $item ?></label></td>
                                 <td><label class="form-control"><?php echo $date ?></label></td>
                                 <td><label style="max-width: 200px;" class="form-control"><?php echo $req ?></label></td>
                                 <td><input style="max-width: 200px;" type="number" name="issued" value="<?php echo $req ?>" class="form-control"></td>
                                 <td><input type="submit" class="btn btn-success" name="update" value="Issue Item"></td>
                                 </form>
                               </tr> 
                                <?php

                                  }
                                ?>
                                </tbody>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="profile">
                                

                            </div>
                            
                        </div>
  
    <div class="col-lg-8 col-md-8">

      <!-- Recipe Title -->
      
     
     <!-- Choose Menu Type -->
      

      <!-- Choose Menu -->
      

    



      
     


      
      
            
                  
                  
                
            
      

      <!--submit-->
      
<!-- Container / End -->

                    
                  
              
                 <!-- /. ROW  -->           
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
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

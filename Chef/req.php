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
                        
                    </li>
                   <li class="">
                        <a href="chef.html" ><i class="fa fa-desktop "></i>Dashboard <!-- <span class="badge">Included</span> --></a>
                        <!-- <img src="assets/img/chef.jpg" height="200px" width="238px" style="border-radius: 50%;border: 1px solid #ddd;padding: 5px;">
                    </li> -->

                    <!-- <li>
                        <a href=""><i class="fa fa-table "></i> Notifications  <span class="badge"></span></a>
                    </li> -->
                    <li>
                        <a href="menumanage.php"><i class="fa fa-edit "></i>Manage Menus  <span class="badge"></span></a>
                    </li>


                    <li>
                        <a href="addnew.html"><i class="fa fa-qrcode "></i>Manage recipes</a>
                    </li>
                    <li>
                        <a href="req.php"><i class="fa fa-bar-chart-o"></i>Store Requisition</a>
                    </li>

                    <li>
                        <a href="calculate.php"><i class="fa fa-edit "></i>Calculate Ingredients </a>
                    </li>
                    
                    
                </ul>
                            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                    <ol class="breadcrumb">
                        <li><a href="chef.html">Home</a></li>
                        <!-- <li><a href="">PR</a></li> -->
                        <!-- <li><a href="blank.php">PO</a></li> -->
                        <li><a href="req.html" class="active">Store Requisition</a></li>
                    </ol>
                     <h2>STORE REQUISITION</h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                  
                  <!-- Content
================================================== -->
<div class="container">
  
    <div class="col-lg-8 col-md-8">

      <!-- Recipe Title -->
      
     
     <!-- Choose Menu Type -->
      

      <!-- Choose Menu -->
      

    
									<form style="text-align: center;" action="sr.php"  method="post">
                                    <!-- <label class="form-control">Requiition Id</label> -->
                                    
                                     <table class="table table-striped">
                                       <thead>
                                        <tr>
                                          <th>Item</th>
                                          <th style="text-align: center;">Quantity Request</th>
                                          <th>Unit</th>
                                          <th>Remarks</th>
                                        </tr>   
                                       </thead>
									 </table>
									 
									 <table class="table table-striped " id="tableid">
                                       <tbody>
                                        <tr>
                                        
										<td>
                                        <input list="ingridents" type="text" name="item[]" class="form-control" required>
                                            <datalist id="ingridents">
                                            <?php 
                                                include("../config/config.php");
                                              $sql = "SELECT * FROM `ingriedents`";
                                              $res = mysqli_query($conn,$sql);
                                              while($row = mysqli_fetch_assoc($res)){
                                                $item = $row['Ingriedents_Name'];
                                                echo $item;
                                            ?>
                                            <option><?php echo $item; ?></option>
                                            <?php    
                                              }
                                            ?>    
                                            
                                              
                                              <!-- <option>Dhal</option>
                                              <option>Cheese</option>
                                              <option>Chicken</option>
                                              <option>Pork</option> --> 
                                                                                      
                                            </datalist>
                                        <!-- <input type="text" name='item[]' class="form-control"/> --></td>
										
										<td><input type="number" name='qty_req[]' class="form-control"/></td>
										
										<td><select class="form-control" name="unit[]">
                                            <option>kg</option>
                                            <option>l</option> 
                                            <option>pcs</option>                             
                                        </select>
                                        </td>
                                        <td>
                                        <input type="text" name='remarks[]' class="form-control"/></td> 
                                        </tr>
                                       </tbody>
                                     </table>
                                     <input type="submit" name="submit" value="Forward" class="btn btn-primary"> 
                                     </form>
                                     <input type="button" value="Add New" class="btn btn-info" onClick="addRow('tableid')" /> 
      
     


      
      
            
                  
                  
                
            
      

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

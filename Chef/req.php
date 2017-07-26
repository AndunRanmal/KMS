<!DOCTYPE html>
<html>
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Store Requisition</title>
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
include("../include/chef.php");
?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                    <ol class="breadcrumb">
                      <li><a href="chef.html">Home</a></li>
                        <li><a href="req.php">Store Requisition</a></li>
                        
                    </ol>
                     <h3>Store Requisition</h3>   
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
                                        
                                          <th>Item</th>
                                          <th style="text-align: center">Quantity Request</th>
                                          <th>Unit</th>
                                          <th>Remarks</th>
                                           
                                       </thead>
									 </table>
									 
									 <table class="table table-striped " id="tableid">
                                       <tbody>
                                        <tr>
                                        
										<td><input type="text" name='item[]' class="form-control"/ size="20"></td>
										
										<td><input type="number" name='qty_req[]' class="form-control"/ size="10"></td>

                    <td><select class="form-control" name="unit">
                      <option>kg</option>
                      <option>l</option>
                      <option>pcs</option>
                    </select></td>
										
										<td><input type="text" name='remarks[]' class="form-control"/></td> 
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
<?php
include("../include/footer.php");
?>
          

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

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>List of Recipes</title>
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
    include("../include/chef.php");

    ?>
		
		<!-- /. NAV TOP  -->
        
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                    <ol class="breadcrumb">
                    <li><a href="chef.php">Home</a></li>
                    <li><a href="recipes.php">List of Recipes</a></li>
                </ol>
                     <h2>FOOD ITEMS</h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
<ul class="nav nav-tabs">
                            <li class="active"><a href="#messages" data-toggle="tab">Recipe List</a>
                            </li>
                            <li class=""><a href="#home" data-toggle="tab">Add New Recipe</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade active in " id="messages">
                                <!-- <h4>Messages Tab</h4> --><br>
                                <!-- <h3>Recipe List</h3> -->
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
                            
                            </div>
                            <div class="tab-pane fade " id="home">
                                <!-- <h4>Active</h4> --><br>
                            <div class="col-lg-12 col-md-12">
                                <form id="myForm" action="addrecipe.php" method="POST" name="myform" enctype="multipart/form-data">
                                  <div class="row">
                                  
                                    <div class="col-lg-4 col-md-4">

                                      <!-- Recipe Title -->
                                      
                                      <div class="form-group">
                                      <label for="recipetype">Title</label>
                                      <input type="text" class="form-control" id="recipetype" name="title">
                                      </div>
                                     
                                     <!-- Choose Menu Type -->
                                      

                                      <!-- Choose Menu -->
                                      

                                    <!-- Ingredients -->
                                <div class="form-group">
                                <div class="row clearfix">
                                    <div class="col-md-12 column">
                                    
                                      <label for="ingredients">Ingredients</label>
                                      <table class="table table-striped" id="tableid">
                                        
                                        <tbody>
                                          <tr>
                                            <td>
                                            <input type="text" name='ingredient[]' placeholder='Ingredient' class="form-control"/>
                                            </td>
                                            <td>
                                            <input type="text" name='quantity[]' placeholder='Quantity with Unit;Ex:5ml' style="width: 200px;" class="form-control"/>
                                            </td>
                                            
                                            
                                            
                                          </tr>
                                          
                                        </tbody>
                                      </table>
                                     </div>
                                     </div> 
                                  
                                 <input type="button" value="Add a New Row" class="btn btn-info" onClick="addRow('tableid')" /> 

                                  
                                </div>

                                <div class="form-group">
                                                    <label for="file">Select a file to upload</label>
                                                    <input type="file" name="file" accept="image/jpeg">
                                                    <p class="help-block">Only jpg,jpeg,png and gif file with maximum size of 1 MB is allowed</p>
                                                  </div>


                                </div>

                                      
                                  <div class="col-lg-1 col-md-1">
                                </div>  
                                     

                                <div class="col-lg-4 col-md-4">
                                      <!-- how to make -->
                                      <div class="form-group">
                                      <label for="howtomake">Instructions</label>
                                      <textarea class="form-control" rows="5" id="comment" name='howtomake'></textarea>
                                      </div>


                                      <!-- Additional Informations -->
                                      <div class="form-group">
                                      <label for="information">Additional Infromation</label>
                                      <p class="help-block">Cook time and prep time</p>
                                      <textarea class="form-control" rows="5" id="comment" name='add'></textarea>
                                      </div>

                                      <!-- image upload -->
                                      
                                            
                                                  
                                                  
                                                
                                            
                                      

                                      <!--submit-->
                                      <div class="row">
                                     
                                      <input type="submit" name="submit" value="Submit" class="btn btn-success" onClick="addtext()">
                                      
                                      <input type="reset" name="cancel" value="reset" class="btn btn-primary">
                                      
                                      </div>
                                      
                                  </div>
                                 
                                  </div>
                                   </form>
                                  </div>
                                <div>
                                  
                            </div>
                                         
  
                  <!-- Content
================================================== -->






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
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
     
           
          
    <?php
    include("../include/nav.php");
    include("../include/chef.php");
    ?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>ADD NEW FOOD ITEM</h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                  
                  <!-- Content
================================================== -->
<div class="container">
  
    <div class="col-lg-4 col-md-4">

      <!-- Recipe Title -->
      <form id="myForm" action="recipes.php" method="POST" name="myform" enctype="multipart/form-data">
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
            <input type="text" name='quantity[]' placeholder='Quantity' class="form-control"/>
            </td>
            
            
          </tr>
          
        </tbody>
      </table>
     </div>
     </div> 
  
 <input type="button" value="Add a New Row" class="btn btn-info" onClick="addRow('tableid')" /> 

  
</div>



      
      
     


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
      
            
                  <div class="form-group">
                    <label for="file">Select a file to upload</label>
                    <input type="file" name="file" accept="image/jpeg">
                    <p class="help-block">Only jpg,jpeg,png and gif file with maximum size of 1 MB is allowed</p>
                  </div>
                  
                
            
      

      <!--submit-->
      <div class="col-lg-6 col-md-6">
      <table>
      <td><input type="submit" name="submit" value="Submit" class="btn btn-success" onClick="addtext()"></td>
      <br><br>
      <td><input type="reset" name="cancel" value="reset" class="btn btn-primary"></td>
      </table>
      </div>
      </form>
  </div>
</div>
<!-- Container / End -->

                    
                  
              
                 <!-- /. ROW  -->           
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
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

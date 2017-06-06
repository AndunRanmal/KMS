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

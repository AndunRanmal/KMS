<?php
include("../include/nav.php");
include("../include/chef.php");
?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2> Calculation for Bulk orders </h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
				   <?php include './datetime.php';?> 
				  <div class="row">
				  <form action="calculate.php"  method= "post">
              <div class="col-lg-1 col-md-1">
			  </div>
			  <div class="col-lg-3 col-md-3">
			  
			  <div class="form-group">
                            <label>Date</label><br><br>
							<label>Enter Number of Customers</label><br>
                            
							Select Menus :
                            
                        </div>
			  </div>
			  
			  <div class="col-lg-3 col-md-3">
			  <div class="form-group">
                            
                            <input type="Date" class="form-control"  name="date"   /><br>
							<input type="text" class="form-control" name="count"  />
							
                            
                        </div>
			  </div>
			  <div class="col-lg-1 col-md-1">
			  </div>
			  <div class="col-lg-2 col-md-2">
			  <label>Time</label><br><br>
			  <label>Name Of the contact person</label><br><br>
			  </div>
			  <div class="col-lg-2 col-md-2">
			  <input type="text" class="form-control"  name="timeperiod"   /><br>
			  <input type="text" class="form-control" name="person"  />
			  </div>
			 
			  </div>
			  <div class="row">
			  <div class="col-lg-1 col-md-1">
			  </div>
			  <div class="col-lg-2 col-md-2">
				<div class="form-group">
                            <label>Soup</label><br><br>
							
                        </div>
			  </div>
			  <div class="col-lg-4 col-md-4">
			  <input type="checkbox" name="menu[]" value="001"> Butter Baked Carrot Lentil Soup<br>
			<input type="checkbox" name="menu[]" value="002" checked> Diced vegetable Broth<br>
			<input type="checkbox" name="menu[]" value="003" checked> Curry Leaf Flavores Chicken Both<br>
			
  
			  </div>
			  <div class="col-lg-2 col-md-2">
				<div class="form-group">
                            <label>Welcome Drink</label><br><br>
							</div>
							</div>
							<div class="col-lg-3 col-md-3">
							<input type="checkbox" name="menu[]" value="004"> Frsesh Fruit Juice <br>
							<input type="checkbox" name="menu[]" value="005" checked> Stawberry Guava<br><br><br>
                        </div>
			  </div>
			  
			   <div class="row">
			  <div class="col-lg-1 col-md-1">
			  </div>
			  <div class="col-lg-2 col-md-2">
				<div class="form-group">
                            <label>Salads</label><br><br>
							
                        </div>
			  </div>
			  <div class="col-lg-4 col-md-4">
			  
			<input type="checkbox" name="menu[]" value="007" checked> Green Chilly with Cumin Yoghurt <br>
			
			<input type="checkbox" name="menu[]" value="009" checked> Fresh Mint and Capsicum<br>
			<input type="checkbox" name="menu[]" value="010" checked> Spring Onion & Chutney<br>
			<input type="checkbox" name="menu[]" value="011" checked> Cold Meat & Sweet Peppers<br>
			
  
			  </div>
			  <div class="col-lg-2 col-md-2">
				<div class="form-group">
                            <label>Rice & Noodles</label><br><br>
							</div>
							</div>
							<div class="col-lg-3 col-md-3">
			<input type="checkbox" name="menu[]" value="012">Chicken Fried Rice <br>
			<input type="checkbox" name="menu[]" value="013" checked> Vegetable Fried Rice<br>
			<input type="checkbox" name="menu[]" value="014" checked> Chicken Biriyani<br>
			<input type="checkbox" name="menu[]" value="015" checked> Steamed Bsmathi<br>
			<input type="checkbox" name="menu[]" value="016" checked> Noodles<br>
                        </div>
			  </div>
			  <br>
			    <div class="row">
			  <div class="col-lg-1 col-md-1">
			  </div>
			  <div class="col-lg-2 col-md-2">
				<div class="form-group">
                            <label>Seafood</label><br><br>
							
                        </div>
			  </div>
			  <div class="col-lg-4 col-md-4">
			  <input type="checkbox" name="menu[]" value="017"> Fried Fish in Curry Leaf Bread <br>
			<input type="checkbox" name="menu[]" value="018" checked> Fish Lemon Stew <br>
			<input type="checkbox" name="menu[]" value="019" checked> Devilled Fish<br>
			<input type="checkbox" name="menu[]" value="020" checked> Curried Assorted Seafood<br>
			
			
  
			  </div>
			  <div class="col-lg-2 col-md-2">
				<div class="form-group">
                            <label>Meat</label><br><br>
							</div>
							</div>
							<div class="col-lg-3 col-md-3">
							<input type="checkbox" name="021" value="fried">Chicken Pepper Curry Southern Style 
 <br>
			<input type="checkbox" name="menu[]" value="022" checked> Pork Black Curry<br>
			<input type="checkbox" name="menu[]" value="023" checked> Chicken Biriyani<br>
			<input type="checkbox" name="menu[]" value="024" checked> Pork or Beef Sweet & sour<br>
			
                        </div>
			  </div>
			   <div class="row">
			<!--   <center><button class="btn btn-success">Submit</button>
			   <a href="#" class="btn btn-primary">Cancel</a></center>-->
			   <center><input type="submit" name="submit" value="submit" class="btn btn-primary">
				<button type="reset" value="Reset" class="btn btn-success">Reset</button></center>
			   </div>
			  
			
			</form>
 	  </div>
			  
			  </div>
			  
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

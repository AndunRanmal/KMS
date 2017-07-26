<?php
include("../include/nav.php");
include("../include/chef.php");
?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Amounts of Items</h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                <div class="row">
        <div class="col-lg-3 col-md-3">
        <img src="assets/img/fruit.jpg" height="100px" width="150px" style="padding-bottom: 15px;
    padding-left: 15px;"><br>
  <img src="assets/img/strawberry.jpg" height="100px" width="150px" style="padding-bottom: 15px;
    padding-left: 15px;">
  <img src="assets/img/onion.jpg" height="100px" width="150px" style="padding-bottom: 15px;
    padding-left: 15px;">
  <img src="assets/img/tomatosalad.jpg" height="100px" width="150px" style="padding-bottom: 15px;
    padding-left: 15px;">
  <img src="assets/img/chilly.jpg" height="100px" width="150px" style="padding-bottom: 15px;
    padding-left: 15px;">
  <img src="assets/img/pork.jpg" height="100px" width="150px" style="padding-bottom: 15px;
    padding-left: 15px;">
        </div>  
        <div class="col-lg-7 col-md-7">



          <?php
include './connect.php';
//include './datetime.php';
                  $a = mysqli_query($conn,"SELECT Count FROM counts" );
                  $b = mysqli_fetch_array($a);
                 // echo $b[0];
                  $d = mysqli_query($conn,"SELECT item.Item_name,amount,unit  FROM item INNER JOIN insertitem ON item.Item_id = insertitem.item");
                  while ($e = mysqli_fetch_array($d)){
                      $result = ($e[1]*$b[0]);
                      $result = $result/1000;?>

                      <div class="col-lg-6 col-md-6">
                          <?php
                          echo $e[0].'<br>';?>
                      </div>
                      <?php
                      echo $result.' '.$e[2].'<br>' ;?>


                  <?php
                  }
                  ?>
        
</div>        
        
       
        <div class="col-lg-2 col-md-2">
        <img src="assets/img/fried.jpg" height="100px" width="150px" style="padding-bottom: 15px;
    padding-left: 15px;">
  <img src="assets/img/biriyani.jpg" height="100px" width="150px" style="padding-bottom: 15px;
    padding-left: 15px;">
  <img src="assets/img/basmathi.jpg" height="100px" width="150px" style="padding-bottom: 15px;
    padding-left: 15px;">
  <img src="assets/img/caramal.jpeg" height="100px" width="150px" style="padding-bottom: 15px;
    padding-left: 15px;">
  <img src="assets/img/pudding.jpg" height="100px" width="150px" style="padding-bottom: 15px;
    padding-left: 15px;">
  <img src="assets/img/fishlemon.jpg" height="100px" width="150px" style="padding-bottom: 15px;
    padding-left: 15px;">
        </div> 
        

          
          
    </div>
                <div class="row">
                    <div class="col-lg-5 col-md-5">
                        </div>
                    <div class="col-lg-2 col-md-2">
                        <a href="ingredients.php" class="btn btn-primary">View Ingredients</a>
                    </div>
                    <div class="col-lg-5 col-md-5">
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
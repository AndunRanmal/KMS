<head>
	<title>Ingreidient List</title>
</head>
<?php
include("../include/nav.php");
include("../include/chef.php");
 
?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
				<div class="col-md-3">
				</div>
                    <div class="col-md-8">
					<?php 
					include './connect.php';
					$id = $_GET["ref"];
					$a = mysqli_query($conn,"select `Date`,`time`, `Count`, `person`, `number` from `counts` where `Order` = $id");
					while($b = mysqli_fetch_array($a)){?>
					<div class="col-md-4">
					<tr>
						<td align="left"><b>Date</b></td><br>
                        
					</tr>
                        <tr>
                            <td align="left"><b>Time Duration (hours)</b></td><br>

                        </tr>

					<tr>
					<td align="left"><b>Number Of Customers</b></td><br>
					</tr>
					<tr>
					<td align="left"><b>Contact Person</b></td><br>
					</tr>
                        <tr>
                            <td align="left"><b>Contact Number</b></td><br>
                        </tr>
					</div>
					<div class="col-md-4">
					<?php
						echo $b[0].'<br>';
						echo $b[1].'<br>';
						echo $b[2].'<br>';
						echo $b[3].'<br>';
                        echo $b[4].'<br>';
						?>
						</div>
					<?php	
					}
					
					?>
                       
                    </div>
					
                </div>              
                 <!-- /. ROW  -->
                  <hr />
             
			  <div class="col-lg-3 col-md-3">
			  
			  </div>
				<div class="col-lg-6 col-md-6">
					<?php
					
					$e = mysqli_query($conn,"select `menu_name`, sum(result), `unit` from total where `order_id` = $id group by `menu_id`  ");
					while($f = mysqli_fetch_array($e)){?>
					<div class="col-lg-6 col-md-6">
						<?php echo $f[0];?>
					</div>
							<?php 
							if($f[2] == "kg" || $f[2] == "L"){
								$result = $f[1];
							
								echo $result.' '.$f[2].'<br>';
							}else{
								echo $f[1].' '.$f[2].'<br>';
							}
					}
				?>
			  </div><a href="../views/test.php?ref=<?php echo $id ?>" class="btn btn-info">Comparison with the Current Stock</a>
			  <div class="col-lg-3 col-md-3">
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
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
                            <li><a href="chef.php">Home</a></li>
                            <li><a href="menumanage.php">Menu Manage</a></li>
                            <li><a href="insertApp.php">Appertizers</a></li>
                        </ol>
                     <center><h3>Appertizers </h3>  </center> 
                    </div>
                </div> 
				<div class="row">				
                 <!-- /. ROW  -->
				 <?php 
				  include './connect.php';
				if(isset($_POST['submit'])){
				if ($_FILES["image"]["error"] > 0)
				{
     //echo "<font size = '5'><font color=\"#e31919\">Error: NO CHOSEN FILE <br />";
     //echo"<p><font size = '5'><font color=\"#e31919\">INSERT TO DATABASE FAILED";
   }
   else
   {
     move_uploaded_file($_FILES["image"]["tmp_name"],"images/" . $_FILES["image"]["name"]);
     //echo"<font size = '5'><font color=\"#0CF44A\"><br>";
	$name = $_POST['name']; 
	$price = $_POST['price'];
     $file="images/".$_FILES["image"]["name"];
     $sql="INSERT INTO insertApp (name, image,price) VALUES ('$name','$file','$price')";
	    if (mysqli_query($conn, $sql)) {
				//echo "New record created successfully";
		} else {
				echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
     //if (!mysql_query($sql))
     //{
        //die('Error: ' . mysql_error());
     //}
     //echo "<font size = '5'><font color=\"#0CF44A\">SAVED TO DATABASE";

   }
}?>
	<div class="col-lg-12 col-md-12">
		<div class="table-responsive">
		<table class="table">
		<thead>
                     <tr>
                     
                     <th>Name</th>
                     <th>Image</th>
                     <th>Price</th>
					 <th></th>
                      </tr>
                      </thead>
	<?php
	$display = mysqli_query($conn, "select * from insertApp");
	while($row = mysqli_fetch_array($display)){
		
		?>
				
                      <tr id="<?php echo $row["Id"]; ?>" class="">
						<td><?php echo $row[1].'<br>';?></td>
                        <td>
						
						<img src="<?php echo $row["image"];?>" height="70" width="120">
						</td>
						<td><?php 
							echo $row[3].'<br>';
							?></td>
                        <td><input type="checkbox" name="customer_id[]" class="delete_customer" value="<?php echo $row["Id"]; ?>" /></td>
                        </tr>
                  
		
		
		
		<?php
	}
				 
				 ?>
				   	
                        </table>
             </div>
		</div>
				 
				 </div>
				 <div class="row">
				 <form enctype="multipart/form-data" action="insertApp.php" method="post" name="changer">
				 
				 <div class="col-lg-1 col-md-1">
					<label>Name </label>
				 </div>
				 <div class="col-lg-4 col-md-4">
					<input type="text" class="form-control" name="name"  />
				 </div>
				 
				 
				 <div class="col-lg-3 col-md-3"> 
				<input name="image" accept="image/jpeg" type="file">
				</div>
				<div class="col-lg-1 col-md-1"> 
				 <label>Price </label>
				 </div>
				 <div class="col-lg-1 col-md-1">
				 <input type="text" class="form-control" name="price"  />
				</div>
				<div class="col-lg-1 col-md-1"> 
				<input type="submit" name="submit" value="Add" class="btn btn-primary">
				
				<!-- <input value="Add" type="submit" name="submit"> -->
				 </div>
				 <div class="col-lg-1 col-md-1">
				 <button type="button" name="btn_delete" id="btn_delete" class="btn btn-primary">Delete</button>
				</div>
				</form>
				
				
				
				
				
				</div>
				<div class="row">
				<center>
				
				<!--<input type="submit" name="submit" value="Add" class="btn btn-primary">-->
				
				</center>
				</form>
				</div>

                  <hr />
              
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
<script>
$(document).ready(function(){
 
 $('#btn_delete').click(function(){
  
  if(confirm("Are you sure you want to delete this?"))
  {
   var id = [];
   
   $(':checkbox:checked').each(function(i){
    id[i] = $(this).val();
   });
   
   if(id.length === 0) //tell you if the array is empty
   {
    alert("Please Select atleast one checkbox");
   }
   else
   {
    $.ajax({
     url:'deleteApp.php',
     method:'POST',
     data:{id:id},
     success:function()
     {
      for(var i=0; i<id.length; i++)
      {
       $('tr#'+id[i]+'').css('background-color', '#ccc');
       $('tr#'+id[i]+'').fadeOut('slow');
      }
     }
     
    });
   }
   
  }
  else
  {
   return false;
  }
 });
 
});
</script>


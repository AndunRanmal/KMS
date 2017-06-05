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
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />-->
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
   
   
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
                    
                </div>
              
                 <span class="logout-spn" >
                  <a href="#" style="color:#fff;">LOGOUT</a>  

                </span>
            </div>
        </div>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                 

 <li >
                       <li class="active-link">
                       
                    </li>

                    <li>
                        <a href=""><i class="fa fa-table "></i> Notifications  <span class="badge"></span></a>
                    </li>
                    <li>
                        <a href="menumanage.html"><i class="fa fa-edit "></i>Manage Menus  <span class="badge"></span></a>
                    </li>


                    <li>
                        <a href="recipes.html"><i class="fa fa-qrcode "></i>Manage recipes</a>
                    </li>
                    <li>
                        <a href="request.html"><i class="fa fa-bar-chart-o"></i>Store Requestion</a>
                    </li>

                    <li>
                        <a href="counts.php"><i class="fa fa-edit "></i>Calculate Ingredients </a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-table "></i>View remaining amounts</a>
                    </li>
                </ul>
                            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <center><h3>Soup </h3>  </center> 
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
     $sql="INSERT INTO store (name, image,price) VALUES ('$name','$file','$price')";
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
	$display = mysqli_query($conn, "select * from store");
	while($row = mysqli_fetch_array($display)){
		
		?>
				
                      <tr id="<?php echo $row["Id"]; ?>" class="">
						<td><?php echo $row[1].'<br>';?></td>
                        <td>
						<?php 
		//echo '<img height="200" width="200" src='".$row[1]."'>';?>
						<img src="<?php echo $row["image"];?>" height="70" width="120">
						</td>
						<td><?php 
							echo $row[3].'<br>';
							?></td>
                        <td><input type="checkbox" name="customer_id[]" class="delete_customer" value="<?php echo $row["Id"]; ?>" /></td>
                        </tr>
                  
		<!--<div id="<?php //echo $row["Id"]; ?>">
		<div id="<?php //echo $row["Id"]; ?>" class="col-lg-6 col-md-6">
		<?php 
		//echo $row[1].'<br>';
		?>
		</div>
		<div id="<?php //echo $row["Id"]; ?>" class="col-lg-3 col-md-3">
		<?php 
		//echo '<img height="200" width="200" src='".$row[1]."'>';?>
		<img src="<?php //echo $row["image"];?>" height="70" width="120"><br><br>
		
		</div>
		<div id="<?php //echo $row["Id"]; ?>" class="col-lg-2 col-md-2">
		<?php 
		//echo $row[3].'<br>';
		?>
		</div>
		<div id="<?php //echo $row["Id"]; ?>" class="col-lg-1 col-md-1">
		<input type="checkbox" name="customer_id[]" class="delete_customer" value="<?php //echo $row["Id"]; ?>" />
		</div>
		</div>-->
		
		
		<?php
	}
				 
				 ?>
				   	
                        </table>
             </div>
		</div>
				 
				 </div>
				 <div class="row">
				 <form enctype="multipart/form-data" action="insertSoup.php" method="post" name="changer">
				 
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
    <div class="footer">
      
    
             <div class="row">
                <div class="col-lg-12" >
                    &copy;  2014 yourdomain.com | Design by: <a href="http://binarytheme.com" style="color:#fff;"  target="_blank">www.binarytheme.com</a>
                </div>
        </div>
        </div>
          

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
     url:'delete.php',
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


<head>
	<script src="assets/js/canvasjs.min.js"></script>
	<script src="assets/js/jquery-1.10.2.js"></script>
</head>
<?php
include("../include/nav.php");
include("../include/stock_keeper.php");
include("../config/config.php");

if(isset($_POST["submit"])){
	$val = $_POST["search"];

	$sql1 = "SELECT `Item_Name` AS label , `Quantity` AS y FROM `stock` WHERE `Item_Name` LIKE '%$val%'";
	$res = mysqli_query($conn,$sql1);
	if(mysqli_num_rows($res)==1){
	$items = array();
	while($row = mysqli_fetch_assoc($res)){
		// $item_name = $row["x"];
		// // $quantity = $row["Quantity"];
		// // $unit = $row["Unit"];
		// // $category = $row["Category"];
		// // $vendor = $row["Vendor_Id"];
		// echo $item_name;
		// // echo $quantity;
		// // echo $unit;
		// // echo $category;
		// // echo $vendor;
		array_push($items, $row);
		 
	}

	$sql2 = "SELECT `Date` AS label, `Quantity_Issued` AS y FROM `store_requisition` WHERE `Item_Name` LIKE '%$val%' LIMIT 10";
	$result = mysqli_query($conn, $sql2);
	$var = array();
	while($row = mysqli_fetch_assoc($result)){
		array_push($var, $row);
	}

	$sql3 = "SELECT * FROM `stock`, `vendor` WHERE stock.Item_Name = 'Carrot'  AND stock.Vendor_Id=vendor.Vendor_Id";
	$result2 = mysqli_query($conn,$sql3);
	while($row = mysqli_fetch_assoc($result2)){
		$vendor = $row["Name"];
		$address = $row["Address"];
		$tel = $row["Contact_No"];
		$quantity = $row["Quantity"];
		$unit = $row["Unit"];

	
?>
<div id="page-wrapper" >
    <div id="page-inner">
		<div class="row">
		    <div id="content" class="col-md-12">

		       <!--  <div id="chartContainer1" style="width: 500px; height: 300px;display: inline-block;"></div> --> 
<div id="chartContainer2" style="width: 500px; height: 300px;display: inline-block;"></div><br/>
		            <script type="text/javascript">
		            var chart1 = new CanvasJS.Chart("chartContainer1",{
		            	
						    title :{
						        text: "Stock In Hand"
						    },
						    data: [{
							type: "column",
						        dataPoints :<?php echo json_encode($items, JSON_NUMERIC_CHECK); ?>
						    }]
						});
						var chart1 = new CanvasJS.Chart("chartContainer2",{
						    title :{
							text: "Fluctuation in Last Few Days"
						    },
						    data: [{
							type: "line",
							dataPoints : <?php echo json_encode($var, JSON_NUMERIC_CHECK); ?>
						    }]
						});
						 
						chart1.render();
						chart2.render();
		                
		            </script>


		           
		        
		    </div>
		    <div class="col-md-12" ;">
		    <br>
		    <br>
		    	<h4>Stock in hand: <?php echo $quantity , $unit  ?></h4>
		    	<h4>Vendor: <?php echo $vendor ?></h4>
		    	<h4>Address: <?php echo $address ?></h4>
		    	<h4>Contact No: <?php echo $tel ?></h4>
		    	<?php 
		    		}
				}else{
					echo '<script type="text/javascript">';
                    echo 'alert("Sorry! Search Ingredient could not be found");';
                    echo 'window.location="../views/stock_handling.php";';
                    echo '</script>';
				}
			}
				?>
		    </div>
		</div>
	</div>
</div>
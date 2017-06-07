<head>
	<script src="assets/js/script.js"></script>

	<script src="assets/js/canvasjs.min.js"></script>
	<script src="assets/js/jquery-1.10.2.js"></script>
</head>
<?php
include("../config/config.php");
include("../include/nav.php");
include("../include/stock_keeper.php");

	$sql1 = "SELECT `Item_Name` AS label , `Quantity` AS y FROM `stock`";
	$res = mysqli_query($conn,$sql1);
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

	
	
?>

<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="stock_handling.php">Stock Handling</a></li>
                </ol>
                <form style="float: left;" method="POST" action="Search_ingriedients.php">
                    <div class="form-group"	>
                	    <input list="items" type="text" name="search" class="form-control" placeholder="Search an Ingredient" size="30">
                	    <datalist id="items">
                	    	<?php 
                                $sql = "SELECT * FROM `stock`";
                                $res = mysqli_query($conn,$sql);
                                while($row = mysqli_fetch_assoc($res)){
                                    $item = $row['Item_Name'];
                                    // echo $item;
                                    ?>
                                    <option><?php echo $item; ?></option>
                            <?php    
                                }
                            ?>  
                	    </datalist>
                	    <input type="submit" name="submit" class=" btn btn-info fa fa-search" value="SEARCH">
                    </div>
                </form>
                <form style="float: left;padding-left: 20px;" method="POST" action="cat_result.php">
                    <div class="form-group"	>
                	    <select class="form-control" placeholder="Search an Ingredient" style="width: 250px;" name="category">
                	    	<option>Vegetable</option>
                	    	<option>Meat</option>
                	    	<option>Dessert</option>
                	    	<option>Spices</options>
                	    	<option>Other</option>
                	    </select>
                	    <input type="submit" name="cat_search" class=" btn btn-info fa fa-search" value="SEARCH">
                    </div>
                </form>
<!--                 <button class="btn btn-info" onclick="location.href='pr.html'"><i class="fa fa-search" aria-hidden="true"></i></button>
 -->                <div><br><br><hr>

 					<div id="chartContainer1" style="width: 100%; height: 300px;display: inline-block;"></div> 

		            <script type="text/javascript">
					window.onload = function () {
					    var chart = new CanvasJS.Chart("chartContainer1", {
					        theme: "theme1",
					        zoomEnabled: true,
					        animationEnabled: true,
					        data: [
					        {
					            type: "column",
					            dataPoints: <?php echo json_encode($items, JSON_NUMERIC_CHECK); ?>
					        }
					        ]
					    });
					    chart.render();
					};
					</script>
 					<hr/>
                	<h4>Enter a New Stock</h4>
                	<div>
                	<form method ="POST" action="../php/stock.php" >
                		<table class="table table-striped" style="width: 900px">
                                       <thead>
                                        <tr>
                                          <td style="text-align: center;">Item Name</td>
                                          <td style="text-align: center;">Quantity</td>
                                          <td style="text-align: center;">Unit</td>
                                        </tr>   
                                       </thead>
                                       </table>
                                       <table class="table table-striped" id="tableid">
                                       <tbody>
                                         <tr>
                                           <td>
                                            <input list="ingridents" type="text" name="Item_name[]" class="form-control" style="width: 250px;">
                                            <datalist id="ingridents">
                                            <?php 
                                                $sql = "SELECT * FROM `stock`";
                                                $res = mysqli_query($conn,$sql);
                                                while($row = mysqli_fetch_assoc($res)){
                                                    $item = $row['Item_Name'];
                                                    // echo $item;
                                                    ?>
                                                    <option><?php echo $item; ?></option>
                                            <?php    
                                                }
                                            ?>         
                                            </datalist>
                                           </td>
                                           <td><input type="number" name="Quantity[]" min="1" class="form-control" style="width: 250px;"></td>
                                           <td>
	                                            <select class="form-control" name="Unit[]" style="width: 250px;">
	                                           		<option>kg</option>
	                                           		<option>L</option>
	                                           		<option>pcs</option>
	                                            </select>
	                                        </td>
	                                     </tr>   
                                         <tr>
                                           	<td>
                                            <input list="ingridents" type="text" name="Item_name[]" class="form-control" style="width: 250px;">
                                            <datalist id="ingridents">
                                            <?php 
                                              $sql = "SELECT * FROM `ingriedents`";
                                              $res = mysqli_query($conn,$sql);
                                              while($row = mysqli_fetch_assoc($res)){
                                                $item = $row['Ingriedents_Name'];
                                                echo $item;
                                            ?>
                                            <option><?php echo $item; ?></option>
                                            <?php    
                                              }
                                            ?>                                
                                            </datalist>
                                           </td>
                                           <td><input type="number" name="Quantity[]" min="1" class="form-control" style="width: 250px;"></td>
                                           <td>
	                                            <select class="form-control" name="Unit[]" style="width: 250px;">
	                                           		<option>kg</option>
	                                           		<option>L</option>
	                                           		<option>pcs</option>
	                                            </select>
	                                        </td>
                                         </tr>
                                       </tbody>
                                      </table>
                                      <input type="submit" name="submit" value="Forward" class="btn btn-primary"> 
                                     </form>
                                    <input type="button" value="Add a New Row" class="btn btn-info" onClick="addRow('tableid')" /> 
                                
                	</div>

                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
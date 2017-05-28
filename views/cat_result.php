<head>
	<script src="assets/js/canvasjs.min.js"></script>
	<script src="assets/js/jquery-1.10.2.js"></script>
</head>
<?php

include("../config/config.php");
include("../include/nav.php");
include("../include/stock_keeper.php");

if(isset($_POST["cat_search"])){
	$cat = $_POST["category"];
	

	$sql = "SELECT `Item_Name` AS label, `Quantity` AS y FROM `items` WHERE `Category`='$cat'";
	
	$res = mysqli_query($conn, $sql);
	$item = array();
	while($row = mysqli_fetch_assoc($res)){
		// echo $row["Item_Name"];
		array_push($item, $row);
	}
}
?>
<div id="page-wrapper" >
    <div id="page-inner">
		<div class="row">
		    <div id="content" class="col-md-12">

		        <div id="chartContainer" style="width:100%, height:800px"></div>

					<script type="text/javascript">
					window.onload = function () {
					    var chart = new CanvasJS.Chart("chartContainer", {
					        theme: "theme2",
					        zoomEnabled: true,
					        animationEnabled: true,
					        data: [
					        {
					            type: "column",
					            dataPoints: <?php echo json_encode($item, JSON_NUMERIC_CHECK); ?>
					        }
					        ]
					    });
					    chart.render();
					};
					</script> 
		            

		           
		        
		    </div>
		    
		</div>
	</div>
</div>
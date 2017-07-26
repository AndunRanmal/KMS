<head>
	<title>Bulk Order List</title>
</head>
<?php
include("../include/nav.php");
include("../include/chef.php");
// include("../config/config.php");
?>
		<div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                    	<ol class="breadcrumb">
		                    <li><a href="chef.php">Home</a></li>
		                    <li><a href="bulkorder.php">Bulk Orders</a></li>
		                </ol>
		                <div class="col-lg-12 col-md-12">
		                <ul class="nav nav-tabs">
                            <li class="active"><a href="#home" data-toggle="tab">Active</a>
                            </li>
                            <li class=""><a href="#profile" data-toggle="tab">Complete</a>
                            </li>

                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade active in" id="home">
                                <h4>Active Bulk Orders</h4>
                                <table class="table">
                                	<thead>
                                		<th>Contact Person</th>
                                		<th>Date Ordered</th>
                                		<th>Number of Guests</th>
                                		<th>Time Duration</th>
                                		<th>Contact Number</th>
                                	</thead>
                                	<tbody>
                                
                                <?php
                                include './connect.php';
                                $sql = "SELECT * FROM `counts` ORDER BY `Order` DESC LIMIT 10";
                                $res = mysqli_query($conn,$sql);
                                while($row = mysqli_fetch_assoc($res)){
                                	$id = $row["Order"];
                                	$person = $row["person"];
                                	$order_date = $row["Date"];
                                	$contact = $row["number"];
                                	$time = $row["time"];
                                	$count = $row["Count"];
                                	$date = $row["Order_Date"];
                               	?>

                               	<tr>
                               		<td><a href="ingredients.php?ref=<?php echo $id ?>"><?php echo $person ?></a></td>
                               		<td><a href="ingredients.php?ref=<?php echo $id ?>"><?php echo $order_date ?></a></td>
                               		<td><a href="ingredients.php?ref=<?php echo $id ?>"><?php echo $count ?></a></td>
                               		<td><a href="ingredients.php?ref=<?php echo $id ?>"><?php echo $time ?></a></td>
                               		<td><a href="ingredients.php?ref=<?php echo $id ?>"><?php echo $contact ?></a></td>
                               	</tr>
                               	<?php
                                }
                                
                                ?>
                                </tbody>
                                </table>
                                
                            </div>
                            <div class="tab-pane fade" id="profile">
                                <h4>Compelted Bulk Orders</h4>
                                
                                    

                            </div>
                            

                        </div>
                        </div>
		            </div>
		        </div>
		    </div>
		</div>


    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/script.js"></script>
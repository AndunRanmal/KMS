<head>
	<title>Purchase Order Report</title>
	<script type="text/javascript" src="assets/js/html2canvas.js"></script>
	<script src="assets/js/jspdf.min.js"></script>
</head>
<?php
	include("../config/config.php");
	include("../include/nav.php");
	include("../include/stock_keeper.php");

?>
<div id="page-wrapper">
	<div id="page-inner">
		<div class="row">
			<button onclick="download();" class="btn btn-primary fa fa-download" style="float: right;padding-bottom: 12px;" id="btn">Download</button>
            <button class="btn btn-primary  fa fa-print" style="float: right; padding-right: 29px;padding-left: 29px;padding-bottom: 12px;margin-right: 5px;" onclick="doit()">Print</button><br>
			<div class="col-md-12">
				<?php
					
					$id = $_GET['ref'];
					$sql = "SELECT `Vendor` FROM `po_overview` WHERE `O_Id`='$id'";
					$res = mysqli_query($conn,$sql);
					while($row = mysqli_fetch_assoc($res)){
						$vendor = $row["Vendor"];
						
						$sql2 = "SELECT * FROM `vendor` WHERE `Name` = '$vendor'";
						$res2 = mysqli_query($conn,$sql2);
						while($row2 = mysqli_fetch_assoc($res2)){
							$address = $row2["Address"];
							$tel = $row2["Contact_No"];
						}
					
					// echo $address;
				?>
				<div id="content">
				<h3>Purchase Order Report</h3>
				<h4>Sanmira Renaissance</h4>
				<h5>407 C, Matara Road, Unawatuna</h5>
				<hr/>
				<h5><span style="font-weight: bold;">PO No: </span> <?php echo $id ?> </h5>
				<h5><span style="font-weight: bold;">Vendor:</span> <?php echo $vendor ?> </h5>
				<h5><span style="font-weight: bold;">Address:</span> <?php echo $address ?> </h5> 
				<h5><span style="font-weight: bold;">Tel:</span> <?php echo $tel ?></h5>
				<hr/>
				<?php
				}
				?>
				<table class="table table-bordered">
					<thead>
						<th style="text-align: center;">Item Name</th>
						<th style="text-align: center;">Quantity</th>
						<th style="text-align: center;">Unit Price</th>
						<th style="text-align: center;">Delivary Date</th>
						<th style="text-align: center;">Total(Rs.)</th>
					</thead>
					<tbody>
				<?php
					$id = $_GET["ref"];
					$ven = "SELECT * FROM `purchase_order` WHERE `Order_id`='$id'";
					$result = mysqli_query($conn,$ven); 
					$count = 0;
					$sum = 0;
					if(mysqli_num_rows($result)==1){
					while($row = mysqli_fetch_assoc($result)){
						$item = $row["Item_code"];
						$quantity = $row["Quantity"];
						$unit = $row["Unit"];
						$unit_price = $row["Unit_price"];
						$date = $row["Date_wanted"];
						$count += 1;
                        $sum += $quantity * $unit_price ;
                        // $sql ="INSERT INTO `purchase_order` (`Item_code`,`Quantity`,`Unit`,`Unit_price`,`Date_wanted`,`Vendor_Id`)VALUES('$item',$quantity,'$unit',$unit_price,'$date','$vendor')";
                        // // echo $sql;
                        // mysqli_query($conn,$sql);
				?>		
						<tr>
							<td style="text-align: center;"><?php echo $item; ?></td>
							<td style="text-align: center;"><?php echo "$quantity" ,"$unit"; ?></td>
							<td style="text-align: center;"><?php echo $unit_price; ?></td>
							<td style="text-align: center;"><?php echo $date; ?></td>
							<td style="text-align: center;"><?php echo $quantity * $unit_price ?></td>
						</tr>
				<?php }
					}else{
							echo '<script type="text/javascript">';
                            echo 'alert("Sorry! Your PR Id is not Available");';
                            echo 'window.location="po.php";';
                            echo '</script>';
					}  
				?>		<tr>
							<td style="text-align: center;"> Total </td>
							<td></td>
							<td></td>
							<td></td>
							<td style="text-align: center;"><?php echo $sum; ?></td>
						</tr>

				</tbody>
				</table>
				</div>
			</div>
		</div>
	</div>
</div>

<script>
	function doit(){
	if (!window.print){
	alert("You need NS4.x to use this print button!")
	return
	}
	window.print()
	}
</script>
<script type="text/javascript">
	function download(){
	  html2canvas($("#content"), {
	    onrendered: function(canvas) {         
	        var imgData = canvas.toDataURL(
	            'image/jpeg');              
	        var doc = new jsPDF('l', 'pt','a4');
	        doc.addImage(imgData, 'jpeg',7 ,7 );
	        doc.save('po.pdf');
	    }
	});
	}
</script>
<script src="assets/js/jspdf.min.js"></script>
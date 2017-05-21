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
					
					$vendor = $_GET['ref'];
					// echo $vendor;
					$sql = "SELECT * FROM `vendor` WHERE `Name`='$vendor'";
					$res = mysqli_query($conn,$sql);
					while($row = mysqli_fetch_assoc($res)){
						$address = $row["Address"];
						$tel = $row["Contact_No"];
					}
					// echo $address;
				?>
				<h3>Purchase Order Report</h3>
				<h4>Sanmira Renaissance</h4>
				<h5>407 C, Matara Road, Unawatuna</h5>
				<hr/>
				<h5><span style="font-weight: bold;">PO No: </span> </h5>
				<h5><span style="font-weight: bold;">Vendor:</span> <?php echo $vendor ?> </h5>
				<h5><span style="font-weight: bold;">Address:</span> <?php echo $address ?> </h5> 
				<h5><span style="font-weight: bold;">Tel:</span> <?php echo $tel ?></h5>
				<hr/>
				<table class="table table-bordered">
					<thead>
						<td style="text-align: center;">Item Name</td>
						<td style="text-align: center;">Quantity</td>
						<td style="text-align: center;">Unit Price</td>
						<td style="text-align: center;">Delivary Date</td>
						<td style="text-align: center;">Total(Rs.)</td>
					</thead>
					<tbody>
				<?php
					$vendor = $_GET["ref"];
					$ven = "SELECT * FROM `department_requisition` WHERE `PO_Id`='0' AND `Vendor_Id`='$vendor' ";
					$result = mysqli_query($conn,$ven); 
					$count = 0;
					$sum = 0;
					while($row = mysqli_fetch_assoc($result)){
						$item = $row["Item_code"];
						$quantity = $row["Quantity"];
						$unit = $row["Unit"];
						$unit_price = $row["Unit_price"];
						$date = $row["Date_wanted"];
						$count += 1;
                        $sum += $quantity * $unit_price ;
				?>	
						<tr>
							<td style="text-align: center;"><?php echo $item; ?></td>
							<td style="text-align: center;"><?php echo "$quantity" ,"$unit"; ?></td>
							<td style="text-align: center;"><?php echo $unit_price; ?></td>
							<td style="text-align: center;"><?php echo $date; ?></td>
							<td style="text-align: center;"><?php echo $quantity * $unit_price ?></td>
						</tr>
				<?php }  
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
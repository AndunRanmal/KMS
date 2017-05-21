<?php
include("../config/config.php");

if($_POST['type']=='vendor_table'){
	$row_num = $_POST['row_num'];
	$name = $_POST['name_startsWith'];
	$sql = "SELECT DISTINCT Vendor_Id FROM `department_requisition` WHERE `PO_Id`='0' AND `Vendor_Id` LIKE '%$name%'"; 
	$res = mysqli_query($conn,$sql);
	$data = array();
	while($row = mysqli_fetch_assoc($res)){
		$item = $row['Vendor_Id'];
		array_push($data,$item);
	}
	echo json_encode($data);
}
// if($_POST['type']=='vendor_table'){
// 	$vendor = $_POST['vendor'];

// 	$sql2 = "SELECT * FROM `vendor` WHERE `Name`='$vendor'";
// 	$res = mysqli_query($conn, $sql2);
// 	while($row = mysqli_fetch_assoc($res)){
// 		$address = $row["Address"];
// 	}
// }

$output = '';
if($_POST['type']=='vendor'){
	$vendor = $_POST['vendor'];
	// echo $vendor;

	$ven = "SELECT * FROM `department_requisition` WHERE `PO_Id`='0' AND `Vendor_Id`='$vendor' ";
	// echo $ven;
	$result = mysqli_query($conn,$ven);
	$data = array();
	$rowNo = 0;
	if(mysqli_num_rows($result)>0){
		$output = '<div class="table-responsive">
						<table class="table table-striped">
							<thead>
                                        <tr>
                                          <td style="text-align: center;">Item Name</td>
                                          <!-- <td>Description</td> -->
                                          <!-- <td>Requested Date</td> -->
                                          <td style="text-align: center;">Quantity</td>
                                          <td style="text-align: center;">Unit</td>
                                          <td style="text-align: center;">Unit Price</td>
                                          <td style="text-align: center;">Total</td>
                                          <td style="text-align: center;">Delivary Date</td>
                                          <!-- <td>Vendor</td>
                                          <td>Remarks</td -->
                                        </tr>   
                            </thead>
                        ';
        while($row = mysqli_fetch_assoc($result) ){
			$output .= '
						<tr>
							<td style="text-align: center;">'.$row['Item_code'].'</td>
							<td style="text-align: center;">'.$row['Quantity'].'</td>
							<td style="text-align: center;">'.$row['Unit'].'</td>
							<td style="text-align: center;">'.$row['Unit_price'].'</td>
							<td style="text-align: center;">'.$row['Unit_price'] * $row['Quantity'].'</td>
							<td style="text-align: center;">'.$row['Date_wanted'].'</td>
						</tr>';
	}
		$output .='</table>
                    </div>
                    <a href="../views/PO_report.php?ref='.$vendor.'" class="btn btn-info">Procees to Complete</a>';
		echo $output;
	}
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Search Result</title>
	<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jspdf/0.9.0rc1/jspdf.min.js"></script>
	<style type="text/css">
		@media print
		{
		body * { visibility: hidden; }
		#content * { visibility: visible;margin-bottom: 500px;margin-top: -500px; }
		/*.div2 { position: absolute; top: 40px; left: 30px; }*/
		}
	</style>
</head>

<?php
include("../config/config.php");
include("../include/nav.php");
include("../include/stock_keeper.php");
if(isset($_POST["submit"])){
	$Pr = $_POST["search"];
	$sql1 = "SELECT * FROM `requisition_overview` WHERE `Id` = '$Pr'";
	$result = mysqli_query($conn,$sql1);
  if(mysqli_num_rows($result)==1){
	while($row = mysqli_fetch_assoc($result)){
		$issued_date = $row['Issued_date'];
		$last_updated = $row['Last_updated'];
		$apprv_date = $row['Approved_date'];
		$apprv_by = $row['Approved_by'];

?>

<div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                      <ol class="breadcrumb">
                      <li><a href="index.html">Home</a></li>
                      <li><a href="blank.php">PR</a></li>
                      <li><a href="blank.php">PR Report</a></li>
                      <li><a href="blank.php">PR Preview</a></li>
                      </ol>
                      <button onclick="download();" class="btn btn-primary fa fa-download" style="float: right;padding-bottom: 12px;" id="btn">Download</button>
                     <button class="btn btn-primary  fa fa-print" style="float: right; padding-right: 29px;padding-left: 29px;padding-bottom: 12px;margin-right: 5px;" onclick="doit()">Print</button><br>
                      <div style="background-color: #DDF4FF;height: 500px;width: 1100px;float: center;" id="content">
                      <div style="background-color: #315AB8; height: 60px;">
                        <h3 style="text-align: center;color: #fff;"><span>Purchase Requsition</span></h3><!-- <hr/> --> 
                      </div>
                      
                        <p style="padding-left: 10px;">
                        <span style="font-weight: bold;">Purchase Requisition No:</span> 
                        <br/>
                        <span style="font-weight: bold;">Issued Date: </span> <?php echo $issued_date; ?><br/>
                        <span style="font-weight: bold;">Approved on: </span> <?php echo $apprv_date; ?><br/>
                        <span style="font-weight: bold;">Approved by: </span> <?php echo $apprv_by; ?></p><br>
                        <?php 
                    }
                    
                    ?>
                          <table class="table table-bordered" id="tableid">
                            <thead style="font-weight: bolder;text-align: center;">
                              <tr>
                                <td>Item Name</td>
                                <!-- <td>Description</td> -->
                                <td>Delivery Date</td>
                                <td>Quantity</td>
                                <!-- <td>Unit</td> -->
                                <td>Unit Price</td>
                                <td>Vendor</td>
                                <td>Remarks</td>
                              </tr>   
                            </thead>
                            <tbody>
							<?php
								$sql = "SELECT * FROM `department_requisition`, `requisition_overview` WHERE department_requisition.Requisition_id = '$Pr' AND requisition_overview.Id = '$Pr'";
								$res = mysqli_query($conn,$sql);
								$count = 0;
								$sum = 0;
								while($row = mysqli_fetch_assoc($res)){
									$code = $row['Item_code'];
							        $des = $row['Description'];
							        $date = $row['Date_wanted'];
							        $quantity = $row['Quantity'];
							        $unit = $row['Unit'];
							        $unit_price = $row['Unit_price'];
							        $vendor = $row['Vendor_Id'];
							        $remarks = $row['Remarks'];
							        $count += 1;
							        $sum += $quantity * $unit_price ;
							        ?>
								<tr>
                                  <td><?php echo $code; ?></td>
                                  <!-- <td><?php echo $des; ?></td> -->
                                  <td><?php echo $date; ?></td>
                                  <td><?php echo "$quantity" , "$unit" ; ?></td>
                                  <td><?php echo "Rs. ". $unit_price ?></td>
                                  <td><?php echo $vendor; ?></td>
                                  <td><?php echo $remarks; ?></td>
                                </tr>
                        <?php
                            }
						?>
                          </tbody>
                        </table>
                        <p style="padding-left: 10px;">

                            <span style="font-weight: bold;">No. of Types: </span><?php echo $count; ?><br>
                            <span style="font-weight: bold;">Total Cost: </span><?php echo "Rs. " ,$sum; ?>

                        </p>
                    	</div>
                     <?php
                     }else{
                            echo '<script type="text/javascript">';
                            echo 'alert("Sorry! Your PR Id is not Available");';
                            echo 'window.location="../views/blank.php";';
                            echo '</script>';
                          }
                     }
						?>   
                    </div>
                    <div id="editor"></div>
                </div>              
                 <!-- /. ROW  -->
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
	        doc.save('sample-file.pdf');
	    }
	});
	}
</script>
<script src="assets/js/jquery-1.10.2.js"></script>  
<script src="assets/js/jquery-ui-1.10.3.custom.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script type='text/javascript' src="assets/js/jspdf.min.js"></script>
<script type='text/javascript' src="assets/js/html2canvas.js"></script>
</body>
</html>	




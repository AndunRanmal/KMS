<head>
	<title>Purchase Requistion List</title>
</head>
<?php
include("../include/nav.php");
include("../include/manager.php");
?>
<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
            <ol class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li><a href="pr.php" class="active">Purchase Requisition</a></li>
            </ol>
            <div>
            	<table class="table table-hover">
				    <thead>
				    	<tr>
				        	<th></th>
				        	<th>Requistion Id</th>
				        	<th>Date Issued</th>
				        <!-- <th>Last Update</th> -->
				        
				        
				      	</tr>
				    </thead>
				    <tbody>
				    <?php
				      include("../config/config.php");
				      $sql = "SELECT * FROM  `requisition_overview`WHERE Status=0 ";
				      $result = mysqli_query($conn,$sql);
				      if(mysqli_num_rows($result)==0){
				        echo "There are no pending Purchase Requisition";
				      }else{
				        while($row = mysqli_fetch_assoc($result)){
				          $pr_id = $row["Id"];
				          $date = $row["Issued_date"];
				          // echo $pr_id;
				     

				    ?>
				    
				      	<tr>
				        	<td><i class="fa fa-file-word-o" aria-hidden="true"></i></td>
				        	<td><p><a href="reqveiw.php?ref=<?php echo $pr_id ?>"><?php echo $pr_id; ?></a></p></td>
				        	<td><a href="reqveiw.php?ref=<?php echo $pr_id ?>"><?php echo $date ?></a></td>
						</tr>
				      <?php
				   }
				      }
				      ?>
				    </tbody>
				</table>
            </div>
            </div>
        </div>
    </div>
</div>
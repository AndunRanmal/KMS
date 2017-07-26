<?php
include('../config/config.php'); // Connection to database
 
if($_POST) {
	$page = $_POST['page']; // Current page number
	$per_page = $_POST['per_page']; // Articles per page
	if ($page != 1) $start = ($page-1) * $per_page;
	else $start=0;
	
	// $select = $conn->query('SELECT Item_Name, Quantity, Category  FROM `stock` LIMIT '.$start.', '.$per_page.''); // Select article list from $start
	$select = ('SELECT *  FROM `po_overview` ORDER BY `Issued_Date` DESC LIMIT '.$start.', '.$per_page.'');
	$res = mysqli_query($conn,$select);
	$articleList = '<table id="mytable" class="table"><thead><th>Purchase Order</th><th>Vendor</th><th>Date Created</th>';
	while($row = mysqli_fetch_assoc($res)){
		$id = $row["O_Id"];
		$date = $row["Issued_date"];
		$vendor = $row["Vendor"];
		$articleList .= '<tr><td><a href="po_documemnt.php?ref='. $id.'">' . $id . '</a></td><td>'.$vendor.'</td><td>' . $date . '</td></tr></table';
	}
	
	$numArticles = ('SELECT count(*) FROM `po_overview`');
	$result = mysqli_query($conn,$numArticles);
	$count = mysqli_fetch_array($result);
	// echo $count[0];
	$numPage = ($count[0] / $per_page); // Total number of page
	// echo $numPage;
	// // We build the article list
	
	
	// We send back the total number of page and the article list
	$dataBack = array('numPage' => $numPage, 'articleList' => $articleList);
	$dataBack = json_encode($dataBack);
	
	echo $dataBack;
}
?>
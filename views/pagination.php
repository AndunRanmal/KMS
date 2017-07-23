<?php
include('../config/config.php'); // Connection to database
 
if($_POST) {
	$page = $_POST['page']; // Current page number
	$per_page = $_POST['per_page']; // Articles per page
	if ($page != 1) $start = ($page-1) * $per_page;
	else $start=0;
	
	// $select = $conn->query('SELECT Item_Name, Quantity, Category  FROM `stock` LIMIT '.$start.', '.$per_page.''); // Select article list from $start
	$select = ('SELECT Item_Name, Quantity, Category, Unit  FROM `stock` ORDER BY `Category` LIMIT '.$start.', '.$per_page.'');
	$res = mysqli_query($conn,$select);
	$articleList = '<table id="mytable" class="table table-bordered"><thead><th>Item Name</th><th>Quantity</th><th>Unit</th><th>Category</th>';
	while($row = mysqli_fetch_assoc($res)){
		$name = $row["Item_Name"];
		$quantity = $row["Quantity"];
		$unit = $row["Unit"];
		$category = $row["Category"];
		$articleList .= '<tr><td>' . $name . '</td><td>' . $quantity . '</td><td>'.$unit.'</td><td>' . $category . '</td></tr></table';
	}
	// $select->fetch_assoc();
	// $articleList = '';
	// while( $result = $select->fetch_assoc() ) {
	// 	$articleList .= '<div class="well well-sm">' . $result->Item_Name . '. <b>' . $result->Quantity . '</b><p>' . $result->Category . '</p></div>';
	// }
	// $numArticles = $conn->query('SELECT count(Item_id) FROM `stock`')->fetch_assoc(); // Total number of articles in the database
	$numArticles = ('SELECT count(*) FROM `stock`');
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
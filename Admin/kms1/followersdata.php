<?php
//setting header to json
header('Content-Type: text/html');

//database
/*
define('DB_HOST', '127.0.0.1');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'root123');
define('DB_NAME', 'mydb');

//get connection
$mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);


$mysqli = new mysqli("localhost","root","","company");

if(!$mysqli){
	die("Connection failed: " . $mysqli->error);
}

//query to get data from the table
$query = sprintf("SELECT userid, facebook, twitter, googleplus FROM followers");

//execute query
$result = $mysqli->query($query);
*/

// 
include("../../config/config.php");

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


$radioval = $_GET['radio'];

if( $radioval == 'year'){

$year = $_GET['year'];

$query = "SELECT MONTHNAME( Date ) as month, SUM( price ) as monthTotal
FROM `new_orders`
WHERE YEAR( Date ) = $year
GROUP BY MONTH( Date)
ORDER BY MONTH(Date)" ;
 $result = mysqli_query($conn,$query);

}
else if( $radioval == 'overroll'){

$query = "SELECT YEAR( Date ) as month, SUM( price ) as monthTotal
FROM `new_orders`
GROUP BY YEAR( Date )
ORDER BY YEAR(Date)" ;
$result = mysqli_query($conn,$query);



}
else if( $radioval == 'foodtype'){

$query = "SELECT Type_of_Menu as month, SUM( price ) as monthTotal
FROM `new_orders`
GROUP BY Type_of_Menu" ;
$result = mysqli_query($conn,$query);



}
/*
while($row = mysqli_fetch_assoc($result)) {
echo $row;
}
*/
//loop through the returned data
$data = array();


 while($row = mysqli_fetch_array($result)) {
    $data[] = $row;
 }



//free memory associated with result
//$result->close();

//close connection
//$mysqli->close();

//now print the data

echo json_encode($data);


?>
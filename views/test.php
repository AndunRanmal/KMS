<head>
  <title>Comparisson</title>
</head>
<?php
include("../config/config.php");
include("../include/nav.php");
include '../chef/connect.php';
// include("../include/stock_keeper.php");

  // $sql1 = "SELECT `Item_Name` AS label , `Quantity` AS y FROM `stock`";
  $id = $_GET["ref"];
  $sql2 = "SELECT `menu_name` AS label, sum(result) AS y from `total` WHERE `order_id`= $id GROUP BY `menu_id`";
  // echo $sql2;
  $sql1  = "SELECT `menu_name`, `Item_Name` AS label, `Quantity` AS y, sum(result)/1000  FROM `stock`, `total` WHERE stock.Item_Name = total.menu_name GROUP BY `menu_id`";
  $res = mysqli_query($conn,$sql2);
  $result = mysqli_query($conn,$sql1);
  $items = array();
  $stock = array();
  while($row2 = mysqli_fetch_assoc($result)){
    array_push($stock, $row2);
  }
  while($row = mysqli_fetch_assoc($res)){
    // $item_name = $row["x"];
    // // $quantity = $row["Quantity"];
    // // $unit = $row["Unit"];
    // // $category = $row["Category"];
    // // $vendor = $row["Vendor_Id"];
     // echo $item_name;
    // // echo $quantity;
    // // echo $unit;
    // // echo $category;
    // // echo $vendor;
    array_push($items, $row);
     
  }

?>

  <div class="col-md-12">
      <ol class="breadcrumb">
          <li><a href="../chef/chef.php">Home</a></li>
          <li><a href="../chef/bulkorder.php">Bulk Orders</a></li>
          
      </ol>
  <div id="chartContainer" style="height: 400px; width: 100%;">
  </div>

<script type="text/javascript">
  window.onload = function () {
    var chart = new CanvasJS.Chart("chartContainer",
    {
      title:{
        text: "Comparisson with the Current Stock",
        fontSize:30
      },
      toolTip: {
        shared: true
      },      
      axisY: {
        title: "Units"
      },
      data: [
      {
        type: "column",
        name: "Stock In Hand",
        legendText: "Stock In Hand",
        showInLegend: true,
        dataPoints: <?php echo json_encode($stock, JSON_NUMERIC_CHECK); ?>
      },
      {
        type: "column",
        name: "Items Needed",
        legendText: "Items Needed",
        showInLegend: true,
        dataPoints: <?php echo json_encode($items, JSON_NUMERIC_CHECK); ?>
      },
      
      // {
      //   type: "column",
      //   dataPoints: [
      //   { y: 185, label: "Italy"},
      //   { y: 128, label: "China"},
      //   { y: 246, label: "France"},
      //   { y: 272, label: "Great Britain"},
      //   { y: 296, label: "Soviet Union"},
      //   { y: 666, label: "USA"}
      //   ]
      // }
      ],

    });

chart.render();
}
</script>
<script type="text/javascript" src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<body>


<div class="container">

  <table class="table table-bordered">
    <thead>
      <th>Item Name</th>
      <th>Stock In Hand</th>
      <th>Total Ingredients Needed</th>
      <th>Amount Needs to Purchase</th>
      
    </thead>
    <?php
  $sql = "SELECT `Item_Name`, `Quantity`, stock.Unit ,sum(result) AS remain FROM `stock` , `total`  WHERE stock.Item_Name = total.menu_name AND total.order_id = $id GROUP BY `menu_id`";
  $res = mysqli_query($conn,$sql);
  while($row = mysqli_fetch_assoc($res)){
    $name = $row["Item_Name"];
    $quantity1 = $row["Quantity"];
    $quantity2 = $row["remain"];
    $unit = $row["Unit"];
   
  ?>
    <tbody>
      <tr>
        <td><?php echo $name ?></td>
        <td><?php echo $quantity1, $unit ?></td>
        <td><?php echo $quantity2, $unit ?></td>
        <?php 
        $remain = $quantity2-$quantity1;
        if($remain< 0){
          echo "<td style='background-color:#42f48c;font-weight:bold'>Stock is enough</td>";
        }else{
          echo "<td style='background-color:#fc6767;font-weight:bold'>".$remain."</td>" ;
        }
             ?>
        
      </tr>
    </tbody>
    <?php
  }
  ?>
  </table>
</div>




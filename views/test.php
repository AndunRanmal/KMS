<?php
include("../config/config.php");
include("../include/nav.php");
// include("../include/stock_keeper.php");

  // $sql1 = "SELECT `Item_Name` AS label , `Quantity` AS y FROM `stock`";
  $sql2 = "SELECT `menu_name` AS label, sum(result) AS y from `total` group by `menu_id`";
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
<script type="text/javascript">
  window.onload = function () {
    var chart = new CanvasJS.Chart("chartContainer",
    {
      title:{
        text: "Comparisson with the Current Stock"
      },
      data: [
      {
        type: "column",
        dataPoints: <?php echo json_encode($items, JSON_NUMERIC_CHECK); ?>
      },
      {
        type: "column",
        dataPoints: <?php echo json_encode($stock, JSON_NUMERIC_CHECK); ?>
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
      ]
    });

chart.render();
}
</script>
<script type="text/javascript" src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<body>
  <div id="chartContainer" style="height: 300px; width: 100%;">
  </div>

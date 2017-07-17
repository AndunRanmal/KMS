<head>
    <title>Customer Report</title>
    <script src="assets/js/html2canvas.js"></script>
</head>
<?php
include("../include/nav.php");
include("../include/chef.php");
?>
<!-- /. NAV SIDE  -->
<div id="page-wrapper" >
    <div id="page-inner">
        

            
                <div>
                <ol class="breadcrumb">
                    <li><a href="chef.html">Home</a></li>
                    <li><a href="counts.php">Bulk Order</a></li>
                    <li><a href="menulist.php">Menu List</a></li>
                </ol>
                </div>
			<div id="content">	
			<div class="col-md-12">
                <?php
                include './connect.php';
                $date = $_POST['date'];
                $count = $_POST['count'];
                $time= $_POST['time'];

                $person = $_POST['person'];
                $number = $_POST['number'];
                //$from = $_POST['from'];

                $sql4 = "DELETE  FROM insertitem";
                if (mysqli_query($conn, $sql4)) {
                    //echo "New record created successfully";
                } else {
                    echo "Error: " . $sql4 . "<br>" . mysqli_error($conn);
                }
                $sql5= "DELETE  FROM counts";
                if (mysqli_query($conn, $sql5)) {
                    //echo "New record created successfully";
                } else {
                    echo "Error: " . $sql5 . "<br>" . mysqli_error($conn);
                }

                $a = mysqli_query($conn, "SELECT item FROM insertitem");



                $checkBox = $_POST['menu'];

                if(isset($_POST['submit']))
                {

                    for ($i=0; $i<sizeof($checkBox); $i++)
                    {

                        $query="INSERT INTO insertitem (item) VALUES ('" . $checkBox[$i] . "')";
                        if (mysqli_query($conn, $query)) {

                        }else{
                            //mysqli_query($query) or die (mysqli_error() );
                        }
                    }


                }
                while($b = mysqli_fetch_array($a)){
                    $sql11 = "INSERT INTO item(Item_id,mark) VALUES('$b[0]','1')";
                    $sql22= "Update item SET Item_id='$b[0]', mark='1' WHERE Item_id='$b[0]'";

                    $result1 = mysqli_query($conn, "SELECT Item_id FROM item WHERE Item_id='$b[0]'");
                    $num_rows = mysqli_num_rows($result1);

                    if ($num_rows == 0) {
                        if (mysqli_query($conn, $sql11)) {
                            //echo "New record created successfully";
                        } else {
                            echo "Error: " . $sql11 . "<br>" . mysqli_error($conn);
                        }
                    }else{
                        if (mysqli_query($conn, $sql22)) {
                            //echo "New record created updated";
                        } else {
                            echo "Error: " . $sql22 . "<br>" . mysqli_error($conn);
                        }
                    }
                }




                $sql1 = "INSERT INTO counts(Date,Count,person,number,time) VALUES( '$date','$count','$person','$number','$time')";

                if (mysqli_query($conn, $sql1)) {
                    //echo "New record created successfully";
                } else {
                    echo "Error: " . $sql1 . "<br>" . mysqli_error($conn);
                }


                $a = mysqli_query($conn,"SELECT Count FROM counts");
                $b = mysqli_fetch_array($a);
                //echo $b[0];
                $c = mysqli_query($conn, "SELECT ingredients.menu_name, amount_of_ingredients.amount, ingredients.menu_id, ingredients.unit FROM ingredients INNER JOIN amount_of_ingredients ON ingredients.menu_id = amount_of_ingredients.menu_id INNER JOIN insertitem ON insertitem.item = amount_of_ingredients.Item_id;");
                $sql5= "DELETE  FROM total";
                if (mysqli_query($conn, $sql5)) {
                    //echo "New record created successfully";
                } else {
                    echo "Error: " . $sql5 . "<br>" . mysqli_error($conn);
                }
                while($d = mysqli_fetch_array($c)){
                    $result = ($d[1] * $b[0]);
                    //echo $result;
                    //echo $d[0].' '. $result.'<br>';
                    $sql11 = "INSERT INTO total(menu_id,menu_name,result,unit) VALUES('$d[2]','$d[0]','$result','$d[3]')";
                    if (mysqli_query($conn, $sql11)) {
                        //echo "New record created successfully";
                    } else {
                        echo "Error: " . $sql11 . "<br>" . mysqli_error($conn);

                    }

                }
                $a = mysqli_query($conn,"select Date,time, Count, person, number from counts");
                while($b = mysqli_fetch_array($a)){?>
                
                    <div class="col-md-6">
                        <tr><h3><b>Sanmira Renaissance Hotel</b></h3></tr>
                        <tr><h5>407 C, Matara Road, Unawatuna</h5></tr>
                        <tr><h5>077 322 7555</h5></tr>
                    </div>
                    <div class="col-md-3">
                        <tr>

                            <td align="left"><b>Date</b></td><br>

                        </tr>
                        <tr>
                            <td align="left"><b>Time Duration (hours)</b></td><br>

                        </tr>

                        <tr>
                            <td align="left"><b>Number Of Customers</b></td><br>
                        </tr>
                        <tr>
                            <td align="left"><b>Contact Person</b></td><br>
                        </tr>
                        <tr>
                            <td align="left"><b>Contact Number</b></td><br>
                        </tr>
                    </div>
                    <div class="col-md-3">
                        <?php
                        echo $b[0].'<br>';
                        echo $b[1].'<br>';
                        echo $b[2].'<br>';
                        echo $b[3].'<br>';
                        echo $b[4].'<br>';
                        ?>
                    </div>
                <?php
                }

                ?>

            

        </div>
        <!-- /. ROW  -->
        <hr />
        <div class="row">
            <div class="col-lg-3 col-md-3">

            </div>
            <div class="col-lg-4 col-md-4">
                <h4><b>Menu Name</b></h4>

            </div>
            <div class="col-lg-2 col-md-2">
                <h4><b>Unit Price</b></h4>
            </div>

            </div>
        <div class="row">
        <div class="col-lg-2 col-md-2">

        </div>
        <div class="col-lg-9 col-md-9">
           <?php
           $a = mysqli_query($conn,"SELECT Count FROM counts" );
           $b = mysqli_fetch_array($a);
            $d = mysqli_query($conn,"SELECT item.Item_name,amount,unit,unitprice  FROM item INNER JOIN insertitem ON item.Item_id = insertitem.item");
           $total = 0;
            while ($e = mysqli_fetch_array($d)){

            $result = ($e[3]*$b[0]);

                $total = $result + $total ;
                ?>

            <div class="col-lg-7 col-md-7">
                <?php
                echo $e[0].'<br>';?>
            </div>
            <?php
           echo $e[3].".00".'<br>' ;?>


            <?php
            }
           //echo $total;
            ?>
            </div>
        <div class="col-lg-2 col-md-2">
        </div>

        <!-- /. ROW  -->
    </div>
        <div class="row">
            <div class="col-lg-4 col-md-4">
            </div>
            <div class="col-lg-3 col-md-3">
                <br>
                <h4><b>Total</b></h4>
            </div>
            <div class="col-lg-1 col-md-1">
                <br>
                <b><?php
                echo $total.'.00';
                ?></b>
            </div>
            </div>
			</div>
            
        <div class="row">
            <div class="col-lg-5 col-md-5">
                </div>
            <div class="col-lg-2 col-md-2">

            <button onclick="download();" class="btn btn-primary fa fa-download" style="float: right;padding-bottom: 12px;" id="btn">Download</button>
            </div>
                <div class="col-lg-5 col-md-5">
            </div>
        </div>

        </div>
    <!-- /. PAGE INNER  -->
</div>
<!-- /. PAGE WRAPPER  -->
</div>
<?php
include("../include/footer.php");
?>

<!-- /. WRAPPER  -->
<!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
<!-- JQUERY SCRIPTS -->
<script type="text/javascript">
    function download(){
        html2canvas($("#content"), {
            onrendered: function(canvas) {
                var imgData = canvas.toDataURL(
                    'image/jpeg');
                var doc = new jsPDF('l', 'pt','a4');
                doc.addImage(imgData, 'jpeg',7 ,7 );
                doc.save('menu_list.pdf');
            }
        });
    }
</script>

<script src="assets/js/jquery-1.10.2.js"></script>
<!-- BOOTSTRAP SCRIPTS -->
<script src="assets/js/bootstrap.min.js"></script>
<!-- CUSTOM SCRIPTS -->
<script src="assets/js/custom.js"></script>
<script src="assets/js/html2canvas.js"></script>


</body>
</html>

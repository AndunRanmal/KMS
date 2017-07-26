<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<?php require 'connection.php';?>
<?php
            $error="";
            if ($con->connect_error) {
                die("Connection failed: " . $con->connect_error);
            }


            $sql = "SELECT * FROM  new_orders";
            $res = mysqli_query($con,$sql);
            

     ?>


    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Simple Responsive Admin</title>
        <!-- BOOTSTRAP STYLES-->
        <link href="assets/css/bootstrap.css" rel="stylesheet" />
        <!-- FONTAWESOME STYLES-->
        <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
        <link href="assets/css/custom.css" rel="stylesheet" />

        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>-->
        <!-- GOOGLE FONTS-->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />






    </head>

    <body>

        <div id="wrapper">
            <div class="navbar navbar-inverse navbar-fixed-top">
                <div class="adjust-nav">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                        <a class="navbar-brand" href="#">
                            <!-- <img src="assets/img/logo.png" />-->
                        </a>
                    </div>

                    <span class="logout-spn">
                  <a class="btn btn-primary" href="#" style="color:#fff;">LOGOUT</a>  

                </span>
                </div>
            </div>

            <!--side bar -->
            <nav class="navbar-default navbar-side" role="navigation">
                <div class="sidebar-collapse">
                    <ul class="nav" id="main-menu">



                        <li>
                            <a href="main.php"><i class="fa fa-desktop "></i>Dashboard </a>
                        </li>



                        <li>
                            <a href="orders.php"><i class="fa fa-edit "></i>New Orders  </a>
                        </li>






                        <li>
                            <a href="ui.php"><i class="fa fa-edit "></i>Notifications </a>
                        </li>

                        <li>
                            <a href="menu.php"><i class="fa fa-edit "></i>View Menus </a>
                        </li>


                    </ul>
                </div>

            </nav>
            <div id="page-wrapper">
                <div id="page-inner">
                    <div class="row">
                        <div class="col-md-12">
                            <h2>View orders </h2>

                        </div>
                    </div>
                    </br>
                    </br>
                    <table class="table table-bordered table-hover" id="tab_logic">
                        <thead>
                            <tr>

                                <th class="text-center">
                                    Meal type
                                </th>

                                <th class="text-center">
                                    Type of menu
                                </th>

                                <th class="text-center">
                                    Type of item
                                </th>

                                <th class="text-center">
                                    Date and Time
                                </th>
                                <th class="text-center">
                                    No of Customers
                                </th>
                                <th class="text-center">
                                    Quantity
                                </th>
                                <th class="text-center">
                                    Price (LKR.)
                                </th>
                                <th class="text-center">

                                </th>


                            </tr>
                        </thead>
                        <tbody id="dataTableOrder">

                            <?php
                            while($rq = mysqli_fetch_assoc($res)){
              
                        ?>
                                <tr>

                                    <td>
                                        <label class="form-control"><?php echo $rq["Meal_type"] ?></label>
                                    </td>

                                    <td>
                                        <label class="form-control"><?php echo $rq["Type_of_menu"] ?></label>
                                    </td>
                                    <td>
                                        <label class="form-control"><?php echo $rq["Type_of_item"] ?></label>
                                    </td>
                                    <td>
                                        <label class="form-control"><?php echo $rq["Date"]." ".$rq["Time"] ?></label>
                                    </td>
                                    <td>
                                        <label class="form-control"><?php echo $rq["Customers_count"] ?></label>
                                    </td>
                                    <td>
                                        <label class="form-control"><?php echo $rq["Quantity"] ?></label>
                                    </td>
                                    <td>
                                        <label class="form-control"><?php echo $rq["price"] ?></label>
                                    </td>
                                    <td>
                                        <CENTER><a id='delete_row' onclick="del(<?php echo $rq["Order_number"] ?>)" class=" btn btn-default btn-danger">Delete Order</a></CENTER>
                                    </td>
                                </tr>


                                <?php
 
                                }   
                        ?>



                                    <tr id='addr1'></tr>


                        </tbody>
                    </table>

                </div>

                <div class="footer">


                    <div class="row">
                        <div class="col-lg-12">
                            <a href="" style="color:#fff;" target="_blank"></a>
                        </div>
                    </div>
                </div>
                <script src="assets/js/jquery-1.10.2.js"></script>
                <!-- BOOTSTRAP SCRIPTS -->
                <script src="assets/js/bootstrap.min.js"></script>
                <!-- CUSTOM SCRIPTS -->
                <script src="assets/js/custom.js"></script>
                <script>
                    function del(x){
                        $.ajax({
                            method: "POST",
                            url: "insertTempOrder.php",
                            data: {
                                set: "delOrder",
                                unId:x
                            },
                            success: function(data) {
                                location.reload();

                            }
                        });
                    }
                </script>
    </body>

</html>
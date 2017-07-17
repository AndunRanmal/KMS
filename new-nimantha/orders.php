<!DOCTYPE html>
<html>
<!--xmlns="http://www.w3.org/1999/xhtml">-->

<?php require 'connection.php';?>
<?php
        $error="";
        if ($con->connect_error) {
            die("Connection failed: " . $con->connect_error);
        }


        $sql = "SELECT max(`id`)+1 as x FROM  temporder";
        $res = mysqli_query($con,$sql);
        $id=0;
        while($rq = mysqli_fetch_assoc($res)){
            $id = $rq["x"];
        }


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
        <!-- GOOGLE FONTS-->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
        <script src="assets/js/jquery-1.10.2.js"></script>
        <!-- BOOTSTRAP SCRIPTS -->
        <script src="assets/js/bootstrap.min.js"></script>
        <!-- CUSTOM SCRIPTS -->
        <script src="assets/js/custom.js"></script>
        <script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>

        <script>
             
        </script>
        <!-- <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>-->

        <!-- <script>
        $(document).ready(function() {
            $("#datepicker").datepicker();
        });
    </script> -->

        <script type="text/javascript">
            <!--
            // Form validation code will come here.
            function validate() {

                if (document.myForm.OrderNumber.value == "") {
                    alert("Please provide your First name!");
                    document.myForm.FirstName.focus();
                    return false;
                }

                if (document.myForm.LastName.value == "") {
                    alert("Please provide your Last name!");
                    document.myForm.LasttName.focus();
                    return false;
                }

                if (document.myForm.Gender.value == "") {
                    alert("Please provide your Gender!");
                    document.myForm.Gender.focus();
                    return false;
                }

                if (document.myForm.Birthday.value == "") {
                    alert("Please provide your Birthday!");
                    document.myForm.Birthday.focus();
                    return false;
                }






                if (document.myForm.Designation.value == "") {
                    alert("Please provide your Designation!");
                    document.myForm.Designation.focus();
                    return false;
                }



                if (document.myForm.Address.value == "") {
                    alert("Please provide your Address!");
                    document.myForm.Address.focus();
                    return false;
                }


                if (document.myForm.ContactNumber.value == "") {
                    alert("Please provide your Contact Number!");
                    document.myForm.ContactNumber.focus();
                    return false;
                }


                if (document.myForm.Email.value == "") {
                    alert("Please provide your Email!");
                    document.myForm.Email.focus();
                    return false;
                }


                return (true);




            }

            //-->


            $(document).ready(function() {
                var i = 1;
                $("#add_row").click(function() {
                    $('#addr' + i).html("<td><input name='Type of Menu" + i + "' type='text' placeholder='Type of Menu' class='form-control input-md'  /> </td><td><input  name='Type of Item" + i + "' type='text' placeholder='Type of Item'  class='form-control input-md'></td> <td><input  name='Quantity" + i + "' type='text' placeholder='Quantity'  class='form-control input-md'></td> <td><input  name='Price" + i + "' type='text' placeholder='Price'  class='form-control input-md'></td>");

                    $('#tab_logic').append('<tr id="addr' + (i + 1) + '"></tr>');
                    i++;
                });
                $("#delete_row").click(function() {
                    if (i > 1) {
                        $("#addr" + (i - 1)).html('');
                        i--;
                    }
                });

            });
        </script>










    </head>

    <body onload="getTable()">



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
                            <!-- <img src="assets/img/logo.png" /> -->
                        </a>
                    </div>

                    <span class="logout-spn">
                  <a  class="btn btn-primary" href="#" style="color:#fff;">LOGOUT</a>  

                </span>
                </div>
            </div>
            <!-- /. NAV TOP  -->
            <nav class="navbar-default navbar-side" role="navigation">
                <div class="sidebar-collapse">
                    <ul class="nav" id="main-menu">


                        <li>
                            <a href="main.html"><i class="fa fa-desktop "></i>Dashboard </a>
                        </li>



                        <li class="active-link">
                            <a href="orders.html"> <i class="fa fa-edit "></i>New Orders </a>
                        </li>





                        <li>
                            <a href="users.html"><i class="fa fa-edit "></i>User Profile </a>
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-edit "></i>Notifications </a>
                        </li>

                        <li>
                            <a href="menu.html"><i class="fa fa-edit "></i>   View Menus   </a>
                        </li>

                    </ul>
                </div>

            </nav>
            <!-- /. NAV SIDE  -->
            <div id="page-wrapper">
                <div id="page-inner">
                    <div class="row">
                        <div class="col-md-12">
                            <h2>New Orders </h2>
                        </div>
                    </div>
                    </br>




                    <div class="col-md-12">

                        <form class="form-inline" action="regi2.php" method="post" name="myForm">


                            <div class="col-md-6">
                                <!--<tr>
                                <td align="right"><b> Order Number : </b></br>
                                </td>
                                <td><input type="text" class="form-control" name="OrderNumber" /></td>
                            </tr> -->




                                <tr>
                                    <select id="" name="Meal_Type" class="form-control"> 
                                                            <option value="Breakfast">Breakfast</option>
                                                            <option value="Lunch">Lunch</option>
                                                            <option value="Dinner">Dinner</option>
                                                            
                                </select>

                                </tr>
                                </br>
                                </br>
                                <tr>
                                    <div class="row">

                                        <div class="col-md-6">
                                            <td align="right"><b>Date  :</b> </br>
                                            </td>
                                            <td><input type="Date" class="form-control" name="Date" /></td>
                                        </div>
                                        <div class="col-md-6">
                                            <td align="right"><b>Time  :</b> </br>
                                            </td>
                                            <td><input type="Time" class="form-control" name="Time" /></td>
                                        </div>
                                    </div>


                                </tr>

                                </br>

                                <tr>
                                    <input class="form-control" type="hidden" id="tempId" name="tempId" data-parsley-required="true" value="<?php echo $id?>" />
                                    <td align="right"><b>Number of Customers : </b> </br>
                                    </td>
                                    <td><input type="text" class="form-control" name="Customers" /> </td>
                                </tr>
                                </br>
                                </br>

                                <tr>
                                    <!-- Trigger the modal with a button -->
                                    <button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#myModal1">Add Order</button>




                                    <div class="modal fade" id="myModal1" role="dialog">


                                        <div class="modal-dialog modal-md">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">New Order</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <!-- begin col-6 -->
                                                        <div class="col-md-12">
                                                            <!-- begin panel -->
                                                            <div class="panel panel-inverse" data-sortable-id="form-validation-1">
                                                                <div class="panel-body panel-form">
                                                                    <center>

                                                                        <div class="form-group">
                                                                            <label class="control-label col-md-6 col-sm-6" for="email">Type of  Menu :</label>
                                                                            <div class="col-md-6 col-sm-6">
                                                                                <select class="form-control" id="Menu_Type" name="Menu_Type">
                                                                                <option value="Sandwiches">Sandwiches</option>
                                                                                <option value="Desserts">Desserts</option>
                                                                                <option value="Light Meals">Light Meals</option>
                                                                                <option value="Appetizers">Appetizers</option>
                                                                                <option value="Spicy Bites">Spicy Bites</option>
                                                                                <option value="Soups">Soups</option>
                                                                                <option value="Salads">Salads</option>
                                                                                <option value="Poultry">Poultry</option>
                                                                                <option value="SeaFood">Sea Food</option>
                                                                            </select>
                                                                            </div>
                                                                        </div>
                                                                        <hr>
                                                                        <div class="form-group">
                                                                            <label class="control-label col-md-6 col-sm-6" for="email">Type of Item :</label>
                                                                            <div class="col-md-6 col-sm-6">
                                                                                <select class="form-control" id="Item_Type" name="Item_Type">
                                                                                <option value="">Select a Menu</option>

                                                                            </select>
                                                                            </div>
                                                                        </div>


                                                                        <hr>
                                                                        <div class="form-group">
                                                                            <label class="control-label col-md-6 col-sm-6" for="email">Quantity :</label>
                                                                            <div class="col-md-6 col-sm-6">
                                                                                <input class="form-control" type="number" name="quantity" id="quantity" min="1" max="" />
                                                                            </div>
                                                                        </div>
                                                                        <hr>
                                                                        <div class="form-group">
                                                                            <label class="control-label col-md-6 col-sm-6" for="email">Price :</label>
                                                                            <div class="col-md-6 col-sm-6">
                                                                                <input class="form-control" type="text" name="total" id="Total" value='' readonly />
                                                                            </div>
                                                                        </div>
                                                                        <hr>
                                                                        <div class="form-group">
                                                                            <div class="col-md-12 col-sm-12">
                                                                                <input type="button" class="btn btn-primary" id="tempOrder" name="updateAcco" value="Insert the Order">
                                                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                                                                            </div>



                                                                        </div>
                                                                    </center>

                                                                </div>
                                                            </div>
                                                            <!-- end panel -->
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </tr>
                                </br>
                                </br>

                                <tr>

                                    <div class="container">
                                        <div class="row clearfix">
                                            <div class="col-md-12">
                                                <table class="table table-bordered table-hover" id="tab_logic">
                                                    <thead>
                                                        <tr>

                                                            <th class="text-center">
                                                                Type of Menu
                                                            </th>

                                                            <th class="text-center">
                                                                Type of Item
                                                            </th>

                                                            <th class="text-center">
                                                                Quantity
                                                            </th>

                                                            <th class="text-center">
                                                                Price
                                                            </th>
                                                            <th class="text-center">

                                                            </th>


                                                        </tr>
                                                    </thead>
                                                    <tbody id="dataTableOrder">
                                                        
<!--
                                                        <tr>

                                                            <td>
                                                                <label class="form-control">Sandwiches</label>
                                                            </td>

                                                            <td>
                                                                <label class="form-control">Sandwiches</label>
                                                            </td>

                                                            <td>
                                                                <label class="form-control">550</label>
                                                            </td>

                                                            <td>
                                                                <label class="form-control">500.00</label>
                                                            </td>
                                                            <td>
                                                                <a id='delete_row' class="pull-right btn btn-default btn-danger">Delete Order</a>
                                                            </td>
                                                        </tr>
-->

                                                        <tr id='addr1'></tr>


                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </tr>
                                </br>

                                <tr>
                                    <td align="right"></td>
                                    <td> <input type="submit" class="btn btn-default btn-success" name="submit" value="Submit" /></td>
                                </tr>
                                </br>
                                </br>
                            </div>

                        </form>
                    </div>
                    <!-- <div class="col-md-6"> <img src="assets/img/orders.jpg" style="width:100%; height:150%;"> </div>-->





                </div>
                <!-- /. PAGE INNER  -->
            </div>
            <!-- /. PAGE WRAPPER  -->
        </div>
        <div class="footer">


            <div class="row">
                <div class="col-lg-12">

                </div>
            </div>
        </div>
        <script>
            $('#Menu_Type').change(function() {
                $.ajax({
                    method: "POST",
                    url: "select_item.php",
                    data: {
                        type: "menu",
                        menu: $(this).val()
                    },
                    success: function(data) {
                        $('#Item_Type').html(data);
                        
                    }
                });
            });

            $('#tempOrder').click(function() {
                var Menu_Type = $('#Menu_Type').val();
                var Item_Type = $('#Item_Type').val();
                var quantity = $('#quantity').val();
                var Total = $('#Total').val();
                var tempId = $('#tempId').val();
                //tempId


                $.ajax({
                    method: "POST",
                    url: "insertTempOrder.php",
                    data: {
                        set: "insert",
                        menu: Menu_Type,
                        Item: Item_Type,
                        qty: quantity,
                        tot: Total,
                        tempId: tempId
                    },
                    success: function(data) {
//                        $('#myModal1').modal('toggle');
                        $("#myModal1 .close").click();
                        $('body').removeClass('modal-open');
                        $('.modal-backdrop').remove();
                        getTable();
                    }
                });

            });


            $('#quantity').change(function() {
                $.ajax({
                    method: "POST",
                    url: "get_total.php",
                    data: {
                        type: "menu",
                        no_of: $(this).val(),
                        item: $("#Item_Type").val()
                    },
                    success: function(data) {
                        console.log(data);
                        //                    $('#Total').html(data);
                        $('#Total').val(data);
                    }
                });
            });

            $(document).ready(function() {
              // getTable();
            });
            
            
            function getTable(){
                var tempId = $('#tempId').val();
                $.ajax({
                    method: "POST",
                    url: "insertTempOrder.php",
                    data: {
                        set: "table",
                        tempId: tempId
                    },
                    success: function(data) {
                        $('#dataTableOrder').html(data);
                    }
                });
            }
            
            function del(id){
                var tempId = $('#tempId').val();
                //alert(id);
                $.ajax({
                    method: "POST",
                    url: "insertTempOrder.php",
                    data: {
                        set: "del",
                        unId:id,
                        tempId: tempId
                    },
                    success: function(data) {
                        getTable();
                        
                    }
                });
            }
            
            
           
            
            
        </script> 

        <!-- /. WRAPPER  -->
        <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
        <!-- JQUERY SCRIPTS -->
        <script src="assets/js/jquery-1.10.2.js"></script>
        <!-- BOOTSTRAP SCRIPTS -->
        <script src="assets/js/bootstrap.min.js"></script>
        <!-- CUSTOM SCRIPTS -->
        <script src="assets/js/custom.js"></script>


    </body>

</html>
<!DOCTYPE html>
<html>
<!--xmlns="http://www.w3.org/1999/xhtml">-->

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Simple Responsive Admin</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="../views/assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="../views/assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="../views/assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <script src="../views/assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="../views/assets/js/bootstrap.min.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="../views/assets/js/custom.js"></script>
    <script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js" ></script>

    
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
   
    
    
   
   </script>  
    
    
    
    
    
   
    
    
    
    
    
    
    
</head>

<body>

<?php
include("../include/nav.php");
include("../include/cashier.php");

?>

    
        
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
                            <tr>
                                <td align="right"><b> Order Number : </b></br>
                                </td>
                                <td><input type="text" class="form-control" name="OrderNumber" /></td>
                            </tr>

                            </br>
                            </br>

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

                                    <div class="col-md-4">
                                        <b> Type of  Menu </b>
                                        </br>
                                        <select id="Menu_Type" name="Menu_Type" class="form-control"> 
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
                                    <div class="col-md-4">
                                        <td allign="right"> <b> Type of Item </b> </td>
                                        </br>
                                        <td> <select id="Item_Type" class="form-control" name="Item_Type" style="width:100px;"> 
<!--
                                                   <option id="items" value="Cocacola">Beverages</option>
                                                   <option value="Orange Juice">Appetizers</option>
-->





                                       </select> </td>
                                    </div>
                                    <div class="col-md-4">
                                        <td align="right"><b>Quantity  :</b> </br>
                                        </td>
                                        </div>
<tr>
                                    <div class="col-md-4">
                                        <td><input type="Text" class="form-control"  name="quantity" id="quantity" min="1" max="" /> <b>Price </b> </td> </br>
<td><input type="text" class="form-control" name="total" id="Total">  </td>
</div>
</tr>

                                </div>

                            </tr>
                            </br>

                            <tr>
                                <div class="row">

                                    <div class="col-md-6">
                                        <td align="right"><b>Date  :</b> </br>
                                        </td>
                                        <td><input type="Date" class="form-control" name="Date"  /></td>
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
                                <td align="right"><b>Number of Customers : </b> </br>
                                </td>
                                <td><input type="text" class="form-control" name="Customers" /> </td>
                            </tr>
                            </br>
                            </br>










                            <tr>
                                <td align="right"></td>
                                <td> <input type="submit" name="submit" value="Submit" /></td>
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
    $('#Menu_Type').change(function(){
            $.ajax({
                method: "POST",
                url: "http://localhost/KMS/KMS/new-nimantha/select_item.php",
                data:{
                    type:"menu",
                    menu:$(this).val()
                    },
                success:function(data){
                    console.log(data);
                    $('#Item_Type').html(data);
               }
            });
    });
    $('#quantity').change(function(){
            $.ajax({
                method: "POST",
                url: "http://localhost/KMS/KMS/new-nimantha/get_total.php",
                data:{
                    type:"menu",
                    no_of:$(this).val(),
                    item:$("#Item_Type").val()
                    },
                success:function(data){
                    console.log(data);
//                    $('#Total').html(data);
                    $('#Total').val(data);
               }
            });
    });
   
</script>

    <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="../views/assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="../views/assets/js/bootstrap.min.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="../views/assets/js/custom.js"></script>


</body>

</html>
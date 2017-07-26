<?php
include("../include/nav.php");
include("../include/cashier.php");
include("../config/config.php");
?>

		<div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
	                    <ol class="breadcrumb">
	                    	<li><a href="main.php">Home</a></li>
	                    	<li><a href="orders2.php">PR</a></li>
	                    </ol>
	                    <div>
	                    	<ul class="nav nav-tabs">
	                            <li class="active"><a href="#new" data-toggle="tab">New Order</a></li>
	                            <li class=""><a href="#old" data-toggle="tab">Placed Orders</a></li>
                        	</ul>
                        	<div class="tab-content">
                            	<div class="tab-pane fade active in" id="new">
                            		<form class="form-inline" action="regi2.php" method="post" name="myForm">
                            			<div class="col-md-6"><br>
                            				<tr>
                                    			<select id="" name="Meal_Type" class="form-control"> 
                                                    <option value="Breakfast">Breakfast</option>
                                                    <option value="Lunch">Lunch</option>
                                                    <option value="Dinner">Dinner</option>
                                                            
                                				</select>
                                			</tr>
                                			<tr>
                                				<div class="row">
                                					<div class="col-md-6"><br>
                                						<td align="right"><b>Date  :</b></td><br/>
                                            			<td><input type="Date" class="form-control" name="Date" /></td>
                                					</div>
                                					<div class="col-md-6"><br/>
			                                            <td align="right"><b>Time  :</b></td><br/>
			                                            <td><input type="Time" class="form-control" name="Time" /></td>
			                                        </div>
                                				</div>
                                			</tr><br>
                                			<tr>
			                                    <input class="form-control" type="hidden" id="tempId" name="tempId" data-parsley-required="true" value="<?php echo $id?>" />
			                                    <td align="right"><b>Number of Customers : </b></td><br/>
			                                    <td><input type="text" class="form-control" name="Customers" /> </td>
			                                </tr>
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

			                                </tr><br>
			                                <tr>
			                                	<!-- <div class="container"> -->
			                                        <div class="row clearfix">
			                                            <div class="col-md-9">
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
                            			</div>
                            		</form>
                            	</div>
                           	</div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
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
   <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.js"></script>
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
                   <!--      <img src="assets/img/logo.png" />
 -->
                    </a>
                    
                </div>
           
                <span class="logout-spn" >
                  <a class="btn btn-primary" href="#" style="color:#fff;">LOGOUT</a>  

                </span>
            </div>
        </div>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                 


                    <li class="active-link">
                        <a href="index.html" ><i class="fa fa-desktop "></i>Profile <!-- <span class="badge">Included</span> --></a>
                        <img src="assets/img/man.jpeg" height="200px" width="250px" style="padding-bottom: 15px;
    padding-left: 15px;">
                    </li>
                   

                    <li>
                        <a href="ui.html"><i class="fa fa-table "></i> Notifications  <span class="badge">Included</span></a>
                    </li>
                    <li>
                        <a href="blank.html"><i class="fa fa-edit "></i>Blank Page  <span class="badge">Included</span></a>
                    </li>


                    <li>
                        <a href="#"><i class="fa fa-qrcode "></i>My Link One</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-bar-chart-o"></i>My Link Two</a>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-edit "></i>My Link Three </a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-table "></i>My Link Four</a>
                    </li>
                     <li>
                        <a href="#"><i class="fa fa-edit "></i>My Link Five </a>
                    </li>
                    
                </ul>
                            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-lg-12">
                     <h2>STOCK-KEEPER DASHBOARD</h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                <div class="row">
                    <div class="col-lg-12 ">
                        <div class="alert alert-info">
                             <strong>Welcome Jhon Doe ! </strong> You Have No pending Task For Today.
                        </div>
                       
                    </div>
                    </div>
                  <!-- /. ROW  --> 
                            <div class="row text-center pad-top">
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="#" id="trigger">
 <i class="fa fa-circle-o-notch fa-5x"></i>
                      <h4>Purchase Requistion</h4>
                      </a>
                      </div>
                     
                     
                  </div> 

                <!-- Modal -->
				<div id="myModal" class="modal fade" role="dialog">
				  	<div class="modal-dialog" style="width:1100px">

				    <!-- Modal content-->
					    <div class="modal-content">
					        <div class="modal-header">
					        	<button type="button" class="close" data-dismiss="modal">&times;</button>
					          	<h4 class="modal-title">Purchase Requsition</h4>
					        </div>
					        <div class="modal-body">
					        	<!-- <p>Some text in the modal.</p> -->
					        	<form>
					        	<div class="table-responsive">
					        		<table class="table-bordered">
					        			<thead>
					        				<!-- <td>Date</td> -->
					        				<td>Item Code</td>
					        				<td>Description</td>
					        				<td>Quntity</td>
					        				<td>Unit</td>
					        				<td>Delivary Date</td>
					        				<td>Vendor</td>
					        				<td>Remarks</td>
					        			</thead>
					        			<tbody>
					        				<tr>
					        					<!-- <td><input type="Date" name="date" value=""></td> -->
					        					<td><input type="text" name="item-code"></td>
					        					<td><input type="text" name="description"></td>
					        					<td><input type="number" name="quentity"></td>
					        					<td><select>
					        						<option>kg</option>
					        						<option>l</option>
					        						<option>pcs</option>
					        					</select></td>
					        					<td><input type="date" name="delivary-date"></td>
					        					<td><input type="text" name="vendor"></td>
					        					<td><input type="text" name="remarks"></td>
					        				</tr>
					        				<tr>
					        					<!-- <td><input type="Date" name="date" value=""></td> -->
					        					<td><input type="text" name="item-code"></td>
					        					<td><input type="text" name="description"></td>
					        					<td><input type="number" name="quentity"></td>
					        					<td><select>
					        						<option>kg</option>
					        						<option>l</option>
					        						<option>pcs</option>
					        					</select></td>
					        					<td><input type="date" name="delivary-date"></td>
					        					<td><input type="text" name="vendor"></td>
					        					<td class="table-cell-text"><input type="text" name="remarks"></td>
					        				</tr>
					        			</tbody>
					        		</table>
					        		</div>
					        		<input type="submit" name="submit" value="Submit" class="btn-primary">
					        	</form>
					        </div>
					        <div class="modal-footer">
					        	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					        </div>
					    </div>

				  </div>
				</div>                


					<script type="text/javascript">
						$('#trigger').click(function(){
							$('#myModal').modal('show');
							console.log("Modal shows");
						});

						$('#myModal').on('shown.bs.modal', function () {
						    $(this).find('.modal-dialog').css({width:'auto',
						                               height:'auto', 
						                              'max-height':'100%'});
						});
						
					</script>
					<script type="text/javascript">
						$(".table-cell-text").keyup(function (event) {
						    if (event.keyCode == 13) {
						        $(this).closest('tr').replaceWith('<tr>'+
						            '<td>' + '<input type="text" name="description">'+ '</td>' +
						            '<td>' +
						            '<input type="number" name="quentity">' +
						            '</td>' +
						            '<td>' +
						            '<select>'+ '<option>' +'kg'+'</option>'+
					        						'<option>'+'l'+'</option>'
					        						'<option>'+'pcs'+'</option>' +
					        		'</select>'+
					        		'<td>'+'<input type="date" name="delivary-date">'+'</td>'+
					        		'<td>'+'<input type="text" name="vendor">'+'</td>'+
					        		'<td>'+'<input type="text" name="remarks">'+'</td>'+
						            '</td></tr>');
						    }
						});
					</script>                 
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="blank.html" >
 <i class="fa fa-envelope-o fa-5x"></i>
                      <h4>Mail Box</h4>
                      </a>
                      </div>
                     
                     
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="blank.html" >
 <i class="fa fa-user fa-5x"></i>
                      <h4>Register user</h4>
                      </a>
                      </div>
                     
                     
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="employee.php" >
 <i class="fa fa-users fa-5x"></i>
                      <h4>Employee</h4>
                      </a>
                      </div>
                     
                     
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="blank.html" >
 <i class="fa fa-key fa-5x"></i>
                      <h4>Admin </h4>
                      </a>
                      </div>
                     
                     
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="blank.html" >
 <i class="fa fa-comments-o fa-5x"></i>
                      <h4>Support</h4>
                      </a>
                      </div>
                     
                     
                  </div>
              </div>
                 <!-- /. ROW  --> 
                <div class="row text-center pad-top">
                 
                 <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="blank.html" >
 <i class="fa fa-clipboard fa-5x"></i>
                      <h4>view reports</h4>
                      </a>
                      </div>
                     
                     
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="blank.html" >
 <i class="fa fa-gear fa-5x"></i>
                      <h4>Settings</h4>
                      </a>
                      </div>
                     
                     
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="blank.html" >
 <i class="fa fa-wechat fa-5x"></i>
                      <h4>Live Talk</h4>
                      </a>
                      </div>
                     
                     
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="blank.html" >
 <i class="fa fa-bell-o fa-5x"></i>
                      <h4>Notifications </h4>
                      </a>
                      </div>
                     
                     
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="blank.html" >
 <i class="fa fa-rocket fa-5x"></i>
                      <h4>Launch</h4>
                      </a>
                      </div>
                     
                     
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="blank.html" >
 <i class="fa fa-user fa-5x"></i>
                      <h4>Register User</h4>
                      </a>
                      </div>
                     
                     
                  </div> 
              </div>   
                  <!-- /. ROW  -->    
                 <div class="row text-center pad-top">
                   
                 

                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="blank.html" >
 <i class="fa fa-lightbulb-o fa-5x"></i>
                      <h4>New Issues</h4>
                      </a>
                      </div>
                     
                     
                  </div>

                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="#" >
 <i class="fa fa-comments-o fa-5x"></i>
                      <h4>Support</h4>
                      </a>
                      </div>
                     
                     
                  </div>
                     <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="blank.html" >
 <i class="fa fa-circle-o-notch fa-5x"></i>
                      <h4>Check Data</h4>
                      </a>
                      </div>
                     
                     
                  </div>
              </div>
                 <!-- /. ROW  -->  
   
                  <!-- /. ROW  -->  

                 <!-- /. ROW  -->   
				  <div class="row">
                    <div class="col-lg-12 ">
					<br/>
                        <div class="alert alert-danger">
                             <strong>Want More Icons Free ? </strong> Checkout fontawesome website and use any icon <a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icons/">Click Here</a>.
                        </div>
                       
                    </div>
                    </div>
                  <!-- /. ROW  --> 
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
    <div class="footer">
      
    
            <div class="row">
                <div class="col-lg-12" >
                    &copy;  2014 yourdomain.com | Design by: <a href="http://binarytheme.com" style="color:#fff;" target="_blank">www.binarytheme.com</a>
                </div>
            </div>
        </div>
          

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

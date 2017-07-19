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
</head>
<?php include("../../include/nav.php"); ?>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                 


                    <li>
                        <a href="index.html" ><i class="fa fa-desktop "></i>Dashboard <!-- <span class="badge">Included</span> --></a>
                        <!-- <img src="assets/img/man2.png" height="200px" width="250px" style="border-radius: 50%;border: 1px solid #ddd;padding: 5px;"> -->
                    </li>
                   

                    <li>
                        <a href="ui.html"><i class="fa fa-table "></i> Notifications </a>
                    </li>
                    <li>
                        <a href="purreq.html"><i class="fa fa-edit "></i>Report Generation </a>
                    </li>


                    <li>
                        <a href="viewStaff.php"><i class="fa fa-qrcode "></i>View Staff</a>
                    </li>
                    <li>
                        <a href="charttype1.php"><i class="fa fa-bar-chart-o"></i>Edit Staff</a>
                    </li>

                    <!-- <li>
                        <a href="compareyear.php"><i class="fa fa-edit "></i></a>
                    </li> -->
                    <li>
                        <a href="#"><i class="fa fa-table "></i>Profile Setting</a>
                    </li>
                    
                </ul>
                            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <!--<h2>BLANK PAGE </h2>-->   
                    </div>
                </div>










                <form action="chart.html" method="get" style="margin-top: 80px;margin-left: 40px;">


      <div id="radio">
        <label style="color:black"> see the reoprt by   :</label>
        <input name ="radio" name="type" type ="radio"  value="overroll" style="font-color:black">overroll
        <input name ="radio" name="type" type="radio" value="year" style="color:black">year
        <input name ="radio" name="type" type="radio" value="foodtype" style="color:black">type
        

      </div>


<label id="sentense" style="color:black"> select the year to generate report :</label>
<select id="year" name="year">
  <script>
  var myDate = new Date();
  var year = myDate.getFullYear();
  for(var i = 2007; i < year+1; i++){
    document.write('<option value="'+i+'">'+i+'</option>');
  }
  </script>


</select>

</br>
</br>
</br>
</br>

<input type="submit" value="Submit">


</form>    









                 <!-- /. ROW  -->
                  <hr />
              
                 <!-- /. ROW  -->           
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
    <div class="footer">
      
    
             <div class="row">
                <div class="col-lg-12" >
                    &copy;  2014 yourdomain.com | Design by: <a href="http://binarytheme.com" style="color:#fff;"  target="_blank">www.binarytheme.com</a>
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

    <script type="text/javascript" src="js/year.js"></script>
    
   
</body>
</html>

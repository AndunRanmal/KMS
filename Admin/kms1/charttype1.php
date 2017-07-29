<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Report Types</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
   <style type="text/css">
   	@import url('https://fonts.googleapis.com/css?family=Lato');

/*body, html{
  height: 100%;
  background: #222222;
	font-family: 'Lato', sans-serif;
}

.container{
  display: block;
  position: relative;
  margin: 40px auto;
  height: auto;
  width: 500px;
  padding: 20px;
}

h2 {
	color: #AAAAAA;
}

.container ul{
  list-style: none;
  margin: 0;
  padding: 0;
	overflow: auto;
}

ul li{
  color: #AAAAAA;
  display: block;
  position: relative;
  float: left;
  width: 100%;
  height: 100px;
	border-bottom: 1px solid #333;
}

ul li input[type=radio]{
  position: relative;
  color: red; imporatant!

/*  visibility: hidden;*/
}

ul li label{
  display: block;
  position: relative;
  font-weight: 300;
  font-size: 1.35em;
  padding: 25px 25px 25px 80px;
  margin: 10px auto;
  height: 30px;
  z-index: 9;
  cursor: pointer;
  -webkit-transition: all 0.25s linear;
}

ul li:hover label{
	color: #000;
}

ul li .check{
  display: block;
  position: absolute;
  border: 5px solid #AAAAAA;
  border-radius: 100%;
  height: 25px;
  width: 25px;
  top: 30px;
  left: 20px;
	z-index: 5;
	transition: border .25s linear;
	-webkit-transition: border .25s linear;
}

ul li:hover .check {
  border: 5px solid #000;
}

ul li .check::before {
  display: block;
  position: absolute;
	content: '';
  border-radius: 100%;
  height: 15px;
  width: 15px;
  top: 5px;
	left: 5px;
  margin: auto;
	transition: background 0.25s linear;
	-webkit-transition: background 0.25s linear;
}

input[type=radio]:checked ~ .check {
  border: 5px solid #0DFF92;
}

input[type=radio]:checked ~ .check::before{
  background: #0DFF92;
}

input[type=radio]:checked ~ label{
  color: #0DFF92;
}*/



/* Styles for alert... 
by the way it is so weird when you look at your code a couple of years after you wrote it XD */


   </style>

</head>
<?php include("../../include/nav.php"); ?>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                 


                    <li>
                        <a href="../index.php" ><i class="fa fa-desktop "></i>Dashboard <!-- <span class="badge">Included</span> --></a>
                        <!-- <img src="assets/img/man2.png" height="200px" width="250px" style="border-radius: 50%;border: 1px solid #ddd;padding: 5px;"> -->
                    </li>
                   

                    <!-- <li>
                        <a href="ui.html"><i class="fa fa-table "></i> Notifications </a>
                    </li> -->
                    <li>
                        <a href="charttype1.php"><i class="fa fa-edit "></i>Report Generation </a>
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
                    <ol class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="stock_handling.php">Stock Handling</a></li>
                </ol>
                     <!--<h2>BLANK PAGE </h2>-->   
                    </div>
                </div>










    <form action="chart.html" method="get" style="margin-top: 80px;margin-left: 40px;">

    <div id="radio">
        <h3>Generate Reports</h3>
        <input name ="radio" name="type" type ="radio"  value="overroll" style="font-color:black">overroll<br>
        <input name ="radio" name="type" type="radio" value="year" style="color:black">year<br>
        <input name ="radio" name="type" type="radio" value="foodtype" style="color:black">type
        

      </div>


<label id="sentense" style="color:black"> select the year to generate report :</label>
<select id="year" class="form-control" style="max-width: 100px;" name="year">
  <script>
  var myDate = new Date();
  var year = myDate.getFullYear();
  for(var i = 2007; i < year+1; i++){
    document.write('<option value="'+i+'">'+i+'</option>');
  }
  </script>


</select>

</br>
<!-- </br>
</br>
</br> -->

<input type="submit" class="btn btn-info" value="Submit">


</form>    


<div class="container">
	
	
	
  <!-- <ul>
   <li>
   
   <input id="overall" name ="radio" name="type" type ="radio"  value="overroll">
   <label for="overeall">Overall</label></li>
    <li>    
    
    <input id="year" name ="radio" name="type" type="radio" value="year" >'
    <label for="year">Year</label>
    </li>
    <li>    
    
    <input id="type" name ="radio" name="type" type="radio" value="foodtype">
    <label for="type">Type</label>
    </li> -->
 <!--  <li>
    <input type="radio" id="f-option" name="selector">
    <label for="f-option">Pizza</label>
    
    <div class="check"></div>
  </li>
  
  <li>
    <input type="radio" id="s-option" name="selector">
    <label for="s-option">Bacon</label>
    
    <div class="check"><div class="inside"></div></div>
  </li>
  
  <li>
    <input type="radio" id="t-option" name="selector">
    <label for="t-option">Cats</label>
    
    <div class="check"><div class="inside"></div></div>
  </li> -->
<!-- </ul> -->
</div>










                 <!-- /. ROW  -->
                  <hr />
              
                 <!-- /. ROW  -->           
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
    <?php
include("../../include/footer.php");
    ?>
          

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

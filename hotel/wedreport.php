<!DOCTYPE html>
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
    <script  src="assets/js/canvasjs.min.js"></script>

  
 
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    


    
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
                 



                   

                    <li>
                        <a href="ui.html"><i class="fa fa-table "></i> Notifications </a>
                    </li>
                     <li>
                        <a href="purreq.php"><i class="fa fa-edit "></i>Purchase Requision </a>
                    </li>


                    <li>
                        <a href="purorde.php"><i class="fa fa-qrcode "></i>Purchase Order</a>
                    </li>
                    <li>
                        <a href="viewrep.php"><i class="fa fa-bar-chart-o"></i>Genarate Reports</a>
                    </li>

                    <li>
                        <a href="supdeta.php"><i class="fa fa-edit "></i>Supplier Details </a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-table "></i>Profile Setting</a>
                    </li>
                     
                    
                </ul>
                            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner" >
                <div class="row">
                    <div class="col-md-12">
                    <ol class="breadcrumb">
                    <li><a href="manager.php">Home</a></li>
                     <li class="active">WEDDINGS DETAILS</li>
                     <h2>WEDDINGS DETAILS </h2>   
                    </div>
                </div>               
                 <!-- /. ROW  -->
                  <hr />
                <div class="row">
                    <div class="col-lg-12 ">
                      <!--  <div class="alert alert-info">
                             <strong>Welcome Jhon Doe ! </strong> You Have No pending Task For Today.
                        </div> -->
                       
                    </div>
                    </div>
                    
                  <!-- /. ROW  --> 
                            
                    
                    <div id="chartContainer1" style="height: 300px; width: 100%; float: left;" ></div>
                    
                 <!-- /. ROW  -->   
          <div class="row">
                        

                    </div>
                  <!-- /. ROW  --> 
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
    <div class="footer">
      
    
            <div class="row">
                
            </div>
        </div>
          
        

      
      <script type="text/javascript">
  
    var chart1 = new CanvasJS.Chart("chartContainer1",
    {
      title:{
        text: "Wedding Details"
      },
      axisY: {
        title: "Weddings",
        maximum: 100
      },
      data: [
      
      {
        type: "column",
        showInLegend: true,
        legendText: "Weddings",
        color: "#DCA978",
        dataPoints: [
        { y: 30, label: "JAN"},
        { y: 28, label: "FEB"},
        { y: 41, label: "MAR"},
        { y: 32, label: "APR"},
        { y: 52, label: "MAY"},
        { y: 41, label: "JUNE"},
        { y: 52, label: "JULY"},
        { y: 62, label: "AUG"},
        { y: 42, label: "SEP"},
        { y: 32, label: "OCT"},
        { y: 47, label: "NOV"},
        { y: 57, label: "DEC"}
        ]
      }
      ]
    });


  
   
    chart1.render();


   
  
  </script>

<script  src="assets/js/canvasjs.min.js"></script>

  
 
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

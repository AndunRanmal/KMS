<!DOCTYPE html>
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Report Generation</title>
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
     
           
          
   
        <!-- /. NAV TOP  -->
        <?php
         include("../include/nav.php");
        include("../include/manager.php");
        ?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner" >
                <div class="row">
                    <div class="col-md-12">
                    <ol class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                     <li class="active">VIEW REPORTS</li>
                     <h2>VIEW REPORTS </h2>   
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
                     <div id="chartContainer2" style="height: 300px; width: 100%; float: right;"></div>
            
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
        text: "Customers Details"
      },
      axisY: {
        title: "Medals won",
        maximum: 400
      },
      data: [
      {
        type: "column",
        showInLegend: true,
        legendText: "Take Away",
        color: "gold",
        dataPoints: [
        { y: 198, label: "Mon"},
        { y: 243, label: "Tues"},
        { y: 202, label: "Wed"},
        { y: 236, label: "Thu"},
        { y: 195, label: "Fri"},
        { y: 222, label: "Sat"},
        { y: 242, label: "Sun"}
        ]
      },
      {
        type: "column",
        showInLegend: true,
        legendText: "Buffet",
        color: "silver",
        dataPoints: [
        { y: 123, label: "Mon"},
        { y: 212, label: "Tues"},
        { y: 154, label: "Wed"},
        { y: 98, label: "Thu"},
        { y: 112, label: "Fri"},
        { y: 214, label: "Sat"},
        { y: 165, label: "Sun"}
        ]
      },
      {
        type: "column",
        showInLegend: true,
        legendText: "Weddings",
        color: "#DCA978",
        dataPoints: [
        { y: 3, label: "Mon"},
        { y: 2, label: "Tues"},
        { y: 1, label: "Wed"},
        { y: 2, label: "Thu"},
        { y: 2, label: "Fri"},
        { y: 1, label: "Sat"},
        { y: 2, label: "Sun"}
        ]
      }
      ]
    });


  
    var chart2 = new CanvasJS.Chart("chartContainer2",
    {
      title:{
        text: "Daily Income"
      },
      data: [
      {
       type: "doughnut",
       dataPoints: [
       {  y: 24784.00, indexLabel: "Total Expense" },
       {  y: 210147.00, indexLabel: "Total Income" }
       ]
     }
     ]
   });
    chart1.render();


    chart2.render();
  
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

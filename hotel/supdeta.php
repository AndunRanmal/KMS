<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Simple Responsive Admin</title>
  <!-- BOOTSTRAP STYLES-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
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
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                    <ol class="breadcrumb">
                    <li><a href="manager.php">Home</a></li>
                     <li class="active">SUPPLIER DETAILS</li>        
                    </ol>
                     <h2>SUPPLIER DETAILS </h2>  
                     <div class="container">
  <div class="row">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">NEW SUPPLIER</button>


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
        <h4 class="modal-title" id="exampleModalLabel">NEW SUPPLIER</h4>
      </div>
      <div class="modal-body">
        <?php
//include "config/config.php";
//include "datetime.php";
if(isset($_POST["submit"])){
  $db =mysqli_connect("localhost","root","","kms");
  $name = $_POST["name1"];
  $number = $_POST["number"];
  $address = $_POST["address"];
  //$image = $_FILES["file"];
  
  
  if ($_FILES["image"]["error"] > 0){
     echo "<font size = '5'><font color=\"#e31919\">Error: NO CHOSEN FILE <br />";
     echo"<p><font size = '5'><font color=\"#e31919\">INSERT TO DATABASE FAILED";
   }
   else{
     move_uploaded_file($_FILES["image"]["tmp_name"],"images/" . $_FILES["image"]["name"]);
     echo"<font size = '5'><font color=\"##244a72\"><br>";
     $file="images/".$_FILES["image"]["name"];
     
     $sql = "INSERT INTO `new_supplier` (`names`,`pnumber`,`address`,`image`)
     VALUES ('$name','$number','$address','$file')";

     mysqli_query($db,$sql);
     //echo $sql;
    // mysqli_query($conn,$sql);
  
    
  
   }
     
} 
?>
        <form method="POST" action="supdeta.php" enctype="multipart/form-data">
          <input type="hidden" name="size" value="1000000">
        
          <div class="form-group">
            <label for="recipient-name" class="control-label">Name:</label>
            <input type="text" class="form-control" id="name" name="name1">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="control-label">Phone Number:</label>
            <input type="text" class="form-control" id="number" name="number"  maxlength="10" onClick="(this.value='')" onkeypress="return IsNumber(event , this);">
          </div>
          
          <div class="form-group">
            <label for="message-text" class="control-label">Address:</label>
            <textarea class="form-control" id="message-text" name="address"></textarea>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="control-label">Profile Photo:</label>
            <input type="file" class="form-control" id="Photo" name="image">
          </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary"  name="submit" onclick=" return  mobileNoValidation();" maxlength="12">Submit</button>
      </div>
      </form>
    </div>
  </div>
</div>
  </div>
</div> 
                    </div>
                    <div class="container">
    <div class="row">
        <?php
          $db = mysqli_connect("localhost","root","","kms");
          $sql = "SELECT * FROM `new_supplier`";
          $result = mysqli_query($db,$sql);
          while ($row = mysqli_fetch_array($result)) {
            $id = $row['sid'];
            $name = $row['names'];
            $pnumber = $row['pnumber'];
            $address = $row['address'];
            $img = $row["image"];
            ?>
            <div class="col-xs-12 col-sm-6 col-md-5">
            <div class="well well-sm">
                <div class="row">
                    <div class="col-sm-6 col-md-4">
                        <img src="<?php echo $img;?>" height="300" width="100" alt="" class="img-rounded img-responsive" />
                    </div>
                    <div class="col-sm-6 col-md-8">
                        <p>
                        <h4><i class="fa fa-user" aria-hidden="true"></i><?php echo $name?></h4>
                        
                        <small><cite title="San Francisco, USA"><?php echo $address?><i class="glyphicon glyphicon-map-marker">
                        </i></cite></small>
                        <p>
                            <i class="glyphicon glyphicon-earphone""></i></i><?php echo $pnumber?>
                            <br />
                            </p>
                        <!-- Split button -->
                            <form action='' method="post">
                            
                            <button type="submit" class="btn btn-primary"  name="submit">Delete</button>
                          </form>
                          
                          
                    </div>
                </div>
            </div>
        </div>
        <?php
          }
        ?>
        
       
    
</div>

                </div>              
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

    <script>

function mobileNoValidation()
{
var mobile=parseInt(document.getElementById('number').value );




//var reg = '/^0\d{9}$/';
svar reg = /^0\d{9}$;




if(reg.test(mobile) == false) {


alert('Please Enter Valid mobile number');  document.getElementById('number').focus();
return false;
}
}

</script>
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>

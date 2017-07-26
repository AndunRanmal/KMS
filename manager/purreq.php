<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Purchase Requisition</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<?php
include("../include/nav.php");
include("../include/manager.php");

?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">

                    <div class="col-md-12">
                     <ol class="breadcrumb">
                    <li><a href="manager.php">Home</a></li>
                     <li class="active">Purchase Requisition</li>        
                    </ol>
                     <h2>PURCHASE REQUISTION </h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
              
                 <!-- /. ROW  -->           
    
            <div class="container">
                                                                                        
  <div class="table-responsive">          
  <table class="table">
    <thead>
      <tr>
        <th>#</th>
        <th>requistion</th>
        <!-- <th>Last Update</th> -->
        
        
      </tr>
    </thead>
    <tbody>
    <?php
      include("../config/config.php");
      $sql = "SELECT * FROM  `requisition_overview`WHERE Status=0 ";
      $result = mysqli_query($conn,$sql);
      if(mysqli_num_rows($result)==0){
        echo "There are no pending Purchase Requisition";
      }else{
        while($row = mysqli_fetch_assoc($result)){
          $pr_id = $row["Id"];
          $date = $row["Issued_date"];
          // echo $pr_id;
     

    ?>
    
      <tr>
        <td><i class="fa fa-file-word-o" aria-hidden="true"></i></td>
        <td><p><a href="reqveiw.php"><?php echo $pr_id; ?></a></p></td>
        <td><a href="reqveiw.php"><?php echo $date ?></a></td>
        <!-- <td>

         <label for="accept">accept</label>
        <input type="radio" name="approve" id="accept" value="accept">
        <label for="reject">reject</label>
        <input type="radio" name="approve" id="reject" value="reject">

        </td> -->
        
      </tr>
      <?php
   }
      }
      ?>
    </tbody>
  </table>
  </div>
</div>       
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        
    
                      

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

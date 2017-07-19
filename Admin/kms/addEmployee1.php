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



   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript">

$(document).ready(function(){
  var form = $("#insertForm");

  var desg = $("#desig");
  var desgInfo = $("#desigInfo");

  var telNmbr = $("#telNumber");
  var numInf = $("#numInfo");




  form.submit(function(){
    if(validateDesg() & validateTelNo()){
      return true;
    }
    else{
      return false;
    }


  });

// other way to call the function - desg.blur(validateDesg);
$("#desig").blur(validateDesg);


  function validateDesg(){

    if(desg.val() === "") {

      desg.addClass("error");
      //desg.attr('placeholder',"color:red;");
      desgInfo.text("there should be a designation");
      desgInfo.addClass("error");
      return false;
    }
    
    else if((desg.val() == 'chef') || (desg.val() == 'admin') || (desg.val() == 'stock keeper')){
      desg.removeClass("error");
      desgInfo.removeClass("error");
      desgInfo.text("correct");
      desgInfo.addClass("correct");
      return true;  


    }
    
    else{

      desg.addClass("error");
      //desg.attr('placeholder',"color:red;");
      desgInfo.text("there should be a designation");
      desgInfo.addClass("error");
      return false;


      /*
      desg.removeClass("error");
      desgInfo.removeClass("error");
      desgInfo.text("correct");
      desgInfo.addClass("correct");
      return true;
      */
    }
  }

$("#telNumber").blur(validateTelNo);

  function validateTelNo(){
    if(!$.isNumeric(telNmbr.val())){
        numInf.removeClass("correct");
        telNmbr.addClass("error");
        numInf.text("this is not a phone number");
        numInf.addClass("error");
        return false;

    }
    else if(telNmbr.val().length != 10){
      numInf.removeClass("correct");
      telNmbr.addClass("error");
      numInf.text("there should be 10 digits");
      numInf.addClass("error");
      return false;

    }
    else if(telNmbr.val().substr(0,2) != '07'){
      numInf.removeClass("correct");
      telNmbr.addClass("error");
      numInf.text("should start with 07");
      numInf.addClass("error");
      return false;

    }
    else{

      telNmbr.removeClass("error");
      numInf.text("correct");
      //phoneDetails.removeClass("error");
      numInf.addClass("correct");
      return true;
    }



  }

});
  
</script>

<style>
    .error{
      
      color :red;
      border-color: red;
    }

    .correct{
      
      color :#32CD32;
      
    }

    label {
    font-size: 16px;
    color: black;
    margin-left: 100px;
    cursor: pointer;
    }

    input{
      margin-left: 100px;
      width: 250px;
    }


    input[type=submit] {
    width: 160px;
    background-color: #4CAF50;
    font-size: 20px;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    margin-left: 100px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

    textarea{
      margin-left: 100px;
    }

    #staffForm{

      background-color: #EDE5E5;
    }

</style>



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
                        <img src="assets/img/logo.png" />
                    </a>
                </div>
              
                 <span class="logout-spn" >
                  <a href="#" style="color:#fff;">LOGOUT</a>  

                </span>
            </div>
        </div>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                 

 <li >
                        <a href="index.html" ><i class="fa fa-desktop "></i>Dashboard <span class="badge">Included</span></a>
                    </li>
                   

                    <li>
                        <a href="ui.html"><i class="fa fa-table "></i>UI Elements  <span class="badge">Included</span></a>
                    </li>
                    <li class="active-link">
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
                    <div class="col-md-12">
                     <h2>BLANK PAGE </h2> 


 <!-- start of the form div -->
<div style="background-color: lightblue;" >
<div id="staffForm" style="margin-left: 200px; margin-right: 200px;  padding-top: 40px;">

<form method="POST" action="addStaffkms.php" id="insertForm"> 

  
<label >staff id</label><br><input type="number" name="staffId" placeholder="enter the staff id" ><br>
<br>

<label >name</label><br><input type="text" name="name" placeholder="enter the name" ><br>
<br>

<label >designation</label><br><input type="text" name="designation" placeholder="enter the designation" id="desig"><span  id="desigInfo" > </span><br>
<br>

<label >designation</label><br>
<select id="desg" name="dsg" style="margin-left: 100px;">
  <option disabled selected value> select the designation </option>
  <option value="admin">admin</option>
  <option value="chef">chef</option>
  <option value="auditor">auditor</option>
  <option value="stock keeper">stock keeper</option>
</select>
</br>

<label >mobile no</label><br><input type="text" name="contactNo" placeholder="enter the contact number" id="telNumber" ><span  id="numInfo" > </span><br>
<br>

<label >address</label> <br><textarea rows="2" cols="50" maxlength="100" name="address" placeholder="enter the address"></textarea>
<br>

<label >qualification</label><br><textarea rows="4" cols="50" maxlength="100" name="qualification" placeholder="enter the address"></textarea>
<br>
</body>
</html>

<br> 
<input type="submit" value="submit">
</form>


</div>
</div>
<!-- end of the form div -->

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
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>

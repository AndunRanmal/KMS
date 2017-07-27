<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<?php
session_start();
$fname = $_SESSION["FName"];
$lname = $_SESSION["LName"];
$gender = $_SESSION["Gender"];
$bday = $_SESSION["Bday"];
$designation = $_SESSION["Designation"];
$address = $_SESSION["Address"];
$contact = $_SESSION["Contact"];
$email = $_SESSION["Email"];
$img = $_SESSION["Img"];
?>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Edit Profile</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />

    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>-->
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />





    <script type="text/javascript">
        <!--
        // Form validation code will come here.
        function validate() {

            if (document.myForm.FirstName.value == "") {
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


            if (document.myForm.EMail.value == "") {
                alert("Please provide your Email!");
                document.myForm.Email.focus();
                return false;
            }


            return (true);




        }
        
        //-->
   
    
    
   
   </script>  
    
    <style>



</style>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
</head>


<body>

    <div id="wrapper">
        
<?php
include("../include/nav.php");
include("../include/manager.php");
?>
        <!--side bar -->
        
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                    <ol class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="user.php">Edit Profile</a></li>
                    </ol>
                        <h2> Edit profile</h2>
                    </div>
                </div>

                <div class="col-md-6">  
            
            
                    <form class="form-inline" action="reg.php" name="myForm"  method="POST" enctype="multipart/form-data" onsubmit="return(validate());">
							  

						<div class="col-md-6"> 
                            <span>
								<td align="right"><b>First Name :</b> </br>
								</td>
								<td> <input type="text"  class="form-control " name="FirstName" value="<?php echo $fname?>" /> </td> 
                            </span>				
							</tr> 
             </div>	<div class="col-md-6"> 
                            <span>
								<td align="right"><b>Last Name :</b> </br>
								</td>
								<td> <input type="text"  class="form-control " name="LastName" value="<?php echo $lname?>"/> </td> 
                            </span>				
							</tr> 
    </div> </br>
                        </br> 


                       
                        <div class="col-md-6">
                    
                        <tr>
                            <td align="right"><b>Gender : </b></br>
                            </td>
                           <td>
                               <div class="col-md-6">  <label><input type="radio" name="Gender">Male</label>  </div>
    
                            <div class="col-md-6">    <label><input type="radio" name="Gender" >Female</label> </div>
                           </td>
                        </tr> 
    
                        </br>

                        <tr>
                            <td align="right"><b>Birthday :</b> </br>
                            </td>
                            <td><input type="Date" class="form-control" name="Birthday" value="<?php echo $bday?>" /></td>
                        </tr> 

                        </br>
                      
                       
                        <tr>
                            <td allign="right"> <b>Designation :</b> </td></br>
                                <label class="form-control"><?php echo $designation ?></label>
                            <td> 
                            </td>
                        </tr>
                        </br>
                        





                       <tr>
                            <td align="right"><b>Address :</b>
                            </td>
                           
                             <td><textarea class="form-control" rows="5" id="address" name="Address" type="text" value="<?php echo $address ?>">
                                 <?php echo $address ?>
                             </textarea> </td>
                        </tr> 
                               
                        </br>
                        

                        <tr> 
                            <td align="right"><b>Contact Number :</b></br>
                            </td>
                            <td><input  type="text"  class="form-control" id="UserMobile"   maxlength="10" minlength="10" name="ContactNumber"  data-fv-numeric="true" data-fv-numeric-message="Please enter valid phone numbers" data-fv-phone-country11="IN"    data-fv-field="data[User][mobile]" value="<?php echo $contact?>" /></td>
                        </tr>
                        </br>
                        



                        <tr>
                            <td align="right"><b>EMail:</b> </br>
                            </td>
                            <td><input type="email" class="form-control" id="email"  name="EMail" value="<?php echo $email ?>" /></td> 
                        </tr>
                        </br>
                        </br>
                                 
                       <fieldset id="profilepic_controls">

                        <input type="file" name="Photo"  class="form-control" id="camerainput1" accept="image/png ,image/jpeg,image/jpg"  size="2mb" capture>
                               
                        </fieldset>	 
                        <br>







                        <tr>
                            <td align="right"></td>
                            <td> <input type="submit" name="user" value="Submit"  class="btn btn-info"></td>
                        </tr>
                        </br>
                        </br>
</div>

</form>   
       </div>
               
                </div>
            </div>
        </div>
        <div class="footer">


            <div class="row">
                <div class="col-lg-12">
                    <a href="" style="color:#fff;" target="_blank"></a>
                </div>
            </div>
        </div>
        <script src="assets/js/jquery-1.10.2.js"></script>
        <!-- BOOTSTRAP SCRIPTS -->
        <script src="assets/js/bootstrap.min.js"></script>
        <!-- CUSTOM SCRIPTS -->
        <script src="assets/js/custom.js"></script>


</body>

</html>
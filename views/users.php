<?php
    include("../include/nav.php");
    include("../include/cashier.php");
?>





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


<body>
        
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h2> Edit profile</h2>
                    </div>
                </div>

                <div class="col-md-6">  
            
            
                    <form class="form-inline" action="../php/reg.php" name="myForm"  method="POST" enctype="multipart/form-data" onsubmit="return(validate());">
						<fieldset id="profilepic_controls">

                        <input type="file" name="Photo" id="camerainput1" accept="image/png ,image/jpeg,image/jpg"  size="2mb" capture>
                               
                        </fieldset>	  

						<div class="col-md-6"> 
								<td align="right"><b>First Name :</b> </br>
								</td>
								<td> <input type="text"  class="form-control " name="FirstName" /> </td> 
								
							</tr> 
             </div> 
							<tr>
                                <td align="right"><b>Last Name : </b> </td>
                                <td> <input type="text" class="form-control" name="LastName" /> </td>
								
							</tr> 
                
                        </br> 
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
                        </br>

                        <tr>
                            <td align="right"><b>Birthday :</b> </br>
                            </td>
                            <td><input type="Date" class="form-control" name="Birthday" /></td>
                        </tr> 

                        </br>
                      
                        </br>
                       
                        <tr>
                            <td allign="right"> <b>Designation :</b> </td>
                            </br>
                            <td> <select id="Designation" name="Designation" class="form-control"> 
               <option value="Manager">Manager</option>
               <option value="Chef">Chef</option>
               <option value="Stock-Keeper">Stock-Keeeper</option>
                  <option value="Restaurant- Cashier">Restaurant- Cashier</option>
                  <option value="Auditor">Auditor</option>
                  <option value="Other">Other</option>
               </select> </td>
                        </tr>
                        </br>
                        </br>





                       <tr>
                            <td align="right"><b>Address :</b></br>
                            </td>
                           
                             <td><textarea class="form-control" rows="5" id="address" name="Address" type="text"></textarea> </td>
                        </tr> 
                               
                        </br>
                        </br>

                        <tr>
                            <td align="right"><b>Contact Number :</b></br>
                            </td>
                            <td><input  type="text"  class="form-control" id="UserMobile"   maxlength="10" minlength="10" name="ContactNumber"  data-fv-numeric="true" data-fv-numeric-message="Please enter valid phone numbers" data-fv-phone-country11="IN"    data-fv-field="data[User][mobile]" /></td>
                        </tr>
                        </br>
                        </br>



                        <tr>
                            <td align="right"><b>EMail:</b> </br>
                            </td>
                            <td><input type="email" class="form-control" id="email"  name="EMail" /></td> 
                        </tr>
                        </br>
                        </br>






                        <tr>
                            <td align="right"></td>
                            <td> <input type="submit" name="user" value="Submit" /></td>
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
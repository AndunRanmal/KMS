<html>
<head>


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
		else{
			desg.removeClass("error");
			desgInfo.removeClass("error");
			desgInfo.text("correct");
			desgInfo.addClass("correct");
			return true;
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
			
			color :#8DFF33;
			
		}

</style>
</head>
<body>




<form method="POST" action="addStaffkms.php" id="insertForm"> 

  
staffId          :<input type="number" name="staffId" placeholder="enter the staff id" ><br>
<br>

employeeName         :<input type="text" name="name" placeholder="enter the name" ><br>
<br>

designation          :<input type="text" name="designation" placeholder="enter the designation" id="desig"><span  id="desigInfo" > </span><br>
<br>

contact no          :<input type="text" name="contactNo" placeholder="enter the contact number" id="telNumber" ><span  id="numInfo" > </span><br>
<br>

Address         : <br><textarea rows="4" cols="50" maxlength="100" name="address" placeholder="enter the address"></textarea>
<br>

qualification        : <br><textarea rows="4" cols="50" maxlength="100" name="qualification" placeholder="enter the address"></textarea>
<br>
</body>
</html>

<br> 
<input type="submit" value="submit">
</form>
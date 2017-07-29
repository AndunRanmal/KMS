<?php


	include("../config/config.php");
	
	session_start();
	
	if(isset($_POST['lg'])){
		
		$myuserid=mysqli_real_escape_string($conn,$_POST['user_id']);
		
		$mypassword=mysqli_real_escape_string($conn,$_POST['password']);

		echo $myuserid;
		echo $mypassword;
		
		$sql="SELECT * FROM `employees` WHERE user_id='$myuserid' and password='$mypassword' ";
		echo $sql;

		$sql1="SELECT * FROM `employees` WHERE user_id='$myuserid' ";
		echo $sql1;
		$result=mysqli_query($conn,$sql);
		$result1=mysqli_query($conn,$sql1);
		
		$rows=mysqli_num_rows($result);
		$rows1=mysqli_num_rows($result1);
	
		if($rows==1){


			$_SESSION['login_user']	= $myuserid;
			
			while ($count=mysqli_fetch_assoc($result)){
			
				$_SESSION["FName"] = $count["fname"];
				$_SESSION["LName"] = $count["lname"];
				$_SESSION["Gender"] = $count["gender"];
				$_SESSION["Bday"] = $count["birthday"];
				$_SESSION["Designation"] = $count["designation"];
				$_SESSION["Address"] = $count["address"];
				$_SESSION["Contact"] = $count["contact"];
				$_SESSION["Email"] = $count["email"];
				$_SESSION["Img"] = $count["image"];
				
			
			if ($count['designation']=='admin'){
			
					header("location:index.php");	


			} 
			else if($count['designation'] == 'Chef'){

					header("location:../chef/chef.php");
			}
			else if($count['designation'] == 'Stock Keeper'){

					header("location:../views/index.php");
			}
			else if($count['designation'] == 'Manager'){

					header("location:../Manager/index.php");
			}
			else if($count['designation'] == 'Cashier'){

					header("location:../new-nimantha/main.php");
			} else {
					
					header("location:staff_center_back.php");
			}
		}
	}elseif ($rows1==0){
					echo '<script type="text/javascript">';
					echo 'alert("Please Check your Password and UserName again");';
                    echo 'window.location="loginIndex1.php";';
					echo '</script>';
					}else{
						echo '<script type="text/javascript">';
					echo 'alert("Get the help of forgot password");';
                    echo 'window.location="loginIndex1.php";';
					echo '</script>';
						}
					}
?>
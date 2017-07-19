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
			
			
			if ($count['designation']=='admin'){
			
					header("location:index.php");	


			} 
			else if($count['designation'] == 'Chef'){

					header("location:../chef/chef.html");
			}
			else if($count['designation'] == 'Stock Keeper'){

					header("location:../views/index.html");
			}
			else if($count['designation'] == 'Manager'){

					header("location:../Manager/manager.php");
			}
			else if($count['designation'] == 'Cashier'){

					header("location:../new-nimantha/main.php");
			} else {
					
					header("location:staff_center_back.php");
			}
		}
	}elseif ($rows1==0){
					echo '<script type="text/javascript">';
					echo 'alert("Please sign up to proceed");';
                    echo 'window.location="admin_back.php";';
					echo '</script>';
					}else{
						echo '<script type="text/javascript">';
					echo 'alert("Get the help of forgot password");';
                    echo 'window.location="../view/pages/fpview.html";';
					echo '</script>';
						}
					}
?>
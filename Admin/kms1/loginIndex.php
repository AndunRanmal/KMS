<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	
	
</head>
<body>
	<div id="background">
    

    </div>
	
	
		<form name="login" action="login.php" method="post">
			<ul>
				<li>
					<label for="userid" >User ID</label>
					<input type="text" name="user_id" placeholder="userID" required>
				</li>
				<li>
					<label for="password">Password</label>
					<input type="password" name="password" placeholder="password" required></li>
				<li>
					<input type="submit" value="Login" name="lg">
                    <!-- <input type="submit" value="Forgot Password" name="fp"> -->
                    <input type="submit" value="Sign Up" name="su">
				</li>
			</ul>
		</form>
	
</body>
</html>
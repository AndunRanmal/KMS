<?php
	session_start();
	unset($_SESSION['login_user']);
	session_destroy();
	echo "<script>
	window.location='../admin/loginIndex1.php';
	</script>";

?>
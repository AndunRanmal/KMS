<?php
session_start();

if(session_destroy()){
	header("Location:loginIndex1.php");
	}
?>
<?php
session_start();
include('../model/config.php');


$user_check=$_SESSION['login_user'];
$ses_sql=mysqli_query($connect,"select user_id from staff where user_id='$user_check'");
$row=mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
$login_session=$row['user_id'];

if(!isset($_SESSION['login_user'])){
	header("location:../index.html");}
?>
<?php
session_start();
require "db.php";
if($_POST['btn']=="sign_in"){
$email=$_POST['email'];	
$password=$_POST['password'];
$user_password=md5($password);
$sql="SELECT * FROM user_account WHERE email='$email' AND password='$user_password' ";
$sql_run=mysqli_query($db_con,$sql);

$row=mysqli_num_rows($sql_run);

if($row==1){
	$user_data=mysqli_fetch_array($sql_run);
	$_SESSION['email']=$user_data["email"];
	$_SESSION['password']=$user_data["password"];
	setcookie("login","True",time()+24*36000);
	header("Location:index.php");
}else{
	header("Location:login1.php");
	$_SESSION['msg']="<h3>Email or Passwords does not match</h3>";

	if(isset($_SESSION['count']))
		{
		  $_SESSION['count']++;}
	else{	
	      $_SESSION['count']=0;
	}

}
}
?>
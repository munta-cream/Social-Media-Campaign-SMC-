<?php
session_start();
require "db.php";
	$first_name=$_POST['first_name'];
	$sur_name=$_POST['sur_name'];
	$email=$_POST['email'];
    $password=$_POST['password'];
	$password2=$_POST['password2'];
	$phone=$_POST['phone'];
	$image=$_FILES['image']['name'];
	$gender=$_POST['gender'];
	$dob=$_POST['dob'];
	$address=$_POST['address'];
if($password==$password2){	
	$user_password=md5($password);
	$File_size=$_FILES['image']["size"];
if($File_size<=1048576){
	move_uploaded_file($_FILES['image']['tmp_name'], "upload/".$_FILES['image']['name']);}
	else{echo "Max File Size is 1MB !!!";}	
	$sql="SELECT * FROM user_account WHERE email='$email'";
	$sql_chk=mysqli_query($db_con,$sql);
	$row=mysqli_num_rows($sql_chk);

    
if($row>=1){
	$_SESSION['msg']="<h3>Email already exsist</h3>";
	header("Location:registration1.php");}
	else{
        	$sql="INSERT INTO user_account(first_name,sur_name,email,password,image,gender,phone,dob,address) VALUES('$first_name','$sur_name','$email','$user_password','$image','$gender','$phone','$dob','$address')";
            if(!$_POST['solution']==$_SESSION['sum']){
                //$_SESSION['msg']="Wrong Captcha";
            header("Location:registration1.php");
            }else{
                $sql_run=mysqli_query($db_con,$sql);
            }
            
		}

if($sql_run){
	$_SESSION['msg']="<h3>Registration Completed</h3>";
	header("Location:login1.php");
}
}
else{
	$_SESSION['msg']="<h3>Passwords do not match</h3>";
    header("Location:registration1.php");}
?>

<?php
session_start();
$num1=rand(10,100);
$num2=rand(1,9);
$_SESSION['sum']=$num1+$num2;
if(isset($_SESSION['msg'])){
    echo $_SESSION['msg']; 	
    $_SESSION['msg']="";
}

if(isset($_SESSION['count'])){
    if($_SESSION['count']==2){
        $_SESSION['count']='';
        header("Location:login1_block.php");
    }
}
?>

<!DOCTYPE html>
<html lang="en" class="login">
<head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="icon" href="media/logo.ico">
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="login">
    
        <div class="background-container">
            <img class="background-image" src="media/social_media_campaigns.png" alt="Background Image">
        </div>
        <h1>Social Media Campaigns</h1> 
		<div class="container">
        <table>
            <form method="post" action="login1_check.php" enctype="multipart/form-data" >
                
                <tr><td>Email:</td><td><input type="text" name="email"></td></tr>
                <tr><td>Password:</td><td><input type="password" name="password"></td></tr>
                
                <tr>
                    <td colspan="2">
                        <button type="submit" name="btn" value="sign_in" <?php if (isset($_COOKIE["block"])) {echo "hidden";} ?>>LOGIN</button>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <a href="registration1.php">Don't have an account? Go to Register</a>
                    </td>
                </tr>
            </form>
        </table>
    </div>
</body>
</html>

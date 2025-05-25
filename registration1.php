<?php
session_start();
$num1 = rand(10, 100);
$num2 = rand(1, 9);
$_SESSION['sum'] = $num1 + $num2;
if (isset($_SESSION['msg'])) {
    echo $_SESSION['msg'];
    $_SESSION['msg'] = "";
}
?>

<!DOCTYPE html>
<html lang="en" class="registration">
<head>
    <meta charset="utf-8">
    <title>Registration </title>
    <link rel="icon" href="media/logo.ico">
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="registration">
    
        <div class="background-container">
            <img class="background-image" src="media/social_media_campaigns.png" alt="Background Image">
        </div>
        <h1>Social Media Campaigns</h1>
	<div class="container">
        <table>
            <form method="post" action="registration1_check.php" enctype="multipart/form-data">
                <tr><td>First Name:</td><td><input type="text" name="first_name"></td></tr>
                <tr><td>Last Name:</td><td><input type="text" name="sur_name"></td></tr>
                <tr><td>Email:</td><td><input type="email" name="email"></td></tr>

                <tr><td>Password:</td><td><input type="password" name="password"></td></tr>
                <tr><td>Retype Password:</td><td><input type="password" name="password2"></td></tr>
                <tr><td>Phone Number:</td><td><input type="tel" name="phone"></td></tr>
                <tr><td>Profile Picture:</td><td><input type="file" name="image"></td></tr>
                <tr>
                    <td>Gender:</td>
                    <td><input type="radio" name="gender" value="M">Male<input type="radio" name="gender" value="F">Female<input type="radio" name="gender" value="O">Other
                    </td>
                </tr>
                <tr><td>DOB</td><td><input type="date" name="dob"></td></tr>

                <tr>
                    <td>Address:</td>
                    <td><textarea name="address"></textarea></td>
                </tr>
                <!--<tr>
                    <td><?php echo "$num1+$num2=?" ?></td>
                    <td><input type="number" name="solution"></td>
                </tr>-->
                <tr>
                    <td colspan="2">
                        <button type="submit" name="btn" value="sign_up">REGISTRATION</button>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <a href="login1.php">Already created an account? Go to Login</a>
                    </td>
                </tr>
            </form>
        </table>
    </div>
</body>
</html>

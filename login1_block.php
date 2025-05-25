<?php
session_start();
setcookie("block","Ture",time()+600);
$_SESSION['msg']="<h3>Your acoount has been <b>BLOCKED</b> for 10 Mins</h3>";
header("Location:login1.php");
?>
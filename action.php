<?php
session_start();
if(!isset($_SESSION["username"])){
header("Location: login1.php");
exit(); }
?>
<html>
<p>the page to redirected to after login</p>
</html>
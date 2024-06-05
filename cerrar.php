<?php
session_start();
session_destroy();
setcookie("USU","");
header("location:login.php");
?>
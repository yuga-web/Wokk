<?php
session_start();
$_SESSION['username']="niki";
$_SESSION["email"]="niki@gmail.com";
echo $_SESSION['username'];
echo "<br>";
echo $_SESSION['email'];
?>
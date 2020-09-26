<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
<form method="post"action="login_sessions.php">
	Username<input type="text" name="name">
	Password<input type="password" name="pass">
	<input type="submit" name="submit"value="Login">
</form>
</body>
</html>
<?php
 if(isset($_POST['submit']))
 {
 	$user=$_POST['name'];
 	$pass=$_POST['pass'];
 }
 $link= new mysqli("localhost","root","","mash");
 if($link===false)
 {
 	die("Error");
 }
 $sql="Select * from user_login where username=$name";
 $result=mysqli->query($sql);
 $row=mysqli->fetch_array($result);
 if($row['username']==$name &&$row['password']==$pass)
 {
 	session_start();
 	$_SESSION['name']=$name;
 	header("location:welcome.php");
 }
 else
 	echo "Invalid user";
 ?>
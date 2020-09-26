<?php
$username=$_POST['user'];
$password=$_POST['pass'];

$mysqli=new mysqli("localhost","root","","mash");
if($mysqli===false)
{
	die("Error".mysqli_error($mysqli));
}
$sql="select * from user_login where username='$username' and password='$password'";
$result=$mysqli->query($sql);
$row=$result->fetch_array();
if($row['username']==$username && $row['password']==$password)
{
	echo "Valid  user";
}
else 
{
	echo"Invalid user....";
}
$result->close();
$mysqli->close();
?>
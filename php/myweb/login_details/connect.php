<?php

//database connection
$conn= new mysqli('localhost','root','','mash');
if($conn===false)
{
	die("connection Failed :".$conn->connect_error());
}

$firstname=$_POST['name'];
$username=$_POST['username'];
$gender=$_POST['Gender'];
$email=$_POST['email'];
$password=$_POST['pass'];

$sql="insert into user_login(username,name,gender,email,password) values(?,?,?,?,?)";

	if($stmt=$conn->prepare($sql))
	{
		$stmt->bind_param("sssss",$param_username,$param_firstname,$param_gender,$param_email,$param_Password);
		
		$param_username=$firstname;
		$param_firstname=$username;
		$param_gender=$gender;
		$param_email=$email;
		$param_Password=$password;
		if($stmt->execute())
		{
		echo "Registration Successfull....";
		}
		else
		{
			echo "Error couldn't fetch";

		}
	}
	$stmt->close();	
	$conn->close();
?>
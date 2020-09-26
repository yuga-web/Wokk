<?php
$mysqli=new mysqli("localhost","root","","userlogin");
if($mysqli===true)
{
	die("error:could not connet."mysqli_connect_error());
	}

else
{
	$sql=("select * from userlogin");
}

}
?>
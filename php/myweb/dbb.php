<?php
$mysqli=new mysqli("localhost","root","","userlogin1");
if($mysqli===false)
{
	echo "Connection failed".mysqli_connect_error();
}
else
{
	echo "connected!!!....<br><br><br><br><br>";

}
$sql = "SELECT id,name,employee_salary,location FROM user";
if($result =$mysqli->query($sql))
{
	if($result->num_rows>0)
	{
		while($row=$result->fetch_array())
		{
			echo $row[0].":".$row[1].":".$row[2].":".$row[3]."<br>";
	}
	$result->close();
	}
	else
	{
		echo "no record found";
	}
	
}
else
{
	echo "error".$mysqli->error;
}
$mysqli->close();

?>
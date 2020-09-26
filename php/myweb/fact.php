<?php
function factorial($a)
{
$fact=1;
for($i=1;$i<=$a;$i++)
{
if($a<0)
{
echo "Error....negative number";
return -1;
}
else
{
	$fact*=$i;
}
}
return $fact;
}
?>
<html>
<head><title>Calculator</title></head>
<?php
if(!isset($_POST['submit']))
{
	?><center>
	<form method="post" action="fact.php">
	Enter the number :<br>
	<input type="text" name="num_1" size="3"/>
	
	<input type="submit" name="submit" value="Submit"/>
	</form></center>
	
<?php
}
else
{
	$num1=(int)$_POST['num_1'];
	echo "<b>The factorial of the ".$num1." is ".factorial($num1)."<br/>";
	
}
?>

</body>
</html>
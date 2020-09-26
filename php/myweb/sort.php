<html>
<head><title>Sorting</title>
</head>
<?php
if(!isset($_POST['submit']))
{
?>
<form method="post" action="arit.php">
Enter the number:<br>
<input type="text" placeholder="Enter the num1 num2 ....etc" name="num" size="20"/><br>
<input type="submit" name="submit" value="add"/>
</form>
<?php
}
else
{
$numStr=$_POST['num'];
$numArr=explode(' ',$_POST['num']);
rsort($numArr);
echo" The number given:".$numStr."<br>";
echo "The number after sorting: ".implode($numArr,' ')."<br>";
echo "The second largest number is ".$numArr[1]."<br>";
var_dump($numArr);
}
?>
</body>
</html>	
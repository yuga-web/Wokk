<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
	if(!isset($_POST['submit']))
	{
		?>
		<form method ="post" action="write.php">
			Enter the text:<input type="text" name="data"/>
			<input type="submit" name="submit"value="submit">
		</form>
		<?php
	}
	else
	{
		$data=$_POST['data'];

$contents=file_get_contents('file.txt');
$sentences=explode('.',$contents);
foreach ($sentences as $sentence) {

	if(false!==strpos($sentence,$data))
		print trim($sentence);
}
}
?>
</body>
</html>
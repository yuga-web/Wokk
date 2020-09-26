<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	session_start();
   unset($_SESSION['counter']);
?>
<?php
   session_destroy();
?>
<a href="http://localhost/myweb/sessions">click here</a>

</body>
</html>
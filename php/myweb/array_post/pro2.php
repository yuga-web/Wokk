<html>
<head>
<title>project4-2:pizza Topping selector</title>
</head>
<body>
<h2>project4-2:pizza Topping Selector</h2>
you selected the following toppings:<br/>
<ul>
<?php
foreach($_POST['toppings'] as $t)
{
echo"<li>$t</li>\r\n";
}
?>
</ul>
</body>
</html>
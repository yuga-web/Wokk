<?php 
function checkMail($str)
{
	return(!preg_match("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$","$str"))?FALSE:TRUE;
}
if(!checkMail("alex@gmail.com"))
{
	echo "valid mail";
}
else
{
	echo "invalid mail";
}
?>
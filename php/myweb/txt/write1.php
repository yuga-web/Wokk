
<?php
$contents=file_get_contents('file.txt');
$sentences=explode('.',$contents);
foreach ($sentences as $sentence) {

	if(false!==strpos($sentence,'the best'))
		print trim($sentence);
}
?>
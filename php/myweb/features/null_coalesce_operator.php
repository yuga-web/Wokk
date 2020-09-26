<?php
/**
 * Null coalesce operator
 */

$array = ['foo'];

//PHP5 style
$message = isset($array['foo']) ? $array['foo'] : 'not set';
echo $message.PHP_EOL."<br/>";

//PHP7 style
$message = $array['foo'] ?? 'not set';
echo $message.PHP_EOL;
?>
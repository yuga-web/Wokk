<?php
/**
 * Closure::call()
 */

class var1
{
	private $usr = "Txt";
    private $var1 = 'bar';
}

$getFooCallback = function () {
    return $this->usr;
};

// //PHP5 style
$binding = $getFooCallback->bindTo(new var1,'var1');
echo $binding().PHP_EOL;

//PHP7 style
echo $getFooCallback->call(new var1).PHP_EOL;
?>
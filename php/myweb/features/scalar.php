<?php
/**
 * Scalar type declarations
 */

#declare(strict_types=0);
function add(int $a, int $b) {
    return $a + $b;
}

$c= add(1,2);
$d= add("1","2");

echo "$c"."<br/>";
echo "$d"."<br/>";
var_dump(add(1,2));
echo"<br/>";
var_dump(add("1","23"));
?>
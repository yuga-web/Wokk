<?php
/**
 * Return type declarations
 */

declare(strict_types=1);
function add(int $a, int $b):int{
    return (string)($a + $b);
}
echo add(1,2)."<br/>";
var_dump(add(1,2));
?>
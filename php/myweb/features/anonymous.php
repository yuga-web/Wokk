<?php
/**
 * Anonymous classes
 */

$foo = new class {
    public function foo() {
        return "bar";
    }

    public function foo1() {
        return "bar1";
    }
};

#var_dump($foo,$foo->foo());
echo "<br>";

#var_dump($foo);
echo "<br>";

#var_dump($foo->foo());
echo $foo->foo();
echo "<br>";

var_dump($foo->foo1());
echo "<br>";
?>
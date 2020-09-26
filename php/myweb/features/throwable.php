<?php
/**
 * Throwable interface
 */


//Error as Throwable
try {
    sqdf();
} catch (Throwable $t) {
    echo "Throwable1: ".$t->getMessage().PHP_EOL."<br/>";
}

//Exception as Throwable
try {
    throw new Exception("Bla");
} catch (Throwable $t) {
    echo "Throwable2: ".$t->getMessage().PHP_EOL."<br/>";
}

//Error
try {
    sqdf();
} catch (Error $e) {
    echo "Error: ".$e->getMessage().PHP_EOL."<br/>";
} catch (Exception $e) {
    echo "Exception1: ".$e->getMessage().PHP_EOL."<br/>";
}

//Exception
try {
    throw new Exception("Bla");
} catch (Error $e) {
    echo "Error: ".$e->getMessage().PHP_EOL."<br/>";
} catch (Exception $e) {
    echo "Exception2: ".$e->getMessage().PHP_EOL."<br/>";
}

//Type error
try {
    function add(int $a, int $b):int {
        return $a + $b;
    }
    echo add(array(), array());
} catch (TypeError $t) {
    echo "Type error: ".$t->getMessage().PHP_EOL."<br/>";
}
?>
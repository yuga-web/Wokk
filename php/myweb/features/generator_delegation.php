<?php
/**
 * Generator delegation
 */

function gen()
{
    yield 1;
    yield 2;
    yield from gen2();
}

function gen2()
{
    yield 3;
    yield 4;
    yield 5;
    yield "Hi";
}

foreach (gen() as $val)
{
    echo $val, PHP_EOL;
}
<?php

namespace Demo\PhpUnittestExample;

class Tool
{
    function add($a, $b)
    {
        return $a + $b;
    }

    function throwException()
    {
        throw new \Exception('This is an exception');
    }
}

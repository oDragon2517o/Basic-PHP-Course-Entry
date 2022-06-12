<?php
function addition($a, $b)
{
    return $a + $b;
}
function subtraction($a, $b)
{
    return $a - $b;
}
function multiplication($a, $b)
{
    return $a * $b;
}
function division($a, $b)
{
    if ($b !== 0) {
        return $a / $b;
    } else return "Деление на ноль";
}


function mathOperation($arg1, $arg2, $operation)
{
    switch ($operation) {
        case 1;
            return addition($arg1, $arg2);
            break;
        case 2;
            return subtraction($arg1, $arg2);
            break;
        case 3;
            return multiplication($arg1, $arg2);
            break;
        case 4;
            return division($arg1, $arg2);
            break;
    }
}

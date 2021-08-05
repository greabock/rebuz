<?php
function hipo($catA, $catB)
{
    $hiposqr = $catA * $catA + $catB * $catB;
    return sqrt($hiposqr);
}

echo hipo(3, 4) . PHP_EOL;
echo hipo(5, 6) . PHP_EOL;

function heron($a, $b, $c)
{
    $p = ($a + $b + $c) / 2;
    return sqrt($p * ($p - $a) * ($p - $b) * ($p - $c));
}

echo heron(5, 5, hipo(5, 5));



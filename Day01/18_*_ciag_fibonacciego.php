<?php

$n = 10;

function fib($n)
{
    $s1 = 0;
    $s2 = 1;
    $sum = 0;
    for ($i = 1; $i <= $n; $i++) {
        $sum = $s1 + $s2;
        $s1 = $s2;
        $s2 = $sum;
    }
    return $sum;
}

for ($i = 0; $i <= $n; $i++) {
    echo("Wyraz $i ciagu Fibonacciego ma wartosc " . fib($i) . "<br>");
}

?>
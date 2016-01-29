<?php

$n = 10;

function fib($n)
{
    if ($n == 0) {
        return 0;
    } elseif ($n == 1) {
        return 1;
    }
    return fib($n - 1) + fib($n - 2);
}

for ($i = 0; $i <= $n; $i++) {
    echo("Wyraz $i ciagu Fibonacciego ma wartosc " . fib($i) . "<br>");
}

?>
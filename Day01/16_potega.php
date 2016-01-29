<?php

$a = 2;
$n = 3;

function power($a, $n)
{
    if ($n < 0 && $a == 0) {
        return "blad";
    } elseif ($a == 0) {
        return 0;
    } elseif ($n < 0) {
        $negative = true;
        $n = -$n;
    }
    $pow = $a;
    for ($i = 2; $i <= $n; $i++) {
        $pow *= $a;
    }
    if ($negative) {
        $pow = 1 / $pow;
    }
    return ($pow);
}
echo("$a do potegi $n rowna sie ".power($a, $n));
?>
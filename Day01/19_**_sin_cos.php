<?php
$x = 5;
$n = 10;
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

function fact($n)
{
    $fact = 1;
    for ($i = 1; $i <= $n; $i++) {
        $fact = $fact * $i;
    }
    return $fact;
}

function sinx($x, $n)
{
    $sinx = 0;
    $flag = 1;
    for ($i = 1; $i <= $n; $i += 2) {
        $sinx += $flag * (power($x, $i) / fact($i));
        $flag = $flag * -1;
    }
    return $sinx;
}

echo("sinx");
var_dump(sinx($x, $n));
function cosx($x, $n)
{
    $cosx = 0;
    $flag = 1;
    for ($i = 0; $i <= $n; $i += 2) {
        $cosx += $flag * (power($x, $i) / fact($i));
        $flag = $flag * -1;
    }
    return $cosx;
}

echo("cosx");
var_dump(cosx($x, $n));
?>


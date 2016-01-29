<?php

$n = 1;

function prime($n)
{
    if ($n == 1) {
        return true;
    } elseif ($n > 1 || gettype($n) != "integer") {
        return false;
    }
    $m = 2;
    for ($i = 2; $n % $i != 0; $i++) {
        $m++;
    }
    return $m == $n ? true : false;
}

echo(prime($n) ? "$n jest liczba pierwsza" : "$n nie jest liczba pierwsza");
?>


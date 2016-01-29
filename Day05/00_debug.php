<?php

function maxOf3($n1, $n2, $n3)
{
    $maxN = null;
    if ($n1 > $n2 && $n1 > $n3) {
        $maxN = $n1;
    }
    if ($n2 > $n1 && $n2 > $n3) {
        $maxN = $n2;
    }
    if ($n3 > $n1 && $n3 > $n2) {
        $maxN = $n3;
    }
    return $maxN;
}

echo("Max z 4, 5, 8 = " . maxOf3(4, 5, 8) . "<br>");
echo("Max z 12, 5, 8 = " . maxOf3(12, 5, 8) . "<br>");
echo("Max z 4, 18, 8 = " . maxOf3(4, 18, 8) . "<br>");
?>
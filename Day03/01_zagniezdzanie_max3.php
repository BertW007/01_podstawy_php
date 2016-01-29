<?php
echo("<b>Zadanie 1  - zagniezdzanie</b><hr>");

$a = 8;
$b = 39;
$c = 6;
function max2($a, $b)
{
    return $a > $b ? $a : $b;
}

function max3($a, $b, $c)
{
    $max2 = max2($a, $b);
    return $max2 > $c ? $max2 : $c;
}

echo("Najwieksza liczba sposrod $a, $b i $c jest " . max3($a, $b, $c));
?>

<?php
echo("<b>Zadanie 13 - zagniezdzanie</b><hr>");

$a = 3;
$b = 7;

function suma($a, $b)
{
    return $a + $b;
}

function obwProst($a, $b)
{
    return 2 * suma($a, $b);
}

echo("Obwod prostokata o bokach $a i $b jest rowny " . obwProst($a, $b));
?>
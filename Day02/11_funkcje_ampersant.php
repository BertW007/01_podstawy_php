<?php
echo("<b>Zadanie 11 - funkcja, ampersant</b><hr>");

//metoda bez & (ampersant) - wymaga przypisanie wyniku do zmiennej

function dodajNapiwek($wartoscRachunku)
{
    $napiwek = $wartoscRachunku * 0.1;
    $wartoscRachunku += $napiwek;
    return $wartoscRachunku;
}

$rachunek = 57;
$rachunek = dodajNapiwek($rachunek);
echo("wartosc rachunku z napiwkiem ");
echo($rachunek . "<br>");

//metoda z & (ampersant)

function dodajNapiwek2(&$wartoscRachunku)
{
    $napiwek = $wartoscRachunku * 0.1;
    $wartoscRachunku += $napiwek;
}

$rachunek = 50;
dodajNapiwek2($rachunek);
echo("wartosc rachunku z napiwkiem ");
echo($rachunek);
?>
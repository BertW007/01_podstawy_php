<?php
echo("<b>zadanie 14  - funkcja rozmiana</b><hr>");
echo("<i>metoda 1</i><br>");

function rozmiana($kwota, &$pln1, &$pln2, &$pln5)
{
    $monety = $kwota % 10;
    $pln10 = ($kwota - $monety) / 10;
    $pln5 = (int)($monety / 5);
    $pln2 = (int)(($monety % 5) / 2);
    $pln1 = ($monety % 5) % 2;
    return $pln10;
}

$n = 299;
$pln1 = 0;
$pln2 = 0;
$pln5 = 0;

echo rozmiana($n, $pln1, $pln2, $pln5);

var_dump($pln1);
var_dump($pln2);
var_dump($pln5);


echo("<i>metoda petla</i><br>");

function rozmiana2($kwota, &$pln1, &$pln2, &$pln5)
{
    for ($pln10 = 0; $kwota >= 10; $pln10++) {
        $kwota -= 10;
    }
    for ($pln5 = 0; $kwota >= 5; $pln5++) {
        $kwota -= 5;
    }
    for ($pln2 = 0; $kwota >= 2; $pln2++) {
        $kwota -= 2;
    }
    for ($pln1 = 0; $kwota >= 1; $pln1++) {
        $kwota -= 1;
    }
    return $pln10;
}

$n = 188;
$pln1 = 0;
$pln2 = 0;
$pln5 = 0;

echo rozmiana($n, $pln1, $pln2, $pln5);

var_dump($pln1);
var_dump($pln2);
var_dump($pln5);
?>
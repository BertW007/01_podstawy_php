<?php
echo("<b>Zadanie 5 - cena biletu</b><hr>");

$km = 32;

$t1 = 1;
$t2 = 0.1;
$t3 = 0.08;

echo("<i>Metoda 1</i><br>"); //metoda1

echo("Oplata za przejazd " . $km . " km wynosi ");

if ($km < 10) {
    echo(2 * $t1);
} elseif ($km < 30) {
    echo($t1 + $km * $t2);
} else {
    echo($t1 + $km * $t3);
}
echo("pln<br>");

echo("<i>Metoda 2</i><br>"); //metoda2

$km = 150;
$pln = 0;

if ($km < 10) {
    $pln = 2 * $t1;
} elseif ($km < 30) {
    $pln = $t1 + $km * $t2;
} else {
    $pln = $t1 + $km * $t3;
}

echo("Oplata za przejazd $km km wynosi $pln pln<br>");
?>
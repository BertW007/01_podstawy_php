<?php
echo("<b>Zadanie 6 - wyswietl mniejsze od sredniej</b><hr>");

$n = 20;
$min = 0;
$max = 100;
$tablica = array();
for ($i = 0; $i < $n; $i++) {
    $tablica [$i] = rand($min, $max);
}
function printLower($tab)
{
    $sum = 0;
    foreach ($tab as $el) {
        $sum += $el;
    }
    $av = $sum / count($tab);
    foreach ($tab as $el) {
        echo($el < $av ? "$el <br>" : "");
    }
}

echo("Dla tablicy wielkosci $n elementow:");
var_dump($tablica);
echo("elementy mniejsze od sredniej:<br>");
printLower($tablica);
?>
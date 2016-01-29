<?php

echo("<b>Zadanie 9  - suma cyfr nieparzystych</b><hr>");

echo("<i>Metoda \"while\"</i><br>");

$n = 13;
$i = 1;
$suma = 0;

while ($i < $n) {
    $suma += $i;
    $i += 2;
}

echo("Suma wszystkich liczb nieparzystych od 0 do $n jest rowna " . $suma . "<br>");

echo("<i>Metoda \"for\"</i><br>");

$n = 145;
$suma = 0;

for ($i = 1; $i < $n; $i += 2) {
    $suma += $i;
}

echo("Suma wszystkich liczb nieparzystych od 0 do $n jest rowna " . $suma . "<br>");

?>

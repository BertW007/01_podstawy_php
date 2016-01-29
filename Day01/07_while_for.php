<?php
echo("<b>Zadanie 7 - silnia</b><hr>");
echo("<i>metoda while</i> <br>");

$n = 3;
$silnia = 1;
$i = 1;

while ($i <= $n) {
    $silnia = $silnia * $i;
    $i++;
}
echo("Silnia $n = <b>$silnia</b><br>");

echo("<i><br>metoda for</i> <br>");
//factorial
$m = 5;
$silnia = 1;

for ($i = 1; $i <= $m; $i++) {
    $silnia = $silnia * $i;
}
echo("Silnia $m = <b>$silnia</b><br>");
?>
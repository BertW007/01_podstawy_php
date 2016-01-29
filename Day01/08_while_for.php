<?php
echo("<b>Zadanie 8 - suma zakresu</b><hr>");
echo("<i>metoda while</i> <br>");

$n1 = 2;
$n2 = 5;
$suma = 0;

$i = $n1;
while ($i <= $n2) {
    $suma += $i;
    $i++;
}
echo("Suma liczb w przedziale od $n1 do $n2 jest rowna <b>$suma</b><br>");

echo("<i><br>metoda for</i><br>");
$m1 = 3;
$m2 = 4;
$suma = 0;

for ($i = $m1; $i <= $m2; $i++) {
    $suma += $i;
}
echo("Suma liczb w przedziale od $m1 do $m2 jest rowna $suma");

?>
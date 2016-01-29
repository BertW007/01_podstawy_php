<?php
echo("<b>Zadanie 8  - suma cyfr liczby</b><hr>");

$n = 190091;
$wynik = 0;

echo("Suma cyfr liczby $n jest rowna ");
while ($n > 0) {
    $wynik += $n % 10;
    $n = ($n - $n % 10) / 10;
}
echo($wynik);
// ew. ucinamy przecinek rzutowaniem typu
?>

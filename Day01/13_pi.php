<?php
echo("<b>Zadanie 13 - Pi</b><hr>");

$n = 500000;
$licznik = 1;
$nawias = 0;

for ($mianownik = 1; $mianownik <= $n; $mianownik += 2) {
    $nawias += ($licznik / $mianownik);
    $licznik *= -1;
}

echo("Pi dla ilosci iteracji rownej $n jest rowne <b>" . $nawias * 4. . "</b>");
?>
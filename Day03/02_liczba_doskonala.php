<?php
echo("<b>Zadanie 2  - funkcja liczba doskonala</b><hr>");

$n = 28;
function liczbaDoskonala($n)
{
    if ($n == 0) {
        return false;
    }
    $n2 = $n / 2;
    $wynik = 0;
    for ($i = 1; $i <= $n2; $i++) {
        ($n % $i) == 0 ? $wynik += $i : "";
    }
    return $wynik == $n ? true : false;
}

//sprawdzenie
for ($i = 0; $i <= $n; $i++) {
    echo(liczbaDoskonala($i) ? "$i jest doskonala<br>" : "");
}
?>
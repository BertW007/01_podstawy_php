<?php
echo("<b>Zadanie ***  - funkcja liczba doskonala i niekompletana</b><hr>");
echo("<i>2 funkcje</i><br>");

$n = 6;

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

function liczbaNiekompletna($n)
{
    if ($n == 0) {
        return false;
    }
    $n2 = $n / 2;
    $wynik = 0;
    for ($i = 1; $i <= $n2; $i++) {
        ($n % $i) == 0 ? $wynik += $i : "";
    }
    return $wynik < $n ? true : false;
}

for ($i = 0; $i <= $n; $i++) {
    echo("liczba $i jest ");
    echo(liczbaNiekompletna($i) ? "niekompletna<br>" : (liczbaDoskonala($i) ? "<b>doskonala</b><br>" : "zwykla<br>"));
}
echo("<i>1 funkcja</i><br>");

$n = 6;

function sumaDzielnikow($n)
{
    if ($n == 0) {
        return 1;
    }
    $n2 = $n / 2;
    $wynik = 0;
    for ($i = 1; $i <= $n2; $i++) {
        ($n % $i) == 0 ? $wynik += $i : "";
    }
    return $wynik;
}

for ($i = 0; $i <= $n; $i++) {
    echo("liczba $i jest ");
    echo(sumaDzielnikow($i) < $i ? "niekompletna<br>" : (sumaDzielnikow($i) == $i ? "<b>doskonala</b><br>" : "zwykla<br>"));
}

?>
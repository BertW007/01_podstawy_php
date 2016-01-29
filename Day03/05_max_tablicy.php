<?php
echo("<b>Zadanie 15 - najwyzsza wartosc w tablicy</b><hr>");
echo("<i>metoda for</i><br>");

$tablica = array(1, 2, 50, 23, 5, 6, 90, 87, 123);
echo("najwiekszy element tablicy to " . maxTab($tablica));

function maxTab($tab)
{
    $max = 0;
    for ($i = 0; $i < count($tab); $i++) {
        $tab[$i] > $max ? $max = $tab[$i] : "";
    }
    return ($max);
}

echo("<i><br>metoda foreach</i><br>");
$tablica = array(1, 2, 50, 23, 5, 6, 90, 87, 123);
echo("najwiekszy element tablicy to " . maxTab($tablica));

function maxTab2($tab)
{
    $max = 0;
    foreach ($tab as $element) {
        $element > $max ? $max = $element : "";
    }
    return ($max);
}

?>

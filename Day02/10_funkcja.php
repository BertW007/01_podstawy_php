<?php
echo("<b>Zadanie 10  - funkcje</b><hr>");

// metoda ==
function czyParzysta($liczba)
{
    return $liczba % 2 == 0 ? true : false;
}

$test = czyParzysta(10);
var_dump($test);

// metoda !
function czyParzysta2($liczba)
{
    return !($liczba % 2);
}

$test = czyParzysta2(13);
var_dump($test);
?>
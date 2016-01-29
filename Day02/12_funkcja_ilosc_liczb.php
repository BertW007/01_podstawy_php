<?php
echo("<b>Zadanie 11  - funkcje licz</b><hr>");

$n = 356543;
function iloscCyfr($n)
{
    if ($n == 0) {
        return 1; //jeżeli n = 0 to zakoncz funkcje i wyrzuc 1
    }
    $n = $n > 0 ? $n : -$n; //zabezpieczenie - liczby ujemne
    for ($i = 0; $n >= 1; $i++) {
        $n /= 10;
    }
    return $i;
}

echo("ilosc cyfr liczby $n jest rowna " . iloscCyfr($n));

?>
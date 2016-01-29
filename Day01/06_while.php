<?php
echo("<b>Zadanie 6 - losowanie</b><hr>");

$random = rand(0, 20);
$i = 1;

while ($random <> 10) {
    echo("losowanie nr $i - zla liczba: $random<br>");
    $i++;
    $random = rand(0, 20);
}
echo("<b>losowanie nr $i - poprawna liczba: $random</b>");

?>
<?php
echo("<b>Cwiczenie - tablica + petla</b><hr>");
$i = 0;
$tab = array(1, 2, 3);

while ($i < count($tab)) {
    echo("indeks = $i ");
    echo("wartosc = $tab[$i] <br>");
    $i++;

}
?>
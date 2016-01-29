<?php
echo("<b>Zadanie 2 - operatory</b><hr>");

$i = 4;
$j = 5;

$suma = $i + $j;
echo("$i + $j = <b>$suma</b><br>");
$roznica = $i - $j;
echo("$i - $j = <b>$roznica</b><br>");
$iloczyn = $i * $j;
echo(" = $i * $j = <b>$iloczyn</b><br>");
$iloraz = $i / $j;
echo(" = $i / $j = <b>$iloraz</b><br>");
$reszta = $i % $j;
echo("= $i % $j = <b>$reszta</b><br>");
echo("Pole prostokata o bokach dlugosci $i i $j jest rowne <b>$iloczyn</b><br>");
echo("Obwod prostokata o bokach dlugosci $i i $j jest rowny <b>" . $suma * 2 . "</b><br>");

?>
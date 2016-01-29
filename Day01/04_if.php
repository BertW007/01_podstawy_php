<?php
echo("<b>Zadanie 4 - najwieksza liczba</b><hr>");

$n1 = 60;
$n2 = 7;
$n3 = 67;

echo("Sposrod liczb $n1, $n2 i $n3 najwieksza jest <b>");
if ($n1 > $n2) {
    if ($n1 > $n3) {
        echo($n1);
    } else {
        echo($n3);
    }
} else {
    if ($n2 > $n3) {
        echo($n2);
    } else {
        echo($n3);
    }
}
echo("</b>");
?>
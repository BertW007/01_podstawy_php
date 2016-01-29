<?php
echo("<b>Zadanie 3 - trojkat</b><hr>");
$a = 4;
$b = 4;
$c = 5;
echo("z bokow o dlugosci $a, $b, oraz $c:<br>");
echo("<i>Metoda \"?\"</i><br>");
echo (($a + $b) > $c) ? ($a == $c ? "trojkat jest rownoboczny" : ($a == $b || $b == $c ? "trojkat jest rownoramienny" : "trojkat o roznych bokach")) : "nie jest mozliwy trojkat";

echo("<br><i>Metoda \"if\"</i><br>");
if (($a + $b) > $c) {
    if ($a == $c) {
        echo("trojkat jest rownoboczny");
    } elseif ($a == $b || $b == $c) {
        echo("trojkat jest rownoramienny");
    } else {
        echo("trojkat o roznych bokach");
    }
} else {
    echo("trojkat nie jest mozliwy");
}
?>
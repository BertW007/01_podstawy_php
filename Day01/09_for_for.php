<?php
echo("<b>Zadanie 9 - rysowanie</b><hr>");

$n = 5;

for ($i = 0; $i < $n; $i++) {
    for ($j = 0; $j <= $i; $j++) {
        echo("*");
    }
    echo("<br>");
}
for ($i = $n; $i > 0; $i--) {
    for ($j = $i; $j > 0; $j--) {
        echo("*");
    }
    echo("<br>");
}
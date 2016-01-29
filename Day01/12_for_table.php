<?php
echo("<b>Zadanie 12 - tabliczka mnozenia</b><hr>");

$n = 10;

echo("<table border='1' cellpadding='10'><tr>");
for ($i = 1; $i <= $n; $i++) {
    echo("<tr>");
    for ($j = 1; $j <= $n; $j++) {
        echo("<td>$i x $j = " . $i * $j . "</td>");
    }
    echo("</tr>");
}
echo("</table>");

?>


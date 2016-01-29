<?php
echo("<b>Zadanie 11 - rysowanie 3</b><hr>");

$o = $m = $n = 9;

echo("<table>");
for ($j = 1; $j <= $n; $j++) {
    echo("<tr>");
    for ($i = 1; $i != 0; $i < $m ? $i++ : $i--) {
        echo("<td>");
        echo($i <= $o ? $i : " ");
        echo("</td>");
        $m == $i ? $m-- : "";
    }
    echo("</tr>");
    $o--;
    $m = $n;
}
echo("<tr>");
for ($i = 1; $i != 0; $i < $m ? $i++ : $i--) {
    echo("<td>");
    echo($i);
    echo("</td>");
    $m == $i ? $m-- : "";
}
echo("</tr>");
$m = $n;
echo ("</table>");

?>
<?php
echo("<b>Zadanie 4 - program seminarium</b><hr>");

$godzina = 16;
$i1 = "8:00 - 11:00 wyklady";
$i2 = "12:00 - 13:00 dyskusje";
$i3 = "14:00 obiad";
$i4 = "15:00 - 18:00 prelekcje";
$i5 = "19:00  kolacja";

echo("Plan dnia:<br>");

switch ($godzina) { // break; przerywa
    case 7:
    case 8:
        echo("$i1<br>");
    case 9:
    case 10:
    case 11:
    case 12:
        echo("$i2<br>");
    case 13:
    case 14:
        echo("$i3<br>");
    case 15:
        echo("$i4<br>");
    case 16:
    case 17:
    case 18:
    case 19:
        echo("$i5<br>");
    default:
        echo("nieprawidlowa godzina");
}
?>
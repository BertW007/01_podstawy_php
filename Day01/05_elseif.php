<?php
echo("<b>Zadanie 5 - ocena z testu</b><hr>");

$n = 83;

echo("Wynik $n z testu daje ocene <b>");
if ($n < 0) {
    echo("niedostateczna (ponizej zera)");
} elseif ($n <= 39) {
    echo("niedostateczna");
} elseif ($n <= 54) {
    echo("dopuszczająca");
} elseif ($n <= 69) {
    echo("dostateczna");
} elseif ($n <= 84) {
    echo("dobra");
} elseif ($n <= 98) {
    echo("bardzo dobra");
} elseif ($n <= 100) {
    echo("celujaca");
} else {
    echo("celujaca (powyzej 100)");
}
echo("</b>");
?>
<?php
echo("<b>Zadanie 7 - tablica wielowymiarowa</b><hr>");

$tab1 = array(1, 2, 3);
$tab2 = array(4, 5, 6);
$tab3 = array($tab1, $tab2);

echo("<pre>");
print_r($tab3);
echo("</pre>");
?>
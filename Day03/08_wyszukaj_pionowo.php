<?php
echo("<b>Zadanie 8 - wyszukaj pionowo</b><hr>");

$n = 5;
$tab = array(6, 7, 5, 4, 3, 2, 1);
$i = 0;

function vlookup($n, $tab, &$i)
{
    foreach ($tab as $key => $el) {
        if ($n == $el) {
            $i = $key;
            return true;
        }

    }
    return false;

}

var_dump(vlookup($n, $tab, $i));
var_dump($i);
?>
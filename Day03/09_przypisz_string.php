<?php
echo("<b>Zadanie 9 - Przypisz string</b><hr>");
echo("<i>Metoda \"string\"</i><br>");

$tab = array(89, 12, 220, 80);

function wszParz($tab)
{
    foreach ($tab as $el) {
        $i = 0;
        $el = (string)$el;
        for ($j = 0; $j < strlen($el); $j++) {   //dlugosc stringa
            $i += $el[$j] % 2;
        }

        echo($i == 0 ? "$el<br>" : "");
    }
}

wszParz($tab);

?>
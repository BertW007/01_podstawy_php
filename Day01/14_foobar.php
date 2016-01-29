<?php
echo("<b>Zadanie 14 - FooBar</b><hr>");

$n = 15;

function fooBar($n)
{
    for ($i = 1; $i <= $n; $i++) {
        echo ($i % 15 <> 0) ? ($i % 5 <> 0 ? ($i % 3 <> 0 ? $i : "Foo") : "Bar") : "FOOBAR";
    }
}

fooBar($n);

?>
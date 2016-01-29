<?php
$klient = array(
    'imie' => 'Lukasz',
    'nazwisko' => 'Pokrzywa',
    'miasto' => 'Warszawa'
);
if (!isset($_COOKIE['klient'])) {
    setcookie('klient', serialize($klient), time() + 3600 * 24);
    var_dump($klient);
    var_dump(serialize($klient));
    echo 'ciasteczko utworzone';
}
if (isset($_COOKIE['klient'])) {
    var_dump($_COOKIE['klient']);
    var_dump(unserialize($_COOKIE['klient']));
}

?>
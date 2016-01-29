<?php
if ($_GET["cookie"] == "usun") {
    setcookie('odwiedziny', time(), time() - 1);
    echo("ciasteczko usuniete");
} else {
    if (!isset($_COOKIE['odwiedziny'])) {
        setcookie('odwiedziny', time(), time() + 3600 * 24 * 7);
        echo 'Witaj, jest to Twoje pierwsze wejscie na strone';
    }
    if (isset($_COOKIE['odwiedziny'])) {
        $last = date('d.m.Y H:i:s', $_COOKIE["odwiedziny"]);
        setcookie('odwiedziny', time(), time() + 3600 * 24 * 7);
        echo("Witaj,<br>ostatni raz odwiedziles nas $last <br>");
        echo("Aktualna data " . date('d.m.Y H:i:s'));
    }
    echo("<a href=\"03_odwiedziny.php?cookie=usun\"><br>usun cookie</a>");
}
?>
<?php
session_start();
if (!isset($_SESSION['licznik'])) {
    $_SESSION['licznik'] = 1;
} else {
    $_SESSION['licznik']++;
}
echo 'Ilosc odswiezen strony: ' . $_SESSION['licznik'];

?>
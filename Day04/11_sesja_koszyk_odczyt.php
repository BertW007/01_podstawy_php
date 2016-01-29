<?php

session_start();
if (isset($_SESSION['wartoscKoszyka'])) {
    echo 'Wartosc koszyka: ' . $_SESSION['wartoscKoszyka'];
}

?>
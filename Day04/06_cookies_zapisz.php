<?php

if (!isset($_COOKIE['jezyk'])) { // ustawienie cookie
    setcookie('jezyk', 'en', time() + 3600 * 24);
    echo 'ciasteczko utworzone';
}
if (isset($_COOKIE['jezyk'])) {
    var_dump($_COOKIE['jezyk']);
}

?>
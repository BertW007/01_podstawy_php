<?php

if (isset($_COOKIE['jezyk'])) { //usuniecie cookie
    setcookie('jezyk', 'en', time() - 3600);
    echo 'ciasteczko jezyk usuniete<br>';
}
if (isset($_COOKIE['jezyk'])) {
    var_dump($_COOKIE['jezyk']);
} else {
    echo 'ciasteczko jezyk nie istnieje';
}

?>
<?php

if(isset($_COOKIE['loggedUser'])) {
    setcookie('loggedUser', 'jacek', time() - 1);
    echo 'ciasteczko usuniete';
}
?>


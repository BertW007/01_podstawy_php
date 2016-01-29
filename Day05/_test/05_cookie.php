<?php

if(!isset($_COOKIE['loggedUser'])) {
    setcookie('loggedUser', 'jacek', time()+3600*2*24);
    echo 'ciasteczko utworzone';
}
if(isset($_COOKIE['loggedUser'])) {
    var_dump($_COOKIE['loggedUser']);
}

?>



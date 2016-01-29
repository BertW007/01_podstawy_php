<?php
session_start();

if(isset($_SESSION['userId'])) {
    echo("Sesja: ".$_SESSION['userId']);

} else {
    echo("Brak sesji");
}

?>
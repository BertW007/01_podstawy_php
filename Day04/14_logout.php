<?php
session_start();
unset($_SESSION['login']);
$_SESSION['info'] = "<b>zostales wylogowany</b><br>";
header("location: 12_index.php");

?>


<?php
session_start();
?>

<html>
<head>
</head>
<body>
<h1>Witaj na stronie</h1>
<?php
if (isset($_SESSION['info'])) {
    echo($_SESSION['info']);
    $_SESSION['info'] = "";
}

if (!isset($_SESSION['login'])) {
    echo("<a href='13_login.php'>Zaloguj</a></p>");
} else {
    echo("<a href='14_logout.php'>Wyloguj</a></p>");
    echo("<b>tekst tylko dla zalogowanych</b>");
}
?>
<p>
    Tekst dla wszystkich
</p>
</body>
</html>




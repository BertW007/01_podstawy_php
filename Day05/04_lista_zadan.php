<?php
if (isset($_COOKIE["task"])) {
    $zadania = unserialize($_COOKIE["task"]);
    if ($_SERVER['REQUEST_METHOD'] === 'GET' && count($_GET) > 0) {
        unset ($zadania[$_GET["key"]]);
        sort($zadania);
        setcookie('task', serialize($zadania), time() + 3600 * 24 * 7);
        header("location: 04_lista_zadan.php");
    }
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['task']) && strlen($_POST['task']) > 2) {
        $zadania[] = $_POST["task"];
        setcookie('task', serialize($zadania), time() + 3600 * 24 * 7);
    }
}
?>

<html>
<head>
</head>
<body>
<form action="04_lista_zadan.php" method="POST">
    <fieldset>
        <legend>Dodaj zadanie</legend>
        <label>
            nowe zadanie:
            <input type="text" name="task" placeholder="dodaj nowe zadanie"></label>
        <label><input type="submit" name="dodaj"></label>

        <p>
            <?php
            foreach ($zadania as $key => $el) {
                echo($key + 1. . ". $el <a href='04_lista_zadan.php?key=$key'><i>[wykonane]</i></a><br>");
            }
            ?>
        </p>
    </fieldset>
</form>
</body>
</html>
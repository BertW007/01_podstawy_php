<?php
session_start();

echo $_SERVER["REQUEST_METHOD"] . "<br>";

define("LOGIN", "user");
define("PASS", "pass");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['login']) && ($_POST['login']) == LOGIN) {
        if (isset($_POST['password']) && ($_POST['password']) == PASS) {
            $_SESSION['login'] = true;
            $_SESSION['info'] = "<b>zostales zalogowany</b><br>";
            header("location: 12_index.php");
        }
    } else {
        echo("niepoprawne dane logowania, sprobuj ponownie");
    }
}

?>


<html>
<head>
</head>
<body>


<form action="13_login.php" method="POST">
    <fieldset>
        <legend>Zaloguj sie</legend>
        <p>
            <label>
                Login:
                <input type="text" name="login" placeholder="Podaj swoj login"> </label>
        </p>
        <p>
            <label>
                Haslo:
                <input type="password" name="password" placeholder="Podaj swoje haslo">
            </label>
        </p>

        <input type="submit" value="Zaloguj">
    </fieldset>
</form>

</body>
</html>
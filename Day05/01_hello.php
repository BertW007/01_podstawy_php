<html>
<head>
</head>
<body>
<?php
$name = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['name']) && strlen($_POST['name']) > 2) {
        $name = trim($_POST['name']);
        echo("czesc <b>$name</b>");
    }
}
?>
<form action="01_hello.php" method="POST">
    <fieldset>
        <legend>podaj imie</legend>
        <p>
            <label>
                imie:
                <input type="text" name="name" placeholder="Podaj swoje imie"></label>
            <label>
        </p>
        <p>
            <label>
                <input type="submit" name="zatwierdz"></label>
        </p>

</form>
</body>
</html>



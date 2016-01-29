<?php
echo $_SERVER["REQUEST_METHOD"] . "<br>";

$textarea = "";
$checkbox = "";
$cenzura = "";


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    //wywołanie metodą POST - formularz został wysłany

    if (isset($_POST['textarea']) && strlen(trim($_POST['textarea'])) > 1) {
        $textarea = $_POST['textarea'];
    }

    if (isset($_POST['checkbox'])) {
        $checkbox = $_POST['checkbox'];
    }
}

?>


<html>
<head>
</head>
<body>

<form action="05_cenzura.php" method="POST">
    <fieldset>
        <legend>Komentarz:</legend>

        <p>
            <label>
                Tekst:<br>
                <textarea rows="10" cols="180" name="textarea" placeholder="wprowadz tekst"
                          value="<?php echo($textarea); ?>"></textarea>
            </label>
        </p>
        <p>
            <label>
                Jestem swiadomy konsekwencji:
                <input type="checkbox" name="checkbox" <?php echo $checkbox == 'on' ? ' checked' : '' ?>>
            </label>
        </p>

        <input type="submit" value="Wyslij">
    </fieldset>
</form>

<?php
echo('<b>Twoj komentarz:</b><br>');

if ($checkbox == "on") {
    echo($textarea);
} else {
    $cenzura = str_replace(array("dupa", "kurwa"), array("****", "*****"), $textarea); //str_replace - zamiana
    echo($cenzura);
}

?>

</body>
</html>
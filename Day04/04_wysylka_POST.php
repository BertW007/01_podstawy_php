<?php
echo $_SERVER["REQUEST_METHOD"] . "<br>";

$imie = "";
$nazwisko = "";
$wiek = "";
$textarea = "";
$checkbox = "";


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    //wywołanie metodą POST - formularz został wysłany

    if (isset($_POST['imie']) && strlen(trim($_POST['imie'])) > 2) { //isset - istnienie pola w formularzu
        $imie = trim($_POST['imie']); //strlen - dlugosc stringa     //trim - wywal biale znaki z poczatku i konca
    }

    if (isset($_POST['nazwisko']) && strlen(trim($_POST['nazwisko'])) > 2) {
        $nazwisko = trim($_POST['nazwisko']);
    }

    if (isset($_POST['wiek']) && strlen(trim($_POST['wiek'])) <> 0) {
        $wiek = trim($_POST['wiek']);
    }


    if ($imie && $nazwisko && $wiek) {
        echo('Formularz wypelniony poprawnie. Dziekujemy!<br><b>Przeslane dane:</b><br>');
        echo("imie: <b>$imie</b><br>");
        echo("nazwisko: <b>$nazwisko</b><br>");
        echo("wiek: <b>$wiek</b><br>");

        /*
        dalsza obsługa
        */
        $imie = $nazwisko = $wiek = '';
    } else {
        echo('Formularz wypelniony niepoprawnie');
    }
}


?>


<html>
<head>
</head>
<body>

<form action="04_wysylka_POST.php" method="POST">
    <fieldset>
        <legend>Twoje dane</legend>
        <p>
            <label>
                Imie:
                <input type="text" name="imie" placeholder="Podaj swoje imie" value="<?php echo($imie); ?>"> </label>
        </p>
        <p>
            <label>
                Nazwisko:
                <input type="text" name="nazwisko" placeholder="Podaj swoje nazwisko" value="<?php echo($nazwisko); ?>">
            </label>
        </p>
        <p>
            <select name="wiek">
                <option value="0">wybierz</option>
                <option value="1" <?php echo $wiek == '1' ? ' selected' : '' ?>>10 . 30 lat</option>
                <option value="2" <?php echo $wiek == '2' ? ' selected' : '' ?>>31 . 40 lat</option>
                <option value="4" <?php echo $wiek == '3' ? ' selected' : '' ?>>41 . 50 lat</option>
            </select>
        </p>
        <p>
            <label>
                Tekst:
                <textarea rows="10" cols="180" name="textarea" placeholder="wprowadz tekst"
                          value="<?php echo($textarea); ?>"></textarea>
            </label>
        </p>
        <p>
            <label>
                Regulamin:
                <input type="checkbox" name="checkbox" <?php echo $checkbox == 'on' ? ' checked' : '' ?>>
            </label>
        </p>

        <input type="submit" value="Wyslij">
    </fieldset>
</form>

</body>
</html>
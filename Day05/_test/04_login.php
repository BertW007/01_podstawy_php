<html>
<head>
</head>
<body>



<?php

$mail = "";
$haslo = "";

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['mail']) && isset($_POST['haslo']) && $_POST['mail'] <> "" && $_POST['haslo'] <> "") {
        $mail = trim($_POST['mail']);
        $haslo = $_POST['haslo'];
        echo("twoj mail: $mail<br>");
        echo("twoje haslo: $haslo");
    }
    else{
        echo("podales niepoprawne dane");
    }
}
else{
    echo("<a href=\"04_form.php\">zaloguj sie</a>");
}

?>

</body>
</html>

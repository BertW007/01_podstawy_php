<?php

$start = isset($_GET["start"]) ? $_GET["start"] : 1;
$end = isset($_GET["end"]) ? $_GET["end"] : 49;


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $start = $_POST["start"];
    $end = $_POST["end"];

    $pula = range($start, $end);
    shuffle($pula);
    $losowanie = (array_slice($pula, 0, 6));


    if (isset($_POST['los']) && count($_POST['los']) == 6) {
        $losy = $_POST['los'];
        echo("wylosowane liczby: ");
        for ($i = 0; $i < 6; $i++) {
            echo($losowanie[$i] . ", ");
        }
        echo("<br>wybrane prze ciebie liczby: ");
        foreach ($losy as $key => $el1) {
            echo($key . ", ");
        }
        echo("<br>trafiles: ");
        $traf = 0;
        foreach ($losy as $key => $el1) {
            foreach ($losowanie as $el2) {
                $el2 == $key ? $traf++ : "";
            }
        }
        echo($traf);
    } else {
        echo("nie wybrales poprawnej ilosci liczb");
    }
}


?>


<html>
<head>
</head>
<body>

<form action="02_lotto.php" method="POST">
    <fieldset>
        <legend>Zaznacz 6 liczb</legend>
        <p>
            <?php

            for ($i = $start;
            $i <= $end;
            $i++) { ?>


            <label><?php echo($i); ?>
                <input type="checkbox" name="los[<?php echo($i); ?>]"></label>
            <label>


                <?php echo($i % 10 == 0 ? "<br>" : "");
                } ?>
                <input type="hidden" name="start" value="<?php echo("$start"); ?>"></input>
                <input type="hidden" name="end" value="<?php echo("$end"); ?>"></input>

        <p>
            <label>
                <input type="submit" name="zatwierdz"></label>
        </p>

</form>
</body>
</html>
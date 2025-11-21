<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sprawdzian 1</title>
</head>

<body>
    <?php
    $a = 10;
    $b = 3;
    $c = 2.5;
    $text = " Hello PHP World!  ";
    $number = -42.9873;
    $value = 153.67891;

    ?>
    <fieldset>
        <legend>Zad 1</legend>
        <p> Suma <?= $a + $b ?></p>
        <p> Różnica <?= $a - $b ?></p>
        <p> Iloraz <?= round($a / $b, 2) ?></p>
    </fieldset>

    <fieldset>
        <legend>Zad 2</legend>
        <?php $t = strtolower(trim("$text"));
        $tt = (str_replace("php", "PHP 8", ("$t")))  ?>
        <p><?= $tt . " | Długość: " . strlen($tt) ?></p>
    </fieldset>

    <fieldset>
        <legend>Zad 3</legend>
        <?= round($number, 3) ?> <br>
        <?= abs($number) ?> <br>
        <?= round($number, 0) ?> <br>
        <?= number_format($number, 2, ",", "") ?>
    </fieldset>

    <fieldset>
        <legend>Zad 4</legend>
        <?php date_default_timezone_set('Europe/Warsaw'); ?>
        <?= date_default_timezone_get()  ?><br>
        <?= date("Y:m:d") ?><br>
        <?= date("H:i:s") ?><br>
        <?= date("Y:m:d",  time() - (7 * 86400)) ?> |
        <?= date("Y:m:d",  time() + (30 * 86400)) ?><br>
        <?= date("l") ?><br>
    </fieldset>

    <fieldset>
        <legend>Zad 5</legend>
        <?= round($value, 1, PHP_ROUND_HALF_DOWN) ?> <br>
        <?= round($value, 2, PHP_ROUND_HALF_UP) ?> <br>
        <?= number_format($value, 2, ",", "") ?>
    </fieldset>

</body>

</html>
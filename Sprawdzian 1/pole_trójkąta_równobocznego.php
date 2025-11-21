<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zad 2</title>
    <style>
        p {
            text-align: center;
            border-top: solid 1px darkorange;
            border-bottom: solid 1px darkorange;
            border-left: solid 25px darkorange;
            border-right: solid 25px darkorange;
        }
    </style>
</head>

<body>
    <?php $a = 17 ?>
    <?php $p = ($a ** 2 * sqrt(3)) / 4 ?>
    <p>Pole trójkąta równobocznego o boku długości <?= "$a" ?> jest równe <?= round($p, 3) ?> j<sup>2</sup>.</p>

</body>

</html>
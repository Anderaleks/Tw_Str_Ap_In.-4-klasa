<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        p {
            color: purple;
            font-style: italic;
            font-family: 'Franklin Gothic Medium';
        }

        span {
            color: greenyellow;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <?php
    $tekst = "Ala ma kota";
    $calkowita = 1024;
    $rzeczywsta = 65.536;
    $bool = false;
    define("PIERWSZA_STALA", "1994");
    define("DRUGA_STALA", "Miramax");
    ?>

    <p>echo dla ciągu znaków: <span><?= $tekst ?></span></p>
    <p>echo dla liczby całkowitej: <?= $calkowita ?></p>
    <p>echo dla liczby rzeczywstej: <?= $rzeczywsta ?></p>
    <p>echo dla wartości bool'owskiej: <?= $bool ?></p>
    <hr>
    <p>var_dump dla ciągu znaków: <span><?php var_dump($tekst) ?></span></p>
    <p>var_dump dla liczby całkowitej: <?php var_dump($calkowita) ?></p>
    <p>var_dump dla liczby rzeczywstej: <?php var_dump($rzeczywsta) ?></p>
    <p>var_dump dla wartości bool'owskiej: <?php var_dump($bool) ?></p>
    <hr>
    <p>print dla pierwszej stałej: <span><?php print PIERWSZA_STALA ?></span> </p>
    <p>print dla pierwszej stałej: <?php print DRUGA_STALA ?> </p>
    <hr>
    <p>var_export dla pierwszej stałej: <span><?php var_export(PIERWSZA_STALA) ?></span> </p>
    <p>var_export dla pierwszej stałej: <?php var_export(DRUGA_STALA) ?> </p>
</body>

</html>
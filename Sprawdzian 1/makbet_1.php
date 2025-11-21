<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zad 1</title>
</head>

<body>
    <?php $text = "Niech będzie, co będzie; czas wszystko równo w swym unosi pędzie" ?>

    <p>Cytat:<q><?= "$text" ?></q></p>
    <p>Liczba znaków: <?= strlen($text) ?></p>

</body>

</html>
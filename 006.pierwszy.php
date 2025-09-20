<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $title = 'Pierwsza strona z PHP-em';
    $str1 = 'https://www.zsi.kielce.pl';
    $str2 = 'https://switch.zsi.kielce.pl';
    $str3 = 'https://poczta.zsi.kielce.pl';
    ?>
    <h1><?= "$title"; ?></h1>
    <ol style="list-style-type: decimal-leading-zero;">
        <li><a href="<?= "$str1" ?>">strona zsi</a></li>
        <li><a href="<?= "$str2" ?>">strona switch</a></li>
        <li><a href="<?= "$str3" ?>">poczta zsi</a></li>
    </ol>
</body>

</html>
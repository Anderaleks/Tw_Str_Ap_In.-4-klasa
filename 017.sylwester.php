<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p style="font-size: xx-large;">Sylwester odbędzie się w <mark><?= strtoupper(date('N', mktime(0, 0, 0, 12, 31, 25)) . ' dniu' .  ' tygodnia')?></mark> </p>
</body>

</html>
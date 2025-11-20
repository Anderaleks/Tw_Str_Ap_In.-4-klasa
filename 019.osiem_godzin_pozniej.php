<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h2>Aktualna Godzina <?= date("H:i:s") ?></h2>
    <p>Osiem godzin później: <?= date("H:i:s", time() + 28800) ?></p>
    <h2></h2>
    <p></p>
</body>
</html>
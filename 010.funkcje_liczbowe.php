<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        p{
            font-weight: bolder;
            color: darkolivegreen;
            background-color: lightgreen;
        }
    </style>
</head>
<body>
    <p>Funkcja abs dla liczby -3 zwaraca <?= abs(-3) ?></p>
    <p>Funkcja min dla zestawu liczb 0, 150, 30, 20, -8, -200 zwaraca <?= min(0,150,30,20,-8,-200) ?></p>
    <p>Funkcja min dla zestawu liczb 0, 150, 30, 20, -8, -200 zwaraca <?= max(0,150,30,20,-8,-200) ?></p>
    <p>Funkcja pi zwaraca <?= pi()?></p>
    <p>Funkcja round dla liczby 3,4 zwaraca <?= round(3.4)?></p>
    <p>Funkcja round dla liczby 3,6 zwaraca <?= round(3.6)?></p>
    <p>Funkcja round dla liczby 5,045 zwaraca <?= round(5.045, 2)?></p>
    <p>Funkcja round dla liczby 5,055 zwaraca <?= round(5.055, 2)?></p>
    <p>Funkcja rand dla liczb z przedziału od 900 do 1000 zwaraca <?= rand(900,1000)?></p>
    <p>Funkcja sqrt dla liczby 0 zwaraca <?= sqrt(0)?></p>
    <p>Funkcja sqrt dla liczby 64 zwaraca <?= sqrt(64)?></p>
    <p>Funkcja sqrt dla liczby 256 zwaraca <?= sqrt(256)?></p>
    <p>Funkcja sqrt dla liczby 65536 zwaraca <?= sqrt(65536)?></p>

    
</body>
</html>
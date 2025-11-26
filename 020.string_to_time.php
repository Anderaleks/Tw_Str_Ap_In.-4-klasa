lo<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            font-size: 20px;
        }

        p {
            padding: 5px;
        }

        #first {
            color: yellowgreen;
            border: dotted 2px green;
        }

        #second {
            color: maroon;
            border: dashed 2px maroon;
            border-radius: 5px;
        }

        #third {
            color: darkcyan;
            border-left: solid cyan 3px;
        }
    </style>
</head>

<body>
    <p id="first"> Data za 10 tygodni: <?= date("d.m.Y", strtotime("+ 10 weeks")) ?></p>
    <p id="second">Wigilia w 2222 roklu wypada w <?= date("N", strtotime("24 december 2222")) ?>. dniu tygodnia</p>
    <p id="third">Stan wojenny wprowadzono 13 grudnia 1981r. i była to to <?= date("l", strtotime("13 december 1981")) ?></p>

</body>

</html>
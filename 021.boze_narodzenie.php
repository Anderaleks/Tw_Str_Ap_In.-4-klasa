<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        mark {
            background-color: greenyellow;
            color: red;
        }

        li {
            font-weight: lighter;
            font-size: larger;
            padding-bottom: 7px;
        }
    </style>
</head>

<body>
    <ul>
        <li>Pierwszy dzień świat Bożego Narodzenia wypada w tym roku w: <mark><?= date("l", strtotime("25 december 2025")) ?></mark>.</li>
        <li>Drugi dzień świat Bożego Narodzenia wypada w tym roku w: <mark><?= date("l", strtotime("26 december 2025")) ?></mark>.</li>
    </ul>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        td {
            border: dotted 10px lightcoral;
            font-size: 80px;
            color: yellowgreen;
            padding: 100px;
            text-shadow: 3px 4px 2px lightslategrey;
        }

        table {
            border-collapse: collapse;
        }
    </style>
</head>

<body>
    <?php
    $liczba = 77;
    ?>
    <table>
        <tr>
            <td>
                <?= "$liczba" ?>
            </td>
            <td>
                <?= ($liczba * 2) ?>
            </td>
            <td>
                <?= ($liczba * 3) ?>
            </td>
            <td>
                <?= ($liczba * 4) ?>
            </td>
        </tr>
    </table>
</body>

</html>
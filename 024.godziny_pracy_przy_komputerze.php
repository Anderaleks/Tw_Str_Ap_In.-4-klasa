<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        table {
            border-collapse: collapse;
            font-family: Arial;
            table-layout: fixed;
            width: 100%;
        }

        th,
        td {
            border: medium double black;
            padding: 10px;
        }

        #blank {
            border-left: none;
            border-top: none;
        }

        #blank2 {
            border-left: none;
            border-bottom: none;
        }

        time {
            box-shadow: 0 0 5px red;
            font-family: Courier;
            font-weight: bold;
        }

        strong{
            background-color: lightskyblue;
            border-radius: 5px;
            font-weight: bold;
            padding: 2px;
        }
    </style>
</head>

<body>
    <?php
    $pon1 = date_create("12:00");
    $pon2 = date_create("15:30");
    $wtr1 = date_create("08:05");
    $wtr2 = date_create("10:15");
    $sr1 = date_create("06:45");
    $sr2 = date_create("11:25");
    $czw1 = date_create("9:55");
    $czw2 = date_create("10:35");
    $pt1 = date_create("13:50");
    $pt2 = date_create("16:10");
    $sb1 = date_create("20:05");
    $sb2 = date_create("22:35");
    $ndz1 = date_create("16:00");
    $ndz2 = date_create("18:50");

    $g1 = date_diff($pon2, $pon1)->h;
    $g2 = date_diff($wtr2, $wtr1)->h;
    $g3 = date_diff($sr2, $sr1)->h;
    $g4 = date_diff($czw1, $czw2)->h;
    $g5 = date_diff($pt2, $pt1)->h;
    $g6 = date_diff($sb2, $sb1)->h;
    $g7 = date_diff($ndz2, $ndz1)->h;


    $m1 = date_diff($pon2, $pon1)->i;
    $m2 = date_diff($wtr2, $wtr1)->i;
    $m3 = date_diff($sr2, $sr1)->i;
    $m4 = date_diff($czw2, $czw1)->i;
    $m5 = date_diff($pt2, $pt1)->i ;
    $m6 = date_diff($sb2, $sb1)->i;
    $m7 = date_diff($ndz2, $ndz1)->i;

    $sm1 = $g1 * 60 + $m1;
    $sm2 = $g2 * 60 + $m2;
    $sm3 = $g3 * 60 + $m3;
    $sm4 = $g4 * 60 + $m4;
    $sm5 = $g5 * 60 + $m5;
    $sm6 = $g6 * 60 + $m6;
    $sm7 = $g7 * 60 + $m7;

    $smt = $sm1 + $sm2 + $sm3  + $sm4 + $sm5 + $sm6 + $sm7;

    ?>
    <table>
        <tr>
            <th id="blank"></th>
            <th>Poniedziałek</th>
            <th>Wtorek</th>
            <th>Środa</th>
            <th>Czwartek</th>
            <th>Piątek</th>
            <th>Sobota</th>
            <th>Niedziela</th>
        </tr>
        <tr>
            <td>Godziny pracy przy komputerze</td>
            <td>od <time><?= date_format($pon1, " H:i") ?></time> do<time><?= date_format($pon2, " H:i") ?></time></td>
            <td>od <time><?= date_format($wtr1, " H:i") ?></time> do <time><?= date_format($wtr2, " H:i") ?></time></td>
            <td>od <time><?= date_format($sr1, " H:i") ?></time> do <time><?= date_format($sr2, " H:i") ?></time></td>
            <td>od <time><?= date_format($czw1, " H:i") ?></time> do <time><?= date_format($czw2, " H:i") ?></time></td>
            <td>od <time><?= date_format($pt1, " H:i") ?></time> do <time><?= date_format($pt2, " H:i") ?></time></td>
            <td>od <time><?= date_format($sb1, " H:i") ?></time> do <time><?= date_format($sb2, " H:i") ?></time></td>
            <td>od <time><?= date_format($ndz1, " H:i") ?></time> do <time><?= date_format($ndz2, " H:i") ?></time></td>
        </tr>
        <tr>
            <td>Różnica [h:m]</td>
            <td><time><?= $g1 . ":" . $m1 ?></time> (<strong><?= $sm1 ?></strong> minut)</td>
            <td><time><?= $g2 . ":" . $m2 ?></time> (<strong><?= $sm2 ?></strong> minut)</td>
            <td><time><?= $g3 . ":" . $m3 ?></time> (<strong><?= $sm3 ?></strong> minut)</td>
            <td><time><?= $g4 . ":" . $m4 ?></time> (<strong><?= $sm4 ?></strong> minut)</td>
            <td><time><?= $g5 . ":" . $m5 ?></time> (<strong><?= $sm5 ?></strong> minut)</td>
            <td><time><?= $g6 . ":" . $m6 ?></time> (<strong><?= $sm6 ?></strong> minut)</td>
            <td><time><?= $g7 . ":" . $m7 ?></time> (<strong><?= $sm7 ?></strong> minut)</td>
        </tr>
        <tr>
            <td id="blank2"></td>
            <th colspan="7">Suma: <time><?= intdiv($smt,60) . ":" . $smt%60 ?></time>  (<strong><?= $smt?></strong> minut)</th>
        </tr>
    </table>
</body>

</html>
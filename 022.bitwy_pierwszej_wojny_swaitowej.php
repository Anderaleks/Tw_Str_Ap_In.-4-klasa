<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        p {
            color: purple;
        }

        p.druga {
            color: darkred;
        }

        p.trzecia {
            color: cadetblue;
        }

        u {
            font-weight: bolder;
        }
    </style>
</head>

<body>
    <?php
    $date = strtotime("26 August 1914");
    $date2 = strtotime("5 September 1914");
    $date3 = strtotime("21 February 1916");

    $sec = time() - $date;
    $sec2 = time() - $date2;
    $sec3 = time() - $date3;

    $days = $sec / 86400;
    $days2 = $sec2 / 86400;
    $days3 = $sec3 / 86400;

    $old_t_obj = date_create("26 August 1914");
    $old_m_obj = date_create("5 September 1914");
    $old_v_obj = date_create("21 February 1916");
    $now_obj = date_create("now");
    ?>

    <p>Bitwa pod Tannenbergiem rozpoczeła się <u><?= date("d.m.Y", $date) ?></u> roku i było to <u><?= floor($days) ?></u> dni temu.</p>
    <p>Bitwa pod Tannenbergiem rozpoczeła się <u><?= date("d.m.Y", $date) ?></u> roku i było to <u><?php print(date_diff($now_obj, $old_t_obj)->days) ?></u> dni temu.</p>
    <hr>
    <p class="druga">Pierwsza bitwa nad Marną rozpoczeła się <u><?= date("d.m.Y", $date2) ?></u> roku i było to <u><?= round($days2, 2) ?></u> dni temu.</p>
    <p class="druga">Pierwsza bitwa nad Marną rozpoczeła się <u><?= date("d.m.Y", $date2) ?></u> roku i było to <u><?php print(date_diff($now_obj, $old_m_obj)->days) ?></u> dni temu.</p>
    <hr>
    <p class="trzecia">Bitwa pod Verdun rozpoczeła się <u><?= date("d.m.Y", $date3) ?></u> roku i było to <u><?= floor($days3) ?></u> dni temu.</p>
    <p class="trzecia">Bitwa pod Verdun rozpoczeła się <u><?= date("d.m.Y", $date3) ?></u> roku i było to <u><?php print(date_diff($now_obj, $old_v_obj)->days) ?></u> dni temu.</p>
</body>

</html>
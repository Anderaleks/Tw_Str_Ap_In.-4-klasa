<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            text-align: justify;
            margin-bottom: 10px;
        }

        h3 {
            background-color: #88D9E6;
            text-align: center;
        }

        b {
            background-color: #c5fffd;
            border-radius: 0 10px 0 10px;
            border: solid #a7ecf2;
        }
    </style>
</head>

<body>
    <?php
    define("DOBRA_RADA", "Bez chleba, to się nie najesz.");
    ?>
    <h3>Stała ma wartość: <?= DOBRA_RADA ?></h3>

    <div>Do stałej DOBRA_RADA stosuję Funkcję <b>strlen:</b> <?php echo strlen(DOBRA_RADA) ?></div>
    <div>Do stałej DOBRA_RADA stosuję Funkcję <b>str_word_count:</b> <?php echo str_word_count(DOBRA_RADA) ?></div>
    <div>Do stałej DOBRA_RADA stosuję Funkcję <b>strrev:</b> <?php echo strrev(DOBRA_RADA) ?></div>
    <div>Do stałej DOBRA_RADA stosuję Funkcję <b>strpos:</b> <?php echo strpos(DOBRA_RADA, "to") ?></div>
    <div>Do stałej DOBRA_RADA stosuję Funkcję <b>str_replace:</b> <?php echo str_replace("chleba", "mięsa", "Bez chleba, to się nie najesz."); ?></div>
    <div>Do stałej DOBRA_RADA stosuję Funkcję <b>strtolower:</b> <?php echo strtolower(DOBRA_RADA) ?></div>
    <div>Do stałej DOBRA_RADA stosuję Funkcję <b>strtoupper:</b> <?php echo strtoupper(DOBRA_RADA) ?></div>
    <div>Do stałej DOBRA_RADA stosuję Funkcję <b>ucfirstc:</b> <?php echo ucwords(DOBRA_RADA) ?></div>
    <div>Do stałej DOBRA_RADA stosuję Funkcję <b>trim:</b> <?php echo trim(DOBRA_RADA) ?></div>
    <div>Do stałej DOBRA_RADA stosuję Funkcję <b>strstr:</b> <?php echo strstr(DOBRA_RADA, "nie") ?></div>
    <div>Do stałej DOBRA_RADA stosuję Funkcję <b>substr:</b> <?php echo substr(DOBRA_RADA, offset: 10, length: 5) ?> </div>
    <div>Do stałej DOBRA_RADA stosuję Funkcję <b>str_pad:</b> <?php echo str_pad(DOBRA_RADA, length: 41, pad_string: " -_-", pad_type: STR_PAD_BOTH) ?> </div>

</body>

</html>
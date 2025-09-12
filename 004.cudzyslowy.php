<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        div {
            font-family: 'Courier New', Courier, monospace;
        }
    </style>
</head>
<body>
<?php
    $poczatek = 'Ala ma ';
    $liczba = 4;
    $koniec =' koty';
    ?>

   <div><?php echo '$poczatek $liczba $koniec a chce mieć jescze dwa.'; ?></div>
   <div><?php echo "$poczatek $liczba $koniec a chce mieć jescze dwa."; ?></div>
</body>
</html>
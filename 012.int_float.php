<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $liczba1 = 4;
    $liczba2 = 9;
    $liczba3 = 7.89;
    $liczba4 = 15.64;
    $dodaj = "59.85" + 100
    ?>

    <fieldset>
        <legend>AD 2.</legend>
        <p>Zmienna <cite><?= '$liczba1' ?></cite> ma wartość <b><?= "$liczba1" ?></b> a funkcja <code>is_int()</code> zwraca dla niej wynik:<code><b><?= var_dump(is_int($liczba1)) ?></b></code> </p>
        <p>Zmienna <cite><?= '$liczba2' ?></cite> ma wartość <b><?= "$liczba2" ?></b> a funkcja <code>is_int()</code> zwraca dla niej wynik:<code><b><?= var_dump(is_int($liczba2)) ?> </b></code></p>
        <p>Zmienna <cite><?= '$liczba3' ?></cite> ma wartość <b><?= "$liczba3" ?></b> a funkcja <code>is_int()</code> zwraca dla niej wynik:<code><b><?= var_dump(is_int($liczba3)) ?> </b></code></p>
        <p>Zmienna <cite><?= '$liczba4' ?></cite> ma wartość <b><?= "$liczba4" ?></b> a funkcja <code>is_int()</code> zwraca dla niej wynik:<code><b><?= var_dump(is_int($liczba4)) ?></b></code></p>
        <hr>
        <p>Zmienna <cite><?= '$liczba1' ?></cite> ma wartość <b><?= "$liczba1" ?></b> a funkcja <code>is_float()</code> zwraca dla niej wynik:<code><b><?= var_dump(is_float($liczba1)) ?></b></code> </p>
        <p>Zmienna <cite><?= '$liczba2' ?></cite> ma wartość <b><?= "$liczba2" ?></b> a funkcja <code>is_float()</code> zwraca dla niej wynik:<code><b><?= var_dump(is_float($liczba2)) ?></b></code> </p>
        <p>Zmienna <cite><?= '$liczba3' ?></cite> ma wartość <b><?= "$liczba3" ?></b> a funkcja <code>is_float()</code> zwraca dla niej wynik:<code><b><?= var_dump(is_float($liczba3)) ?></b></code></p>
        <p>Zmienna <cite><?= '$liczba4' ?></cite> ma wartość <b><?= "$liczba4" ?></b> a funkcja <code>is_float()</code> zwraca dla niej wynik:<code><b><?= var_dump(is_float($liczba4)) ?></b></code> </p>
    </fieldset>
    <fieldset>
        <legend>AD 3.</legend>
        <p>Zmienna <cite><?= '$dodaj' ?></cite> ma wartość <b><?= "$dodaj" ?></b> a funkcja <code>is_numeric</code> zwraca dla niej wynik:<code><b><?= var_dump(is_numeric($dodaj)) ?></b></code></p>
    </fieldset>
    <fieldset>
        <legend>AD 4.</legend>
        <p>Stała <b><?= 'PHP_INT_MAX' ?></b> ma wartość <b><?= var_export(PHP_INT_MAX) ?></b> </p>
        <p>Stała <b><?= 'PHP_INT_SIZE' ?></b> ma wartość <b><?= var_export(PHP_INT_SIZE) ?></b> </p>
        <p>Stała <b><?= 'PHP_FLOAT_MAX' ?></b> ma wartość <b><?= var_export(PHP_FLOAT_MAX) ?></b> </p>
        <p>Stała <b><?= 'PHP_FLOAT_MIN' ?></b> ma wartość <b><?= var_export(PHP_FLOAT_MIN) ?></b> </p>
        <p>Stała <b><?= 'PHP_FLOAT_DIG' ?></b> ma wartość <b><?= var_export(PHP_FLOAT_DIG) ?></b> </p>
        <p>Stała <b><?= 'PHP_FLOAT_EPSILON' ?></b> ma wartość <b><?= var_export(PHP_FLOAT_EPSILON) ?></b> </p>
    </fieldset>

</body>

</html>
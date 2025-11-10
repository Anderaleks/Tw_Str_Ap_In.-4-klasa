<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<style>
    p#przekatna{
        color: violet;
        font-size: 150%; 
        font-weight: 600;
        text-transform: capitalize;
    }

    p#pole{
        color: purple;
        text-decoration: overline;
        font-size: 25px;
        font-weight: 600;

       }
span.lewo{
    display: inline-block;
  transform: rotate(90deg);
  
}
span.prawo{
    display: inline-block;
  transform: rotate(270deg);
}

span.lewo2{
    display: inline-block;
  transform: scaleX(-1)
  
}
span.prawo2{
    display: inline-block;
}


</style>
</head>

<body>
    <?php
    $a = 5;
    $b = 12;
    $c = 84;
    ?>
    <p id="przekatna"><span class="lewo">☝</span>Przekątna prostopadłścianu o krawędziach długośći <?= $a ?>, <?= $b ?> i <?= $c ?> jest równa <?= sqrt($a ** 2 + $b ** 2 + $c ** 2) ?>.<span class="prawo">☝</span></p>

    <p id="pole"><span class="lewo2">✍</span>Pole prostopadłościanu o krawędziach długości <?= $a ?>, <?= $b ?> i <?= $c ?> wynosi <?= 2 * ($a * $b + $a * $c + $b * $c) ?>j<sup>2</sup> .<span class="prawo2">✍</span></p>
</body>

</html>
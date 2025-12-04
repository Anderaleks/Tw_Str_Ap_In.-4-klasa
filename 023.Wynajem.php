<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    * {
      text-align: center;
    }

    h1 {
      text-shadow: 0 0 10px blueviolet;
    }

    h3,
    h4 {
      text-decoration: underline blueviolet;
    }

    #cena {
      text-decoration: wavy underline blueviolet;
    }

    #koszt {
      border: dashed 2px blueviolet;
      border-radius: 2px;
      padding: 1px;
    }

    table {
      margin: 40px auto 0 auto;
      border-collapse: collapse;
    }

    td {

      height: 150px;
      border-left: 1px dashed black;
      border-right: 1px dashed black;
    }

    th {
      border: 1px solid black;
      text-shadow: 0 2px 3px blueviolet;
    }

    .rotate {
      transform: rotate(-90deg);
      display: inline-block;
    }
  </style>
</head>

<body>
  <?php
  $data1 = strtotime("12.01.2025");
  $data2 = strtotime("20.02.2025");
  $date_obj1 = date_create("12.01.2025");
  $date_obj2 = date_create("20.02.2025");

  $ld = date_diff($date_obj1, $date_obj2)->days;
  $cena = 85;
  $vat = 0.23;
  $koszt = $ld * ((1 + $vat) * $cena)
  ?>

  <h1>Wynajem</h1>
  <h3>Od <?= date("d.m.Y", $data1) ?> do <?= date("d.m.Y", $data2) ?> </h3>
  <h4>Liczba dni najmu: <?= $ld ?></h4>
  <p>Cena najmu <span id="cena"><?= $cena ?> zł </span> (Netto/Dzień) </p>
  <p>Całkowity koszt najmu <span id="koszt"><?= number_format($koszt, 2, ",", " ") ?></span> zł (Brutto | VAT = 23%) </p>

  <table>
    <th colspan="6">Numer telefonu</th>
    <tr>
      <td><span class="rotate">729 029 211</span></td>
      <td><span class="rotate">729 029 211</span></td>
      <td><span class="rotate">729 029 211</span></td>
      <td><span class="rotate">729 029 211</span></td>
      <td><span class="rotate">729 029 211</span></td>
      <td><span class="rotate">729 029 211</span></td>
    </tr>
  </table>

</body>

</html>
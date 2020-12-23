<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cavicchioli PHP Snack 1</title>
    <style>
        body {
          width: 100vw;
          height: 100vh;
          background: purple;
          color: white;
          display: flex;
          align-items: center;
          justify-content: center;
          flex-direction: column;
          overflow: hidden;
        }
        .red {
          background-color: red;
        }
        .green {
          background-color: green;
        }
    </style>
    <?php
    ?>
</head>
<body>
<!--
PHP Snack 1:
Creiamo un array 'matches' contenente altri array i
quali rappresentano delle partite di basket di
un’ipotetica tappa del calendario. Ogni array della
partita avrà una squadra di casa e una squadra
ospite, punti fatti dalla squadra di casa e punti fatti
dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo
schema:
Olimpia Milano - Cantù | 55-60
-->
  <?php
    $matches = [
      [
        "squadra_casa" => "Olimpia Milano",
        "squadra_ospite" => "Cantù",
        "punti_casa" => "55",
        "punti_ospite" => "60"
      ],
      [
        "squadra_casa" => "Olympic Team",
        "squadra_ospite" => "Assisi",
        "punti_casa" => "76",
        "punti_ospite" => "51"
      ],
      [
        "squadra_casa" => "Canottieri Milano",
        "squadra_ospite" => "Forza e Coraggio",
        "punti_casa" => "12",
        "punti_ospite" => "23"
      ]
    ];
    // appunto : se davo un nome agli array di secondo livello mi si bloccava la pagina

  ?>

  <h3 class="green">
    <?php
    //var_dump($matches); echo "<br><br>";
    // alternativa per array al var dump
    //print_r($matches); echo "<br><br>";
    ?>
  </h3>

  <h1 class="red">
    <?php
      // cicliamo
      for ($i=0; $i < count($matches); $i++) {
        print_r('<div class="match">' . $matches[$i]['squadra_casa'] . ' - ' . $matches[$i]['squadra_ospite'] . ' | ' . $matches[$i]['punti_casa'] . '-' . $matches[$i]['punti_ospite'] . '</div>');
      }
    ?>
  </h1>




</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cavicchioli PHP Snack 2</title>
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
PHP Snack 2:
GOAL:
Passare come parametri GET name, mail e age e
verificare (cercando i metodi che non
conosciamo nella documentazione) che:
1. name sia più lungo di 3 caratteri,
2. che mail contenga un punto e una chiocciola
3. e che age sia un numero.
Se tutto è ok stampare "Accesso riuscito", altrimenti
"Accesso negato"
-->
  <?php
    $name = $_GET["name"];

    $mail = $_GET["mail"];
    $at = strpos($mail, '@');
    $dot = strpos($mail, '.');

    $age = $_GET["age"];

  ?>
  <h2 class="red">
    example: http://localhost/?name=ciccio&mail=ciccio@panettone.nutella&age=500
  </h2>


  <h3 class="green">
    <?php
      if ((strlen($name) > 3) && ($at !== false && $dot !== false) && (is_numeric($age)) && ($age >= 18 && $age < 120)) {
        echo "Accesso riuscito";
      } else {
        echo "Accesso negato";
      };

    ?>
  </h3>



</body>
</html>

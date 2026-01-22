<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Resultado</title>
  </head>
  <body>
    <main>
      <h1>Resultado Final:</h1>
      <p>
        <?php
          $numero = $_GET["numero"] ?? 0;
          echo "O número escolhido foi <b>$numero</b>";
          echo "<br>O seu antecessor é " . ($numero-1);
          echo "<br>O seu sucessor é " . ($numero+1);
        ?>  
      </p>
      <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
  </body>
</html>
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
      <h1>Analisador de Número Real</h1>
      <?php
        $numero = $_GET["numero"] ?? 0;
        $int = (int)$numero;
        // Formatar numeros
        $formatado = number_format($numero, 3, ",", ".");
        $inteiro = number_format($int, 0, ",", ".");
        $fracao = number_format($numero - $int, 3, ",", ".");
        // Printa os resultados
        echo "<p>Analisando o número <b>$formatado</b> informado pelo usuário:</br></p>";
        echo "<ul><li>A parte inteira do número é <b>$inteiro</b></li>";
        echo "<li>A parte fracionária do número é <b>$fracao</b></li></ul></br>";
      ?>
      <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
  </body>
</html>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio 008</title>
  </head>
  <body>
    <?php 
      // Capturando dados do formulario retroalimentado
      $valor1 = $_GET['v1'] ?? 0;
      $valor2 = $_GET['v2'] ?? 0;
    ?>
    <main>
      <h1>Reajustador de Preços</h1>
      <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="v1">Preço do Produto (R$):</label>
        <input type="number" id="idv1" name="v1" value="<?=$valor1?>" step="0.01" required>
        <label for="v2">Qual será o percentual de reajuste (<b><?=$valor2?>%</b>):</label>
        <input type="range" id="idv2" name="v2" min="0" max="100" value="<?=$valor2?>" required>
        <input type="submit" value="Reajustar">
      </form>
    </main>

    <section id="resultado">
      <h2>Resultado do Reajuste</h2>
      <?php
        // Cria um padrao de formatacao da moeda
        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
        // Formata os numeros para a respectiva moeda
        $real = numfmt_format_currency($padrao, $valor1, "BRL"); 
        $reajustado = numfmt_format_currency($padrao, $valor1 + $valor1*$valor2/100, "BRL");

        echo "<p>O produto que custava $real, com <b>$valor2% de aumento</b> vai passar a custar <b>$reajustado</b> a partir de agora.</p>";
      ?>
    </section>  
  </body>
</html>
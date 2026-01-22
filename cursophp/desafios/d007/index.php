<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio 007</title>
  </head>
  <body>
    <?php 
      // Capturando dados do formulario retroalimentado
      $valor1 = $_GET['v1']??0;      
      $minimo = 1621;

      // Cria um padrao de formatacao da moeda
      $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
      // Formata os numeros para a respectiva moeda
      $minimoFormatado = numfmt_format_currency($padrao, $minimo, "BRL");
    ?>
    <main>
      <h1>Informe seu salário</h1>
      <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="v1">Salário (R$):</label>
        <input type="number" id="idv1" name="v1" value="<?=$valor1?>" step="0.01" required>
        <p>Considerando o salário mínimo de <b><?=$minimoFormatado?></b></p>
        <input type="submit" value="Calcular">
      </form>
    </main>

    <section id="resultado">
      <h2>Resultado Final</h2>
      <?php
        $qtd_minimos = intdiv($valor1, $minimo);
        $resto = $valor1 - ($qtd_minimos * $minimo);
        
        $valorFormatado = numfmt_format_currency($padrao, $valor1, "BRL");
        $restoFormatado = numfmt_format_currency($padrao, $resto, "BRL");
        
        echo "Quem recebe um salário de $valorFormatado ganha <b>$qtd_minimos salários mínimos</b> + $restoFormatado." ?>
    </section>  
  </body>
</html>
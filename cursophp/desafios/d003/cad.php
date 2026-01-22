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
      <h1>Conversor de Moedas v1.0</h1>
      <?php
        // Converte o valor com a cotação especificada
        $cotacao = 5.22;
        $numero = $_GET["numero"] ?? 0;
        $convertido = $numero / $cotacao;
        // Cria um padrao de formatacao da moeda        
        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
        // Formata os numeros para a respectiva moeda
        $real = numfmt_format_currency($padrao, $numero, "BRL");
        $dolar = numfmt_format_currency($padrao, $convertido, "USD");
        $taxa = numfmt_format_currency($padrao, $cotacao, "BRL");
        // Printa os valores
        echo "<p>Seus $real equivalem a <b>$dolar</b></p>";
        echo "<p><b>Cotação fixa de $taxa</b> informada no código</p>";
      ?>
      <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
  </body>
</html>
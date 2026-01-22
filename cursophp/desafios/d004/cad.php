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
      <h1>Conversor de Moedas v2.0</h1>
      <?php
        // Seleciona o periodo para consultar
        $inicial = date('m-d-Y', strtotime('-7 days'));
        $final = date('m-d-Y');
        // Coleta cotacao da ultima semana no site do Banco Central do Brasil
        $url_bcb = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'' . $inicial . '\'&@dataFinalCotacao=\'' . $final . '\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoVenda,dataHoraCotacao';
        $json = file_get_contents($url_bcb, true);
        $data = json_decode($json, true);
        $value = $data['value'][0];
        $cotacao = $value['cotacaoVenda'];
        $date = date('d-m-Y', strtotime($value['dataHoraCotacao']));
        // Converte o valor com a cotação especificada
        $numero = $_GET["numero"] ?? 0;
        $convertido = $numero / $cotacao;
        // Cria um padrao de formatacao da moeda        
        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
        // Formata os numeros para a respectiva moeda
        $real = numfmt_format_currency($padrao, $numero, "BRL");
        $dolar = numfmt_format_currency($padrao, $convertido, "USD");
        $taxa = numfmt_format_currency($padrao, $cotacao, "BRL");
        // Printa o resultado
        echo "Seus $real equivalem a <b>$dolar</b></br>";
        echo "<p>Cotação obtida diretamente do site do <b>Banco Central do Brasil</b>";
        echo "</br>Taxa de <b>$taxa</b> no dia <b>$date</b></p>";
      ?>
      <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
  </body>
</html>
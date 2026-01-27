<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <style>
      img.nota {
        height: 50px;
        margin: 5px;
      }
    </style>
    <title>Desafio 013</title>
  </head>
  <body>
    <?php 
      // Capturando dados do formulario retroalimentado
      $valor1 = $_GET['v1'] ?? 0;
      // Cria um padrao de formatacao da moeda        
      $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
      // Formata os numeros para a respectiva moeda
      $real = numfmt_format_currency($padrao, $valor1, "BRL");
      
      $resto = $valor1;
      $valor100 = intdiv($resto, 100);
      $resto %= 100;
      $valor50 = intdiv($resto, 50);
      $resto %= 50;
      $valor10 = intdiv($resto, 10);
      $resto %= 10;
      $valor5 = intdiv($resto, 5);
    ?>
    <main>
      <h1>Caixa Eletrônico</h1>
      <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="v1">Qual valor você deseja sacar? (R$)<sup>*</sup></label>
        <input type="number" id="v1" name="v1" value="<?=$valor1?>" step="5" required>
        <p style="font-size: 0.6em"><sup>*</sup>Notas disponíveis: R$100, R$50, R$10 e R$5</p>
        <input type="submit" value="Sacar">
      </form>
    </main>

    <section id="resultado">
      <h2>Saque de <?=$real?></h2>
      <p>O caixa eletrônico vai te entregar as seguintes notas:</p>
      <ul>
        <li><img src="images/100-reais.jpg" alt="Nota de 100" class="nota"> x<?=$valor100?></li>
        <li><img src="images/50-reais.jpg" alt="Nota de 50" class="nota"> x<?=$valor50?></li>
        <li><img src="images/10-reais.jpg" alt="Nota de 10" class="nota"> x<?=$valor10?></li>
        <li><img src="images/5-reais.jpg" alt="Nota de 5" class="nota"> x<?=$valor5?></li>
      </ul>
    </section>  
  </body>
</html>
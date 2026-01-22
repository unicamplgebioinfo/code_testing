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
      // Cria um padrao de formatacao da moeda        
      $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
      // Formata os numeros para a respectiva moeda
      $real = numfmt_format_currency($padrao, $valor1, "BRL");
      
      $resto100 = $valor1 % 100;
      $resto50 = $resto100 % 50;
      $resto10 = $resto50 % 10;
      $resto5 = $resto10 % 5;
    ?>
    <main>
      <h1>Caixa Eletrônico</h1>
      <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="v1">Qual valor você deseja sacar? (R$)</label>
        <input type="number" id="idv1" name="v1" value="<?=$valor1?>" required>
        <input type="submit" value="Sacar">
      </form>
    </main>

    <section id="resultado">
      <h2>Saque de <?=$real?></h2>
      <p>O caixa eletrônico vai te entregar as seguintes notas:</p>
      <?php
        echo "<ul><li>" . intdiv($valor1, 100) . "x Notas de R$ 100,00</li>";
        echo "<li>" . intdiv($resto100, 50) . "x Notas de R$ 50,00</li>";
        echo "<li>" . intdiv($resto50, 10) . "x Notas de R$ 10,00</li>";
        echo "<li>" . intdiv($resto10, 5) . "x Notas de R$ 5,00</li></ul></br>";
      ?>
    </section>  
  </body>
</html>
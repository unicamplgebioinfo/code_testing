<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio 009</title>
  </head>
  <body>
    <?php 
      // Capturando dados do formulario retroalimentado
      $valor1 = $_GET['v1']??0;
      $valor2 = $_GET['v2']??0;
      $peso1 = $_GET['p1']??1;
      $peso2 = $_GET['p2']??1;
    ?>
    <main>
      <h1>Médias Aritméticas</h1>
      <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="v1">1º Valor:</label>
        <input type="number" id="idv1" name="v1" value="<?=$valor1?>" required>
        <label for="p1">1º Peso:</label>
        <input type="number" id="idp1" name="p1" value="<?=$peso1?>" min="1" required>
        <label for="v2">2º Valor:</label>
        <input type="number" id="idv2" name="v2" value="<?=$valor2?>" required>
        <label for="p2">2º Peso:</label>
        <input type="number" id="idp2" name="p2" value="<?=$peso2 ?>" min="1" required>
        <input type="submit" value="Calcular Médias">
      </form>
    </main>

    <section id="resultado">
      <h2>Cálculo das Médias</h2>
      <?php
        $mediaAritmetica = ($valor1 + $valor2) / 2;
        $mediaPonderada = ($valor1*$peso1 + $valor2*$peso2) / ($peso1 + $peso2);
        
        echo "<p>Analisando os valores $valor1 e $valor2, temos:</p>";
        echo "<ul><li>A <b>Média Aritmética Simples</b> entre os valores é igual a <b>" . number_format($mediaAritmetica, 2, "," , ".")."</b>.</li>";
        echo "<li>A <b>Média Aritmética Ponderada</b> com os pesos $peso1 e $peso2 é igual a <b>" . number_format($mediaPonderada, 2, "," , ".") . "</b>.</li></ul></br>";
      ?>
    </section>  
  </body>
</html>
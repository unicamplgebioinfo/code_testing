<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exercicio PHP</title>
  </head>
  <body>
    <?php 
      // Capturando dados do formulario retroalimentado
      $valor1 = $_GET['v1']??0;
      $valor2 = $_GET['v2']??0;
    ?>
    <main>
      <h1>Somador de Valores</h1>
      <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="v1">Valor 1:</label>
        <input type="number" id="idv1" name="v1" value="<?=$valor1?>" required>
        <label for="v2">Valor 2:</label>
        <input type="number" id="idv2" name="v2" value="<?=$valor2?>" required>
        <input type="submit" value="Somar">
      </form>
    </main>

    <section id="resultado">
      <h2>Resultado da Soma</h2>
      <?= "A soma entre os valores $valor1 e $valor2 é igual a <b>" . $valor1+$valor2 . "</b>" ?>
    </section>  
  </body>
</html>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio 006</title>
  </head>
  <body>
    <?php 
      // Capturando dados do formulario retroalimentado
      $valor1 = $_GET['v1'] ?? 0;
      $valor2 = $_GET['v2'] ?? 1;
    ?>
    <main>
      <h1>Anatomia de uma Divisão</h1>
      <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="v1">Dividendo:</label>
        <input type="number" id="idv1" name="v1" value="<?=$valor1?>" min="0" required>
        <label for="v2">Divisor:</label>
        <input type="number" id="idv2" name="v2" value="<?=$valor2?>" min=1 required>
        <input type="submit" value="Calcular">
      </form>
    </main>

    <section id="resultado">
      <h2>Estrutura da Divisão</h2>
      <?= "Dividindo $valor1 por $valor2 obtemos <b>" . intdiv($valor1, $valor2) . "</b> e resto <b>" . $valor1%$valor2 . "<b>" ?>

      <table class="divisao">
        <tr>
          <td><?=$valor1?></td>
          <td><?=$valor2?></td>
        </tr>
        <tr>
          <td><?=$valor1%$valor2?></td>
          <td><?=intdiv($valor1, $valor2)?></td>
        </tr>
      </table>
      
    </section>  
  </body>
</html>
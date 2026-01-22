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
      $valor1 = $_GET['v1']??0;
    ?>
    <main>
      <h1>Informe um número</h1>
      <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="v1">Número:</label>
        <input type="number" id="idv1" name="v1" value="<?=$valor1?>" required>
        <input type="submit" value="Calcular Raízes">
      </form>
    </main>

    <section id="resultado">
      <h2>Resultado Final</h2>
      <?php
        $raiz_quadrada = number_format($valor1 ** (1/2), 3, "," , ".");
        $raiz_cubica = number_format($valor1 ** (1/3), 3, "," , ".");
        
        echo "<p>Analisando o <b>número $valor1</b>, temos:</p>";
        echo "<ul><li>A sua raiz quadrada é <b>$raiz_quadrada</b></li>";
        echo "<li>A sua raiz cúbica é <b>$raiz_cubica</b></li></ul></br>";
      ?>
    </section>  
  </body>
</html>
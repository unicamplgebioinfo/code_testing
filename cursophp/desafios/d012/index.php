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
    ?>
    <main>
      <h1>Calculadora de Tempo</h1>
      <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="v1">Qual é o total de segundos?</label>
        <input type="number" id="idv1" name="v1" value="<?=$valor1?>" required>
        <input type="submit" value="Calcular">
      </form>
    </main>

    <section id="resultado">
      <h2>Totalizando tudo</h2>
      <?php
        $restoDias = $valor1 % (60*60*24*7);
        $restoHoras = $restoDias % (60*60*24);
        $restoMinutos = $restoHoras % (60*60);
        $restoSegundos = $restoMinutos % 60;

        echo "<p>Analisando o valor que você digitou, <b>$valor1 segundos</b> equivalem a um total de:</p>";
        echo "<ul><li>" . intdiv($valor1, 60*60*24*7) . " semanas</li>";
        echo "<li>" . intdiv($restoDias, 60*60*24) . " dias</li>";
        echo "<li>" . intdiv($restoHoras, 60*60) . " horas</li>";
        echo "<li>" . intdiv($restoMinutos, 60) . " minutos</li>";
        echo "<li>" . $restoSegundos . " segundos</li></ul></br>";
      ?>
    </section>  
  </body>
</html>
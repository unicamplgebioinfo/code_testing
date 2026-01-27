<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio 010</title>
  </head>
  <body>
    <?php 
      // Capturando dados do formulario retroalimentado
      $ano = $_GET['v1'] ?? 2000;
      $anoHoje = date('Y');
      $anoAtual = $_GET['v2'] ?? $anoHoje;
    ?>
    <main>
      <h1>Calculando a sua idade</h1>
      <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="v1">Em que ano você nasceu?</label>
        <input type="number" id="idv1" name="v1" value="<?=$ano?>" min="1900" max="<?=$anoHoje?>" required>
        <label for="v2">Quer saber sua idade em que ano? (atualmente estamos em <strong><?=$anoHoje?></strong>)</label>
        <input type="number" id="idv2" name="v2" value="<?=$anoAtual?>" min="1900" required>
        <input type="submit" value="Qual será minha idade?">
      </form>
    </main>

    <section id="resultado">
      <h2>Resultado</h2>
      <?php
        $idade = $anoAtual - $ano;        
        echo "<p>Quem nasceu em $ano vai ter <b>$idade anos</b> em $anoAtual!</p>";
      ?>
    </section>  
  </body>
</html>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Formulário</title>
  </head>
  <body>
    <section>  
      <h1>Trabalhando com números aleatórios</h1>
      <p>
        <?php
          $numeroAleatorio = mt_rand(0, 100); // rand | mt_rand | random_int
          echo "Gerando um número aleatório entre 0 e 100...</br>";
          echo "O valor gerado foi <b>$numeroAleatorio</b>!";
        ?>
      </p>
      <button onclick="javascript:document.location.reload()">&#x1F504; Gerar Outro</button>
    </section>
  </body>
</html>
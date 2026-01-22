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
    <main>
      <pre>
        <?php 
          setcookie("dia-da-semana", "SEGUNDA", time() + 3600);
          
          session_start();
          $_SESSION["teste"] = "FUNCIONOU";

          echo "<h1>Superglobais GET</h1>";
          echo var_dump($_GET);
          
          echo "<h1>Superglobais POST</h1>";
          echo var_dump($_POST);
          
          echo "<h1>Superglobais REQUEST</h1>";
          echo var_dump($_REQUEST);

          echo "<h1>Superglobais COOKIE</h1>";
          echo var_dump($_COOKIE);

          echo "<h1>Superglobais SESSION</h1>";
          echo var_dump($_SESSION);

          echo "<h1>Superglobais ENV</h1>";
          echo var_dump($_ENV);

          foreach(getenv() as $k => $v) {
            echo "<br> $k -> $v"; 
          }
          
          echo "<h1>Superglobais SERVER</h1>";
          echo var_dump($_SERVER);

          echo "<h1>Superglobais GLOBALS</h1>";
          echo var_dump($GLOBALS);
        ?>
      </pre>
    </main>
  </body>
</html>
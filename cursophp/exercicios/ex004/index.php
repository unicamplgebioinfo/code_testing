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
    <header>
      <h1>Apresente-se para nós</h1>
    </header>
    <section>
      <form action="cad.php" method="get">
        <label for="nome">Nome:</label>
        <input type="text" id="idnome" name="nome" required>
        
        <label for="sobrenome">Sobrenome:</label>
        <input type="text" id="idsobrenome" name="sobrenome" required>
        
        <input type="submit" value="Enviar">
      </form>
    </section>
  </body>
</html>
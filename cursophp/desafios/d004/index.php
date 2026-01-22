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
      <h1>Conversor de Moedas v2.0</h1>
      <form action="cad.php" method="get">
        <label for="numero">Quantos R$ você tem na carteira?</label>
        <input type="number" id="idnumero" name="numero" value="50" step="0.01" required>
        <input type="submit" value="Converter">
      </form>
    </section>
  </body>
</html>
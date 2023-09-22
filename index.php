<!doctype html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Exemplo</title>
</head>
<body>
    <h1>PHP com POO - Exemplo 3</h1>
    <hr>

    <h2>Assuntos abordados</h2>

    <ul>
      <li>Método construtor com atribuição obrigatória de valores aos parâmetros/propriedades do objeto</li>
      <li>Uso do <code>$this</code> para acesso às propriedades dentro do objeto</li>
    </ul>

    <?php
    require_once "src/Cliente.php";

    $clienteA = new Cliente("Sofia", "sofia322@gmail.com", ["11 98543-5432"]);
    $clienteB = new Cliente("José", "jose645@gmail.com", ["11 98543-5432", "21 93424-4556"]);

    var_dump($clienteA, $clienteB);



    ?>
</body>
</html>
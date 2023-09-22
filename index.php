<!doctype html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Exemplo 4</title>
</head>
<body>
    <h1>PHP com POO - Exemplo 4</h1>
    <hr>

    <h2>Assuntos abordados</h2>

    <ul>
      <li>Encapsulamento</li>
      <li>Modificadores de visibilidade (public, private, protected)</li>
    </ul>

    <?php
    require_once "src/Cliente.php";

    $clienteA = new Cliente();

     // O código abaixo dara erro pois a propriedade é privada e NÂO pode ser acessada fora da classe
    // $clienteA->nome = "Higor";

    $clienteA->setNome("Rafaela Morais");

    var_dump($clienteA);


    ?>
</body>
</html>
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
    <h1>PHP com POO - Exemplo 2</h1>
    <hr>

    <h2>Criação de classe</h2>

    <ul>
      <li>Acesso direto às propriedades</li>
      <li>Atribuição e leitura de dados</li>
      <li>Chamada de métodos</li>
    </ul>

    <?php
    // importando a Classe
    require_once "src/Cliente.php";

    // Criando instâncias da Classe (objetos)
    $clienteA = new Cliente();
    $clienteB = new Cliente();

    // Acesso e atribuição
    $clienteA->nome = "Júlia";
    $clienteB->nome = "Daniel";

    $clienteA->telefones = ["11 98765-4321", "21 98567-4353"];
    $clienteA->email = "julia_nogueira@gmail.com";
    $clienteA->senha = password_hash("julia123", PASSWORD_DEFAULT);
    ?>

    <hr>
    <h2>Dados dos objetos (acesso e leitura)</h2>
    <h3><?= $clienteA->nome ?></h3>
    <h3><?= $clienteB->nome ?></h3>

    <?php  var_dump($clienteA, $clienteB); ?>
</body>
</html>
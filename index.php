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
    <h1>PHP com POO - Exemplo 1</h1>
    <hr>

    <h2>Criação de classe</h2>

    <ul>
      <li>Criação de classe</li>
      <li>Importação do arquivo de classe</li>
      <li>Criação de instâncias/objetos</li>
    </ul>

    <?php
    // importando a Classe
    require_once "src/Cliente.php";

    // Criando instâncias da Classe (objetos)
    $clienteA = new Cliente();
    $clienteB = new Cliente();

    var_dump($clienteA, $clienteB);

    ?>
</body>
</html>
<!doctype html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Exemplo 5</title>
</head>
<body>
    <h1>PHP com POO - Exemplo 5</h1>
    <hr>

    <h2>Assuntos abordados</h2>

    <ul>
      <li>Herança (Super Classe e Sub Classe)</li>
      <li>Métodos/propriedades protegidas (acessíveis apenas peka classe em que foram definidas e pelas subclasses)</li>
      <li>Classe Abstrata (não pode ser instanciada, serve apenas de modelo para subclasses)</li>
      <li>Classe Final (não pode ser herdada, não aceita criação de subclasses)</li>
    </ul>

    <?php
    require_once "src/PessoaFisica.php";
    require_once "src/PessoaJuridica.php";

    $clientePF = new PessoaFisica();

    $clientePF->setNome("César");
    $clientePF->setEmail("cesar324@mail.com");
    $clientePF->setIdade(21);
    $clientePF->setCpf("423-342-456-34");

    var_dump($clientePF);

    $clientePJ = new PessoaJuridica();

    $clientePJ->setNome("Juliana Oliveira");
    $clientePJ->setEmail("seastorm@gmail.com");
    $clientePJ->setAnoFundacao(2008);
    $clientePJ->setCnpj("32.534.5343/4322.41");
    $clientePJ->setNomeFantasia("Seastorm");

    var_dump($clientePJ);
    ?>

    <hr>

    <?php
    require_once "src/MEI.php";

    $clienteMei = new MEI();
    $clienteMei->setNome("Mariana Júlia");
    $clienteMei->setAnoFundacao(2023);
    $clienteMei->setNomeFantasia("Marina Empreendimentos");
    $clienteMei->setAreaDeAtuacao("Ervas medicinais");

    var_dump($clienteMei);

    ?>
</body>
</html>
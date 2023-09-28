<!doctype html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Exemplo 7</title>
</head>
<body>
    <h1>PHP com POO - Exemplo 7</h1>
    <hr>

    <h2>Assuntos abordados</h2>

    <ul>
      <li>Polimorfismo</li>
      <li>Sobreposição de métodos</li>
      <li>Uso do <code>parent</code> para acessar superclasse</li>
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

    <h2>Saída de dados</h2>

    <section>
      <?= $clientePF->exibirDados(); ?>
    </section>

    <section>
        <?= $clientePJ->exibirDados(); ?>
    </section>
</body>
</html>
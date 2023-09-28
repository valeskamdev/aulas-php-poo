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
      <li>Propriedades e métodos estáticos</li>
      <li>Acesso direto sem necessidade de objetos/instnacias</li>
      <li>Uso do <code>self</code> para acesso (dentro da classe) aos recursos estáticos</li>
    </ul>

    <?php
    require_once "src/PessoaFisica.php";

    $cliente1 = new PessoaFisica();
    $cliente1->setNome("Astrogildo");
    $cliente1->setIdade(75);

    $cliente2 = new PessoaFisica();
    $cliente2->setNome("Enzo");
    $cliente2->setIdade(20);

    require_once "src/Utilitarios.php";
    Utilitarios::obterData(); // acesso direto sem necessidade de instanciar a classe
    ?>

    <h2>Atendimentos do dia: <?=Utilitarios::$dataAtual?></h2>

    <h3>Cliente: <?=$cliente1->getNome()?></h3>
    <p>Tipo de atendimento: <?=Utilitarios::definirAtendimento($cliente1->getIdade())?></p>

    <hr>

    <h3>Cliente: <?=$cliente2->getNome()?></h3>
    <p>Tipo de atendimento: <?=Utilitarios::definirAtendimento($cliente2->getIdade())?></p>

</body>
</html>
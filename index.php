<!doctype html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Exemplo 8</title>
</head>
<body>
    <h1>PHP com POO - Exemplo 8</h1>
    <hr>

    <h2>Assuntos abordados</h2>

    <ul>
      <li>Namespaces: agrupamento e organização de recursos (classes, funções, constantes)</li>
      <li>Prevenção de conflitos entre classes de mesmo nome</li>
      <li>Configurar e usar <code>namespaces</code> e <code>alias</code></li>
    </ul>

    <?php
    /*
     * Só de fazer o require/importação das classes (SEM NAMESPACE),
     * já da erro no servidor devido a ter duas classes com o mesmo nome
     */
    require_once "src/fornecedores/Pagamento.php";
    require_once "src/prestadores/Pagamento.php";

    // Forma 1: de usar classes com namespace
    // $pagamentoFornecedor = new \fornecedores\Pagamento();
    // $pagamentoPrestador = new \prestadores\Pagamento();

    // Forma 2: de usar classes com namespace
    use fornecedores\Pagamento;
    use prestadores\Pagamento as PrestadorPagamento; // alias (apelido)

    $pagamentoFornecedor = new Pagamento();
    $pagamentoPrestador = new PrestadorPagamento();

    var_dump($pagamentoFornecedor, $pagamentoPrestador);
    ?>
</body>
</html>
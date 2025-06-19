<?php
require_once '../dao/ProdutoDAO.php';

$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

$dao = new ProdutoDAO();
$produto = $dao->getById($id);

if(!$produto)
{
    echo "Produto não encontrado!";
    exit();
}
?>

<h1><?= $produto->getNome() ?></h1>
<p>Preço: R$ <?= $produto->getPreco() ?></p>
<p>Ativo: <?= $produto->getAtivo()? 'Sim' : 'Não' ?></p>
<p>Validade: <?= $produto->getDataDeValidade() ?></p>

<a href="../produtos/listar.php">Voltar</a>

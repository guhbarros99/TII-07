<?php
require_once './backend/ProdutoDAO.php';
require_once './backend/ClienteDAO.php';

$dao = New ProdutoDAO();
$cliDAO = New ClienteDAO();

$produtos =$dao->getAll();
$clientes =$cliDAO->getAll();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles.css">
    <title>Lista De Produtos</title>
    
</head>
<body>
    <h2>Lista de Produtos</h2>

    <a href="./frontend/produto_form.php">Cadastrar Novo Produto</a>

    <table border="1" cellpading= "4">
        <tr>
            <td>Nome</td>
            <td>Preço</td>
            <td>Ações</td>
        </tr>
        <?php foreach($produtos as $prd): ?>
        <tr>
            <td><?= $prd->getNome() ?></td>
            <td><?=$prd->getPreco() ?></td>
            <td>
                <a href="./frontend/produto_details.php?id=<?=$prd->getId()?>">Detalhes</a>
                <a href="./frontend/produto_form.php?id=<?=$prd->getId()?>">Editar</a>
                <a href="./frontend/produto_delete.php?id=<?=$prd->getId()?>">Excluir</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
    <h2>Lista de Clientes</h2>

    <a href="./frontend/cliente_form.php">Cadastrar Novo Cliente</a>

    <table border="1" cellpading="4">
        <tr>
            <td>Nome</td>
            <td>CPF</td>
            <td>Ações</td>
        </tr>
        <?php foreach($clientes as $cli): ?>                
        <tr>
            <td><?= $cli->getNome() ?></td>
            <td><?= $cli->getCpf() ?></td>
            <td>
                <a href="./frontend/cliente_details.php?id=<?=$prd->getId()?>">Detalhes</a>
                <a href="./frontend/cliente_form.php?id=<?=$prd->getId()?>">Editar</a>
                <a href="./frontend/cliente_delete.php?id=<?=$prd->getId()?>">Excluir</a>
            </td>
        </tr>
        <?php endforeach; ?> 
    </table>
</body>
</html>


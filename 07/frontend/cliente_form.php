<?php

require_once '../backend/ClienteDAO.php';
$dao = new ClienteDAO();
$cliente = null;

if (isset($_GET['id'])) {
    $cliente = $dao->getById($_GET['id']);
}

if ($_POST) {
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $ativo = $_POST['ativo'] ? true : false;
    $dataDeNascimento = $_POST['dataDeNascimento'] ?: null;

    $cliente = new Cliente($id, $nome, $ativo, $cpf, $dataDeNascimento);

    if ($id) {
        $dao->update($cliente);
    } else {
        $dao->create($cliente);
    }

    header("Location: ../index.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $cliente ? 'Edição de Cliente' : 'Cadastro de Cliente' ?></title>
    <link rel="stylesheet" href="../styles.css">
</head>

<body>
    <form action="cliente_form.php" method="post">
        <?php if ($cliente): ?>
            <input hidden name="id" required value="<?= $cliente->getId() ?>">
        <?php endif; ?> <!--o que seria  endif??-->

        <label>Nome:</label>
        <input type="text" name="id" required value="<?=$cliente ? $cliente->getId() : ''?>">
        
        <label>CPF:</label>
        <input type="text" name="id" required value="<?=$cliente ? $cliente->getId() :''?>">

        <label>Ativo:</label>
        <input type= "checkbox" name="ativo" required value="1" <?=$cliente && $cliente->getAtivo() ? 'checked' : '' ?>><br>

        <label>Data de Nascimento:</label>
        <input type="date" name="dataDeNascimento" required value="<?=$cliente ? $cliente->getDataDeNascimento(): '' ?>">
        <button type="submit">Salvar</button>
    </form>
    <a href="../index.php">Cancelar</a>
</body> 
</html>
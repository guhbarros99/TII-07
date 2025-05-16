<?php

require_once 'ContatoDAO.php';
$dao = new COntatoDAO();
$contatos = $dao->getAll();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Contatos</title>
</head>

<body>
    <h2>LISTA DE CONTATOS</h2>

    <a

    <table border="1" cellpadding='5'>
        <tr>
            <th>ID</th>
            <th>NOME</th>
            <th>AÇÕES</th>
        </tr>
        <?php foreach ($contatos as $c): ?>
            <tr>
                <td><?= $c->getId() ?></td>
                <td><?= $c->getNome() ?></td>
                <td>
                    <a href="#">Detalhes</a>
                    <a href="#">Editar</a>
                    <a href="#">Excluir</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>
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

    <a href="contato_form.php">Cadastrar Contato</a><br>

    <table border="1" cellpadding='5'>
        <tr>
            <th>Nome</th>
            <th>Telefone</th>
            <th>Ações</th>
        </tr>
        <?php foreach ($contatos as $c): ?>
            <tr>
                <td><?= $c->getId() ?></td>
                <td><?= $c->getNome() ?></td>
                <td><?= $c->getTelefone() ?></td>
                <td><?= $c->getEmail() ?></td>
                <td><?= $c->getEndereco() ?></td>
                <td>
                    <a href="contato_detalis.php?id=<?= $c->getId() ?>">Detalhes</a>
                    <a href="contato_form.php?id=<?= $c->getId() ?>">Editar</a>
                    <a href="contato_delete.php?id= <?= $c->getId()?>">Excluir</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lista de Contatos</title>
  <style>
    body {
      font-family: 'Arial', sans-serif;
      background-color: #f0f2f5;
      margin: 0;
      padding: 30px;
    }

    h2 {
      text-align: center;
      color: #333;
      margin-bottom: 30px;
      font-size: 28px;
    }

    a {
      text-decoration: none;
      color: #ffffff;
      background-color: #000000;
      padding: 10px 16px;
      border-radius: 6px;
      transition: background 0.3s ease;
      margin-right: 5px;
    }

    a:hover {
      background-color: #000000;
    }

    table {
      border-collapse: collapse;
      width: 100%;
      max-width: 1000px;
      margin: 0 auto;
      background-color: #ffffff;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }

    th, td {
      padding: 14px;
      text-align: center;
      border-bottom: 1px solid #ddd;
    }

    th {
      background-color: #000000;
      color: white;
    }

    tr:hover {
      background-color: #f2f2f2;
    }

    .acoes a {
      display: inline-block;
      margin: 2px 4px;
      padding: 8px 12px;
      font-size: 14px;
    }

    .cadastrar {
      display: block;
      width: 200px;
      margin: 20px auto;
      text-align: center;
    }
  </style>
</head>
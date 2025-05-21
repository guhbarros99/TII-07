<?php

require_once 'ContatoDAO.php';

if (!isset($_GET['id'])) 
{
    echo "ID do contato não fornecido";
    exit();
}

$dao = new ContatoDAO();
$contato = $dao->getById($_GET["id"]);

if(!$contato)
{
    echo "Contato não encontrado no Sistema!";
    exit();
}
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes do Contato</title>
</head>

<body>
    <h2>Detalhes do Contato</h2>

    <p><strong>ID:</strong><?=$contato->getId() ?></p>
    <p><strong>Nome:</strong><?=$contato->getNome() ?></p>
    <p><strong>Telefone:</strong><?=$contato->getTelefone() ?></p>
    <p><strong>Email:</strong><?=$contato->getEmail() ?></p>
    <p><strong>Endereço:</strong><?=$contato->getEndereco() ?? 'NÃO INFORMADO'?></p>

    <br>
    <a href="index.php">Voltar</a>
</body>
</html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes do Contato</title>
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

        p {
            background-color: #ffffff;
            padding: 14px 18px;
            border-radius: 8px;
            margin: 12px auto;
            max-width: 500px;
            box-shadow: 0 3px 8px rgba(0,0,0,0.1);
            color: #444;
        }

        p strong {
            color: #222;
        }

        a {
            display: inline-block;
            text-decoration: none;
            color: #ffffff;
            background-color: #007BFF;
            padding: 12px 24px;
            border-radius: 8px;
            text-align: center;
            margin: 30px auto 0;
            display: block;
            width: 150px;
            transition: background 0.3s ease;
        }

        a:hover {
            background-color: #0056b3;
        }
    </style>
</head>

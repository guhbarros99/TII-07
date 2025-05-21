<?php
require_once 'ContatoDAO.php';
$dao = new ContatoDAO();
$contato = null; // Contato para a edição


//Editar contato
if (isset($_GET['id'])) {
  $contato = $dao->getById($_GET['id']);
}

// Salvar Edição de Contato
if (isset($_POST['id'])) {
  $endereco = null;
  if (isset($_POST['endereco'])) {
    $endereco = $_POST['endereco'];
  }

  $contato = new Contato($_POST['id'], $_POST['nome'], $_POST['telefone'], $_POST['email'], $endereco);
  $dao->update($contato);

  header("Location: index.php");

  exit();
} else if (isset($_POST['nome']) && isset($_POST['telefone']) && isset($_POST['email'])) 
{
  $endereco = null;
  if (isset($_POST['endereco'])) {
    $endereco = $_POST['endereco'];
  }

  $contato = new Contato(null, $_POST['nome'], $_POST['telefone'], $_POST['email'], $endereco);
  $dao->create($contato);

  header("Location: index.php");
  exit();
}

// Criar novo contato
if (isset($_POST['nome']) && isset($_POST['telefone']) && isset($_POST['email'])) {
  $endereco = null;
  if (isset($_POST['endereco'])) {
    $endereco = $_POST['endereco'];
  }

  $contato = new Contato(null, $_POST['nome'], $_POST['telefone'], $_POST['email'], $endereco);
  $dao->create($contato);

  header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastrar Contato</title>
</head>

<body>
  <h2><?= $contato? "Editar Contato" : "Cadastrar Novo Contato" ?></h2>

  <form action="contato_form.php" method="post">
    <?php if ($contato): ?>
      <input type="hidden" name="id" value="<?= $contato->getId() ?>">
    <?php endif; ?>

    <label>Nome:</label>
    <input type="text" name="nome" required value="<?= $contato? $contato->getNome() : '' ?>">

    <label>Telefone:</label>
    <input type="text" name="telefone" required value="<?= $contato? $contato->getTelefone() : '' ?>">

    <label>Email:</label>
    <input type="text" name="email" required value="<?= $contato? $contato->getemail() : '' ?>">

    <label>Endereço:</label>
    <input type="text" name="endereco" value="<?= $contato? $contato->getEndereco() : '' ?>">

    <button type="submit">Salvar</button>
    <a href="index.php">Cancelar></a>
  </form>
</body>

</html>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastrar Contato</title>
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

    form {
      background-color: #ffffff;
      padding: 25px;
      max-width: 500px;
      margin: 0 auto;
      border-radius: 12px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }

    label {
      display: block;
      margin-bottom: 8px;
      color: #555;
      font-weight: bold;
    }

    input[type="text"] {
      width: 100%;
      padding: 12px;
      margin-bottom: 20px;
      border: 1px solid #ccc;
      border-radius: 8px;
      box-sizing: border-box;
      font-size: 16px;
    }

    a {
      background-color: #000000;
      color: #ffffff;
      padding: 14px;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      width: 100%;
      font-size: 18px;
      transition: background 0.3s ease;
    }

    button {
      background-color: #000000;
      color: #ffffff;
      padding: 14px;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      width: 100%;
      font-size: 18px;
      transition: background 0.3s ease;
    }

    button:hover {
      background-color: #333333;
    }

    @media (max-width: 600px) {
      body {
        padding: 15px;
      }

      form {
        padding: 20px;
      }

      input[type="text"] {
        padding: 10px;
        font-size: 15px;
      }

      button {
        padding: 12px;
        font-size: 16px;
      }
    }
  </style>
</head>
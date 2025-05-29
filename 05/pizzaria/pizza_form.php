<?php

require_once 'PizzaDAO.php';

$dao = new PizzaDAO();
$pizza = null;

if(isset($_GET['id'])) {
    $pizza = $dao ->getById($_GET['id']);
}
 
$pizza = new Pizza ($_POST['id'], $_POST['sabor'], $_POST['tamanho'], $_POST['preco']);
$dao->update($pizza);

header ("Location: index.php");

exit();

// Criar novo pizza

if(isset($_POST['sabor']) && isset($_POST['tamanho']) && isset($_POST['preco'])) {
    $sabor = $_POST['sabor'];
    $tamanho = $_POST['tamanho'];
    $preco = $_POST['preco'];

    $pizza = new Pizza(null, $sabor, $tamanho, $preco);
    $dao->create($pizza);

    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Pizza</title>
</head>
<body>
    <h2><?= $pizza? "Editar Contato" : "Cadastrar Nova Pizza" ?></h2>

    <form action="pizza_form.php" method="post">
    <?php if ($pizza): ?>
        <input type="hidden" name="id" value="<?= $pizza->getId() ?>">
        <?php endif; ?>

        <label>Sabor:</label>
        <input type="text" name ="sabor" required value="<?= $pizza? $pizza->getSabor() : '' ?>">

        <label>Tamanho:</label>
        <input type="text" name="tamanho" required value="<?= $pizza? $pizza->getTamanho() : '' ?>">

        <label>Preço:</label>
        <input type="text" name="preco" required value="<?= $pizza? $pizza->getPreco() : '' ?>">

        <button type= "submit">Salvar</button>
        <a href="index.php">Cancelar</a>
    </form>
    <br>
</body>
</html>
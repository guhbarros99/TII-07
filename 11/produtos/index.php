<?php
session_start();

$islogged = isset($_SESSION['token']);
?>

<h1>Home</h1>
<nav>
    <a href="index.php">Home</a>
    <a href="../produtos/listar.php">Produtos</a>
    <?php if ($islogged) : ?>
        <a href="../produtos/criar.php">Novo Produto</a>
        <a href="logout.php">Sair</a>
    <?php else: ?>
        <a href="login.php">Login</a>
        <a href="cadastro.php">Cadastrar</a>
    <?php endif; ?>
</nav>
<?php
session_start();

$islogged = isset($_SESSION['token']);
?>

<h1>Home</h1>
<nav>
    <a href="index.php">Home</a>
    <?php if ($islogged) : ?>
    <a href="index.php">Minha conta</a>
    <a href="logout.php">Sair</a>
    <?php else: ?>
    <a href="login.php">Login</a>
    <a href="cadastro.php">Cadastrar</a>
    <?php endif; ?>
</nav>
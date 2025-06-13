<?php
session_start();

if(!isset($_SESSION['token']))
{
    header('Location: index.php');
    exit();
}
?>

<h1>Protegida!</h1>

<a href="index.php">voltar</a>
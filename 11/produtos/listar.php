<?php
require_once '../dao/ProdutoDAO.php';

$dao = new ProdutoDAO();
$produtos = $dao->getAll();
?>

<h1>Produtos</h1>

<?php foreach($produtos as $p): ?>
    <p>
        <a href="./ver.php?id=<?= $p->getId() ?>"><?= $p->getNome() ?> - R$ <?= $p->getPreco() ?><a href="./editar.php?id=<?= $p ->getId()?>">EDIT</a>
    </p>
<?php endforeach ?>

<br>
<a href="../produtos/index.php">Voltar</a>
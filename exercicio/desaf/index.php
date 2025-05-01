<?php
$salario = (int) $_GET ['salario'];
$desc = $salario * 0.11;

$saldesc = $salario - $desc;

echo "Salario com desconto: $saldesc <br>"
?>
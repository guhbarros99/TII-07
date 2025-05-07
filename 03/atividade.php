<ul>
<?php
/*
Crie um array com 4 nomes de alunos e exiba-os em uma lista <ul>
no navegador
*/

$nomesAluno =["Ronaldo", "Carlos", "Fabio", "Henrique"];

foreach($nomesAluno as $Aluno){
    echo "<li>$Aluno</li>";
}

?>
</ul>
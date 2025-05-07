<table border="1">
    <th>Nome</th>
    <th>CPF</th>
    <th>Cidade</th>
<?php

/*
Crie um array multidimensional com 2 clientes, cada um contendo:
- nome
- cpf
- cidade
*/
$clientes = [
    ["nome" => "Gustavo", "cidade" => "São Paulo", "cpf" => "507.785.222-15"],  
    ["nome" => "Gustavo","cidade" => "São Paulo", "cpf" => "507.785.212-15"],    
    ["nome" => "Gustavo","cidade" => "São Paulo", "cpf" => "507.785.123-15"]
];
foreach($clientes as $clt){
    echo "
        <tr>
            <td>{$clt['nome']}</td>".
            "<td>{$clt['cidade']}</td>".
            "<td>{$clt['cpf']}</td>"."<td>
        </tr>
    ";
}
?>
</table>
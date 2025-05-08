<?php

$produtos = [
    ["nome" => "Pão", "preco" => 1.50],
    ["nome" => "Café", "preco" => 3.00],
    ["nome" => "Leite", "preco" => 4.80]
];

function calcularTotalProdutos(array $itens): float {
    $total = 0;
    foreach($itens as $item) {
        $total += $item['preco'];
    }

    return $total;
}

echo "Total: R$ " . number_format(calcularTotalProdutos($produtos), 2, ',', '.');

/*$maisBarato = $produtos[0];

if($produtos[1]['preco'] < $produtos[0]['preco']) {
    $maisBarato = $produtos[1];
}

echo $maisBarato['nome'];*/


function localizaroValorMaisBaratos(array $itens): array{ 
    $maisBarato = $itens[0];

    foreach($itens as $item) {
        if($item['preco'] < $maisBarato['preco']) {
            $maisBarato = $item;
        }
    }

    return $maisBarato;
}
    $resultado = localizaroValorMaisBaratos($produtos);
    echo "<br>O item mais barato da lista é {$resultado ['nome']} no preço de {$resultado['preco']}";


<?php

function saudacao () {
    echo "Bem vindo ao sistema! <br> <p>";
}

saudacao();


function somar ($a, $b) {
    return $a + $b;
}

echo "Retorno da soma: " . somar(10, 8) . "<br>";

function subtrair(int $a,  int $b) {
    return $a - $b;
}

echo "Retorno da substração: " . subtrair(10, 8) . "<br>";

function multiplicar (int $a, int $b): int {
    return $a * $b;
}

echo "Retorno da multiplicação: " . multiplicar(10, 8) . "<br>";

function dividir(int $a, int $b): float | string{
    if ($b == 0) {
        return "Impossivel dividir por zero!";
    }
    return $a / $b;
    
}

echo "Retorno da divisao: " . dividir(10, 8) . "<br>";
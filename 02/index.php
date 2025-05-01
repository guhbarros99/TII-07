<?php

$a = 10;

$b = 5;

echo "Soma: " . ($a + $b) . "<br>";
echo " $a Maior que $b" . ($a > $b? "Sim" : "Não")."<br>";

$idade = 17;

if($idade >= 18) {
    echo "Maior de idade, $idade anos! <br>";
}else {
    echo "Menor de idade, $idade anos <br>";
}

//SWITCH CASE
$dia = "Segunda";

switch($dia){
    case "segunda":
        echo "Incio da semana";
        break;
    case "sexta":
        echo "Último dia útil";
        break;
    default:
        echo "Dia comum";
}
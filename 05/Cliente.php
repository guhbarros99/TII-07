<?php

/*
- Cliente
Propriedades: nome, veiculo, telefone (todos private string)
Construtor que recebe todas as propreidades
Sobrescreva __toString() para visualizarmos os dados
Crie um get para o "nome" e um set para o "telefone"
*/

class Cliente
{
    private string $nome;
    private string $veiculo;
    private string $telefone;

    public function __construct(string $nome, string $veiculo, string $telefone)
    {
        $this->nome = $nome;
        $this->veiculo = $veiculo;
        $this->telefone = $telefone;
    }
    public function getNome(): string
    {
        return $this->nome;
    }
    public function setTelefone(string $novoNumero): void 
    {   if(strlen($novoNumero) == 11) {
            $this->telefone = $novoNumero;
        } else {
            echo "Invalid Telefone";
        }
    }
    public function __toString() {
        return "Nome: $this->nome, Telefone: $this->telefone, Veiculo: $this->veiculo <br>";
    }
}

$cliente = new Cliente("Hugo", "Monza", "9911553345");
echo($cliente);

$cliente->setTelefone("11955778899");
echo($cliente);

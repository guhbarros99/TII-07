<?php

class Cliente implements JsonSerializable
{
    private ?int $id; 
    private string $nome;
    private string $cpf;
    private bool $ativo;
    private ?string $dataDeNascimento;             

    public function __construct(?int $id, string $nome, string $cpf, bool $ativo, ?string $dataDeNascimento )
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->ativo = $ativo;
        $this->dataDeNascimento = $dataDeNascimento;
    }
    
    public function getId(): int { return $this->id;}
    public function getNome(): string { return $this->nome;}
    public function getCpf(): string { return $this->cpf;}
    public function getAtivo(): int { return $this->ativo;}
    public function getdataDeNascimento(): string { return $this->dataDeNascimento;} // pergunta besta, pq a Get tem ser com a letra maiuscula

    public function setNome(string $nome) { $this->nome = $nome;}
    public function setCpf(string $cpf) { $this->cpf = $cpf;}
    public function setAtivo(bool $ativo) { $this->ativo = $ativo;}
    public function setdataDeNascimento(string $nascimento) { $this->nome = $nascimento;}

    public function jsonSerialize(): mixed {

    return[
        'id' => $this->id,
        'nome' => $this->nome,
        'cpf' => $this->cpf,
        'dataDeNascimento' => $this-> dataDeNascimento,
        'ativo' => $this->ativo,
        
    ];
    }   
}



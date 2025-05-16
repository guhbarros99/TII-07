<?php

class Contato{

    private ?int $id;
    private string $nome;

    public function __construct(?int $id,string $nome)
    {
        $this ->id =$id;
        $this->nome = $nome;
    }

    // Buscar Valores
    public function getId(): ?int { return $this ->id;}
    public function getNome(): string {return $this -> nome;}

    //Get - buscar  set - aguardar

    // Inserir Valores
    public function setNome(string $novoNome)
    {
        $this->nome = $novoNome; 
    }
}

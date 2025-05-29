<?php

require_once 'Produto.php';
require_once 'Database.php';

class ProdutoDAO
{
    private $db;

    public function __construct()
    {
        $this->db = Database::getInstance();
    }
    public function getAll(): array
    {
        $sql = "SELECT * FROM produtos";
        $resultadoDoBanco = $this->db->query($sql);
        $produtos = [];

        while ($row = $resultadoDoBanco->fetch(PDO::FETCH_ASSOC)) {
            $produtos[] = new Produto(
                $row['id'],
                $row['nome'],
                $row['preco'],
                $row['ativo'],
                $row['dataDeCadastro'],
                $row['dataDeValidade']
            );
        }
        return $produtos;
    }
    public function getById(int $id): ?Produto
    {
        $sql = "SELECT * FROM produtos WHERE id = :id";

        $stmt = $this->db->prepare($sql);
        $stmt->execute([':id' => $id]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return $row ? new Produto(
            $row['id'],
            $row['nome'],
            $row['preco'],
            $row['ativo'],
            $row['dataDeCadastro'],
            $row['dataDeValidade']
        ) : null;
    }
    public function create(Produto $produto): void
    {
        $sql = "INSERT INTO produtos (nome, preco, ativo, dataDeCadastro, dataDeValidade) VALUES
                (:nome, :preco, :ativo, :dataDeCadastro, :dataDevalidade)";

        $stmt = $this->db->prepare($sql);
        $stmt->execute([
            ':nome' => $produto->getNome(),
            ':preco' => $produto->getPreco(),
            ':ativo' => $produto->getAtivo(),
            ':dataDeCadastro' => $produto->getDataDeCadastro(),
            ':dataDevalidade' => $produto->getDataDeValidade()
        ]);
    }

    public function createInseguro(Produto $produto): void
    {
        $sql = "INSERT INTO produtos (nome, preco, ativo, dataDeCadastro, dataDeValidade) VALUES
                 ({$produto->getNome()}, 
                {$produto->getPreco()}, 
                 {$produto->getAtivo()},
                 '{$produto->getDataDeCadastro()}', 
                 '{$produto->getDataDeValidade()}')";

        $this->db->query($sql);
    }
    public function update(Produto $produto): void
    {
        $sql = "UPDATE produtos SET nome = :nome, preco = :preco, ativo = :ativo, dataDeCadastro = :cadastro, dataDeValidade = :validade WHERE id = :id";
        $stmt = $this->db->prepare($sql);

        $stmt->execute([
            ':id' => $produto->getId(),
            ':nome' => $produto->getNome(),
            ':preco' => $produto->getPreco(),
            ':ativo' => $produto->getAtivo(),
            ':cadastro' => $produto->getDataDeCadastro(),
            ':validade' => $produto->getDataDeValidade()
        ]);
    }

    public function delete(int $id): void
    {
        $stmt = $this->db->prepare("DELETE FROM produtos WHERE id = :id");
        $stmt->execute([':id' => $id]);
    }
}

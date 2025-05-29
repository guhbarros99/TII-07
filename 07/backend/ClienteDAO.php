<?php 

require_once 'Cliente.php';
require_once 'Database.php';

class ClienteDAO
{
    private $tb;

    public function __construct()
    {
        $this ->tb = Database:: getInstance();

    }
    public function getAll(): array
    {
        $sql = "SELECT * FROM clientes";

        // extrair os dados do $stmt e inserir no $clientes
        $resultadoDoBanco = $this->tb->query($sql);
        $clientes = [];

        while($row = $resultadoDoBanco->fetch(PDO::FETCH_ASSOC)) {
            $clientes[] = new Cliente(
                $row['id'],
                $row['nome'],
                $row['cpf'],
                $row['ativo'],
                $row['dataDeNascimento'],
            );
        }
        return $clientes;
    }
    public function getById(int $id): ?Cliente
    {
        $sql = "SELECT * FROM clientes WHERE id = :id";

        $stmt = $this->tb->prepare($sql);
        $stmt->execute([ ':id' => $id]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return $row ? new Cliente(
            $row['id'],
            $row['nome'],
            $row['ativo'],
            $row['cpf'],
            $row['dataDeNascimento']   
        ):null;
    }
    public function create(Cliente $cliente): void
    {
        $sql = "INSERT INTO clientes (nome, ativo, cpf, dataDeNascimento ) VALUES
                (:nome, :ativo, :cpf, :dataDeNascimento)";

        $stmt = $this->tb->prepare($sql);
        $stmt->execute([
            ':nome' => $cliente->getNome(),
            ':ativo' => $cliente->getAtivo(),
            ':cpf' => $cliente->getCpf(),
            ':dataDeNascimento' => $cliente->getDataDeNascimento()
        ]);
    }

}
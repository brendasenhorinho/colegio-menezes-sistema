<?php

require_once 'Database.php';

class Responsavel {
    public string $cpf;
    public string $nome;
    public string $email;
    public string $dataNasc;
    public string $telefone;

    public function __construct(string $cpf, string $nome, string $email, string $dataNasc, string $telefone) {
        $this->cpf = $cpf;
        $this->nome = $nome;
        $this->email = $email;
        $this->dataNasc = $dataNasc;
        $this->telefone = $telefone;
    }

    public function salvar($conn) {
        $query = "INSERT INTO responsaveis (cpf, nome, email, data_nasc, telefone) VALUES (:cpf, :nome, :email, :data_nasc, :telefone)";
        $stmt = $conn->prepare($query);

        $stmt->bindParam(':cpf', $this->cpf);
        $stmt->bindParam(':nome', $this->nome);
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':data_nasc', $this->dataNasc);
        $stmt->bindParam(':telefone', $this->telefone);

        return $stmt->execute();
    }
}


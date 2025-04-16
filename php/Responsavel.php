<?php

require_once 'Database.php';

class Responsavel {
    public string $cpf;
    public string $nome;
    public string $email;
    public string $DataNasc;
    public string $telefone;
    public string $alunoCpf;

    public function __construct(string $cpf, string $nome, string $email, string $dataNasc, string $telefone, string $alunoCpf) {
        $this->cpf = $cpf;
        $this->nome = $nome;
        $this->email = $email;
        $this->DataNasc = $dataNasc;
        $this->telefone = $telefone;
        $this->alunoCpf = $alunoCpf;
    }

    public function salvar($conn) {
            $query = "INSERT INTO responsavel (Cpf, Nome, Email, DataNasc, Telefone, Aluno_Cpf)
            VALUES (:cpf, :nome, :email, :dataNasc, :telefone, :alunoCpf)";
    $stmt = $conn->prepare($query);

    $stmt->bindParam(':cpf', $this->cpf);
    $stmt->bindParam(':nome', $this->nome);
    $stmt->bindParam(':email', $this->email);
    $stmt->bindParam(':dataNasc', $this->DataNasc);
    $stmt->bindParam(':telefone', $this->telefone);
    $stmt->bindParam(':alunoCpf', $this->alunoCpf);

        return $stmt->execute();
    }
}


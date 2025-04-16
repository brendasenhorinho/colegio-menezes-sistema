<?php
require_once 'Database.php';

class Aluno {
    public string $cpf;
    public string $nome;
    public string $email;
    public string $dataNasc;
   

    public function __construct(string $cpf, string $nome, string $email, string $dataNasc) {
        $this->cpf = $cpf;
        $this->nome = $nome;
        $this->email = $email;
        $this->dataNasc = $dataNasc;
    }

    public function salvar($conn) {
        $query = "INSERT INTO aluno (cpfaluno, nome, email, data_nasc) VALUES (:cpfaluno, :nome, :email, :data_nasc)";
        $stmt = $conn->prepare($query);

        $stmt->bindParam(':cpfaluno', $this->cpf);
        $stmt->bindParam(':nome', $this->nome);
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':data_nasc', $this->dataNasc);
      

        return $stmt->execute();
    }
}

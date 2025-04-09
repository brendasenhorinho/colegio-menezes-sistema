<?php

require_once 'Database.php';

class Aluno {
    public int $cpf;
    public string $nome;
    public string $email;
    public string $dataNasc;
    public ?string $telefone;

    public function __construct(int $cpf, string $nome, string $email, string $dataNasc, ?string $telefone = null) {
        $this->cpf = $cpf;
        $this->nome = $nome;
        $this->email = $email;
        $this->dataNasc = $dataNasc;
        $this->telefone = $telefone;
    }
}
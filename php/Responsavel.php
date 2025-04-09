<?php

require_once 'Database.php';

class Responsavel {
    public int $cpf;
    public string $nome;
    public string $email;
    public string $dataNasc;
    public string $telefone;
    public int $alunoCpf;

    public function __construct(int $cpf, string $nome, string $email, string $dataNasc, string $telefone, int $alunoCpf) {
        $this->cpf = $cpf;
        $this->nome = $nome;
        $this->email = $email;
        $this->dataNasc = $dataNasc;
        $this->telefone = $telefone;
        $this->alunoCpf = $alunoCpf;
    }
}
<?php

require_once 'Database.php';

class DetalhesDaMatricula {
    public ?string $serie;
    public ?string $turno;
    public ?string $checkHistorico;
    public string $canalDeIndicacao;
    public int $alunoCpf;
    public int $responsavelCpf;
    public int $responsavelAlunoCpf;

    public function __construct(
        ?string $serie,
        ?string $turno,
        ?string $checkHistorico,
        string $canalDeIndicacao,
        int $alunoCpf,
        int $responsavelCpf,
        int $responsavelAlunoCpf
    ) {
        $this->serie = $serie;
        $this->turno = $turno;
        $this->checkHistorico = $checkHistorico;
        $this->canalDeIndicacao = $canalDeIndicacao;
        $this->alunoCpf = $alunoCpf;
        $this->responsavelCpf = $responsavelCpf;
        $this->responsavelAlunoCpf = $responsavelAlunoCpf;
    }
}
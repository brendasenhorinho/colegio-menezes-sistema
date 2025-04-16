<?php

class DetalhesdaMatricula {
    public string $serie;
    public string $turno;
    public string $checkHistorico;
    public string $canalDeIndicacao;
    public string $alunoCpf;
    public string $responsavelCpf;

    public function __construct(string $serie, string $turno, string $checkHistorico, string $canalDeIndicacao, string $alunoCpf, string $responsavelCpf) {
        $this->serie = $serie;
        $this->turno = $turno;
        $this->checkHistorico = $checkHistorico;
        $this->canalDeIndicacao = $canalDeIndicacao;
        $this->alunoCpf = $alunoCpf;
        $this->responsavelCpf = $responsavelCpf;
    }

    public function salvar($conn) {
        $query = "INSERT INTO detalhesdamatricula 
                  (Serie, Turno, Checkhistorico, Canaldeindicacao, Aluno_Cpf, Responsavel_Cpf)
                  VALUES 
                  (:serie, :turno, :checkHistorico, :canalDeIndicacao, :alunoCpf, :responsavelCpf)";
        
        $stmt = $conn->prepare($query);

        $stmt->bindParam(':serie', $this->serie);
        $stmt->bindParam(':turno', $this->turno);
        $stmt->bindParam(':checkHistorico', $this->checkHistorico);
        $stmt->bindParam(':canalDeIndicacao', $this->canalDeIndicacao);
        $stmt->bindParam(':alunoCpf', $this->alunoCpf);
        $stmt->bindParam(':responsavelCpf', $this->responsavelCpf);

        return $stmt->execute();
    }
}

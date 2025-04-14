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
                  (serie, turno, checkhistorico, canaldeinformacao, aluno_cpfaluno, responsavel_cpfresponsavel)
                  VALUES 
                  (:serie, :turno, :checkhistorico, :canaldeinformacao, :aluno_cpfaluno, :responsavel_cpfresponsavel)";
        
        $stmt = $conn->prepare($query);

        $stmt->bindParam(':serie', $this->serie);
        $stmt->bindParam(':turno', $this->turno);
        $stmt->bindParam(':checkhistorico', $this->checkHistorico);
        $stmt->bindParam(':canaldeinformacao', $this->canalDeIndicacao);
        $stmt->bindParam(':aluno_cpfaluno', $this->alunoCpf);
        $stmt->bindParam(':responsavel_cpfresponsavel', $this->responsavelCpf);

        return $stmt->execute();
    }
}

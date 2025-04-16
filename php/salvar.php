<?php
require_once 'Database.php';
require_once 'Aluno.php';
require_once 'Responsavel.php';
require_once 'DetalhesdaMatricula.php';
echo '<pre>';
var_dump($_POST);
echo '</pre>';


$db = (new Database())->getConnection();

$aluno = new Aluno($_POST['documento'], $_POST['nome-aluno'], $_POST['email-aluno'], $_POST['nascimento']);
$responsavel = new Responsavel($_POST['documento-responsavel'], $_POST['nome-responsavel'], $_POST['email-responsavel'], $_POST['nascimento-responsavel'], $_POST['telefone-responsavel'], $_POST['documento'] );
$detalhes = new DetalhesdaMatricula(
    $_POST['serie'],
    $_POST['turno'],
    $_POST['estudou-antes'],
    $_POST['conheceu-escola'],
    $_POST['documento'],                    // Aluno_Cpf
    $_POST['documento-responsavel']         // Responsavel_Cpf
);


$aluno->salvar($db);
$responsavel->salvar($db);
$detalhes->salvar($db);

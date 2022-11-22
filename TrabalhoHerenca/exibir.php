<?php
//require_once("aluno.php");
require_once("especializacao.php");
    $Curso = $_POST['Curso'];
    $Matricula = $_POST['Matricula'];
    $Ano= $_POST['Ano'];
    $Mestrado = $_POST['Mestrado'];
    $Doutorado = $_POST['Doutorado'];
    $Posgraduacao = $_POST['Posgraduacao'];

    $Pessoa1 = new Aluno($Curso,$Matricula,$Ano,$Mestrado,$Doutorado,$Posgraduacao);
    //echo $Matricula;
    echo "<br />";

    echo $Pessoa1->VerAluno();
?>
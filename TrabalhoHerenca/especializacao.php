<?php
require_once("aluno.php");
    Class Especializacao extends Aluno{
    public $Mestrado;
    public $Doutorado;
    public $Posgraduacao;

    
    function __construct($Curso,$Matricula,$Ano,$Mestrado,$Doutorado,$Posgraduacao){
        
        
    parent::__construct($Curso,$Matricula,$Ano);
        $this->Mestrado=$Mestrado;
        $this->Doutorado=$Doutorado;
        $this->Posgraduacao=$Posgraduacao;

    }
    function VerAluno(){
    parent::VerAluno();
        echo "Mestrado:".$this->Mestrado;
        echo "<br />";
        echo "Doutorado: " .$this->Doutorado;
        echo "<br />";
        echo "PósGraduação: ".$this->Posgraduacao;
        echo "<br />";
        


    }
}
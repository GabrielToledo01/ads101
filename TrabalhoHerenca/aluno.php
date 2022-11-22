<?php
class Aluno{
    public $Curso;
    public $Matricula;
    public $Ano;

    function __construct($Curso,$Matricula,$Ano){
    $this->Curso=$Curso;
    $this->Matricula=$Matricula;
    $this->Ano=$Ano;
    
    }

    function VerAluno(){
    echo "<b>Curso: </b>".$this->Curso;
    echo "<br />";
    echo "<b>Matrícula: </b>".$this->Matricula;
    echo "<br />";
    echo "<b>Ano: </b>" .$this->Ano;
    echo "<br />";
    
    
    
}

}
?>
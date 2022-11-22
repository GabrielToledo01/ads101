<?php
class Jogo{
  public $Nome;
  public $Genero;
  public $Preco;
  public $Nota;
  public $Ano;
  public $Descricao;
    
  function VerJogo(){
   	 echo "<h2> <b> Nome do jogo: </b>".$this->Nome."</h2>";
     echo "<p> <b>Genero:</b> ".$this->Genero. "</p>";
     echo "<p> <b>Nota:</b> " .$this->Nota. "</p>";
     echo "<p> <b>Ano de lançamento:</b>".$this->Ano."</p>";
     echo "<p> <b> Descrição: </b>".$this->$Descricao. "</p>";
     echo "<hr>";
  }

}

?>

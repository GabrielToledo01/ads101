<?php
class Carro{
  public $Fabrica;
  public $Modelo;
  public $Portas;
  public $Cor;
  public $AnoFabricacao;

  function VerCarro(){
   	 echo "<h2>" .$this->Fabrica." - ". $this->Modelo."</h2>";
         echo "<p> <b>Portas:</b> ".$this->Portas. "</p>";
         echo "<p> <b>Cor:</b> " .$this->Cor. "</p>";
         echo "<p> <b>Ano de Fabricação:</b>".$this->AnoFabricacao."</p>";
         echo "<hr>";
  }

}

?>

<?php
require_once ("Veiculo.class.php");

class VeiculoParticular extends Veiculo{
public $ValorCarro;

function __construct($Fabricante, $Modelo,$ValorCarro) {

parent::__construct($Fabricante, $Modelo);
$this->ValorCarro=$ValorCarro;
}

function ValorVeiculo(){
return $this->ValorCarro;
}

function VerVeiculo(){

parent::VerVeiculo();
echo "<b>Valor Carro: </b>{$this->ValorCarro}<br />";
echo "<b>Valor Pago: </b>{$this->ValorVeiculo()}<br />";
echo "<b>Tipo: </b> {$this->Tipo()}";
echo "<hr />";
}

function Tipo(){
return "Particular";
}
}
?>

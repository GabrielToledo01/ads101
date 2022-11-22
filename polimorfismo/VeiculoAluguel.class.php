<?php
require_once 'Veiculo.class.php';

class VeiculoAluguel extends Veiculo{
    public $ValorCarro;
    function __construct($Fabricante, $Modelo,$ValorCarro) {
    parent::__construct($Fabricante, $Modelo);
    $this->ValorCarro=$ValorCarro;
}
function ValorVeiculo(){
return $this->ValorCarro * 0.70;
}
function VerVeiculo(){

parent::VerVeiculo();
echo "<b>Valor Carro: </b>{$this->ValorCarro}<br />";
echo "<b>Valor Pago: </b>{$this->ValorVeiculo()}<br />";
echo "<b>Tipo: </b> {$this->Tipo()}";
echo "<hr />";
}
    function Tipo(){
    return "Aluguel";
}
}
?>
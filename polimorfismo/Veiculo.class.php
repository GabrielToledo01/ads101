<?php
class Veiculo {
    public $Fabricante;
    public $Modelo;

    function __construct($Fabricante,$Modelo){
    $this->Fabricante=$Fabricante;
    $this->Modelo=$Modelo;
}
    function VerVeiculo(){
    echo "<b>Fabricante: </b>{$this->Fabricante}<br />";
    echo "<b>Modelo</b>: {$this->Modelo}<br />";
}
}
?>

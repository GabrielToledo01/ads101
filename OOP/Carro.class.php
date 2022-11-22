<html>
    <head>
        <meta charset="utf-8">
    </head>

<?php

  require_once("oo.php");


  $carro1 = new Carro();
    $carro1->Fabrica = "Ford";
    $carro1->Modelo = "Ecosport";
    $carro1->Portas = 2;
    $carro1->Cor = "Preto";
    $carro1->AnoFabricacao = "2011";
  $carro2 = new Carro();
    $carro2->Fabrica = "Fiat";
    $carro2->Modelo = "Pálio";
    $carro2->Portas = 2;
    $carro2->Cor = "Cinza Metálico";
    $carro2->AnoFabricacao = "2010";
    
    echo $carro1->VerCarro();
    echo $carro2->VerCarro();

 ?>
</html>

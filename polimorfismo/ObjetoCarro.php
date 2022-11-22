<html>
<head>
<title>.: Carro :.</title>
<link rel="stylesheet" type="text/css" href="style.css" />
<meta charset="utf-8">
</head>
<body>
<h3 align="center">.: Lista dos Carros :.</h3>
<?php

require_once 'VeiculoParticular.class.php';
require_once 'VeiculoAluguel.class.php';
$Carros[1] = new VeiculoParticular("Fiat", "Touro", "45000,00");
$Carros[2] = new VeiculoAluguel("Ford", "Ecoesport", "30000,00");
$Carros[3] = new VeiculoParticular("Fiat", "Siena", "10000,00");
$Carros[4] = new VeiculoParticular("Fiat", "Mob", "15000,00");
echo "<table border='1'>";
echo "<tr><td>Carro</td><td>Fabricante</td><td>Modelo</td><td>Valor do carro</td><td>Valor
Pago</td><td>Tipo</td></tr>";

foreach ( $Carros as $key => $Carro )
{
echo "<tr><td>Carro $key</td><td> $Carro->Fabricante</td><td> {$Carro->Modelo}</td>
<td>{$Carro->ValorCarro}</td><td> {$Carro->ValorVeiculo()}</td> <td>{$Carro->Tipo()}</td></tr>";
}

echo "</table>";
?>
</body>
</html>
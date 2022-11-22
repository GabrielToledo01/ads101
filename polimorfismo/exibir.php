<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link rel="stylesheet" href="./style.css">
        <title>Carro</title>
    </head>
    <body>
        <?php

            $Fabricante = $_POST['Fabricante'];
            $Modelo = $_POST['Modelo'];
            $ValorCarro = $_POST['ValorCarro'];
            $Tipo = $_POST['Tipo'];

            if ($Tipo == 'Particular') 
            {
                require_once 'VeiculoParticular.class.php';
                $Carros[1] = new VeiculoParticular($Fabricante,$Modelo,$ValorCarro);
                echo "<table class='table'>";
                echo "
                <tr>
                <td>Carro</td>
                <td>Fabricante</td>
                <td>Modelo</td>
                <td>Valor do carro</td>
                <td>ValorPago</td>
                <td>Tipo</td>
                </tr>";

                foreach ($Carros as $key => $Carro) 
                {
                echo "
                <tr>
                <td>Carro $key</td>
                <td> $Carro->Fabricante</td>
                <td> {$Carro->Modelo}</td>
                <td>{$Carro->ValorCarro}</td>
                <td> {$Carro->ValorVeiculo()}</td>
                <td>{$Carro->Tipo()}</td>
                </tr>";
                }
                echo "</table>";
            }
            elseif ($Tipo == 'Aluguel')
            {
                require_once 'VeiculoAluguel.class.php';
                $Carros[1] = new VeiculoAluguel($Fabricante,$Modelo,$ValorCarro);
                echo "<table class='table'>";
                echo "
                <tr>
                <td>Carro</td>
                <td>Fabricante</td>
                <td>Modelo</td>
                <td>Valor do carro</td>
                <td>ValorPago</td>
                <td>Tipo</td>
                </tr>";
                foreach ($Carros as $key => $Carro)
                {
                echo "
                <tr>
                <td>Carro $key</td>
                <td> $Carro->Fabricante</td>
                <td> {$Carro->Modelo}</td>
                <td>{$Carro->ValorCarro}</td>
                <td> {$Carro->ValorVeiculo()}</td>
                <td>{$Carro->Tipo()}</td>
                </tr>";
                }
                echo "</table>";
            }
            else 
            {
                echo "<h1 align=center>Não foi definido se o tipo do veículo é alugel ou particular</h1>";
            }
        ?>
    </body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedagio</title>
</head>
<body>
   
   
   <?php

    echo "<h1>Quantidade de veiculos : Periodo Tarde</h1> <br>";

    $totalVeiculos = 1529;

    echo "Total de veiculos : $totalVeiculos <br><br>";

    echo "<h2>Quantidade de veiculos após o periodo</h2> <br>";

    $totalVeiculos = ++$totalVeiculos; // foi realizado uma compra de um sabão em pó, então o estoque foi decrementado.

    echo "Total de veiculos : $totalVeiculos <br><br>";



    ?>
</body>
</html>
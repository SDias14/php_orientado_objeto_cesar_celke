<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estoque</title>
</head>
<body>
    <?php

    echo "<h1>Estoque de Sabão</h1> <br><br>";

    $produto1 = "Sabão em pó";
    $qtdProduto1 = 115;

    echo "Nome do Produto 1 : $produto1 <br><br>";
    
    echo "Quantidade do Produto 1 : $qtdProduto1 <br><br>";

    echo "<h2>Estoque de Sabão em Pó após uma compra</h2> <br><br>";

    $qtdProduto1 = --$qtdProduto1; // foi realizado uma compra de um sabão em pó, então o estoque foi decrementado.

    echo "Quantidade do Produto 1 : $qtdProduto1 <br><br>";


?>
</body>
</html>
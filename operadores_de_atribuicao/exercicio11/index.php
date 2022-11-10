<?php

echo "Total de vendas realizadas no mes de Junho do produto A : <br>";


$valorProdutoA = 280.74; // variável valorUnidadeProdutoA
$qtdProdutoA = 58; // variável produtoA

$valorProdutoA *= $qtdProdutoA; // valorProdutoA = valorProdutoA * qtdProdutoA

echo "O valor total de vendas do produto A é :" . number_format
($valorProdutoA, 2, ',', '.') . " Reais <br>";





?>
<?php

echo "Total de vendas realizadas no mes de Junho do produto A : <br>";

$qtdProdutoA = 58; // variável produtoA
$valorUnidadeProdutoA = 280.74; // variável valorUnidadeProdutoA
$valorTotalProdutoA = $qtdProdutoA * $valorUnidadeProdutoA; // variável valorTotalProdutoA

echo "O valor total do produto A é: " . number_format($valorTotalProdutoA, 2, ',', '.') . " Reais"; // exibe o valor total do produto A


?>
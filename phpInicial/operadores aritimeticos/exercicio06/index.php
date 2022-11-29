<?php
// criação de variáveis
$salario = 7600.25; // variável salario
$comissao = 1321.45; // variável comissão
$inss = 608.45; // variável inss
$ir = 1364.65; // variável ir

$total = ($salario + $comissao) - ($inss + $ir); // variável total : salario + comissão - inss - ir

echo "O valor total é :" . number_format($total, 2, ',', '.') . " Reais";
// exibe o valor total

?>

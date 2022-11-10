<?php
// criação de variáveis
$salario = 7600.25; // variável salario
$comissao = 1321.45; // variável comissão
$inss = 608.45; // variável inss
$ir = 1364.65; // variável ir

$salario += $comissao; // salario = salario + comissao
echo "O valor do salario é :" . number_format($salario, 2, ',', '.') . " Reais <br>";

$salario -= $inss; // salario = salario - inss
echo "O valor do salario é :" . number_format($salario, 2, ',', '.') . " Reais <br>";

$salario -= $ir; // salario = salario - ir
echo "O valor do salario é :" . number_format($salario, 2, ',', '.') . " Reais <br>";

?>
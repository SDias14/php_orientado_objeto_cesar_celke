<?php

$comissao = 2320.29;
echo "O valor da comissão é :" . number_format($comissao, 2, ',', '.') . " Reais <br><br>";
$salario = 7600.25;
echo "O valor do salário é :" . number_format($salario, 2, ',', '.') . " Reais <br><br>";
$valor = $comissao + $salario;

echo "O valor total é :" . number_format($valor, 2, ',', '.') . " Reais";


?>
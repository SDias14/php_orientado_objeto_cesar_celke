<?php

$compra = 1220.44; // variável compra
$parcelas = 4; // variável parcelas

$compra /= $parcelas; // compra = compra / parcelas

echo "O valor da parcela é :" . number_format($compra, 2, ',', '.') . " Reais <br>";




?>
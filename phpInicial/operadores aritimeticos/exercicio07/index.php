<?php

$compra = 1220.44; // variável compra
$parcelas = 4; // variável parcelas

$valorParcela = $compra / $parcelas; // variável valorParcela : compra / parcelas

echo "O valor da parcela é: " . number_format($valorParcela, 2, ',', '.') . " Reais"; // exibe o valor da parcela




?>
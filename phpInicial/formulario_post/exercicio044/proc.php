<?php


$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

var_dump($dados);

echo "<br>";

echo "Hectare: {$dados['hectare']} <br>";

echo "Quantidade de agua em m³: {$dados['cubico']} <br>";

echo "Custo por m³: {$dados['custo']} <br>";


?>
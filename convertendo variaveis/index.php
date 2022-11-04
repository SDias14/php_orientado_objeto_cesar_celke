<?php

$result = "2";
echo "Resultado exemplo um: " . $result . "<br>";
var_dump($result);

$result_dois = $result + 1;
echo "Resultado exemplo dois: " . $result_dois . "<br>";
var_dump($result_dois);

$result_tres = $result_dois + 3.5;
echo "Resultado exemplo três: $result_tres <br>";
var_dump($result_tres);

$result_quatro = 11;
var_dump($result_quatro);

$result_cinco = (double) $result_quatro;
echo "Resultado exemplo cinco: $result_cinco <br>";
var_dump($result_cinco);

$result_seis = 8.9;
var_dump($result_seis);

$result_sete = (int) $result_seis;
echo "Resultado exemplo sete: $result_sete <br>";
var_dump($result_sete);
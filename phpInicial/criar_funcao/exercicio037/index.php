

<?php

// declarando a variavel codigo e atribuindo o valor
$containerTotal = 10;
$containerCarregado = 10;

function verificaContainer($containerTotal, $containerCarregado){
    
    if($containerCarregado > $containerTotal){
        
        $msg = "Não exceder o limite de container";
        
    }elseif($containerCarregado < $containerTotal){
        
        $msg = "O container ainda precisa de : " . ($containerTotal - $containerCarregado) . " containers para ser carregado";
        
    }elseif($containerCarregado == $containerTotal){
        
        $msg = "O container está cheio";
        
    }else{
        
        $msg = "Código inválido";
        
    }
    
    return $msg;
    
}

$totalContainer = $containerTotal;

$carregadoContainer = $containerCarregado;

$retorno_dados_funcao = verificaContainer($totalContainer, $carregadoContainer); 

echo $retorno_dados_funcao;







?>
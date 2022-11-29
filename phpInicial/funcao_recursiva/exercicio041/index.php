<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>recursiva</title>
</head>
<body>
<?php


$qtdHectares = 1287;
$qtdSafraAno = 3;
$custoCubico = 0.17;
$qtdAguaPorHectare = 5267;

function custoSafra($qtdHectares,$qtdAguaPorHectare,$custoCubico, 
&$inplantação){
    // quantidade de agua por safra
    $qtdCubico = $qtdHectares * $qtdAguaPorHectare; 
    
    
    
    // calculo quantidade de m³ em uma safra e custo de irrigação 
    
    $custoSafra = $qtdCubico * $custoCubico; // custo de uma safra
    
//passando a inplantação por referencia

    $inplantação += $custoSafra; // custo de inplantação

    
    
    
    
    return $qtdCubico;

    
}

$custoImplantação = 1000;
$qtdAguaAno = custoSafra($qtdHectares,$qtdAguaPorHectare,$custoCubico,$custoImplantação) * $qtdSafraAno; 

$qtdCubico = custoSafra($qtdHectares,$qtdAguaPorHectare,$custoCubico,$custoImplantação);

//quantidade de agua por safras
echo "A quantidade de Agua gasto na safra foi de : " . number_format($qtdCubico,2,",",".") . "<br>";

//custo de uma safra

echo "O custo de uma safra foi de : " . number_format($custoImplantação,2,",",".") . "<br>";







// quantidade de agua por ano
echo "A quantidade de Agua gasto no ano foi de : " . number_format($qtdAguaAno,2,",",".") . "<br>";

//custo da safra por ano 

$custoSafra = ($qtdAguaAno * $custoCubico) + ($custoImplantação*$qtdSafraAno);

// formatar em reais
echo "O custo da safra por ano é R$ " . number_format($custoSafra,2,",",".") . "<br>";

// custo de 5 anos 

$custoCincoAnos = $custoSafra * 5; 

echo "O custo de 5 anos é R$ " . number_format($custoCincoAnos,2,",",".") . "<br>";


















?>
</body>
</html>
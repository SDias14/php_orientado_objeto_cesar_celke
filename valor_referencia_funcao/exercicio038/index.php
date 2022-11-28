<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For </title>
</head>
<body>
    <?php

    echo "Função para calcular porcentagem sobre o valor da produção. <br>";

     function calculaLucro(&$custo){
        //acrescentando 70% ao valor do custo inicial
        $custo += ($custo * 0.7);
       }

       $custoInicial = 20000;
       calculaLucro($custoInicial);

         echo "O valor do custo inicial com acrescimo de 70% é : $custoInicial <br>";

         echo "variavel alterada : $custoInicial";

        ?>
</body>
</html>
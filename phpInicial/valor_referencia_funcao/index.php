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

    echo "Passagem de parametros por valor<br>";

    function salario($num){
        $num +=50;
        echo "Dentro da função : salario com aumento é $num<br>";
    }

    $salario = 8200;
    salario($salario);

    echo "Fora da função : salario sem aumento é $salario<br>"; // não altera o valor da variavel

    echo "<hr>";

    echo "Passagem de parametros por referencia<br>";

    function salario2(&$num){
        $num +=50;
        echo "Dentro da função : salario com aumento é $num<br>";
    }

    $salario2 = 8400;
    salario2($salario2);

    echo "Fora da função : salario sem aumento é $salario2<br>"; // altera o valor da variavel







     ?>
</body>
</html>
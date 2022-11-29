<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session</title>
</head>
<body>
    

    
    <?php

    $codigo = filter_input(INPUT_GET, 'codigo', FILTER_SANITIZE_SPECIAL_CHARS);

    $salario = filter_input(INPUT_GET, 'salario', FILTER_SANITIZE_SPECIAL_CHARS);

    if ($codigo == 1) {
        // aumento de 50%
        $salario = $salario + ($salario * 0.5);
        echo "O novo salario de escriturario é : $salario";
    } elseif ($codigo == 2) {
        // aumento de 35%
        $salario = $salario + ($salario * 0.35);
        echo "O novo salario de secretario é : $salario";
    } elseif ($codigo == 3) {
        // aumento de 20%
        $salario = $salario + ($salario * 0.2);
        echo "O novo salario de caixa é : $salario";
    } elseif ($codigo == 4) {
        // aumento de 10%
        $salario = $salario + ($salario * 0.1);
        echo "O novo salario de gerente é : $salario";
    } elseif ($codigo == 5) {
        // aumento de 5%
        $salario = $salario + ($salario * 0.05);
        echo "O novo salario de diretor é : $salario";
    } else {
        echo "Codigo invalido";
    }



    
 


     ?>
</body>
</html>
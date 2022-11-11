<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Logicos</title>
</head>
<body>
    <?php

    $a = 10;
    $b = 8;
    $c = 7;
/* AND
    if ($a == 11 && $b ==9) {
        echo "A es igual a 10 y B es igual a 8";
    } else {
        echo "A es diferente a 10 y B es diferente a 8";
    }
*/

/* OR 
if ($a == 11 || $b == 8) {
    echo "Verdadeiro";
} else {
    echo "Falso";
}
*/

/* XOR - um so pode ser verdadeiro
if ($a == 11 Xor $b == 8) {
    echo "Verdadeiro";
} else {
    echo "Falso";
}
*/

// diferente com a função empty
if(!empty($c)) {
    echo "A variavel não está vazia";
} else {
    echo "Falso";
}


    
    ?>
</body>
</html>
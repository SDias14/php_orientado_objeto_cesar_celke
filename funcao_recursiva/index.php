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

function exibe($num){
    if($num >= 1){
        echo "valor: $num <br>";
        $qtd = $num - 1;

        exibe($qtd); // chamada recursiva, ou seja, a função chama ela mesma
        
    }
}
   

exibe(10);






?>
</body>
</html>
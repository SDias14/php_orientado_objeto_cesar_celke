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
    if($num <= 10){
        echo "Item do subMenu $num <br>";
        $qtd = $num + 1;

        exibe($qtd); // chamada recursiva, ou seja, a função chama ela mesma
        
    }
}
   

echo "Item do menu 1 <br>";

exibe(5);

echo "<br><br>";

echo "Item do menu 2 <br>";

exibe(5);

echo "<br><br>";

echo "Item do menu 3 <br>";

exibe(5);

echo "<br><br>";

echo "Item do menu 4 <br>";

exibe(5);

echo "<br><br>";

echo "Item do menu 5 <br>";

exibe(5);









?>
</body>
</html>
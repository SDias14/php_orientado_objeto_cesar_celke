<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Incremento e decremento</title>
</head>
<body>
    
    
    <?php

        echo "<h1>Pós-Incremento</h1>";
        
        $a = 5;

        echo "Deve ser 5 <br><br>";

        var_dump($a); // 5

        echo "<br><br>";

        echo "Deve ser 5 <br><br>";

        var_dump($a++); // Pós-incremento : ele leu o valor da variável e depois incrementou. Por isso so vai incrementar na próxima linha.

        echo "<br><br>";

        echo "Deve ser 6 <br><br>";

        var_dump($a); // 6

        echo "<h2>Pré-Incremento</h2>";

        $b = 5;

        echo "Deve ser 5 <br><br>";

        var_dump($b); // 5

        echo "<br><br>";

        echo "Deve ser 6 <br><br>";

        var_dump(++$b); // Pré-incremento : ele incrementou e depois leu o valor da variável. Por isso já incrementou.

        echo "<br><br>";

        echo "<h1>Pós-Decremento</h1>";

        $c = 5;

        echo "Deve ser 5 <br><br>";

        var_dump($c); // 5

        echo "<br><br>";

        echo "Deve ser 5 <br><br>";

        var_dump($c--); // Pós-decremento : ele leu o valor da variável e depois decrementou. Por isso so vai decrementar na próxima linha.

        echo "<br><br>";

        echo "Deve ser 4 <br><br>";

        var_dump($c); // 4


        echo "<h2>Pré-Decremento</h2>";

        $d = 5;

        echo "Deve ser 5 <br><br>";

        var_dump($d); // 5

        echo "<br><br>";

        echo "Deve ser 4 <br><br>";

        var_dump(--$d); // Pré-decremento : ele decrementou e depois leu o valor da variável. Por isso já decrementou.

        echo "<br><br>";







    ?>
    
</body>
</html>
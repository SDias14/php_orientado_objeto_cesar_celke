<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de nome e sobrenome</title>
</head>
<body>

    <p>
        Primeiro nome : 

        

        <?php

        require_once 'Pessoa.php';
            $pessoa = new Pessoa();
            $pessoa->nome = "João";
            echo $pessoa->nome;
        ?>




    </p>


    <p>
        Sobrenome : 

        

        <?php
            $pessoa = new Pessoa();
            $pessoa->sobrenome = "Silva";
            echo $pessoa->sobrenome;
        ?>

    

</body>
</html>
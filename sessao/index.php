
<?php
//session_start() deve ser a primeira coisa a ser chamada no documento

session_start(); // Inicia a sessão


?>


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

  // criando uma sessão
    $_SESSION['id'] = 2;
    $_SESSION['nome'] = 'João';

    //verificando se a sessão foi criada

    if(isset($_SESSION['id'])){
        echo "Id do usuário: " . $_SESSION['id'] . " e o nome do usuário é: " . $_SESSION['nome'] . "<br>";
    }else{
        echo 'Sessão não criada';
    }

    echo "<hr>";

    // destruindo a sessão

unset($_SESSION['id'],$_SESSION['nome']);


if(isset($_SESSION['id'])){
    echo "Id do usuário: " . $_SESSION['id'] . " e o nome do usuário é: " . $_SESSION['nome'] . "<br>";
}else{
    echo 'Sessão não criada';
}




     ?>
</body>
</html>
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
 
    $_SESSION['nome'] = 'João';

    //verificando se a sessão foi criada

    if(isset($_SESSION['nome'])){
        echo "O usuário " . $_SESSION['nome'] . " está logado com sucesso!";
    }else{
        echo 'Usuário não logado';
    }

    echo "<hr>";

    // destruindo a sessão

unset($_SESSION['nome']);

//verificando se a sessão foi destruida

if(isset($_SESSION['nome'])){
    echo "O usuário " . $_SESSION['nome'] . " está logado com sucesso!";
}else{
    echo 'Usuário não logado';
}



    



     ?>
</body>
</html>
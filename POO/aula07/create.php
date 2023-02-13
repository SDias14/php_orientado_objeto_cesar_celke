<?php
session_start();

ob_start();


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>
</head>
<body>

<div>
    <a href="index.php" style= "text-decoration: none;">Listar</a><br>
    <a href="create.php" style="text-decoration: none;">Cadastrar</a>

    <h1>Cadastrar Usuario</h1>
</div>



    <?php

require './Conn.php';
require './User.php';

$formData = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if (!empty($formData['SendAddUser'])) {
    $createUser = new User();
    $createUser->formData = $formData;
    $value = $createUser->create();

    if ($value) {
       $_SESSION['msg'] = "Usuario cadastrado com sucesso";
         header("Location: index.php");
    } else {
        echo "Erro ao cadastrar usuario";
    }
    
} 



    ?>

    <form name = "CreateUser" method="POST" action="">
        <label> Nome:</label>
        <input type="text" name="nome" placeholder="Digite seu nome" required/><br><br>
        <label> Email:</label>
        <input type="email" name="email" placeholder="Digite seu email" required/><br><br>

        <input type="submit" value="Cadastrar" name="SendAddUser">
</body>
</html>
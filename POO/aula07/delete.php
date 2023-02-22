<?php

session_start();

ob_start();


 // recebendo o id do usuario a ser deletado pela url
 $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

    // verificando se o id não está vazio
    if(!empty($id)){
        require './Conn.php';
        require './User.php';

        //instanciando a classe User
        $deleteUser = new User();

        //enviando o id do usuário para a classe User
        
        $deleteUser->id = $id;

        //chamando o método delete

        $value = $deleteUser-> delete();    
        if ($value){
            $_SESSION['msg'] = "<p style='color:green;'>Usuário deletado com sucesso!</p>";
            header("Location: index.php");
        }else{
            $_SESSION['msg'] = "<p style='color:red;'>Erro: Usuário não foi deletado com sucesso!</p>";
            header("Location: index.php");
        }

    }else{
        $_SESSION['msg'] = "<p style='color:red;'>Erro: Usuário não encontrado!</p>";
        header("Location: index.php");
    }



?>
<?php
include_once "conexao.php";
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <title>Celke - Formulario com INSERT</title>
    <link rel="shortcut icon" href="images/favicon.ico" />
</head>

<body>
    <h2>Editar usuarios</h2>
    
    
    <?php

    $id = 1;
    $nome = "Mayara";
    $email = "mayara@gmail.com";

    $query_update_usuario = "UPDATE usuarios 
                       SET nome = :nome , email = :email 
                       WHERE id = :id
                       LIMIT 1";
    $update_usuario = $conn->prepare($query_update_usuario);
    $update_usuario->bindParam(':nome', $nome, PDO::PARAM_STR);
    $update_usuario->bindParam(':email', $email, PDO::PARAM_STR);
    $update_usuario->bindParam(':id', $id, PDO::PARAM_INT);

    if ($update_usuario->execute()) {
        echo "Usuário editado com sucesso!<br>";
    } else {
        echo "Erro: Usuário não editado com sucesso!<br>";
    } 





    ?>

            
        
</body>

</html>


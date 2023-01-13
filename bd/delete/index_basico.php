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
    <h2>Deletar Usuário</h2>
    <?php

    $id = 3;

    $query_usuario="DELETE FROM usuarios WHERE id = :id LIMIT 1";
    $delete_usuario = $conn->prepare($query_usuario);
    $delete_usuario->bindParam(':id', $id, PDO::PARAM_INT);
    if ($delete_usuario->execute()) {
        echo "Usuário deletado com sucesso!<br>";
    }else{
        echo "Não foi possível deletar o usuário!<br>";
    }

  
        
        
     
    ?>

</body>
</html>


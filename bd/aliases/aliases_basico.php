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
    <h2>Alias</h2>

    



    <?php

    $query_usuarios = "SELECT id AS id_usr , nome AS nome_usr, email AS email_usr
    FROM usuarios 
    ORDER BY id DESC 
    LIMIT 40";

    $result_usuarios = $conn->prepare($query_usuarios);

    $result_usuarios->execute();

    while($row_usuario = $result_usuarios->fetch(PDO::FETCH_ASSOC)){
        extract($row_usuario);
        echo "ID: " . $id_usr . "<br>";
        echo "Nome: ". $nome_usr. "<br>";
        echo "Email: ". $email_usr. "<br>";
        echo "<br>";
        echo "<hr>";
    }

    

    ?>


            
        
</body>

</html>


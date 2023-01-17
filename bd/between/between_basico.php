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
    <h2>Between</h2>

    <?php

    $query_usuario ="SELECT id, nome, email FROM usuarios
                            WHERE id BETWEEN 1 AND 5";

    $result_usuario = $conn->prepare($query_usuario);

    $result_usuario->execute();


    while($row_usuario = $result_usuario->fetch(PDO::FETCH_ASSOC)){
        
        extract($row_usuario);

        echo "id: $id<br>";
        echo "nome: $nome<br>";
        echo "email: $email<br>";

        echo "<hr>";

    }



    



    ?>


            
        
</body>

</html>


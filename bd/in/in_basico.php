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
    <h2>LIKE</h2>

    <?php

    $query_usuario = "SELECT id, nome, email,nivel_acesso_id FROM usuarios 
                            WHERE nivel_acesso_id IN (1,2)
                            ORDER BY id DESC";

                            
                            $result_usuarios = $conn->prepare($query_usuario);
                            $result_usuarios->execute();

    while($row_usuario = $result_usuarios->fetch(PDO::FETCH_ASSOC)){

        extract($row_usuario);

        echo "id: $id<br>";
        echo "nome: $nome<br>";
        echo "email: $email<br>";
        echo "nivel_acesso_id: $nivel_acesso_id<br>";


        echo "<hr>";

    }                        
      



    ?>


            
        
</body>

</html>


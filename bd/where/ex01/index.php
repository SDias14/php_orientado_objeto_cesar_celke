<?php
include_once "conexao.php";
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <title>Celke - WHERE</title>
    <link rel="shortcut icon" href="images/favicon.ico" />
</head>

<body>
   
    <?php
  ////////////////////////////////////////////////////////////////////////////////////////////////////////////

    echo "<h2>Pesquisar o Usuário Ativo</h2>";
    $query_usuarios_c = "SELECT id, nome, email, sit_usuario_id 
                        FROM usuarios 
                        WHERE id = 6";

    $result_usuarios_c = $conn->prepare($query_usuarios_c); 
    $result_usuarios_c->execute();


    $row_usuario_c = $result_usuarios_c->fetch(PDO::FETCH_ASSOC);
     
        extract($row_usuario_c);

        echo "ID: $id <br>";
        echo "Nome: $nome <br>";
        echo "E-mail: $email <br>";
        echo "Id da situação: $sit_usuario_id <br>";
        echo "<hr>";
    


   

    

    ?>
</body>

</html>



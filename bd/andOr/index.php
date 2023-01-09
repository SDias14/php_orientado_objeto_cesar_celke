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

    echo "<h2>Listar usuarios com a condição OR</h2>";
    $query_usuarios_c = "SELECT id, nome 
                        FROM nivel_acesso
                        WHERE  id = 3 
                        OR    nome = 'aluno' ";

    $result_usuarios_c = $conn->prepare($query_usuarios_c); 
    $result_usuarios_c->execute();


   while ( $row_usuario_c = $result_usuarios_c->fetch(PDO::FETCH_ASSOC)){
     
        extract($row_usuario_c);

        echo "ID: $id <br>";
        echo "Nome: $nome <br>";
        echo "<hr>";
        echo "<br>";
    
   }


   
?>
</body>

</html>



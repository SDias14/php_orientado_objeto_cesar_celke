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

    echo "<h2>Listar niveis de acesso </h2>";
    $query_nivel_acesso_c = "SELECT id, nome 
                        FROM nivel_acesso
                        ORDER BY id DESC "; // fez a ordenação por id descrescente, do maior para o menor. 

    $result_nivel_acesso_c = $conn->prepare($query_nivel_acesso_c); 
    $result_nivel_acesso_c->execute();


   while ( $row_nivel_acesso_c = $result_nivel_acesso_c->fetch(PDO::FETCH_ASSOC)){
     
        extract($row_nivel_acesso_c);

        echo "ID: $id <br>";
        echo "Nome: $nome <br>";
        echo "<hr>";
        echo "<br>";
    
   }


   
?>
</body>

</html>



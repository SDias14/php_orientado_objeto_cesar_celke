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

    echo "<h2>Listar situações </h2>";
    $query_situacao_c = "SELECT id, nome 
                        FROM situacao
                        ORDER BY nome DESC "; // fez a ordenação por id descrescente, do maior para o menor. 

    $result_situacao_c = $conn->prepare($query_situacao_c); 
    $result_situacao_c->execute();


   while ( $row_situacao_c = $result_situacao_c->fetch(PDO::FETCH_ASSOC)){
     
        extract($row_situacao_c);

        echo "ID: $id <br>";
        echo "Nome: $nome <br>";
        echo "<hr>";
        echo "<br>";
    
   }


   
?>
</body>

</html>



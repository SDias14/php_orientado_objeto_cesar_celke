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
    $query_different = "SELECT DISTINCT nome_aula, usuario_id
                        FROM acessos
                        WHERE usuario_id = 5"; // fez a ordenação por id descrescente, do maior para o menor. 

    $result_different  = $conn->prepare($query_different); 
    $result_different ->execute();


    while($row_different = $result_different->fetch(PDO::FETCH_ASSOC)){
      //var_dump($row_usuario_c);
      extract($row_different);
      echo "NOME DA AULA: $nome_aula <br>";
      echo "ID DO USUARIO: $usuario_id <br>";
      echo "<hr>";
  }



  


   
?>
</body>

</html>



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
    $nome = "MARIA"; /* para pesquisar esse mesmo nome com texto antes e texto depois se usa o por cento, sinal  */


    $query_usuario ="SELECT id, nome, email
            FROM usuarios
            WHERE nome LIKE :nome /* o like é usado para encontrar uma informação especifica.*/
            ORDER BY id DESC";

            $result_usuarios =$conn->prepare($query_usuario);

            $result_usuarios->bindParam(':nome',$nome, PDO::PARAM_STR);

            $result_usuarios->execute();

    while ($row_usuario = $result_usuarios->fetch(PDO::FETCH_ASSOC)) {

        extract($row_usuario);

        echo "id : $id <br><br>";
        echo "nome : $nome <br><br>";
        echo "email : $email <br><br>";

        echo "<hr>";
    }

    
               







  


    ?>

            
        
</body>

</html>


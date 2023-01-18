<?php
include_once "conexao.php";
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <title>Celke - RIGHT JOIN</title>
    <link rel="shortcut icon" href="images/favicon.ico" />
</head>

<body>
    <h2>Listar Usuários</h2>

    <?php

    $query_contatos = "SELECT cont.id, cont.telefone, cont.celular, usr.nome,usr.email 
                FROM contatos AS cont
                RIGHT JOIN usuarios AS usr 
                ON usr.id = cont.usuario_id ";

    $result_contatos = $conn->prepare($query_contatos);

    $result_contatos->execute();

    while($row_contatos = $result_contatos->fetch(PDO::FETCH_ASSOC)){
        extract($row_contatos);
        echo "id : $id <br> ";
        echo "telefone : $telefone <br>";
        echo "celular : $celular <br>";
        echo "nome : $nome <br>";
        echo "email : $email<br>";

        echo "<hr>";
    }

  
    ?>

</body>

</html>
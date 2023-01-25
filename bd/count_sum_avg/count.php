<?php
include_once "conexao.php";
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <title>Celke - COUNT </title>
    <link rel="shortcut icon" href="images/favicon.ico" />
</head>

<body>
    <h2>Contar a quantidade de usuarios ativos </h2>

    <?php


    $query_qnt_usuarios = "SELECT COUNT(id) AS qnt_usuarios
        FROM usuarios
        WHERE sists_usuario_id = 3";

    $result_qnt_usuarios = $conn->prepare($query_qnt_usuarios);
    $result_qnt_usuarios->execute();

    $row_qnt_usuarios = $result_qnt_usuarios->fetch(PDO::FETCH_ASSOC);

    extract($row_qnt_usuarios);

    echo "Quantidade de usuarios :  $qnt_usuarios " ;





    ?>

</body>

</html>
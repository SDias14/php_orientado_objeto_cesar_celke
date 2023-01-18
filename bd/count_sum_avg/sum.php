<?php
include_once "conexao.php";
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <title>Celke - SUM </title>
    <link rel="shortcut icon" href="images/favicon.ico" />
</head>

<body>
    <h2>Somar a quantidade de usuarios ativos </h2>

    <?php

    $query_total_venda = "SELECT SUM(preco) AS total_venda 
            FROM inscricoes_cursos";

    $result_total_venda = $conn->prepare($query_total_venda);

    $result_total_venda->execute();

    $row_total_venda = $result_total_venda->fetch(PDO::FETCH_ASSOC);

    extract($row_total_venda);

    echo "total de vendas : R$ " .number_format($total_venda, 2, ",", "."). "<br>";







    ?>

</body>

</html>
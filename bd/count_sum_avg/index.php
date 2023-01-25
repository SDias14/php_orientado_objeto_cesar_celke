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
    <h2>Media</h2>

    <?php

    $query_media ="SELECT AVG(preco) AS media 
           FROM inscricoes_cursos";

    $result_media = $conn->prepare($query_media);

    $result_media->execute();

    $row_media = $result_media->fetch(PDO::FETCH_ASSOC);

    extract($row_media);

    echo "Media de preço pago no curso : R$ " .number_format($media, 2, ",", "."). "<br>";


    $query_media_b ="SELECT format(AVG(preco), '#') AS media 
    FROM inscricoes_cursos";

$result_media_b = $conn->prepare($query_media_b);

$result_media_b->execute();

$row_media_b = $result_media_b->fetch(PDO::FETCH_ASSOC);

extract($row_media_b);

echo "Media de preço pago no curso : R$ " .$media. "<br>";








    ?>

</body>

</html>
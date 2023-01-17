<?php
include_once "conexao.php";
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <title>Celke - INNER JOIN</title>
    <link rel="shortcut icon" href="images/favicon.ico" />
</head>

<body>
    <h2>Listar Usuários</h2>

    <?php
    //WHERE usr.nome LIKE '%a%'

    $query_contratos = "SELECT Tb_contratos.codigo,Tb_contratos.prazo,Tb_contratos.valor , Tb_convenio_servico.name
    FROM Tb_contrato
   LEFT JOIN Tb_convenio_servico
    ON Tb_contrato.convenio_servico = Tb_convenio_servico.convenio_servico";



$result_customers = $conn->prepare($query_contratos);

$result_customers->execute();

    while($row_contratos = $result_customers->fetch(PDO::FETCH_ASSOC)){
        var_dump($row_contratos);
    }
    
    









        
        
    ?>

</body>

</html>
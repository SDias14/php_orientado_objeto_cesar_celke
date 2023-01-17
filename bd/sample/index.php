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
    <h2>Inner Join</h2>


    <?php

$query_customers = "SELECT Orders.id, Customers.name 
FROM Orders
INNER JOIN Customers 
ON Orders.customer_id = Customers.id";

$result_customers = $conn->prepare($query_customers);

$result_customers->execute();

while($row_customers = $result_customers->fetch(PDO::FETCH_ASSOC)){
    extract($row_customers);
    echo "ID: " . $id . "<br>";
    echo "Nome: ". $name. "<br>";
    echo "<br>";
    echo "<hr>";
}

?>






</body>

</html>


<?php

include_once "conexao.php" 

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Listar Usuários com limite</h2>

<?php

$query_usuarios = "SELECT id,nome,email FROM usuarios LIMIT 2";
$result_usuarios = $conn->prepare($query_usuarios);
$result_usuarios->execute();

while($row_usuario = $result_usuarios->fetch(PDO::FETCH_ASSOC)){ 
        
    extract($row_usuario); // extrai as colunas de dentro do row_usuarios
    
    echo "ID: $id <br> ";
    echo "NOME : $nome <br>";
    echo "EMAIL : $email <br>";
    
   
    echo "<hr><br>";

    //retornou apenas os dois primeiro usuarios.

}

echo "<h2>Listar Usuários com limite e offset</h2>";


$query_usuarios_b = "SELECT id,nome,email FROM usuarios LIMIT 5 OFFSET 5 ";
$result_usuarios_b = $conn->prepare($query_usuarios_b);
$result_usuarios_b->execute();

while ($row_usuario_b = $result_usuarios_b->fetch(PDO::FETCH_ASSOC)) {

    extract($row_usuario_b); // extrai as colunas de dentro do row_usuarios

    echo "ID: $id <br> ";
    echo "NOME : $nome <br>";
    echo "EMAIL : $email <br>";


    echo "<hr><br>";

}




?>





    
</body>
</html>




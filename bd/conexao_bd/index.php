<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php
//inicio da conexao com o banco de dados utilizando pdo
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "celke";
$port = 3306;

try{
    //Conexão com a porta
    //$conn = new PDO("mysql:host=$host;port=$port;dbname=" . $dbname, $user, $pass);
    
    //Conexão sem a porta
    $conn = new PDO("mysql:host=$host;dbname=" . $dbname, $user, $pass);
    //echo "Conexão com banco de dados realizado com sucesso.";
}catch(PDOException $err){
    echo "Erro: Conexão com banco de dados não realizado com sucesso. Erro gerado " . $err->getMessage();
}

//fim da conexao com o banco de dados utilizando pdo

echo "<h2>listar usuarios</h2>";


//atribuindo a query para selecionar todos os usuarios. 

$query_usuarios = "SELECT * FROM usuarios";

//preparando a query 

$result_usuarios= $conn->prepare($query_usuarios);

$result_usuarios->execute();

//para ler os valores eu vou ter que usar o laço de repetição while , que tem mais de um registro 
//FETCH VAI TRAZER TODAS AS INFORMAÇÕES E PODEREMOS BUSCAR PELO NOME DA COLUNA
while($row_usuario = $result_usuarios->fetch(PDO::FETCH_ASSOC)){ 
    echo"ID : " . $row_usuario['id'] . "<br>";
    echo"NOME : " . $row_usuario['nome'] . "<br>";
    echo"EMAIL: " . $row_usuario['email'] . "<br>";
    echo"DATA DA CRIAÇÃO : " . date('d/m/Y H:i:s', strtotime($row_usuario['created'])) . "<br>";
    echo"EDITADO : ";
    if(!empty($row_usuario['modified'])){
        echo date('d/m/Y H:i:s', strtotime($row_usuario['modified']));
    }
    echo"<hr><br>";
}
   
echo "<h2>listar usuarios otimizado</h2>";

echo"<hr><br>";


    // retornando apenas a coluna que quero do banco de dados. 

    $query_usuarios_b = "SELECT id,nome,email,created FROM usuarios";
    $result_usuarios_b= $conn->prepare($query_usuarios_b);
    $result_usuarios_b->execute();

    while($row_usuario_b = $result_usuarios_b->fetch(PDO::FETCH_ASSOC)){ 
        
        extract($row_usuario_b); // extrai as colunas de dentro do row_usuarios
        
        echo "ID: $id <br> ";
        echo "NOME : $nome <br>";
        echo "EMAIL : $email <br>";
        echo "DATA DE CRIAÇÃO : $created <br>";
        
       
        echo "<hr><br>";
    
}


?>
    
</body>
</html>




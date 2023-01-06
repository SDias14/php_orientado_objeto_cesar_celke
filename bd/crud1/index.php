<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<title>Document</title>

<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
</head>
<body>


<div class="container">

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

$query_situacao = "SELECT id,nome,created FROM situacao";
$result_situacao= $conn->prepare($query_situacao);
$result_situacao->execute();


echo "
<table>
<tr>
<th>ID</th>
<br>
<th>NOME</th>
<th>DATA DE CRIAÇÃO</th>
</tr>
</table>
";

while($row_situacao_q = $result_situacao->fetch(PDO::FETCH_ASSOC)){ 
    
    extract($row_situacao_q); // extrai as colunas de dentro do row_usuarios
    
    echo "
    
    <table>
    
    
    <tr>
    <td>$id</td>
    <td>$nome</td>
    <td>$created</td>
    </tr>
    
    
    
    
    
    </table>";
    
    
    
    
    
    
    
};


?>


</div>









<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
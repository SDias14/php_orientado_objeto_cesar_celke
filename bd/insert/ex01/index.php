<?php
include_once "conexao.php";
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
<meta charset="UTF-8" />
<title>Celke - WHERE</title>
<link rel="shortcut icon" href="images/favicon.ico" />
</head>

<body>

<?php

echo "<h1>Inserção na tabela situação</h1>";


$nome = "PENDENTE";


$query_situacao = "INSERT INTO situacao (nome, created ) 
VALUES (:nome, NOW())"; 

$cad_situacao = $conn->prepare($query_situacao); // PREPARANDO A INSTRUÇÃO SQL 

// FAZENDO UM BIND OU UMA LIGAÇÃO DOS VALORES PASSADO NA QUERY E AS VARIAVEIS
$cad_situacao->bindParam(':nome', $nome, PDO::PARAM_STR); 

$cad_situacao->execute();

if($cad_situacao->rowCount()){
  echo "<h2>cadastrado com sucesso</h2><br>";
  echo "<br>";
  $totalLine = $cad_situacao->rowCount();
  
  echo "Total de linhas adicionadas no banco de dados : $totalLine <br>";
  
  
  $lastId = $conn->lastInsertId(); // recuperando o ultimo id inserido
  
  echo "Ultimo id Inserido : $lastId <br>";
}else{
  echo "<h2>Falha ao cadastrar</h2>";
}










?>
</body>

</html>



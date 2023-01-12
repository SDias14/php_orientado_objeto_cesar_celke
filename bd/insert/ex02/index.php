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


$nome = "DBA";


$query_nivel_acesso = "INSERT INTO nivel_acesso (nome, created )VALUES (:nome, NOW())"; 
$cad_nivel_acesso = $conn->prepare($query_nivel_acesso); 
$cad_nivel_acesso->bindParam(':nome', $nome, PDO::PARAM_STR); 
$cad_nivel_acesso->execute();



if($cad_nivel_acesso->rowCount()){
  echo "<h2>cadastrado com sucesso</h2><br>";
  echo "<br>";
  $totalLine = $cad_nivel_acesso->rowCount();
  echo "Total de linhas adicionadas no banco de dados : $totalLine <br>";
  $lastId = $conn->lastInsertId(); // recuperando o ultimo id inserido
  echo "Ultimo id Inserido : $lastId <br>";
}else{
  echo "<h2>Falha ao cadastrar</h2>";
}










?>
</body>

</html>



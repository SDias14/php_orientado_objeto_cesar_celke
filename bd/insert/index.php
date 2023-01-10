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
  ////////////////////////////////////////////////////////////////////////////////////////////////////////////
// colocando valores direto na query - nao recomendado
/*
    echo "<h2>Cadastrar Usuarios </h2>";
    $query_usuario = "INSERT INTO usuarios (nome , email, senha,sit_usuario_id, nivel_acesso_id, created ) 
                       VALUES ('mayara', 'maykanegusuke@123.com', '12345', 1, 1, NOW()) "; 

    $cad_usuario = $conn->prepare($query_usuario); 
    $cad_usuario->execute();

    */

    //colocar a variavel com valor direto na query, tambem nao sendo recomendado colocar a variavel direto na query

    /*

    $nome = "samuel";
    $email = "samueldias@email.com";
    $senha = "123456";
    $sit_usuario_id = 2;
    $nivel_acesso_id = 2;

    $query_usuario = "INSERT INTO usuarios (nome , email, senha,sit_usuario_id, nivel_acesso_id, created ) 
                       VALUES ('$nome','$email','$senha',$sit_usuario_id,$nivel_acesso_id, NOW()) "; 

$cad_usuario = $conn->prepare($query_usuario); 
$cad_usuario->execute();

*/

//atribuir o link na query e substituir o link com o Bindparam
//instrução recomendada.

    $nome = "anao";
    $email = "anao@email.com";
    $senha = "1234567";
    $sit_usuario_id = 3;
    $nivel_acesso_id = 3;

    $query_usuario = "INSERT INTO usuarios (nome , email, senha,sit_usuario_id, nivel_acesso_id, created ) 
                       VALUES (:nome, :email, :senha, :sit_usuario_id, :nivel_acesso_id, NOW())"; 

$cad_usuario = $conn->prepare($query_usuario); // PREPARANDO A INSTRUÇÃO SQL 
    
    // FAZENDO UM BIND OU UMA LIGAÇÃO DOS VALORES PASSADO NA QUERY E AS VARIAVEIS
    $cad_usuario->bindParam(':nome', $nome, PDO::PARAM_STR); 
    $cad_usuario->bindParam(':email', $email, PDO::PARAM_STR);
    $cad_usuario->bindParam(':senha', $senha, PDO::PARAM_STR);
    $cad_usuario->bindParam(':sit_usuario_id', $sit_usuario_id, PDO::PARAM_INT);
    $cad_usuario->bindParam(':nivel_acesso_id', $nivel_acesso_id, PDO::PARAM_INT);
    //EXECUTANDO
    $cad_usuario->execute();

    if($cad_usuario->rowCount()){
      echo "<h2>cadastrado com sucesso</h2>";
      echo "<br>";
      echo $cad_usuario->rowCount(); // vendo se de fato foi inserido uma linha
      echo $conn->lastInsertId(); // recuperando o ultimo id inserido
    }else{
      echo "<h2>Falha ao cadastrar</h2>";
    }


    






   
?>
</body>

</html>



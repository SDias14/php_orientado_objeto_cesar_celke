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
    <h2>Editar usuarios com formulario</h2>
    
    
    <?php

    //salvar os dados do formulario

    $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
    //var_dump($dados);

    if(!empty($dados ['sendUpUsuario'])){
       // var_dump($dados);
      
      $query_up_usuario = "UPDATE usuarios 
         SET nome = :nome , email = :email, senha = :senha, sit_usuario_id = :sit_usuario_id, nivel_acesso_id = :nivel_acesso_id, modified = NOW()
         WHERE id = :id ";

      $up_usuario = $conn->prepare($query_up_usuario);   
      $up_usuario->bindParam(':nome', $dados['nome'], PDO::PARAM_STR);
      $up_usuario->bindParam(':email', $dados['email'], PDO::PARAM_STR);
        $senha_cript = password_hash($dados['senha'], PASSWORD_DEFAULT);
      $up_usuario->bindParam(':senha', $senha_cript, PDO::PARAM_STR);
      $up_usuario->bindParam(':sit_usuario_id', $dados['sit_usuario_id'], PDO::PARAM_INT);
      $up_usuario->bindParam(':nivel_acesso_id', $dados['nivel_acesso_id'], PDO::PARAM_INT);
      $up_usuario->bindParam(':id', $dados['id'], PDO::PARAM_INT);

        if ($up_usuario->execute()) {
            echo "Usuário editado com sucesso!<br>";
        } else {
            echo "Erro: Usuário não editado com sucesso!<br>";
        }

    }

    //para editar primeiramente eu preciso pesquisar o usuario que eu quero editar

    // receber o id pela url

    $id = filter_input(INPUT_GET, 'id_usuario', FILTER_SANITIZE_NUMBER_INT);

    $query_usuario = "SELECT id, nome, email, senha,sit_usuario_id, nivel_acesso_id 
    FROM usuarios 
    WHERE id = :id 
    LIMIT 1";

    $result_usuario = $conn->prepare($query_usuario);

    $result_usuario->bindParam(':id', $id, PDO::PARAM_INT);

    $result_usuario->execute();

    $row_usuario = $result_usuario->fetch(PDO::FETCH_ASSOC);

    //var_dump($row_usuario);//



    

    


    ?>

<form method="POST" action="">
<?php

$id = "";

if(isset($row_usuario['id'])){
    $id = $row_usuario['id'];
};

?>
    <input type="hidden" name="id" value="<?php echo $row_usuario['id'];?>" />
   
<!-- nome -->
   
   <?php

    $nome = "";

    if(isset($row_usuario['nome'])){
        $nome = $row_usuario['nome'];
    }

    ?>


<label> Nome: </label>
    <input type="text" name="nome" placeholder="Nome Completo" value = " <?php echo $nome ?>" required/><br><br>


    <!-- fim nome -->


    <!-- email -->

    <?php

    $email= " ";

    if(isset($row_usuario['email'])){
        $email = $row_usuario['email'];
    }

    ?>

    

    <label> Email: </label>
    <input type="email" name="email" placeholder="Email" value="<?php echo $email ?>" required/><br><br>


    <!-- fim email -->

    <label> Senha: </label>
    <input type="password" name="senha" placeholder="Senha" required/><br><br>

     <!-- sit_usuario -->

     <?php

$sit_usuario_id= "";

if(isset($row_usuario['sit_usuario_id'])){
    $sit_usuario_id = $row_usuario['sit_usuario_id'];
}

?>

    <label> Situação do usuario </label>
    <input type="number" name="sit_usuario_id" placeholder="Situação do usuario" value="<?php echo $sit_usuario_id?>" required/><br><br>


    <!-- fim sit_usuario -->

    <!-- nivel de acesso do usuario -->

    <?php

$nivel_acesso_id= "";

if(isset($row_usuario['nivel_acesso_id'])){
    $nivel_acesso_id = $row_usuario['nivel_acesso_id'];
}

?>

    <label> Nivel de acesso </label>
    <input type="number" name="nivel_acesso_id" placeholder="Nivel de acesso" value="<?php echo $nivel_acesso_id?>" required/><br><br>

    <input type="submit" value="Salvar" name="sendUpUsuario"><br><br>







</form>

            
        
</body>

</html>


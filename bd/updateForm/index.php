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

    //para editar primeiramente eu preciso pesquisar o usuario que eu quero editar

    $id = 1;

    $query_usuario = "SELECT id, nome, email, senha,sit_usuario_id, nivel_acesso_id 
    FROM usuarios 
    WHERE id = :id 
    LIMIT 1";

    $result_usuario = $conn->prepare($query_usuario);

    $result_usuario->bindParam(':id', $id, PDO::PARAM_INT);

    $result_usuario->execute();

    $row_usuario = $result_usuario->fetch(PDO::FETCH_ASSOC);

    var_dump($row_usuario);//



    

    


    ?>

<form method="POST" action="">
   
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

    <label> Situação do usuario </label>
    <input type="number" name="sit_usuario_id" placeholder="Situação do usuario" required/><br><br>

    <label> Nivel de acesso </label>
    <input type="number" name="nivel_acesso_id" placeholder="Nivel de acesso" required/><br><br>

    <input type="submit" value="Salvar" name="sendUpUsuario"><br><br>







</form>

            
        
</body>

</html>


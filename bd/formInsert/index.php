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
    <h2>Cadastrar Usuário</h2>
    <?php

    $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT); 
    
    if(!empty($dados['SendCadUsuario'])){
        //var_dump($dados);

        $query_usuario = "INSERT INTO usuarios (nome, email, senha, sit_usuario_id, nivel_acesso_id, created) 
                VALUES (:nome, :email, :senha, :sit_usuario_id, :nivel_acesso_id, NOW())";
                $cad_usuario = $conn->prepare($query_usuario);
                $cad_usuario->bindParam(':nome', $dados['nome'], PDO::PARAM_STR);
                $cad_usuario->bindParam(':email', $dados['email']);
                $senha_cript = password_hash($dados['senha'], PASSWORD_DEFAULT);
                $cad_usuario->bindParam(':senha', $senha_cript);
                $cad_usuario->bindParam(':sit_usuario_id', $dados['sit_usuario_id'], PDO::PARAM_INT);
                $cad_usuario->bindParam(':nivel_acesso_id', $dados['nivel_acesso_id'], PDO::PARAM_INT);

                $cad_usuario->execute();

                if($cad_usuario->rowCount()){
                    echo "Usuário cadastrado com sucesso!<br>";
                }else{
                    echo "Erro: Usuário não cadastrado com sucesso!<br>";
                }
    }

    ?>
    <form method="POST" action="">
        <label>Nome: </label>
        <input type="text" name="nome" placeholder="Nome completo" required /><br><br>

        <label>E-mail: </label>
        <input type="email" name="email" placeholder="Melhor e-mail do usuário" required /><br><br>

        <label>Senha: </label>
        <input type="password" name="senha" placeholder="Senha do usuário" required /><br><br>

        <label>Situação do Usuário: </label>
        <input type="number" name="sit_usuario_id" placeholder="Situação do usuário" required /><br><br>

        <label>Nível de Acesso: </label>
        <input type="number" name="nivel_acesso_id" placeholder="Nível de acesso do usuário" required /><br><br>

        <input type="submit" value="Cadastra" name="SendCadUsuario" />
    </form>
</body>

</html>
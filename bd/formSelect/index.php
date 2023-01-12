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
    
        try {

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

            if ($cad_usuario->rowCount()) {
                echo "Usuário cadastrado com sucesso!<br>";
                unset($dados);
            } 
        
        }catch(PDOException $erro){
            echo "Erro: Usuário não cadastrado com sucesso!<br>";
        }
    }

    ?>
    <form method="POST" action="">
        <label>Nome: </label>
        <input type="text" name="nome" placeholder="Nome completo" value="<?php if (isset($dados['nome'])) {
            echo $dados['nome'];
        }?>" required /><br><br>

        <label>E-mail: </label>
        <input type="email" name="email" placeholder="Melhor e-mail do usuário" value="<?php if (isset($dados['email'])) {
            echo $dados['email'];
        }?>" required /><br><br>

        <label>Senha: </label>
        <input type="password" name="senha" placeholder="Senha do usuário" required /><br><br>

        
        
        
        
        
        
        <?php

$query_sit_usuario = "SELECT id, nome FROM situacao ORDER BY nome ASC";
$result_sit_usuario = $conn->prepare($query_sit_usuario);
$result_sit_usuario->execute();


?>

<label>Situacao do Usuario</label>

<select name="sit_usuario_id" required >
    <option value="">Selecione</option>
    
    <?php

    while($row_sit_usuario = $result_sit_usuario->fetch(PDO::FETCH_ASSOC)){
        echo "<option value='" . $row_sit_usuario['id'] . "'>" . $row_sit_usuario['nome'] . "</option>";

    }
?>
</select>

        <br><br>

        
        <?php

$query_nivel_acesso_usuario = "SELECT id, nome FROM nivel_acesso ORDER BY nome ASC";
$result_nivel_acesso_usuario = $conn->prepare($query_nivel_acesso_usuario );
$result_nivel_acesso_usuario->execute();


?>

        <label>Nível de Acesso: </label>
        
        <select name="nivel_acesso_id" required >
    <option value="">Selecione</option>
    
    <?php

    while($row_nivel_acesso_usuario = $result_nivel_acesso_usuario->fetch(PDO::FETCH_ASSOC)){
        echo "<option value='" . $row_nivel_acesso_usuario['id'] . "'>" . $row_nivel_acesso_usuario['nome'] . "</option>";
    }
?>
</select>
        <br><br>

        <input type="submit" value="Cadastrar" name="SendCadUsuario" />
    </form>
</body>

</html>


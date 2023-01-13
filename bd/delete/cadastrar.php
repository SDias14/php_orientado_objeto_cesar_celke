<?php
session_start();
include_once "conexao.php";
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <title>Celke - Cadastra Usuario</title>
    <link rel="shortcut icon" href="images/favicon.ico" />
</head>

<body>
    <h2>Cadastrar Usuário</h2>
    <?php

    $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

    if (!empty($dados['SendCadUsuario'])) {
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
                $_SESSION['msg'] = "<p style='color: green;'>Usuário cadastrado com sucesso!</p>";
                unset($dados);
                header("Location: index.php");
            } else {
                echo "<p style='color: #f00;'>Erro: Usuário não cadastrado com sucesso!</p>";
            }
        } catch (PDOException $erro) {
            echo "<p style='color: #f00;'>Erro: Usuário não cadastrado com sucesso!</p>";
            //echo "Erro: Usuário não cadastrado com sucesso. Erro gerado: " . $erro->getMessage() . " <br>";
        }
    }

    ?>
    <form method="POST" action="">
        <label>Nome: </label>
        <?php
        $nome = "";
        if (isset($dados['nome'])) {
            $nome = $dados['nome'];
        }
        ?>
        <input type="text" name="nome" placeholder="Nome completo" value="<?php echo $nome; ?>" required /><br><br>


        <?php
        $email = "";
        if (isset($dados['email'])) {
            $email = $dados['email'];
        }
        ?>
        <label>E-mail: </label>
        <input type="email" name="email" placeholder="Melhor e-mail do usuário" value="<?php echo $email; ?>" required /><br><br>


        <?php
        $senha = "";
        if (isset($dados['senha'])) {
            $senha = $dados['senha'];
        }
        ?>
        <label>Senha: </label>
        <input type="password" name="senha" placeholder="Senha do usuário" value="<?php echo $senha; ?>" required /><br><br>

        <?php
        $query_sit_usuarios = "SELECT id, nome FROM situacao ORDER BY nome ASC";
        $result_sit_usuarios = $conn->prepare($query_sit_usuarios);
        $result_sit_usuarios->execute();
        ?>
        <label>Situação do Usuário: </label>
        <select name="sit_usuario_id" required>
            <option value="">Selecione</option>
            <?php
            while ($row_sit_usuario = $result_sit_usuarios->fetch(PDO::FETCH_ASSOC)) {
                $select_sit_usuario = "";

                if (isset($dados['sit_usuario_id']) and ($dados['sit_usuario_id'] == $row_sit_usuario['id'])) {
                    $select_sit_usuario = "selected";
                }

                echo "<option value='" . $row_sit_usuario['id'] . "' $select_sit_usuario>" . $row_sit_usuario['nome'] . "</option>";
            }
            ?>
        </select>
        <br><br>

        <?php
        $query_nivel_acesso = "SELECT id, nome FROM nivel_acesso ORDER BY nome ASC";
        $result_nivel_acesso = $conn->prepare($query_nivel_acesso);
        $result_nivel_acesso->execute();
        ?>
        <label>Nível de Acesso: </label>
        <select name="nivel_acesso_id" required>
            <option value="">Selecione</option>
            <?php
            while ($row_nivel_acesso = $result_nivel_acesso->fetch(PDO::FETCH_ASSOC)) {
                $select_nivel_acesso = "";

                if (isset($dados['nivel_acesso_id']) and ($dados['nivel_acesso_id'] == $row_nivel_acesso['id'])) {
                    $select_nivel_acesso = "selected";
                }

                echo "<option value='" . $row_nivel_acesso['id'] . "' $select_nivel_acesso>" . $row_nivel_acesso['nome'] . "</option>";
            }
            ?>
        </select>
        <br><br>

        <input type="submit" value="Cadastra" name="SendCadUsuario" />
    </form>
</body>

</html>
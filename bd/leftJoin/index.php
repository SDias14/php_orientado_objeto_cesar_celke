<?php
include_once "conexao.php";
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <title>Celke - INNER JOIN</title>
    <link rel="shortcut icon" href="images/favicon.ico" />
</head>

<body>
    <h2>Listar Usuários</h2>

    <?php
// left join para pesquisar numa tabela secundaria 
// pega a tabela contatos que é uma tabela secundaria, 
//da um alias 
//pega a chave estrangeira dela e coloca um sinal de igual com a chave primaria da tabela usuario.
//nao usamos o inner join pois nao ha valores correspondentes em todos os campos, alguns sao nulls.

    $query_usuarios = "SELECT usr.id, usr.nome, usr.email, cont.telefone, cont.celular , ende.logradouro, ende.numero 
                                  FROM usuarios AS usr
                                  LEFT JOIN contatos AS cont ON cont.usuario_id = usr.id
                                  LEFT JOIN enderecos AS ende ON ende.usuario_id = usr.id
                                  ORDER BY usr.id DESC
                                  LIMIT 40 ";

    $result_usuarios = $conn->prepare($query_usuarios);
    $result_usuarios->execute();
    
    while($row_usuario = $result_usuarios->fetch(PDO::FETCH_ASSOC)){
        extract($row_usuario);

        echo "id : $id <br> ";
        echo "nome: $nome<br> ";
        echo "email: $email<br>";
        echo "telefone: $telefone <br>";
        echo "celular: $celular <br>";
        echo "logradouro: $logradouro <br>";
        echo "numero: $numero <br>";


        echo "<hr>";
    }



    ?>

</body>

</html>
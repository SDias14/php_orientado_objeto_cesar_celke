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
    <h2>IN</h2>

    <?php

    $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

    //pesquisar os niveis de acesso no banco
     ?>

    <form method="POST" action="">

    <label>Pesquisar : </label>
    <br><br>

    <?php

$query_nivel_acesso = "SELECT id, nome FROM nivel_acesso ORDER BY id ASC";
$result_nivel_acesso = $conn->prepare($query_nivel_acesso);
$result_nivel_acesso->execute();

$valor_pesq_list = "";
if(!empty($dados['nivel_acesso'])){
    foreach($dados['nivel_acesso'] as $nivel_acesso_id){

            $valor_pesq_list .= $nivel_acesso_id;
    }


}

while($row_nivel_acesso = $result_nivel_acesso->fetch(PDO::FETCH_ASSOC)){
    extract($row_nivel_acesso);
       
    
    $result_valor = mb_strpos($valor_pesq_list, $id);
        if ($result_valor === false) {
            $checked = "";
        } else {
            $checked = "checked";
        }
        


    
        echo "<input type='checkbox' name='nivel_acesso[]' value='$id' $checked   >$nome<br>";

}


    ?>

  
 

    <input type="submit" value="Pesquisar" name="pesqUsuario"><br>
    



    </form>


    <?php

    if(!empty($dados['pesqUsuario'])){
    
        
        $valor_pesq = "";
        $controle = 1;
        foreach ($dados['nivel_acesso'] as $nivel_acesso_id) {
            if ($controle == 1) {

                $valor_pesq = $nivel_acesso_id;

            } else {
                $valor_pesq .= ", $nivel_acesso_id";
            }

            $controle++;

        }
        



        $query_usuario = "SELECT id, nome, email,nivel_acesso_id FROM usuarios 
        WHERE nivel_acesso_id IN ($valor_pesq)
        ORDER BY id DESC";

        
        $result_usuarios = $conn->prepare($query_usuario);
        $result_usuarios->execute();

while($row_usuario = $result_usuarios->fetch(PDO::FETCH_ASSOC)){

extract($row_usuario);

echo "id: $id<br>";
echo "nome: $nome<br>";
echo "email: $email<br>";
echo "nivel_acesso_id: $nivel_acesso_id<br>";


echo "<hr>";

}               
    }

            
      



    ?>


            
        
</body>

</html>


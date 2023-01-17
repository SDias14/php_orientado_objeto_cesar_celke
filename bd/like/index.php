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
    <h2>LIKE</h2>

    <?php

$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);


?>

    
    <form method="POST" action = "" > 

        <?php
        $texto_Pesquisar = "";
        if(isset($dados['text_pesquisar'])){
           $texto_Pesquisar= $dados['text_pesquisar'];

          

        }

        ?>
        
        <label>Pesquisar</label>
        <input type="text" name="text_pesquisar" value = "<?php echo $texto_Pesquisar ?>"  placeholder="Pesquisar pelo termo" />
        <br><br>

        <input type="submit" value="pesquisar" name="pesqUsuario" />
        <br><br>
</form>

    
    
    <?php

    
if (!empty($dados['pesqUsuario'])) {
   
   
    $nome = "%".$dados['text_pesquisar']. "%"; /* para pesquisar esse mesmo nome com texto antes e texto depois se usa o por cento, sinal  */


    $query_usuario ="SELECT id, nome, email
            FROM usuarios
            WHERE nome LIKE :nome /* o like é usado para encontrar uma informação especifica.*/
            ORDER BY id DESC";

            $result_usuarios =$conn->prepare($query_usuario);

            $result_usuarios->bindParam(':nome',$nome, PDO::PARAM_STR);

            $result_usuarios->execute();

    while ($row_usuario = $result_usuarios->fetch(PDO::FETCH_ASSOC)) {

        extract($row_usuario);

        echo "id : $id <br><br>";
        echo "nome : $nome <br><br>";
        echo "email : $email <br><br>";

        echo "<hr>";
    }
} 




   

    ?>


            
        
</body>

</html>


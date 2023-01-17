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
    <h2>Pesquisar datas</h2>

    <?php

    $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
   ?>

    <form method="POST" action="">

   
   
   
   <?php
    $data_inicio = "";
    if(isset($dados['data_inicio']))
    $data_inicio = $dados['data_inicio'];
?>
<label>Data de inicio</label>
        <input type="date" name="data_inicio" value="<?php echo $data_inicio; ?>"><br><br>


        <?php
    $data_final = "";
    if(isset($dados['data_final']))
    $data_final = $dados['data_final'];
?>

        <label>Data final</label>
        <input type="date" name="data_final" value="<?php echo $data_final; ?>"><br><br>

        <input type="submit" value="Pesquisar" name="pesqData"><br><br>



    </form>

    <?php

    if(!empty($dados['pesqData'])){

      

        $query_usuario ="SELECT id, nome, email, created FROM usuarios
                        WHERE created BETWEEN :data_inicio AND :data_final";

$result_usuario = $conn->prepare($query_usuario);

$result_usuario->bindParam(':data_inicio', $dados['data_inicio'], PDO::PARAM_STR);
        $result_usuario->bindParam(':data_final', $dados['data_final'], PDO::PARAM_STR);

$result_usuario->execute();


while($row_usuario = $result_usuario->fetch(PDO::FETCH_ASSOC)){
    
    extract($row_usuario);

    echo "id: $id<br>";
    echo "nome: $nome<br>";
    echo "email: $email<br>";
    echo "created: ".date('d/m/Y H:i:s', strtotime($created)) ."<br>";
   

    echo "<hr>";

}


    }





            
      



    ?>


            
        
</body>

</html>


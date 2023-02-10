<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
// inclusao de arquivo
    require './Sists_usuarios.php';
// instanciando a classe e criando um objeto
    $listarSituacao = new Sists_usuarios();
   //chamando o metodo listar
    $result_situacao = $listarSituacao->listar();

    foreach($result_situacao as $row_situacao){
        extract($row_situacao);

        echo "ID: $id <br>";
        echo "Nome: $nome <br>";
        echo "<hr>";


    }


     ?>
</body>
</html>
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
    require './Usuarios.php';
// instanciando a classe e criando um objeto
    $listarUsuarios = new Usuarios();
   //chamando o metodo listar
    $result_usuarios = $listarUsuarios->listar();

    foreach($result_usuarios as $row_usuario){
        extract($row_usuario);

        echo "ID: $id <br>";
        echo "Nome: $nome <br>";
        echo "Email: $email <br>";
        echo "<hr>";


    }


     ?>
</body>
</html>
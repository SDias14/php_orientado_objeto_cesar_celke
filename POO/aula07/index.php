<?php

session_start();


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div>

<a href="index.php" style= "text-decoration: none;">Listar</a><br>
<a href="create.php" style="text-decoration: none;">Cadastrar</a>

<h1>Lista de Usuários</h1>

</div>




    <?php

    if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
        echo "<hr><br/>";
    }



require './Conn.php';
require './User.php';

$listUsers = new User();

$resultUsers = $listUsers->list();

foreach ($resultUsers as $row_user) {
    extract($row_user);

    echo "ID: " . $id . "<br>";
    echo "Nome: " . $nome . "<br>";
    echo "Email: " . $email . "<br>";

    echo "<hr>";

}
?>
</body>
</html>
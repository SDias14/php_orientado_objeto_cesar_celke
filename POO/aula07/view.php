<?php

session_start();

ob_start();

// receber o id do usuário

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualizar</title>
</head>
<body>
<div>

<a href="index.php" style= "text-decoration: none;">Listar</a><br>
<a href="create.php" style="text-decoration: none;">Cadastrar</a>

<h1>Detalhes do Usuário</h1>

</div>




    <?php

    if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
        echo "<hr><br/>";
    }

   if(!empty($id)){
    require './Conn.php';
    require './User.php';

    $viewUser = new User();
    $viewUser->id = $id; // atribuindo o id do usuário
    $valueUser = $viewUser->view(); // chamando o método view
    extract($valueUser); // transformando o array em variáveis

    echo "ID: " . $id . "<br>";
    echo "Nome: " . $nome . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Criado em: " . date('d/m/Y H:i:s', strtotime($created)) . "<br>";
    
    if(!empty($modified)){
    echo "Modificado em: " . date('d/m/Y H:i:s', strtotime($modified)) . "<br>";
    }
    
   }else{
         $_SESSION['msg'] = "<p style='color:red;'>Necessário selecionar um usuário!</p>";
         header("Location: index.php");
   }





?>
</body>
</html>
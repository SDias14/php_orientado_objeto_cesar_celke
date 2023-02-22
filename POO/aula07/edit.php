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
    <title>Editar</title>
</head>
<body>
<div>

<a href="index.php" style= "text-decoration: none;">Listar</a><br>
<a href="create.php" style="text-decoration: none;">Cadastrar</a>

<h1>Editar Usuário</h1>

</div>




    <?php

    if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
        echo "<hr><br/>";
    }

    require './Conn.php';
    require './User.php';

    //receber os dados do formulario na mesma página
    $formData = filter_input_array(INPUT_POST, FILTER_DEFAULT);
    
    //verificar se o botão foi clicado
    if(!empty($formData['SendEditUser'])){
       
        $editUser = new User();
        $editUser->formData = $formData;
        $value = $editUser->edit();

        if($value){
            $_SESSION['msg'] = "<p style='color:green;'>Usuário editado com sucesso!</p>";
            header("Location: index.php");
        }else{
            $_SESSION['msg'] = "<p style='color:red;'>Erro: Usuário não foi editado com sucesso!</p>";
            header("Location: index.php");
        }
       
        
        
     
    }

   if(!empty($id)){
    

    $viewUser = new User();
    $viewUser->id = $id; // atribuindo o id do usuário
    $valueUser = $viewUser->view(); // chamando o método view
    extract($valueUser); // transformando o array em variáveis

    ?>

<form name = "EditUser" method="POST" action="">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        
        <label> Nome:</label>
        <input type="text" name="nome" value="<?php echo $nome; ?>"/><br><br>
        <label> Email:</label>
        <input type="email" name="email" value="<?php echo $email; ?>"/><br><br>

        <input type="submit" value="Editar" name="SendEditUser">

    </form>

    <?php
    

}else{
         $_SESSION['msg'] = "<p style='color:red;'>Necessário selecionar um usuário!</p>";
         header("Location: index.php");
   }





?>
</body>
</html>
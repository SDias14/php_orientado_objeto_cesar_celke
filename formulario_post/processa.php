<?php

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);

$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS);

echo "Nome: $nome <br>";

echo "E-mail: $email <br>";

echo "<br>";



// Verifica se o formulário foi enviado. Se sim, executa o código abaixo. Este padrao foi muito utilizado , agora é mais comum usar o filter_input

/*

if(isset ($_POST['nome']) && isset($_POST['email'])){

    

    $nome= $_POST['nome'];

    $email= $_POST['email'];

    echo "Nome: $nome <br>";

    echo "E-mail: $email <br>";

   

}
*/


//receber todos os campos de uma vez so e colocar em um array

$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

var_dump($dados);

echo "<br>";

echo "Nome: {$dados['nome']} <br>";

echo "E-mail: {$dados['email']} <br>";


?>
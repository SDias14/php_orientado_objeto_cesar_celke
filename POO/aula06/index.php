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

    require './Cliente.php';
    require './ClientePessoaFisica.php';
    require './ClientePessoaJuridica.php';

    $cliente1 = new Cliente(); // classe pai 

    $cliente1->logradouro = 'Rua 1';
    $cliente1->bairro = 'Bairro 1';

    $endereço = $cliente1->verEndereco();

    echo $endereço;
    echo "<hr>";

    $cliente2 = new ClientePessoaFisica(); // classe filha

    $cliente2->logradouro = 'Rua 2';
    $cliente2->bairro = 'Bairro 2';
    $cliente2->nome = 'João';
    $cliente2->cpf = 12394443300;

    $endereco = $cliente2->verInformacaoUsuario();

    echo $endereco;
    echo "<hr>";

    $cliente3 = new ClientePessoaJuridica(); // classe filha

    $cliente3->cnpj = 134435435435;
    $cliente3->nomeFantasia = 'Empresa 1';
    $cliente3->logradouro = 'Rua 3';
    $cliente3->bairro = 'Bairro 3';

    $endereco = $cliente3->verInformacaoEmpresa();

    echo $endereco;
    echo "<hr>";
 
    

    


     ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<title>Document</title>
</head>
<body>
<div class="container">
<div class="row">
<div class="col-12">
<h1 class="text-center">Campeonato MMA</h1>
</div>
</div>
</div>

<!--Section Formulario peso e altura-->

<div class="container">
<div class="row">
<div class="col-12">
<form action="index.php" method="post">
<div class="mb-3">
<label for="nome" class="form-label">Nome do lutador</label>
<input type="text" class="form-control" id="nome" name="nome" placeholder="Nome do lutador">

</div>

<div class="mb-3">
<label for="peso" class="form-label">Peso do lutador</label>
<input type="number" step="0.1" class="form-control" id="peso" name="peso" placeholder="Peso do lutador">
</div>

<div class="mb-3">
<label for="altura" class="form-label">Altura do lutador</label> 
<input type="number" step="0.01" class="form-control" id="altura" name="altura" placeholder="Altura do lutador">
</div>

<button type="submit" class="btn btn-primary">Enviar</button>

<hr>

</form>

<h2 class="text-center">
Categoria do Atleta : 

<br>
<br>

<?php

// Verifica se o formulário foi enviado. Se sim, executa o código abaixo


if(isset ($_POST['peso']) && isset ($_POST['altura'])){

//Recebendo os dados do formulário e armazenando nas variáveis

    $peso = $_POST['peso'];
    $altura = $_POST['altura'];
    $nome = $_POST['nome'];
    
// verifica se o peso é maior ou igual  que 50.0 e menor que 60.0 e a altura menor que 1.70.

    if(($peso >= 50.0 && $peso < 60.0) && ($altura < 1.70)){
        echo "O lutador $nome , com $peso kg e $altura m, está na categoria : Novato";

// verificando se o peso é maior ou igual a 60.0 e menor ou igual que 80.0 e a altura é maior ou igual que 1.70 e menor  que 1.90
        
    } else if(($peso >= 60.0 && $peso <= 80.0) && ($altura >= 1.70 && $altura <1.90)){
        echo "O lutador $nome , com $peso kg e $altura m, está na categoria : Profissional";
        
    } 
    
// verificar se o campo ta vazio
    
    else if(empty($peso) || empty($altura) || empty($nome)){
        echo "Preencha os campos peso e altura";

// verifica se não está em nenhuma categoria

    } else{
        echo "O lutador $nome , com $peso kg e $altura m, não está em nenhuma categoria ";
    }
    
    
}




?>

</h2>

</div>











<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>
</html>
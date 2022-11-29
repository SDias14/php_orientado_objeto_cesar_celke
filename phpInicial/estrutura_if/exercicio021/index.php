<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<title>Mercadinho</title>
</head>
<body>

<div class="container">
<div class="row">
<div class="col-12">



<form action="index.php" method="post">

<!--input radio para feminino ou masculino-->

<div class="mb-3">
<label for="sexo" class="form-label
">Sexo : </label>
</div>
<div class="form-check">
<input class="form-check-input" type="radio" name="sexo" id="feminino" value="feminino">
<label class="form-check-label" for="feminino">
Feminino
</label>
</div>
<div class="form-check">
<input class="form-check-input" type="radio" name="sexo" id="masculino" value="masculino">
<label class="form-check-label" for="masculino">
Masculino
</label>
</div>
</div>




<div class="mb-3">
                    <label for="idade" class="form-label">Digite a idade : </label>
                    <input type="number" class="form-control" id="idade" name="idade" placeholder="Digite sua idade : ">
 </div>





<button type="submit" class="btn btn-primary">Enviar</button>

<hr>

</form>

<h2 class="text-center">
Verificação de idade e sexo

<br>
<br>

<?php

// Verifica se o formulário foi enviado. Se sim, executa o código abaixo

if(isset ($_POST['idade'])){
$idade = $_POST['idade'];
$sexo = $_POST['sexo'];


// verificações 

if($sexo == "feminino" && $idade >= 18 && $idade <= 25){
    echo "ACEITA";
}else{
    echo "NÃO ACEITA";
} 

}





?>

</h2>

</div>
</div>














<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>
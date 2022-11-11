<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<title>Boletim Escolar</title>
</head>
<body>

<!--Header-->

<div class="container">
<div class="row">
<div class="col-12">
<h1 class="text-center">Boletim Escolar</h1>
</div>
</div>
</div>

<!--Section Formulario-->

<div class="container">
<div class="row">
<div class="col-12">
<form action="index.php" method="post">
<div class="mb-3">
<label for="nome" class="form-label">Nome do Aluno</label>
<input type="text" class="form-control" id="nome" name="nome" placeholder="Nome do Aluno">
</div>
<div class="mb-3">
<label for="nota1" class="form-label">Nota 1° Bimetre</label>
<input type="number"  step="0.1" class="form-control" id="nota1" name="nota1" placeholder="Nota 1">
</div>
<div class="mb-3">
<label for="nota2" 
class="form-label">Nota 2° Bimestre</label>
<input type="number"
step="0.1" 
class="form-control" id="nota2" name="nota2" placeholder="Nota 2">
</div>
<div class="mb-3">
<label for="nota3" class="form-label">Nota 3°Bimestre</label>
<input type="number"
step="0.1" 
class="form-control" id="nota3" name="nota3" placeholder="Nota 3">
</div>
<div class="mb-3">
<label for="nota4" class="form-label">Nota 4° Bimestre</label>
<input type="number"
step="0.1" 
class="form-control" id="nota4" name="nota4" placeholder="Nota 4">
</div>


<button type="submit" class="btn btn-primary">Enviar</button>
<hr>
</form>
</div>

</div>
</div>

<!--Section Resultado-->

<div class="container">
<div class="row">
<div class="col-12">
<h1 class="text-center">

Resultado <br><br>


<!--PHP-->  

<?php

if(isset ($_POST['nome']) && isset ($_POST['nota1']) && isset ($_POST['nota2']) && isset ($_POST['nota3']) && isset ($_POST['nota4'])){
    
    $nome = $_POST['nome'];
    $nota1 = $_POST['nota1'];
    $nota2 = $_POST['nota2'];
    $nota3 = $_POST['nota3'];
    $nota4 = $_POST['nota4'];
    
    $media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;
    
    if($media >= 8.4) {
        echo "O aluno $nome foi aprovado com média $media";
    } else {
        echo "O aluno $nome foi reprovado com média $media";
    }
    
}

?>

<!-- FIM PHP-->

</h1>
</div>
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>
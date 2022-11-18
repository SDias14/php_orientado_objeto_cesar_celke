<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<title>Empresa Alfa</title>
</head>
<body>

<div class="container">
<div class="row">
<div class="col-12">



<form action="index.php" method="post">

<!--input radio para feminino ou masculino-->

<div class="mb-3">
<label for="cargo" class="form-label
">Cargo :  </label>
</div>

<div class="form-check">
<input class="form-check-input" type="radio" name="cargo" id="tecnico" value="tecnico">
<label class="form-check-label" for="tecnico">
Técnico
</label>
</div>

<div class="form-check">
<input class="form-check-input" type="radio" name="cargo" id="analista" value="analista">
<label class="form-check-label" for="analista">
Analista
</label>
</div>

<div class="form-check">
<input class="form-check-input" type="radio" name="cargo" id="gerente" value="gerente">
<label class="form-check-label" for="gerente">
Gerente
</label>
</div>

<div class="form-check">
<input class="form-check-input" type="radio" name="cargo" id="faxineiro" value="faxineiro">
<label class="form-check-label" for="faxineiro">
Faxineiro
</label>
</div>



</div>


<!-- tabela de salarios de gerente analista e tecnicos-->

<table class="table table-striped">
<thead>
<tr>
<th scope="col">Cargo</th>
<th scope="col">Salário</th>
<th scope="col">Porcentagem de Aumento</th>
</tr>
</thead>
<tbody>
<tr>
<th scope="row">Técnico</th>
<td>R$ 1.000,00</td>
<td>30%</td>
</tr>
<tr>
<th scope="row">Analista</th>
<td>R$ 2.000,00</td>
<td>20%</td>
</tr>
<tr>
<th scope="row">Gerente</th>

<td>R$ 3.000,00</td>
<td>10%</td>
</tr>

<th scope="row">Faxineiro</th>

<td>R$ 900,00</td>
<td>35%</td>
</tr>


</tbody>
</table>





<!--botao para enviar os dados-->





<button type="submit" class="btn btn-primary">Enviar</button>

<hr>

</form>

<h2 class="text-center">
Verificação de cargo e salário para aumento de salário

<br>
<br>

<?php

//verifica se o botao foi clicado
if(isset($_POST['cargo'])){
//recebe o valor do input radio
$cargo = $_POST['cargo'];
$salTecnico = 1000;
$salAnalista = 2000;
$salGerente = 3000;
$salFaxineiro = 900;

//verifica o cargo e exibe o salario com aumento

if($cargo == 'tecnico'){
echo "O salário do técnico é de R$ $salTecnico,00";
echo "<br>";
echo "O salário do técnico com aumento de 30% é de R$ ".($salTecnico + ($salTecnico * 0.3)).",00";
} else if($cargo == 'analista'){
echo "O salário do analista é de R$ $salAnalista,00";
echo "<br>";
echo "O salário do analista com aumento de 20% é de R$ ".($salAnalista + ($salAnalista * 0.2)).",00";
} else if($cargo == 'gerente'){
echo "O salário do gerente é de R$ $salGerente,00";
echo "<br>";
echo "O salário do gerente com aumento de 10% é de R$ ".($salGerente + ($salGerente * 0.1)).",00";
} else {
echo "O salário do faxineiro é de R$ $salFaxineiro,00";
echo "<br>";
echo "O salário do faxineiro com aumento de 35% é de R$ ".($salFaxineiro + ($salFaxineiro * 0.35)).",00";
} 

}

?>

</h2>

</div>
</div>














<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>
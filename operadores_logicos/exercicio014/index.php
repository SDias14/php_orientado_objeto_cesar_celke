<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
 <title>Container - Porto de Santos</title>
</head>
<body id="background">
    
<h1 class="text-center">Porto de Santos</h1>


<div class="container text-center">

<h3>Digite o total de Containers</h3>

<form action="index.php" method="post">
    <input type="number" name="total" id="total" placeholder="Total de Containers">
    <input type="submit" value="Enviar" class="btn btn-primary">

</form>

<?php

if(isset($_POST['total'])){

    $total = $_POST['total'];

    echo "<h3>Quantidade de containers: $total</h3>";

}

echo "<h3>Verificação de 
</h3>";


    ?>

  



    
   

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>
</html>
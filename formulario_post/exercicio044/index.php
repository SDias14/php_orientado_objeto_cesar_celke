<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session</title>
</head>
<body>
    
<h2>Fazenda Olho d'agua</h2>


<form method="POST" action="proc.php">

<label>N. de Hectares : </label>
<input type="number" name="hectare" id="hectare" placeholder="Digite a quantidade de Hectares da fazenda" required><br><br>

<label>M³ gasto por Hectare </label>
<input type="number" name="cubico" id="cubico" placeholder="Digite a quantidade de agua em m³" required><br><br>

<label>Custo por m³ </label>
<input type="number" name="custo" id="custo" step="0,01" placeholder="Digite o custo por m³" required><br><br>


<input type="submit" value="Cadastrar" />





</form>
    
    
    <?php

 


     ?>
</body>
</html>
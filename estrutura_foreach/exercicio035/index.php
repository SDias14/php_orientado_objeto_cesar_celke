<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>For </title>
</head>
<body>
    <h2 class="text-center" >
        <?php

        $respostas= ['s','s','s','n','n','n','s','s','s','s','n','s','s','s','n', 's','s','s'];
        
        $sim = 0;
        $nao = 0;

        foreach ($respostas as $resposta) {
            if ($resposta === 's') {
                
                $sim++;
            } else {
                $nao++; 
            } 

        }
        echo "O número de pessoas que responderam sim é: $sim <br>";

        echo "O número de pessoas que responderam não é: $nao <br>";

       
        
         ?>
    </h2>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>
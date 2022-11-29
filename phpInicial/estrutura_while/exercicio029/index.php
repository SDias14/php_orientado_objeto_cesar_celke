<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Numeros</title>
</head>
<body>
    
<div class="container">
    <div class="row">
        <div class="col-12">
            
            
        
        <form action="index.php" method="post">
                <div class="mb-3">
                    <label for="numero1" class="form-label">Numero 1</label>
                    <input type="number" class="form-control" id="numero1" name="numero1" placeholder="Digite o Numero">
                </div>

                <div class="mb-3">
                    <label for="numero2" class="form-label">Numero 2 </label>
                    <input type="number" class="form-control" id="numero2" name="numero2" placeholder="Digite o Numero">
                </div>

                

                <button type="submit" class="btn btn-primary">Enviar</button>

                <hr>

            </form>

            <h2 class="text-center">
               Meios 

                <br>
                <br>

                <?php

                // Verifica se o formulário foi enviado. Se sim, executa o código abaixo

                if(isset ($_POST['numero1']) && isset ($_POST['numero2'])){

                    

                    $numero1 = $_POST['numero1'];
                    $numero2 = $_POST['numero2'];

                    $i = $numero1 + 1;

                    while($i < $numero2){

                        echo "$i <br>";

                        $i++;

                    }

                }

              

                

                
 ?>

           

        </div>
    </div>














<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>
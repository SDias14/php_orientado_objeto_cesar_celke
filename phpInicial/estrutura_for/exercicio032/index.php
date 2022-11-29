<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Numero</title>
</head>
<body>
    
<div class="container">
    <div class="row">
        <div class="col-12">
            
            
        
        <form action="index.php" method="post">
                <div class="mb-3">
                    <label for="numero" class="form-label">Numero </label>
                    <input type="number" class="form-control" id="numero" name="numero"  placeholder="Digite um Numero ">
                </div>

               
                

                <button type="submit" class="btn btn-primary">Enviar</button>

                <hr>

            </form>

            <h2 class="text-center">
              For - Output

                <br>
                <br>

                <?php

                // Verifica se o formulário foi enviado. Se sim, executa o código abaixo

                if (isset($_POST['numero'])) {

                    // Recebe os dados do formulário

                    $numero = $_POST['numero'];
                    $date = date('Y-m-d H:i:s');

                    // imprimir 50 numeros a partir do numero digitado

                    for ($i = $numero; $i <= $numero + 50; $i++) {

                        echo $i . " - Inserido em: " . $date . "<br>";

                    } // explicação 

                    // na primeira vez que o for é executado o valor de $i é igual ao valor digitado no formulario. No caso 50. Enquanto o valor de $i for menor ou igual a 50 + 50, ou seja 100, o for será executado. A cada execução o valor de $i é incrementado em 1. Ou seja, na primeira execução o valor de $i é 50, na segunda execução o valor de $i é 51, na terceira execução o valor de $i é 52, e assim por diante. Quando o valor de $i for maior que 100, o for será encerrado.

                    

    }
              

                

                
 ?>

           

        </div>
    </div>














<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>
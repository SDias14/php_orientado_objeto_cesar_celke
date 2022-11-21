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
                <div class="mb-3">
                    <label for="nota" class="form-label">Nota Aluno</label>
                    <input type="number" step="0.1" class="form-control" id="nota" name="nota" placeholder="Digite a nota do aluno: ">
                </div>

                

                <button type="submit" class="btn btn-primary">Enviar</button>

                <hr>

            </form>

            <h2 class="text-center">
               Verificação da nota

                <br>
                <br>

                <?php

                // Verifica se o formulário foi enviado. Se sim, executa o código abaixo

                if(isset ($_POST['nota'])){

                    

                    $nota = $_POST['nota'];
                  
                   

                // apresentando se são iguais ou diferentes e apresentando o maior e o menor

                if($nota >= 8.0 && $nota <= 10.0){
                
                    echo "A nota do aluno é: $nota e ele foi aprovado com conceito : A";

                }else if($nota >= 7.0 && $nota <8.0){
                    echo "A nota do aluno é: $nota e ele foi aprovado com conceito : B"; 

                } else if($nota >= 6.0 && $nota <7.0){
                    echo "A nota do aluno é: $nota e ele foi aprovado com conceito : C"; 

                } else if($nota >= 5.0 && $nota <6.0){
                    echo "A nota do aluno é: $nota e ele foi aprovado com conceito : D"; 

                } else if($nota >= 0.0 && $nota <5.0){
                    echo "A nota do aluno é: $nota e ele foi reprovado com conceito : E"; 

                } else{
                    echo "opção inválida"; 
                }

                }

                
 ?>

            </h2>

        </div>
    </div>














<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>
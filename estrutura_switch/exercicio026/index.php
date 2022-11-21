<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Cargos</title>
</head>
<body>
    
<div class="container">
    <div class="row">
        <div class="col-12">
            
            
        
        <form action="index.php" method="post">
                <div class="mb-3">
                    <label for="codigo" class="form-label">Folha de Pagamento</label>
                    <input type="number" class="form-control" id="codigo" name="codigo" placeholder="Digite o Codigo da profissao">
                </div>

                <div class="mb-3">
                    <label for="salario" class="form-label">Salario</label>
                    <input type="number" step="0.1" class="form-control" id="salario" name="salario" placeholder="Digite o Salario">
                </div>

                

                <button type="submit" class="btn btn-primary">Enviar</button>

                <hr>

            </form>

            <h2 class="text-center">
               Verificação do Status

                <br>
                <br>

                <?php

                // Verifica se o formulário foi enviado. Se sim, executa o código abaixo

                if(isset ($_POST['codigo'] ) && isset ($_POST['salario'] ) ) {

                    

                    $codigo = $_POST['codigo'];
                    $salario = $_POST['salario'];
                  
                   

                // apresentando se são iguais ou diferentes e apresentando o maior e o menor

                if($codigo == 1){
                // 50% do salario
                $salario = $salario * 1.5;
                echo "O salario do Escriturário é de: $salario com 50% de aumento";

                }else if($codigo == 2){
                // 35% do salario
                $salario = $salario * 1.35;
                echo "O salario do Secretário é de: $salario com 35% de aumento";

                } else if($codigo == 3){
                // 20% do salario
                $salario = $salario * 1.2;
                echo "O salario do Caixa é de: $salario com 20% de aumento";

               
                } else if($codigo == 4){
                // 10% do salario
                $salario = $salario * 1.1;
                echo "O salario do Gerente é de: $salario com 10% de aumento";

                } else if($codigo == 5){
                // 5% do salario
                $salario = $salario * 1.05;
                echo "O salario do Diretor é de: $salario com 5% de aumento";

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
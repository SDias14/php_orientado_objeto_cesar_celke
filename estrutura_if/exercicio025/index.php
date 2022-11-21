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
                    <label for="codigo" class="form-label">Status da Compra</label>
                    <input type="number" class="form-control" id="codigo" name="codigo" placeholder="Digite o Codigo para ver o Status ">
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

                if(isset ($_POST['codigo'])){

                    

                    $codigo = $_POST['codigo'];
                  
                   

                // apresentando se são iguais ou diferentes e apresentando o maior e o menor

                if($codigo == 1){
                
                    echo "Aguardando pagamento";

                }else if($codigo == 2){
                    echo "Pago"; 

                } else if($codigo == 3){
                    echo "Em transporte"; 

                } else if($codigo == 4){
                    echo "Entregue"; 

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
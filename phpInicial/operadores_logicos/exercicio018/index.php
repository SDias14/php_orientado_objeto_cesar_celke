<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Bolsa de estudos</title>
</head>
<body>


<!--Section Formulario nota do aluno e frequencia-->

<div class="container">
    <div class="row">
        <div class="col-12">
            
            <form action="index.php" method="post">
                <div class="mb-3">
                    <label for="nome" class="form-label">Nome do aluno</label>
                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome do aluno">
                </div>

                <div class="mb-3">
                    <label for="nota" class="form-label">Nota 1 do aluno</label>
                    <input type="number" step="0.1" class="form-control" id="nota" name="nota" placeholder="Nota do aluno">
                </div>

                <div class="mb-3">
                    <label for="nota2" class="form-label">Nota 2 do aluno</label>
                    <input type="number" step="0.1" class="form-control" id="nota2" name="nota2" placeholder="Nota do aluno">

                </div>

                <div class="mb-3">
                    <label for="nota3" class="form-label">Nota 3 do aluno</label>
                    <input type="number" step="0.1" class="form-control" id="nota3" name="nota3" placeholder="Nota do aluno">

                </div>

                

                <div class="mb-3">
                    <label for="frequencia" class="form-label">Frequencia do aluno</label> 
                    <input type="number" step="0.01" class="form-control" id="frequencia" name="frequencia" placeholder="Frequencia do aluno">
                </div>

                <button type="submit" class="btn btn-primary">Enviar</button>

                <hr>

            </form>


            <h2 class="text-center">
                Situação do aluno : 

                <br>
                <br>

                <?php

                // Verifica se o formulário foi enviado. Se sim, executa o código abaixo

                if(isset ($_POST['nota']) && isset ($_POST['nota2']) && isset ($_POST['nota3']) && isset ($_POST['frequencia'])){

                    //Recebendo os dados do formulário e armazenando nas variáveis

                    $nome = $_POST['nome'];
                    $nota = $_POST['nota'];
                    $nota2 = $_POST['nota2'];
                    $nota3 = $_POST['nota3'];
                    $frequencia = $_POST['frequencia'];

                    //Calculando a média do aluno

                    $media = ($nota + $nota2 + $nota3) / 3;

                    //Verificando se o aluno foi aprovado ou reprovado

                    if($media >= 8.5 && $frequencia >= 70){
                        echo "O aluno $nome foi aprovado com média $media e frequencia de $frequencia%";
                    }else{
                        echo "O aluno $nome foi reprovado com média $media e frequencia de $frequencia%";
                    }

                }

        

                ?>

            </h2>

        </div>
    </div>
</div>
    





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>
</html>
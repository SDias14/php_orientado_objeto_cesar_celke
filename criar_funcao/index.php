<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For </title>
</head>
<body>
    <?php
// variavel 
    $codigo = "cursophp";

    //criando a função

    function promocao($valor){
        echo "acessou a função<br>";
        echo "o valor é $valor<br>";

        if ($valor == "cursophp"){
        //    echo "O codigo é valido<br>";
        $msg = "O codigo é valido.";
    } else {
       // echo "O codigo não é valido<br>";
         $msg = "O codigo não é valido.";
    }
    return $msg;


    }

    echo "<hr>";

    $codigo_curso = "cursophp";

    $retorno_dados_funcao = promocao($codigo_curso);

    echo $retorno_dados_funcao;
    
    
    
    
    //chamando a função e passando o valor da variavel

   // promocao($codigo);
 

     ?>
</body>
</html>
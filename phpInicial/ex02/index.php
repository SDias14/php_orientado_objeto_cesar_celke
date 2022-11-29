<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salario funcionarios</title>
</head>
<body>

<p>
    Nome do funcionário : 
    <?php
        require_once 'funcionario.php';
        $funcionario = new Funcionario();
        $funcionario->nome = "João";
        echo $funcionario->nome;

    ?>
</p>

<p>
    Salário do funcionário : 
    <?php
        
        $funcionario = new Funcionario();
        $funcionario->salario = 1000;
        echo $funcionario->salario;

    ?>
</p>

<p>
    Cargo do funcionário : 
    <?php
        
        $funcionario = new Funcionario();
        $funcionario->cargo = "Programador";
        echo $funcionario->cargo;

    ?>
</p>
    

</body>
</html>
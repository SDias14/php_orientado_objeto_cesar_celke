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
    /*
// array de objetos
    $alunos = array(
        array(
            'nome' => 'João',
            'idade' => 20,
            'nota' => 7
        ),
        array(
            'nome' => 'Maria',
            'idade' => 18,
            'nota' => 9
        ),
        array(
            'nome' => 'José',
            'idade' => 19,
            'nota' => 8
        )

    );

    var_dump($alunos);

    */


    // array normal

    $alunos = ['A', 'B', 'C', 'D'];

    var_dump($alunos);

    echo '<hr>';

    foreach($alunos as $index => $aluno){
     echo "Aluno $index: $aluno <br>";
    }

  






        
        
        
        
        
        
        
        
        //diferenças entre o array com [] e o array com () é que o array com () é mais antigo e não é tão usado hoje em dia e o array com [] é mais moderno e é mais usado hoje em dia





     ?>
</body>
</html>
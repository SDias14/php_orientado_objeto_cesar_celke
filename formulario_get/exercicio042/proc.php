<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session</title>
</head>
<body>
    

    
    <?php

    $nota = filter_input(INPUT_GET, 'nota', FILTER_SANITIZE_SPECIAL_CHARS);

    if ($nota >= 0 && $nota <= 4.9) {
        echo "Conceito: E";
    } elseif ($nota >= 5 && $nota <= 5.9) {
        echo "Conceito: D";
    } elseif ($nota >= 6 && $nota <= 6.9) {
        echo "Conceito: C";
    } elseif ($nota >= 7 && $nota <= 7.9) {
        echo "Conceito: B";
    } elseif ($nota >= 8 && $nota <= 10) {
        echo "Conceito: A";
    } else {
        echo "Nota inválida";
    }

 


     ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    require './Cheque.php';
    require './ChequeComum.php';
    require './ChequeEspecial.php';

   
//////////////////////////////////////////////////////////////////////////////////////
   $cheque2 = new ChequeComum(10000, "Comum");  
    
   $msg = $cheque2->calcularJuros();

    echo $msg;

   






   

    


/////////////////////////////////////////////////////////////////////////////////////

   $cheque3 = new ChequeEspecial(10000, "Especial");

    $msg = $cheque3->calcularJuros();

    echo $msg;


   




     ?>
</body>
</html>
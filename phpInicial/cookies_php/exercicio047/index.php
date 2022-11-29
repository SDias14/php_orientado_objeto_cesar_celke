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

    setcookie("chaveUsuario", "3329", time() + (2*120));

    if (isset($_COOKIE["chaveUsuario"])) {
        echo $_COOKIE["chaveUsuario"];
    } else {
        echo " Não existe ";
    } 

    echo "<br>";





     ?>
</body>
</html>
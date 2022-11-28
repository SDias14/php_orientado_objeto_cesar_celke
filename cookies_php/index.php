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


setcookie("afiliado", "5323", time() + (7*24*3600));

if (isset($_COOKIE["afiliado"])) {
    echo "El valor de la cookie es: " . $_COOKIE["afiliado"];
} else {
    echo "La cookie no existe";
}

echo "<br>";

setcookie("logado", "cesar", time() + (7*3600));

if (isset($_COOKIE["logado"])) {
    echo "Usuario Logado: " . $_COOKIE["logado"];

} else {
    echo "La cookie no existe";
}




     ?>
</body>
</html>
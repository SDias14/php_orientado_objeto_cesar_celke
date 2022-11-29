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

    setcookie("TabletSamsung", "12", time() + (180*24*3600));

    if (isset($_COOKIE["TabletSamsung"])) {
        echo " Id existente no banco de dados :   " . $_COOKIE["TabletSamsung"];
    } else {
        echo " Id não existe no banco de dados ";
    } 

    echo "<br>";





     ?>
</body>
</html>
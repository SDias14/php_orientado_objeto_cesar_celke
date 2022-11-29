<?php


$titulo = filter_input(INPUT_POST, 'titulo', FILTER_SANITIZE_SPECIAL_CHARS);

$conteudo = filter_input(INPUT_POST, 'conteudo', FILTER_SANITIZE_SPECIAL_CHARS);

echo "Titulo: $titulo <br>";

echo "Conteudo: $conteudo <br>";


?>
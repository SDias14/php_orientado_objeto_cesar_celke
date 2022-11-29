<?php

$nome = filter_input(INPUT_GET, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);

$email = filter_input(INPUT_GET, 'email', FILTER_SANITIZE_SPECIAL_CHARS);

echo "Nome: " . $nome . "<br>";

echo "E-mail: " . $email . "<br>";





?>
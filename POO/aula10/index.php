<?php

require 'Disciplina.php';

$disciplina = new disciplina("João", 8, 9);

$resultDisciplina = $disciplina->situacao();

echo $resultDisciplina;

echo "<br>";

echo Disciplina::$media; // acessando atributo estático

echo "<br>";

echo Disciplina::situacaoAluno(8); // acessando método estático

?>
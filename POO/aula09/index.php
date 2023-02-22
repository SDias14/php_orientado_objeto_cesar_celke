<?php
require "./Icurso.php";
require "./CursoPosGraduacao.php";
require "./cursoGraduacao.php";


$posGrad = new CursoPosGraduacao("PHP", "João");

echo $posGrad->getNomeDaDisciplina();

echo "<br>";

echo $posGrad->getNomeDoProfessor();

echo "<br><hr><br>";

$grad = new cursoGraducao("Java", "Maria");

echo $grad->getNomeDaDisciplina();

echo "<br>";

echo $grad->getNomeDoProfessor();



?>
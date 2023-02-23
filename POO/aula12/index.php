<?php

require './Funcionario.php';

$funcionario1 = new Funcionario('João', 2200);

echo $funcionario1->verSalario();

//echo $funcionario1->converterSalario(); //vai dar erro pq o método é privado




?>
<?php

/*

link para documentação : 

https://github.com/php-fig/fig-standards/blob/master/proposed/phpdoc.md
https://github.com/php-fig/fig-standards/blob/master/proposed/phpdoc-tags.md

*/

require './Funcionario.php';
require './Bonus.php';

$funcionario1 = new Funcionario('João', 2200);

echo $funcionario1->verSalario();

//echo $funcionario1->converterSalario(); //vai dar erro pq o método é privado

$bonus1 = new Bonus('Maria', 3000);

echo $bonus1->verBonus();




?>
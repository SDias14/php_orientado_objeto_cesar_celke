<?php 

class Bonus extends Funcionario{


    public function verBonus(): string{

        return "O funcionário {$this->nome} tem o bônus de R$ {$this->calcularBonus()} <br>";
    }
}


?>
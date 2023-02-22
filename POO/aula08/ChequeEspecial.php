<?php

class ChequeEspecial extends Cheque{

    public function calcularJuros() : String{
        return "Valor do cheque {$this->tipo} com juros de 20%: ".($this->valor + ($this->valor * 0.2) )."<br>";

    }

}


?>
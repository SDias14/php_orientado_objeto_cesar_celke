<?php

class ChequeComum extends Cheque{
    public function calcularJuros() : String 
    {
        return "Valor do cheque {$this->tipo} com juros de 10%: ".($this->valor + ($this->valor * 0.1) )."<br>";
       
    }
}


?>
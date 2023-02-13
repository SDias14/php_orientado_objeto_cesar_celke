<?php

abstract class Cheque {
    public float $valor;
    public String $tipo;

    public function __construct(float $valor, String $tipo) {
        $this->valor = $valor;
        $this->tipo = $tipo;
    }

    abstract function calcularJuros(); // método abstrato. só as classes filhas podem implementar

   /* public function verValor() : String {
        return "Valor do cheque {$this->tipo} é : R$ {$this->valor} reais";
    }


    */

 
}

?>
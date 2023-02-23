<?php

class Funcionario{
    public string $nome;
    public float $salario;


    public function __construct(string $nome, float $salario){
        $this->nome = $nome;
        $this->salario = $salario;
    }

    public function verSalario():string{
        return "O funcionário {$this->nome} tem o salário de R$ {$this->converterSalario()} <br>";
    }

    public function converterSalario():string{
        return number_format($this->salario, 2, ',', '.');
       }
}




?>
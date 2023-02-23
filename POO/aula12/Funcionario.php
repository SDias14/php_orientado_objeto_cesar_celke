<?php

class Funcionario{
    public string $nome;
    public float $salario;
    private string $salarioConvertido;

    public function __construct(string $nome, float $salario){
        $this->nome = $nome;
        $this->salario = $salario;
    }

    public function verSalario() : string {

        return "O funcionário {$this->nome} tem o salário de R$ {$this->converterSalario()} <br>";
    }

    private function converterSalario() : string {
        
        $this->salarioConvertido = number_format($this->salario, 2, ',', '.');
        
        return $this->salarioConvertido;
    }

   

}




?>
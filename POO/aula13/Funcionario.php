<?php
/**
 * A classe funcionário calcula o salário do funcionário e o bônus
 * @author Samuel Dias <samueld2014@gmail.com>
 */
class Funcionario{
    /**
   * @var string $nome Nome do funcionário*/
    public string $nome;
    /**
     * @var float $salario Salário do funcionário*/
    public float $salario;
    /**
     * @var string $salarioConvertido Salário do funcionário convertido para R$*/
    private string $salarioConvertido;
    /**
     * @var float $bonus Bônus do funcionário*/
    protected float $bonus;

    /**
     * @param string $nome Nome do funcionário
     * @param float $salario Salário do funcionário
     * metodo construtor da classe
     */

    public function __construct(string $nome, float $salario){
        $this->nome = $nome;
        $this->salario = $salario;
    }
    /**
     * 
    * @return string Retorna o salário do funcionário
    */
    public function verSalario() : string {

        return "O funcionário {$this->nome} tem o salário de R$ {$this->converterSalario()} <br>";
    }
/**
 * @return string Retorna o salário do funcionário convertido para R$
 * @access private

    */

    private function converterSalario() : string {
        
        $this->salarioConvertido = number_format($this->salario, 2, ',', '.');
        
        return $this->salarioConvertido;
    }

    /**
     * @return float Retorna o bônus do funcionário
     * @access protected
     */

    protected function calcularBonus() : float {
        $this->bonus = $this->salario * 0.1;
        return $this->bonus;
    }

   

}




?>
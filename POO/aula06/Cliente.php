<?php

class Cliente{
    public string $logradouro;
    public string $bairro;
//tipagem : implementada a partir do php 7.4
    public function verEndereco() : String{
        return "Endereço: $this->logradouro, $this->bairro";
    }
    
        
    
}


?>
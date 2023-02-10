<?php

class ClientePessoaFisica extends Cliente 
{
    public String $nome;
    public int $cpf;

    public function verInformacaoUsuario() : String {
        return "O usuario {$this->nome} de CPF {$this->cpf} mora no {$this->logradouro}, no bairro {$this->bairro}";
    }


}


?>
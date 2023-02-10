<?php


class ClientePessoaJuridica extends Cliente {

    public int $cnpj;
    public String $nomeFantasia;

    public function verInformacaoEmpresa() : String 
    
    {
        return "Informações de empresa : <br/>
            <b>CNPJ</b>: {$this->cnpj} <br/>
            <b>Nome Fantasia</b>: {$this->nomeFantasia} <br/>
            <br/>
            <b>Logradouro</b>: {$this->logradouro} <br/>
            <b>Bairro</b>: {$this->bairro} <br/>";


    }
    
}




?>
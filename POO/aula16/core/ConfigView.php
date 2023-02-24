<?php

namespace Core; // vai definir o escopo da classe

class ConfigView{

    


    public function __construct(private string $nome, private array $dados){
       // novo formato do php 8
    }

    


    public function renderizar(){
        if(file_exists('App/' . $this->nome . '.php')){ // vai verificar se o arquivo existe em App/sts/View/listarArtigos.php
           include 'App/' . $this->nome . '.php'; // vai incluir o arquivo App/sts/View/listarArtigos.php
        }else{
            echo "2001 : Erro ao carregar a pagina";
        }   
    }

}

/* Antes do php 8
private string $nome;
private array $dados;


    public function __construct(string $nome, array $dados){
        $this->nome = $nome;
        $this->dados = $dados;

      //  var_dump($this->nome);
      //  var_dump($this->dados);
    }

    */

?>


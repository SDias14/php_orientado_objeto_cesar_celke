<?php

namespace Core; // namespace do core :  serve para definição de escopo para classes, interfaces, funções e constantes. atraves dele o composer vai saber onde esta a classe




class Routes{

    private string $url; // vai receber a url
    private string $urlController; // vai receber o controller
    private string $urlMetodo; // vai receber o metodo
    private array $urlArray; // vai receber os parametros



    public function __construct(){
 /**
  * 1 - Verificar se existe a url
  * 2 - Se existir, vai pegar a url e filtrar ela
    * 3 - vai setar a propriedade url 
    * 4 - vai verificar se a url é valida
    * 5 - vai dar um var_dump na url
 */
        if(!empty(filter_input(INPUT_GET, 'url', FILTER_DEFAULT)))
        
        {
            $this->url = filter_input(INPUT_GET, 'url', FILTER_DEFAULT); // vai pegar a url e filtrar ela
           $this->urlArray = explode('/', $this->url); // vai dividir a url em um array
/**
 * 1 - vai verificar se existe o primeiro indice do array
 * 2 - vai verificar se existe o segundo indice do array
 */
           if(isset($this->urlArray[0]) && (isset($this->urlArray[1]))){
            $this->urlController = $this->urlArray[0]; // vai pegar o primeiro indice do array
            $this->urlMetodo = $this->urlArray[1]; // vai pegar o segundo indice do array
           }else{
            $this->urlController = 'erro'; // se não existir a url vai acessar a home
            $this->urlMetodo = 'index'; // se não existir a url vai acessar o index
           }
            
        } else{
            $this->urlController = 'home'; // se não existir a url vai acessar a home
            $this->urlMetodo = 'index'; // se não existir a url vai acessar o index
        }

     //   echo "Controller: {$this->urlController} <br>";
     // echo "Metodo: {$this->urlMetodo} <br>";

    }

    public function loadPage(){
        $urlController = ucwords($this->urlController); // vai colocar a primeira letra em maiusculo
        //echo "Carregar a pagina"; // vai carregar a pagina
       $classLoading =  "\\Sts\Controller\\{$urlController}"; // vai carregar a classe
     $classPage = new $classLoading; // vai instanciar a classe

        $classPage->index(); // vai chamar o metodo index
    }

       
}


?>
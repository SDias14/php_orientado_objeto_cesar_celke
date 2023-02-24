<?php

namespace Sts\Controller;
use Core\ConfigView;

class Blog{

    private array $dados;

    public function index(){
        // echo "Carregar a pagina blog<br>";
        $listarArtigo = new \Sts\Model\StsListarBlogs(); // vai instanciar a classe e retornar a mensagem : Conectado com sucesso
        $this->dados['artigos'] = $listarArtigo->listar();// vai chamar o metodo listar
//var_dump($this->dados); // vai retornar um array com os dados do banco de dados
        

        $carregarView = new \Core\ConfigView("sts/View/blog/listarArtigos", $this->dados); // vai instanciar a classe e retornar a mensagem : Conectado com sucesso

        $carregarView->renderizar(); // vai chamar o metodo renderizar
    }
}



?>
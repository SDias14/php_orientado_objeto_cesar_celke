<?php

namespace Sts\Controller;

class Blog{

    public function index(){
        echo "Carregar a pagina blog<br>";
        $listarArtigo = new \Sts\Model\StsListarBlogs();
        $listarArtigo->listar();
    }
}



?>
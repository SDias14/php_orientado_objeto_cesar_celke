<?php

echo "View - listar artigos para o blog";

//var_dump($this->dados);

foreach ($this->dados['artigos'] as $artigo) {
    extract($artigo);
    echo "<h1>$titulo</h1>";
    echo "<p>$conteudo</p>";
}



?>
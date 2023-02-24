<?php

namespace Sts\Model;

class StsListarBlogs extends Conn{

private object $conn;   
    public function listar(): array
    {
     $this->conn = $this->connectDb();   
     //var_dump($this->conn); // vai retornar um objeto PDO

     $query_artigos ="SELECT id, titulo, conteudo 
      FROM artigos 
      ORDER BY id 
      DESC LIMIT 40";

        $result_artigos = $this->conn->prepare($query_artigos);

        $result_artigos->execute();

        $retorno = $result_artigos->fetchAll();

        //var_dump($retorno);

        return $retorno;

    }


}



?>
<?php
require './Conn.php';
class Sists_usuarios{
    public $connect; // atributo para receber a conexão
    public function listar(){
        $conn  = new Conn(); // instanciando a classe Conn
        $this->connect =  $conn->conectar(); // atribuindo a conexão a variável connect

        $query_situacao ="SELECT id, nome FROM sists_usuarios 
         ORDER BY id 
         DESC
         LIMIT 40";

         $result_situacao = $this->connect->prepare($query_situacao);

         $result_situacao->execute();
         return $result_situacao->fetchAll(PDO::FETCH_ASSOC);
        
    }
}


?>
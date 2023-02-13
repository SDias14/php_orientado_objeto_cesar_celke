<?php
require './Conn.php';
class Usuarios{
    public $connect; // atributo para receber a conexão
    public function listar(){
        $conn  = new Conn(); // instanciando a classe Conn
        $this->connect =  $conn->conectar(); // atribuindo a conexão a variável connect

        $query_usuarios ="SELECT id, nome, email FROM usuarios 
         ORDER BY id 
         DESC
         LIMIT 40";

         $result_usuarios = $this->connect->prepare($query_usuarios);

         $result_usuarios->execute();
         return $result_usuarios->fetchAll(PDO::FETCH_ASSOC);

         
        
    }
}


?>
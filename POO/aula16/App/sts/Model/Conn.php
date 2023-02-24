<?php
namespace Sts\Model;// vai definir o escopo da classe

use PDO; // vai importar a classe PDO

abstract class Conn{
    private string $db = "mysql";
    private string $host = "localhost";
    private string $user = "root";
    private string $pass = "";
    private string $dbname = "celke";
    private int $port = 3306;
    private object $conn; // este objeto é do tipo PDO, ou seja , é uma instancia da classe PDO

    public function connectDb(){
        try{
            $this->conn = new PDO("{$this->db}:host={$this->host};port={$this->port};dbname={$this->dbname}", $this->user, $this->pass);
          //  echo "Conectado com sucesso";//somente no desenvolvimento;
            return $this->conn;
        }catch(\PDOException $e){
           die("Erro ao conectar com o banco de dados");
        }
    }





}


?>
<?php

class Conn{
    public $host = "localhost";
    public $user = "root";
    public $pass = "";
    public $dbname = "celke";
    public $port = "3306";
    public $connect = null;

    public function conectar() {
        try {
            $this->connect = new PDO("mysql:host={$this->host};dbname={$this->dbname};port={$this->port}", $this->user, $this->pass);
          //  echo "Conectado com sucesso!";
            return $this->connect;
        } catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
            return false;
        }
    }




}  


?>



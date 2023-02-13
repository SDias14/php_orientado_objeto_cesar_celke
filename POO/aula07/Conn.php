<?php

abstract class Conn{

    public string $db = "mysql";
    public string $host = "localhost";
    public string $user = "root";
    public string $pass = "";
    public string $dbname = "celke";
    public int $port = 3306;
    public object $connect;

    public function connectDb() {
        try {
            $this->connect = new PDO($this->db . ":host=" . $this->host . ";dbname=" . $this->dbname . ";port=" . $this->port, $this->user, $this->pass);
         // echo "Conectado com sucesso!";
            return $this->connect;
        } catch (PDOException) {
            die("Erro ao conectar com o banco de dados: Por favor entre em contato com o administrador");
        }
    }




}  


?>



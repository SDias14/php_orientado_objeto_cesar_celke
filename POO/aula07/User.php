<?php


class User extends Conn 
{
   public object $conn;

   public array $formData;

   //metodo para listar um usuario 

   public function list():array{
         $this->conn = $this->connectDb();

         $query_users = "SELECT id, nome, email FROM usuarios
         ORDER BY id DESC
         LIMIT 40";

         $query_result = $this->conn->prepare($query_users);

         $query_result->execute();

        $retorno = $query_result->fetchAll(PDO::FETCH_ASSOC);

        return $retorno;



}

public function create(){
      $this->conn = $this->connectDb();

      $query_user = "INSERT INTO usuarios (nome, email , created) VALUES (:nome, :email, NOW())";

      $add_user = $this->conn->prepare($query_user);
      $add_user->bindParam(':nome', $this->formData['nome']);
      $add_user->bindParam(':email', $this->formData['email']);
      $add_user->execute();

      if($add_user->rowCount() > 0){
         return true;
      }else{
            return false;
            }





 
}

   

    

}



?>
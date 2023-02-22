<?php


class User extends Conn 
{
   public object $conn;

   public array $formData;
   public int $id;

   //metodo para listar um usuario 

   public function list():array{
         $this->conn = $this->connectDb();

         $queryUsers = "SELECT id, nome, email FROM usuarios
         ORDER BY id DESC
         LIMIT 40";

         $queryResult = $this->conn->prepare($queryUsers);

         $queryResult->execute();

        $retorno = $queryResult->fetchAll(PDO::FETCH_ASSOC);

        return $retorno;



}

public function create(){
      $this->conn = $this->connectDb();

      $queryUser = "INSERT INTO usuarios (nome, email , created) VALUES (:nome, :email, NOW())";

      $addUser = $this->conn->prepare($queryUser);
      $addUser->bindParam(':nome', $this->formData['nome']);
      $addUser->bindParam(':email', $this->formData['email']);
      $addUser->execute();

      if($addUser->rowCount() > 0){
         return true;
      } return false;
            
}

public function view(){
     $this->conn = $this->connectDb();

      $queryUser = "SELECT id, nome, email, created, modified 
      FROM usuarios 
      WHERE id = :id
      LIMIT 1";

      $resultUsuario = $this->conn->prepare($queryUser);

      $resultUsuario->bindParam(':id', $this->id);

      $resultUsuario->execute();

      $value = $resultUsuario->fetch();

      return $value;




   

    

}

public function edit(){
      //var_dump($this->formData);
      $this->conn = $this->connectDb();
      $query_user = "UPDATE usuarios SET nome = :nome, email = :email, modified = NOW() WHERE id = :id";

      $edit_user = $this->conn->prepare($query_user);

      $edit_user->bindParam(':nome', $this->formData['nome']);
      $edit_user->bindParam(':email', $this->formData['email']);
      $edit_user->bindParam(':id', $this->formData['id']);

      $edit_user->execute();

      if($edit_user->rowCount() > 0){
         return true;
      }
      return false;
}


public function delete(){
      $this->conn = $this->connectDb();

      $queryUser = "DELETE FROM usuarios WHERE id = :id LIMIT 1";

      $deleteUser = $this->conn->prepare($queryUser);

      $deleteUser->bindParam(':id', $this->id);

      $deleteUser->execute();

      if($deleteUser->rowCount() > 0){
         return true;
      }
            return false;
            
      }

}



?>
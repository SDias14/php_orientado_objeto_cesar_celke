<?php
//inicio da conexao com o banco de dados utilizando pdo
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "celke";
$port = 3306;

try{
    //Conexão com a porta
    //$conn = new PDO("mysql:host=$host;port=$port;dbname=" . $dbname, $user, $pass);
    
    //Conexão sem a porta
    $conn = new PDO("mysql:host=$host;dbname=" . $dbname, $user, $pass);
    //echo "Conexão com banco de dados realizado com sucesso.";
}catch(PDOException $err){
    echo "Erro: Conexão com banco de dados não realizado com sucesso. Erro gerado " . $err->getMessage();
}

//fim da conexao com o banco de dados utilizando pd

echo "<h2>listar situações</h2>";

echo"<hr><br>";


    // retornando apenas a coluna que quero do banco de dados. 

    $query_situacao = "SELECT id,nome,created FROM situacao";
    $result_situacao= $conn->prepare($query_situacao);
    $result_situacao->execute();

    while($row_situacao_q = $result_situacao->fetch(PDO::FETCH_ASSOC)){ 
        
        extract($row_situacao_q); // extrai as colunas de dentro do row_usuarios
        
        echo "ID: $id <br> ";
        echo "NOME : $nome <br>";
        echo "DATA DE CRIAÇÃO : $created <br>";
        
       
        echo "<hr><br>";
    
}


?>
    
</body>
</html>

<?php

require_once "conexao.php";

//require_once "../Entity/cliente.php";


class ClientesDao{
  
    public function inserir(Clientes $c){
        echo "ENTRU CLIENENES DAO";
        $conexao_ = new Conexao();

        try{
            $nome= $c->getNome();
            $email = $c->getEmail();
            $idade = $c->getIdade();
            $sql = "INSERT INTO `dbphp`.`clientes` (`nome`, `email`, `idade`) VALUES (:nome, :email, :idade)";
           
            $stmt = $conexao_->conn->prepare($sql);
            $stmt->bindValue(':nome',$nome);
            $stmt->bindValue(':idade',$idade);
            $stmt->bindValue(':email',$email);
           
           
           return   $stmt->execute();
           
        } catch (\Exception $e) {
          return false;
        }
       

    }

    public function alterar(Clientes $c){
        $conexao_ = new Conexao();
       
     
        try{
            $nome= $c->getNome();
            $email = $c->getEmail();
            $idade = $c->getIdade();
            $id = $c->getId();
           
            $sql = "UPDATE 'clientes' SET `nome` = :nome, `email` = :email, `idade` = :idade WHERE (`id` = :id)";
            $stmt = $conexao_->conn->prepare($sql);
            $stmt->bindValue(':nome',$nome);
            $stmt->bindValue(':idade',$idade);
            $stmt->bindValue(':email',$email);
            $stmt->bindValue(':id',$id);
        
           return $stmt->execute();

        }
        catch(Exception $e){
            return $e;
        }
    }

    public function excluir(Clientes $c){
        $conexao_ = new Conexao();
        
        try{
        $id = $c->getId();
        $sql = "DELETE FROM `clientes` WHERE (id = :id)";

        $stmt = $conexao_->conn->prepare($sql);

        $stmt->bindParam(':id',$id);
        echo "DELETADO COM SUCESSO";
       return $stmt->execute();
        }catch(Exception $e){
            return "ERROR";
        }
    }

    public function consultar(){
        $conexao_ = new Conexao();
       
        try {
            $sql = "SELECT * FROM dbphp.clientes";
          

           $result =  $conexao_->conn->query($sql);
         
            $vet_result = [];
           while ($row = $result->fetch()) {
            
            $r = [$row['nome'], $row['email'], $row['idade'], $row['id']];
           
                array_push($vet_result, $r);
            }
            return $vet_result;
        } catch (\Exception $th) {
            return $th;
        }
    }

    public function consultarporid($id){
        $conexao_ = new Conexao();
     

        try {
            $sql = "SELECT * FROM clientes Where id = :id";

            $conexao_->conn->exec($sql);
       

        } catch (\Exception $th) {
            return $th;
        }
    }
}

?>
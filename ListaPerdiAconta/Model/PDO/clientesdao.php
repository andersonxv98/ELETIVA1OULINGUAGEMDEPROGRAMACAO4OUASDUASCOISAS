
<?php

require_once "conexao.php";

//require_once "../Entity/cliente.php";


class ClientesDao{
  
    public function inserir(Clientes $c){
        echo "ENTRU CLIENENES DAO";
        $conexao_ = new Conexao();
        $conn = $conexao_->doConect();
        try{
            $nome= $c->getNome();
            $email = $c->getEmail();
            $idade = $c->getIdade();

            $sql = "INSERT INTO 'clientes' ('nome', 'email', 'idade') VALUES (':nome', ':email', ':idade')";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':nome',$nome);
            $stmt->bindParam(':idade',$idade);
            $stmt->bindParam(':email',$email);
           
            $stmt->execute();
           

            $conexao_->close();
            //$sth = $dbh->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        } catch (\Exception $e) {
          return false;
        }
       

    }

    public function alterar(Clientes $c){
        $conexao_ = new Conexao();
        $conn = $conexao_->doConect();
     
        try{
            $nome= $c->getNome();
            $email = $c->getEmail();
            $idade = $c->getIdade();
            $id = $c->getId();
        $sql = "UPDATE 'clientes' SET 'nome' = :nome, 'email' = :email, `idade` = :idade WHERE (`id` = ':id')";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':nome',$nome);
        $stmt->bindParam(':idade',$idade);
        $stmt->bindParam(':email',$email);
        $stmt->bindParam(':id',$id);
       
        $stmt->execute();
       

        $conexao_->close();
        }
        catch(Exception $e){
            return $e;
        }
    }

    public function excluir(Clientes $c){
        $conexao_ = new Conexao();
        $conn = $conexao_->doConect();

        ////////////////////////////////////////////////////////////////
        try{

            $id = $c->getId();
        $sql = "DELETE FROM 'clientes' WHERE ('id' = ':id')";

        $stmt = $conn->prepare($sql);

        $stmt->bindParam(':id',$id);
       
        $stmt->execute();
       

        $conexao_->close();

        }catch(Exception $e){
            return "ERROR";
        }
    }

    public function consultar(){
        $conexao_ = new Conexao();
        $conn = $conexao_->doConect();
        
        try {
            $sql = "SELECT * FROM clientes";
          
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $conn->prepare($sql);
            $stmt->execute();
          
            // set the resulting array to associative
            $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
            foreach(($stmt->fetchAll()) as $k=>$v) {
              echo $v;
            }


        } catch (\Exception $th) {
            return $th;
        }
    }

    public function consultarporid($id){
        $conexao_ = new Conexao();
        $conn = $conexao_->doConect();

        try {
            $sql = "SELECT * FROM clientes Where id = :id";

            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':id',$id);
            $stmt->execute();
       

            $conexao_->close();

        } catch (\Exception $th) {
            return $th;
        }
    }
}

?>
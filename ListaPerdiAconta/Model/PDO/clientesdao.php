
<?php

require_once "conexao.php";

//require_once "../Entity/cliente.php";


class ClientesDao{
  
    public function inserir(Clientes $c){
        echo "ENTRU CLIENENES DAO";
        $conexao_ = new Conexao();
        
        //$conexao_  =   $conexao_->ConectDb();

        try{
            $nome= $c->getNome();
            $email = $c->getEmail();
            $idade = $c->getIdade();

            $sql = "INSERT INTO `dbphp`.`clientes` (`nome`, `email`, `idade`) VALUES ('".$nome."', '".$email."', '".$idade."')";
           // $sql = "INSERT INTO `dbphp`.`clientes` ('nome', 'email', 'idade') VALUES (':nome', ':email', ':idade')";
            $stmt = $conexao_->conn->prepare($sql);
            //$stmt->bindParam(':nome',$nome);
            //$stmt->bindParam(':idade',$idade);
            //$stmt->bindParam(':email',$email);
            echo "</br>";
            echo "TESTES APOS BIND PARAM: ".$nome." ".$idade." ".$email;
            //echo var_dump($conexao_);
            $conexao_->conn->exec($sql);
           // $stmt->execute([$nome,$email,$idade]);
           
            $stmt->closeCursor();
           //$conexao_->close();
            //$sth = $dbh->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
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
            $sql = "UPDATE 'clientes' SET 'nome' = ".$nome.", 'email' = ".$email.", `idade` = ".$idade." WHERE (`id` = '".$id."')";
            //$sql = "UPDATE 'clientes' SET 'nome' = :nome, 'email' = :email, `idade` = :idade WHERE (`id` = ':id')";
            /*$stmt = $conexao_->conn->prepare($sql);
            $stmt->bindParam(':nome',$nome);
            $stmt->bindParam(':idade',$idade);
            $stmt->bindParam(':email',$email);
            $stmt->bindParam(':id',$id);
        
            $stmt->execute();*/
       
            $conexao_->conn->exec($sql);
            //$conexao_->close();
        }
        catch(Exception $e){
            return $e;
        }
    }

    public function excluir(Clientes $c){
        $conexao_ = new Conexao();
        
        ////////////////////////////////////////////////////////////////
        try{

            $id = $c->getId();
        $sql = "DELETE FROM 'clientes' WHERE ('id' = '".$id."')";

        /*$stmt = $conexao_->conn->prepare($sql);

        $stmt->bindParam(':id',$id);
       
        $stmt->execute();
       */
        $conexao_->conn->exec($sql);

       // $conexao_->close();

        }catch(Exception $e){
            return "ERROR";
        }
    }

    public function consultar(){
        $conexao_ = new Conexao();
       
        try {
            echo "Entrou na func consultar";
            $sql = "SELECT * FROM dbphp.clientes";
          

           $result =  $conexao_->conn->query($sql);
           //$teste = $result->fetchAll();
           echo "VAR DUMP DA FUNÇÂO CONSULTAR";
           echo "</br>";
           // var_dump($teste);
            $vet_result = [];
           while ($row = $result->fetch()) {
            //echo "entrou while";
            $r = [$row['nome'], $row['email'], $row['idade'], $row['id']];
            //$e ="  EMAIL: ".$row['email'];
            //$i ="   IDADE: ".$row['idade'];
           
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

            /*$stmt = $conexao_->conn->prepare($sql);
            $stmt->bindParam(':id',$id);
            $stmt->execute();*/

            $conexao_->conn->exec($sql);
       

          //  $conexao_->close();

        } catch (\Exception $th) {
            return $th;
        }
    }
}

?>
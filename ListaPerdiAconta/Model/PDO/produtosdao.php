
<?php

require_once "conexao.php";

//require_once "../Entity/cliente.php";


class ProdutosDao{
  
    public function inserir(Produtos $p){
        echo "ENTRU CLIENENES DAO";
        $ponexao_ = new Conexao();

        try{
            $nome= $p->getNome();
            $descricao = $p->getdescricao();
            $valor = $p->getvalor();
            $sql = "INSERT INTO `dbphp`.`Produtos` (`nome`, `descricao`, `valor`) VALUES (:nome, :descricao, :valor)";
           
            $stmt = $ponexao_->conn->prepare($sql);
            $stmt->bindValue(':nome',$nome);
            $stmt->bindValue(':valor',$valor);
            $stmt->bindValue(':descricao',$descricao);
           
           
           return   $stmt->execute();
           
        } catch (\Exception $e) {
          return false;
        }
       

    }

    public function alterar(Produtos $p){
        $ponexao_ = new Conexao();
       
     
        try{
            $nome= $p->getNome();
            $descricao = $p->getdescricao();
            $valor = $p->getvalor();
            $id = $p->getId();
           
            $sql = "UPDATE 'Produtos' SET `nome` = :nome, `descricao` = :descricao, `valor` = :valor WHERE (`id` = :id)";
            $stmt = $ponexao_->conn->prepare($sql);
            $stmt->bindValue(':nome',$nome);
            $stmt->bindValue(':valor',$valor);
            $stmt->bindValue(':descricao',$descricao);
            $stmt->bindValue(':id',$id);
        
           return $stmt->execute();

        }
        catch(Exception $e){
            return $e;
        }
    }

    public function excluir(Produtos $p){
        $ponexao_ = new Conexao();
        
        try{
        $id = $p->getId();
        $sql = "DELETE FROM `Produtos` WHERE (id = :id)";

        $stmt = $ponexao_->conn->prepare($sql);

        $stmt->bindParam(':id',$id);
        echo "DELETADO COM SUCESSO";
       return $stmt->execute();
        }catch(Exception $e){
            return "ERROR";
        }
    }

    public function consultar(){
        $ponexao_ = new Conexao();
       
        try {
            $sql = "SELECT * FROM dbphp.Produtos";
          

           $result =  $ponexao_->conn->query($sql);
         
            $vet_result = [];
           while ($row = $result->fetch()) {
            
            $r = [$row['nome'], $row['descricao'], $row['valor'], $row['id']];
           
                array_push($vet_result, $r);
            }
            return $vet_result;
        } catch (\Exception $th) {
            return $th;
        }
    }

    public function consultarporid($id){
        $ponexao_ = new Conexao();
     

        try {
            $sql = "SELECT * FROM Produtos Where id = :id";

            $ponexao_->conn->exec($sql);
       

        } catch (\Exception $th) {
            return $th;
        }
    }
}

?>
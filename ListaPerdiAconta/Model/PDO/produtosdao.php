
<?php

require_once "conexao.php";
require_once "../Entity/produto.php";

class ProdutosDao{

    public function inserir(Produtos $f){
        $conexao_ = new Conexao();
        $conn = $conexao_->doConect();
        try{
;            $nome= $f->getNome();
            $descricao = $f->getdescricao();
            $valor = $f->getvalor();
            $sql = "INSERT INTO 'produtos' ('nome', 'descricao', 'valor') VALUES (':nome', ':descricao', ':valor')";

            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':nome',$nome);
            $stmt->bindParam(':descricao',$descricao);
            $stmt->bindParam(':valor',$valor);
           
            $stmt->execute();
           

            $conexao_->close();


        } catch (\Exception $e) {
          return false;
        }
       

    }

    public function alterar(Produtos $f){
        $conexao_ = new Conexao();
        $conexao_->doConect();
        $conn = $conexao_->getConexao();
        try{
            $nome= $f->getNome();
            $descricao = $f->getdescricao();
            $valor = $f->getvalor();
            $id = $f->getId();
        $sql = "UPDATE 'produtos' SET 'nome' = :nome, 'descricao' = :descricao, `valor` = :valor WHERE (`id` = ':id')";

        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':nome',$nome);
        $stmt->bindParam(':descricao',$descricao);
        $stmt->bindParam(':valor',$valor);
        $stmt->bindParam(':id',$id);
       
        $stmt->execute();
       

        $conexao_->close();


        }
        catch(Exception $e){
            return $e;
        }
    }

    public function excluir(Produtos $f){
        $conexao_ = new Conexao();
        $conexao_->doConect();
        $conn = $conexao_->getConexao();

        try{
            
            $id = $f->getId();
        $sql = "DELETE FROM 'produtos' WHERE ('id' = ':id')";
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
        $conexao_->doConect();
        $conn = $conexao_->getConexao();
        try {
            $sql = "SELECT * FROM produtos";

            //$stmt->bindParam(':id',$id);
            $stmt = $conn->prepare($sql);
            $stmt->execute();
           
    
            $conexao_->close();

        } catch (\Exception $th) {
            return $th;
        }
    }

    public function consultarporid($id){
        $conexao_ = new Conexao();
        $conexao_->doConect();
        $conn = $conexao_->getConexao();
        try {
            
            //$id = $f->getId();
            $sql = "SELECT * FROM produtos Where id = :id";

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
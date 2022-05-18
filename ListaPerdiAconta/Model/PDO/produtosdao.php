
<?php
require_once "../Entity/produto.php";

class ProdutosDao{

    public function inserir(Produtos $f){
        try{
;            $nome= $f->getNome();
            $descricao = $f->getdescricao();
            $valor = $f->getvalor();
            $sql = "INSERT INTO 'clientes' ('nome', 'descricao', 'valor') VALUES (':nome', ':descricao', ':valor')";
        } catch (\Exception $e) {
          return false;
        }
       

    }

    public function alterar(Produtos $f){
        try{
            $nome= $f->getNome();
            $descricao = $f->getdescricao();
            $valor = $f->getvalor();
            $id = $f->getId();
        $sql = "UPDATE 'clientes' SET 'nome' = :nome, 'descricao' = :descricao, `valor` = :valor WHERE (`id` = ':id')";
        }
        catch(Exception $e){
            return $e;
        }
    }

    public function excluir(Produtos $f){

        try{
            
            $id = $f->getId();
        $sql = "DELETE FROM 'clientes' WHERE ('id' = ':id')";
        }catch(Exception $e){
            return "ERROR";
        }
    }

    public function consultar(){
        try {
            $sql = "SELECT * FROM clientes";
        } catch (\Exception $th) {
            return $th;
        }
    }

    public function consultarporid($id){
        try {
            
           
            $sql = "SELECT * FROM clientes Where id = :id";
        } catch (\Exception $th) {
            return $th;
        }
    }
}

?>
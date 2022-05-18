
<?php
require_once "../Entity/cliente.php";

class ClientesDao{

    public function inserir(Clientes $c){
        try{
            $nome= $c->getNome();
            $email = $c->getEmail();
            $idade = $c->getIdade();
            $sql = "INSERT INTO 'clientes' ('nome', 'email', 'idade') VALUES (':nome', ':email', ':idade')";
        } catch (\Exception $e) {
          return false;
        }
       

    }

    public function alterar(Clientes $c){
        try{
        $sql = "UPDATE 'clientes' SET 'nome' = :nome, 'email' = :email, `idade` = :idade WHERE (`id` = ':id')";
        }
        catch(Exception $e){
            return $e;
        }
    }

    public function excluir(Clientes $c){

        try{
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
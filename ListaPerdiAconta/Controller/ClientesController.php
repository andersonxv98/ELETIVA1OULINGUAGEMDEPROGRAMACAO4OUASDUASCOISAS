<?php
class ClientesController{
  
    public static function inserirCliente(){
        $email = $_POST['email'];
        $nome = $_POST['nome'];
        $idade = $_POST['idade'];

       $cliente = new Clientes(null, $nome, $email, $idade);
       
        $dao = new ClientesDAO();
        if ($dao->inserir($cliente)){
            return "Inserido com sucesso!";
        } else {
            return "Erro ao inserir";
        }
    }

    public static function deletarCliente(){
        $id = $_POST['id'];
        $cliente = new Clientes($id, null, null, null);
        $dao = new ClientesDAO();
        try{
            $dao->excluir($cliente);
            echo "EXLUIDO COM SUCESSO";
        }
        catch (\Exception $e)
        {
            echo "ERRP";
        }
    }

    public static function alterarCliente(){
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $idade = $_POST['idade'];
        $email = $_POST['email'];

        $cliente = new Clientes($id, $nome, $idade, $email);

        $dao = new ClientesDAO();

        try{
            $dao->alterar($cliente);
            echo "Alterado COM SUCESSO";
        }
        catch (\Exception $e)
        {
            echo "ERRP";
        }
    }
}
?>
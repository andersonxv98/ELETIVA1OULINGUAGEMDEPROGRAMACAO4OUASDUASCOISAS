<?php
class ProdutosController{
  
    public static function inserirproduto(){
        $valor = $_POST['valor'];
        $nome = $_POST['nome'];
        $descricao = $_POST['descricao'];

       $produto = new Produtos(null, $nome, $valor, $descricao);
       
        $dao = new ProdutosDAO();
        if ($dao->inserir($produto)){
            return "Inserido com sucesso!";
        } else {
            return "Erro ao inserir";
        }
    }

    public static function deletarproduto(){
        $id = $_POST['id'];
        $produto = new Produtos($id, null, null, null);
        $dao = new ProdutosDAO();
        try{
            $dao->excluir($produto);
            echo "EXLUIDO COM SUCESSO";
        }
        catch (\Exception $e)
        {
            echo "ERRP";
        }
    }

    public static function alterarproduto(){
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $descricao = $_POST['descricao'];
        $valor = $_POST['valor'];

        $produto = new Produtos($id, $nome, $descricao, $valor);

        $dao = new ProdutosDAO();

        try{
            $dao->alterar($produto);
            echo "Alterado COM SUCESSO";
        }
        catch (\Exception $e)
        {
            echo "ERRP";
        }
    }
}
?>
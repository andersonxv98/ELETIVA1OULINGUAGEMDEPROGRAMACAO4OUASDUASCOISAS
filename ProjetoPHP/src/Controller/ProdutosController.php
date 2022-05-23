<?php

namespace Aluno\ProjetoPhp\Controller;

use Aluno\ProjetoPhp\Model\DAO\ProdutosDAO;
use Aluno\ProjetoPhp\Model\Entity\Produtos;

class ProdutosController{

    public static function abrirFormularioInserir(){
        require_once "../src/View/inserir_produto.php";
    }

    public static function MostrarProdutos(){
        require_once "../View/mostrar_produtos.php";
    }

    public static function inserirproduto(){
        $nome  = $_POST['nome'];
        $descricao =  $_POST['descricao'];
        $valor = $_POST['valor'];
        $produto = new Produtos(null,$nome, $descricao, $valor);
                                                                            /*$produto->setNome();
                                                                            $produto->setdescricao();
                                                                            $produto->setvalor();*/
        $dao = new ProdutosDAO();
        if ($dao->inserir($produto)){
            return "Inserido com sucesso!";
        } else {
            return "Erro ao inserir";
        }
    }

    public static function alterarproduto(Produtos $produto){
     
        $dao = new ProdutosDAO();
        if ($dao->alterar($produto)){
            return "Inserido com sucesso!";
        } else {
            return "Erro ao inserir";
        }
    }

    public static function removerproduto($id){
      
        $dao = new ProdutosDAO();
        if ($dao->excluir($id)){
            return "Removido com success";
        } else {
            return "Erro ao Remover";
        }
    }
}
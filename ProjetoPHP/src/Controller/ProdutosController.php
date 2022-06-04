<?php

namespace Aluno\ProjetoPhp\Controller;

use Aluno\ProjetoPhp\Model\DAO\ProdutosDAO;
use Aluno\ProjetoPhp\Model\Entity\Produtos;

class ProdutosController{

    public static function abrirFormularioInserir(){
        require_once "../View/inserir_produto.php";
    }

    public static function MostrarProdutos(){
        $dao = new ProdutosDAO();
        $dao->consultar();
        require_once "../View/mostrar_produto.php";
    }

    public static function abrirFormularioAlterar($params){
        $dao = new ProdutosDAO();
        $dao->consultarPorId($params[1]);
        require_once "../View/alterar_produto.php";
    }

    public static function editarProduto($params){
        $dao = new ProdutosDAO();
        $dao->consultarPorId($params[1]);
        require_once "../View/alterar_produto.php";
    }

    public static function inserirProduto(){
         $dao = new ProdutosDAO();
        $produto = new Produtos();
        $produto->setdescricao($_POST['descricao']);
        $produto->setvalor($_POST['valor']);
        $produto->setNome($_POST['nome']);
       
        if ($dao->inserir($produto)){
            $resposta = true;

        } else {
            $resposta = false;
        }
        self::MostrarProdutos();
    }

    public static function editarProdutos(Produtos $params){
        $dao = new ProdutosDAO();
         $produto = new Produtos();
        $produto->setdescricao($_POST['descricao']);
        $produto->setvalor($_POST['valor']);
        $produto->setNome($_POST['nome']);
        $produto->setId($params[1]);
        if ($dao->alterar($produto)){
            $resposta = true;

        } else {
            $resposta = false;
        }
        self::MostrarProdutos();
    }

    public static function removerProdutos($id){
      
        $dao = new ProdutosDAO();
        if ($dao->excluir($id)){
            return "Removido com success";
        } else {
            return "Erro ao Remover";
        }
    }
}
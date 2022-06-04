<?php

namespace Aluno\ProjetoPhp\Controller;

use Aluno\ProjetoPhp\Model\DAO\ProdutosDAO;
use Aluno\ProjetoPhp\Model\Entity\Produtos;

class ProdutosController{

    public static function abrirFormularioInserir(){
        require_once "../src/View/inserir_produto.php";
    }

    public static function MostrarProdutos($resposta){
        $dao = new ProdutosDAO();
        $dao->consultar();
        $resposta;
        require_once "../src/View/mostrar_produto.php";

    }

    public static function abrirFormularioAlterar($params){
        $dao = new ProdutosDAO();
        $dao->consultarPorId($params[1]);
        require_once "../src/View/alterar_produto.php";
    }

    public static function editarProduto($params){
        $dao = new ProdutosDAO();
        $dao->consultarPorId($params[1]);
        require_once "../src/View/alterar_produto.php";
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
        self::MostrarProdutos($resposta);
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
        self::MostrarProdutos($resposta);
    }

    public static function excluirCliente($params){
        $dao = new ProdutosDAO();
        if ($dao->excluir($params[1])){
            $resposta = true;
        } else {
            $resposta = false;
        }
        ProdutosController::MostrarProdutos($resposta);
    }
}
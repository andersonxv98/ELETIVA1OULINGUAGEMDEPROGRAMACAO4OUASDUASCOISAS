<?php

namespace \ProjetoPhp\Controller;

use Aluno\ProjetoPhp\Model\DAO\ProdutosDAO; // rotas 
use Aluno\ProjetoPhp\Model\Entity\Produtos;

class ProdutosController{

    public static function abrirFormularioInserir(){
        require_once "../src/View/inserir_cliente.php";
    }

    public static function inserirCliente(){
        $cliente = new Produtos();
        $cliente->setvalor($_POST['valor']);
        $cliente->setdescricao($_POST['descricao']);
        $cliente->setNome($_POST['nome']);
        $dao = new ProdutosDAO();
        if ($dao->inserir($cliente)){
            return "Inserido com sucesso!";
        } else {
            return "Erro ao inserir";
        }
    }

}
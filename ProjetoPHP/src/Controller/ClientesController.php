<?php

namespace Aluno\ProjetoPhp\Controller;

use Aluno\ProjetoPhp\Model\DAO\ClientesDAO;
use Aluno\ProjetoPhp\Model\Entity\Clientes;

class ClientesController{

    public static function abrirFormularioInserir(){
        require_once "../View/inserir_cliente.php";
    }

    public static function MostrarClientes(){
        $arra = [1, 2, 3];
        var_dump($arra);
        require_once "../View/mostrar_cliente.php";
    }

    public static function inserirCliente(){
        $cliente = new Clientes();
        $cliente->setEmail($_POST['email']);
        $cliente->setIdade($_POST['idade']);
        $cliente->setNome($_POST['nome']);
        $dao = new ClientesDAO();
        if ($dao->inserir($cliente)){
            return "Inserido com sucesso!";
        } else {
            return "Erro ao inserir";
        }
    }

    public static function alterarCliente(Clientes $cliente){
     
        $dao = new ClientesDAO();
        if ($dao->alterar($cliente)){
            return "Inserido com sucesso!";
        } else {
            return "Erro ao inserir";
        }
    }

    public static function removerCliente($id){
      
        $dao = new ClientesDAO();
        if ($dao->excluir($id)){
            return "Removido com success";
        } else {
            return "Erro ao Remover";
        }
    }

}
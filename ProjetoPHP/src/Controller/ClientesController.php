<?php

namespace Aluno\ProjetoPhp\Controller;

use Aluno\ProjetoPhp\Model\DAO\ClientesDAO;
use Aluno\ProjetoPhp\Model\Entity\Clientes;

class ClientesController
{
   

    public static function abrirFormularioInserir(){
        require_once "../View/inserir_cliente.php";
    }

    public static function MostrarClientes(){
        $dao = new ClientesDAO();
        $dao->consultar();
        require_once "../View/mostrar_cliente.php";
    }

    public static function abrirFormularioAlterar($params){
        $dao = new ClientesDAO();
        $dao->consultarPorId($params[1]);
        require_once "../View/alterar_cliente.php";
    }

    public static function editarCliente($params){
        $dao = new ClientesDAO();
        $dao->consultarPorId($params[1]);
        require_once "../View/alterar_cliente.php";
    }

    public static function inserirCliente(){
         $dao = new ClientesDAO();
        $cliente = new Clientes();
        $cliente->setEmail($_POST['email']);
        $cliente->setIdade($_POST['idade']);
        $cliente->setNome($_POST['nome']);
       
        if ($dao->inserir($cliente)){
            $resposta = true;

        } else {
            $resposta = false;
        }
        self::MostrarClientes();
    }

    public static function editarClientes(Clientes $params){
        $dao = new ClientesDAO();
         $cliente = new Clientes();
        $cliente->setEmail($_POST['email']);
        $cliente->setIdade($_POST['idade']);
        $cliente->setNome($_POST['nome']);
        $cliente->setId($params[1]);
        if ($dao->alterar($cliente)){
            $resposta = true;

        } else {
            $resposta = false;
        }
        self::MostrarClientes();
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
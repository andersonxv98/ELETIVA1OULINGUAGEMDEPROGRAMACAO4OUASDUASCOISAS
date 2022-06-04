<?php

namespace Aluno\ProjetoPhp\Controller;

use Aluno\ProjetoPhp\Model\DAO\ClientesDAO;
use Aluno\ProjetoPhp\Model\Entity\Clientes;

class ClientesController
{
   

    public static function abrirFormularioInserir(){
        require_once "../src/View/inserir_cliente.php";
    }

    public static function MostrarClientes($resposta){
        $dao = new ClientesDAO();
        $dao->consultar();
        $resposta;
        require_once "../src/View/mostrar_cliente.php";
    }

    public static function abrirFormularioAlterar($params){
        $dao = new ClientesDAO();
        $dao->consultarPorId($params[1]);
        require_once "../src/View/alterar_cliente.php";
    }

    public static function editarCliente($params){
        $dao = new ClientesDAO();
        $dao->consultarPorId($params[1]);
        require_once "../src/View/alterar_cliente.php";
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
        self::MostrarClientes($resposta);
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
        self::MostrarClientes($resposta);
    }

    public static function excluirCliente($params){
        $dao = new ClientesDAO();
        if ($dao->excluir($params[1])){
            $resposta = true;
        } else {
            $resposta = false;
        }
        ClientesController::MostrarClientes($resposta);
    }
    
}
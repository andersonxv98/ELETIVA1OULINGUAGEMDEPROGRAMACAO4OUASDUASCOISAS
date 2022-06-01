<?php

namespace Aluno\ProjetoPhp\Controller;

use Aluno\ProjetoPhp\Model\DAO\ClientesDAO;
use Aluno\ProjetoPhp\Model\Entity\Clientes;

class ClientesController
{
    private static $dao = new ClientesDAO();

    public static function abrirFormularioInserir(){
        require_once "../View/inserir_cliente.php";
    }

    public static function MostrarClientes(){
        $resposta  = self::$dao->consultar();
        require_once "../View/mostrar_cliente.php";
    }

    public static function abrirFormularioAlterar($params){
        $resultado = self::$dao->consultarPorId($params[1]);
        require_once "../View/alterar_cliente.php";
    }

    public static function editarCliente($params){
        $resultado = self::$dao->consultarPorId($params[1]);
        require_once "../View/alterar_cliente.php";
    }

    public static function inserirCliente(){
        $cliente = new Clientes();
        $cliente->setEmail($_POST['email']);
        $cliente->setIdade($_POST['idade']);
        $cliente->setNome($_POST['nome']);
       
        if (self::$dao->inserir($cliente)){
            $resposta = true;

        } else {
            $resposta = false;
        }
        self::MostrarClientes();
    }

    public static function editarClientes(Clientes $params){
     
         $cliente = new Clientes();
        $cliente->setEmail($_POST['email']);
        $cliente->setIdade($_POST['idade']);
        $cliente->setNome($_POST['nome']);
        $cliente->setId($params[1]);
        if (self::$dao->alterar($cliente)){
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
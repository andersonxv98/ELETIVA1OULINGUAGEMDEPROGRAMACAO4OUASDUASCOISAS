<?php

namespace \ProjetoPhp\Model\DAO;

use \ProjetoPhp\Model\Entity\Produtos;//ja tentei mudar a rota e da ruim

class ProdutosDAO{

    public function inserir(Produtos $p){
        try{
            $sql = "INSERT INTO `produtos`(`nome`, `descricao`, `valor`) VALUES (:nome, :descricao, :valor)";
            $p = Conexao::conectar()->prepare($sql);
            $p->bindValue(":nome", $p->getNome());
            $p->bindValue(":descricao", $p->getdescricao());
            $p->bindValue(":valor", $p->getvalor());
            return $p->execute();
        } catch(\Exception $e){
            return false;
        }
    }

    public function alterar(Produtos $p){
        try{
            $sql = "UPDATE `produtos` SET `nome`=:nome,`descricao`=:descricao,`valor`=:valor WHERE id = :id";
            $p = Conexao::conectar()->prepare($sql);
            $p->bindValue(":nome", $p->getNome());
            $p->bindValue(":descricao", $p->getdescricao());
            $p->bindValue(":valor", $p->getvalor());
            $p->bindValue(":id", $p->getId());
            return $p->execute();
        } catch(\Exception $e){
            return false;
        }
    }

    public function excluir($id){
        try{
            $sql = "DELETE FROM `produtos` WHERE id = :id";
            $p = Conexao::conectar()->prepare($sql);
            $p->bindValue(":id", $id);
            return $p->execute();
        } catch(\Exception $e){
            return false;
        }
    }

    public function consultar(){
        try{
            $sql = "SELECT * FROM produtos";
            return Conexao::conectar()->query($sql);
        } catch(\Exception $e){
            return false;
        }
    }

    public function consultarPorId($id){
        try{
            $sql = "SELECT * FROM produtos WHERE id = :id";
            $p = Conexao::conectar()->prepare($sql);
            $p->bindValue(":id", $id);
            return $p->execute();
        } catch(\Exception $e){
            return false;
        }
    }

}
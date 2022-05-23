<?php

namespace Aluno\ProjetoPhp\Model\DAO;

use Aluno\ProjetoPhp\Model\Entity\Produtos;

class ProdutosDAO{

    public function inserir(Produtos $p){
        try{
            $sql = "INSERT INTO `produtos`(`nome`, `descricao`, `valor`) VALUES (:nome, :descricao, :valor)";
            $stmt = Conexao::conectar()->prepare($sql);
            $stmt->bindValue(":nome", $p->getNome());
            $stmt->bindValue(":descricao", $p->getdescricao());
            $stmt->bindValue(":valor", $p->getvalor());
            return $stmt->execute();
        } catch(\Exception $e){
            return false;
        }
    }

    public function alterar(Produtos $p){
        try{
            $sql = "UPDATE `produtos` SET `nome`=:nome,`descricao`=:descricao,`valor`=:valor WHERE id = :id";
            $stmt = Conexao::conectar()->prepare($sql);
            $stmt->bindValue(":nome", $p->getNome());
            $stmt->bindValue(":descricao", $p->getdescricao());
            $stmt->bindValue(":valor", $p->getvalor());
            $stmt->bindValue(":id", $p->getId());
            return $stmt->execute();
        } catch(\Exception $e){
            return false;
        }
    }

    public function excluir($id){
        try{
            $sql = "DELETE FROM `produtos` WHERE id = :id";
            $stmt = Conexao::conectar()->prepare($sql);
            $stmt->bindValue(":id", $id);
            return $stmt->execute();
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
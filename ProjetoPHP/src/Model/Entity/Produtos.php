<?php

namespace Aluno\ProjetoPhp\Model\Entity;

class   Produtos{
    private $id;
    private $nome;
    private $descricao;
    private $valor;

    public function setId($id){
        $this->id = $id;
    }
    public function setvalor($valor){
        $this->valor = $valor;
    }
    public function setdescricao($descricao){
        $this->descricao = $descricao;
    }
    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getId(){
        return $this->id;
    }

    public function getvalor(){
       return $this->valor ;
    }
    public function getdescricao(){
       return $this->descricao;
    }
    
    public function getNome(){
        return $this->nome ;
    }

   

}

?>
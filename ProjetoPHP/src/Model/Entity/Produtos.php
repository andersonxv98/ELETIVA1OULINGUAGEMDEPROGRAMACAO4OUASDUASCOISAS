<?php

namespace Aluno\ProjetoPhp\Model\Entity;

class   Produtos{
    private $id;
    private $nome;
    private $descricao;
    private $valor;

    private function setId($id){
        $this->id = $id;
    }
    private function setvalor($valor){
        $this->valor = $valor;
    }
    private function setdescricao($descricao){
        $this->descricao = $descricao;
    }
    private function setNome($nome){
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

    public function __construct($id, $nome, $descricao, $valor){
        $this->setId($id);
        $this->setNome($nome);
        $this->setdescricao($descricao);
        $this->setvalor($valor);
    }

}

?>
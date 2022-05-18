<?php

class   Clientes{
    private $id;
    private $nome;
    private $email;
    private $idade;

    private function setId($id){
        $this->id = $id;
    }
    private function setIdade($idade){
        $this->idade = $idade;
    }
    private function setEmail($email){
        $this->email = $email;
    }
    private function setNome($nome){
        $this->nome = $nome;
    }

    public function getId(){
        return $this->id;
    }

    public function getIdade(){
       return $this->idade ;
    }
    public function getEmail(){
       return $this->email;
    }
    
    public function getNome(){
        return $this->nome ;
    }

    public function __construct($id, $nome, $email, $idade){
        $this->setId($id);
        $this->setNome($nome);
        $this->setEmail($email);
        $this->setIdade($idade);
    }

}

?>
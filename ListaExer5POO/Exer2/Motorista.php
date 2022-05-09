<?php 
require_once "Exer2.php";
class Motorista extends Funcionario{
        private $n_carteira;
    function __construct($nome, $salarioBase, $codigo, $n_carteira){
        $this->setNome($nome);
        $this->setSalarioBase($salarioBase);
        $this->setCodigo($codigo);
        $this->setNCarteira($n_carteira);
    }

    private function setNCarteira($n_carteira){
        $this->$n_carteira = $n_carteira;
    }

    public function getNCarteira(){
        return $this->n_carteira;
    }
}

?>
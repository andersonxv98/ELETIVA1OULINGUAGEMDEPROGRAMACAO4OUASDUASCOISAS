<?php
include_once "Celular.php";
class Pospago extends Celular{

    public function __construct($custominbase, $operadora, $ddd, $telefone){
        $this->setCustominbase($custominbase);
        $this->setOperadora($operadora);
        $this->setDDD($ddd);
        $this->setTelefone($telefone);
    }

    public function CalculaCusto($tempo_ligacao){
        $custo= ($this->getCustominbase() + (- ($this->getCustominbase() * 0.1)));
        return  $custo;
    }
}

?>

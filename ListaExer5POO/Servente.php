<?php 

class Servente extends Funcionario{
    private $insalubridade;
    
    function __construct($nome, $salarioBase, $codigo, $insalubridade)
    {   $insalubridade = 0.05;
        $this->setNome($nome);
        $this->setSalarioBase($salarioBase);
        $this->setCodigo($codigo);
        $this->insalubridade = $insalubridade;

    }

}
?>
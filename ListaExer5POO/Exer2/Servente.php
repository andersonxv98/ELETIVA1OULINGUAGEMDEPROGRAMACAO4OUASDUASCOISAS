<?php 
require_once "Exer2.php";
class Servente extends Funcionario{
    //protected $insalubridade;
    protected $liquido;
    function __construct($nome, $salarioBase, $codigo)
    { 
        $this->setNome($nome);
        $this->setSalarioBase($salarioBase);
        $this->setCodigo($codigo);
        $this->CalculaInsalubridade();

    }
    protected function CalculaInsalubridade(){
        $insalubridade = 0.05;
        $liquido =$this->getSalarioLiquido();
        $this->setSalarioLiquidoServente($liquido, $insalubridade);
        
    }

    protected function setSalarioLiquidoServente($liquido, $insalubridade){
        $salario_servente  = $liquido + ($liquido * $insalubridade);
            $this->liquido =$salario_servente;
    }

    public function getSalarioLiquidoServete(){
        return $this->liquido;
    }
}
?>
<?php 

abstract class Funcionario{
    protected $nome;
    protected $codigo;
    protected $salarioBase;

    function setNome($nome){
        $this->nome  = $nome;}
    function setCodigo($codigo){
        $this->codigo = $codigo;}
    function setSalarioBase($salarioBase){
        $this->salarioBase = $salarioBase;
    
    }

    public function getNome(){
        return $this->nome;
    }

    public function getCodigo(){
        return $this->codigo;
    }

    public function getSalarioBase(){
        return $this->salarioBase;
    }

    public function getSalarioLiquido(){
        $inss  = $this->salarioBase* 0.1;
        $ir =  0.0;
        if ($this->salarioBase > 2000){
            $ir  = (($this->salarioBase-2000)*0.12);
        } 
        $sal_liquido =  $this->salarioBase - $inss - $ir;
        return $sal_liquido;
    }

}

?>
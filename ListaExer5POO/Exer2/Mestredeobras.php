<?php
require_once "Servente.php";
class Mestredeobras extends Servente{
    private   $array_funcionario = array();
    private $valorcorte = 10;
    private $salario_mestre;
    function __construct($nome, $salarioBase, $codigo){
        $this->setNome($nome);
        $this->setSalarioBase($salarioBase);
        $this->setCodigo($codigo);
        $this->CalculaInsalubridade();
        $this->salario_mestre = $this->getSalarioLiquidoServete();
        echo "ECHO SALARIO MESTRE DENTRO DA CLASSA MESTRE: ".$this->salario_mestre;
    }
    
    public function setFuncionarioOnMestre(Servente $obj_f){
        //$this->(array_funcionario)[] = $obj_f;
        $a = $this->array_funcionario;
        array_push($a, $obj_f);
        $contador = count($a);
        echo "contador Mestreobras: ".$contador;
       if ($contador>=$this->valorcorte){
        $adicional = $this->valorcorte / 10;
        $this->setSalarioMestre($adicional);
        $adicional += 10;
       }
       
    }

    

    private function setSalarioMestre($adicional){
        $salario_mestre = ($this->getSalarioLiquidoServete()  * ($this->getSalarioLiquidoServete() *$adicional)); 
        $this->salario_mestre = $salario_mestre;
    }

    public function getSalarioMestre(){
        return $this->salario_mestre;
    }

    public function getListFuncionarios(){
        return ($this->array_funcionarios);
    }
}
?>

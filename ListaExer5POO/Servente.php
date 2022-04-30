<?php 
require_once("Exer2.php");
class Servente extends Funcionario{
    private $insalubridade = 0.05;
   
public function __construct($nome, $codigo, $salarioBase){
    self::setNome($nome);
    self::setCodigo($codigo);
    self::setSalarioBase($salarioBase);
}
      

}
?>
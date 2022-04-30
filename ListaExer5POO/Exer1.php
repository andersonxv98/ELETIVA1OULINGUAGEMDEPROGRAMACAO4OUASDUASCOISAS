<?php

class Ponto {
    static $contador;
    private  $x;
    private  $y;

public function __construct($x, $y) {
    $this->y = $y;
    $this->x = $x;
    $this->set_contador();
  }

 public function get_x() {
    return $this->x;
  }

  public function get_y() {
    return $this->y;
  }

  public static function get_contador(){
    
    return self::$contador;
  }

  
  private static function set_contador(){
    
    self::$contador++;
  }


  public function distanciaPontoQlqr(Ponto $P){
   
    $parte1 = pow(($P->get_x() - $this->x), 2);
    $parte2 = pow(($P->get_y() - $this->y), 2); 
    $distancia  = sqrt( $parte1  + $parte2 );
    return $distancia;



  }
  function  distanciaDePontos($x2, $y2){

    $P2 =new Ponto($x2, $y2);  
    

    $distancia = $this->distanciaPontoQlqr($P2);
    return $distancia;
  }


  public function Distancia3($x1, $x2, $y1, $y2){
    $this->x = ($x1);
    $this->y = ($y1);

    $distancia = $this->distanciaDePontos($x2, $y2);
    return $distancia;

  }
}







?>
<?php

class Ponto {
    static $contador;
    private  $x;
    private  $y;

public function __construct($x, $y) {
    $this->y = $y;
    $this->x = $x;
    self::$contador++;
  }

 public function get_x() {
    return $this->x;
  }

  public function get_y() {
    return $this->y;
  }

  public function get_contador(){
    
    return self::$contador;
  }

  public function distanciaPontoQlqr($x2, $y2){
   
    $parte1 = pow(($x2 - $this->x), 2);
    $parte2 = pow(($y2 - $this->y), 2); 
    $distancia  = sqrt( $parte1  + $parte2 );
    return $distancia;

  }
}

function  distanciaDePontos(Ponto $P1, Ponto $P2){

    $x2 = $P2->get_x();
    $y2  = $P2->get_y();

    $distancia = $P1->distanciaPontoQlqr($x2, $y2);
    return $distancia;

}

?>
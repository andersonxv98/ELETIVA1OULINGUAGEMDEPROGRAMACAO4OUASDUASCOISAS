<?php

class Revisao
{
    private int $X;
    private int $Y;
    public static  int $cont;
    /**
     * @param int $X
     * @param int $Y
     */


    /**
     * @return int
     */
    public function getY()
    {
        return $this->Y;
    }

    /**
     * @param int $Y
     */
    public function setY($Y)
    {
        $this->Y = $Y;
    }

    /**
     * @return int
     */
    public function getX(): int
    {
        return $this->X;
    }

    /**
     * @param int $X
     */
    public function setX(int $X): void
    {
        $this->X = $X;
    }

    public function __construct(int $X, int $Y)
    {
       $this->setX($X);
       $this->setY($Y);
    }

    public static function  returnCont(){
        return self::$cont;
    }


    public  function CalculodePonto(Revisao $P1){

        return $this->Calculo(P1->x , this->x, P1->y, this->y);
    }

    public function calcularDistanciaValores(int $x1, int $x2, int $y1, int $y2){

        return $this->Calculo($x1,  $x2,  $y1,  $y2);

    }

    public function Calculo(int $x1, int $x2, int $y1, int $y2){
        $calculo  = sqrt(
            pow(($x1  - x2),  2)
            +
            pow(( y1 - y2),  2)
        );
        return $calculo;

    }
}
<?php

    class Fixo extends Telefone{
        private $cust_minuto;

        public function __construct($cust_minuto, $ddd, $telefone){
            $this->setTelefone($telefone);
            $this->setDDD($ddd);
            $this->setCustoMinuto($cust_minuto);
        }

         public function CalculaCusto($tempo_ligacao)
        {
            return ($tempo_ligacao * $this->cust_minuto);
        }

        private function setCustoMinuto($cust_minuto){
            $this->cust_minuto = $cust_minuto;
        }

        public function getCustoMinuto(){
            return $this->cust_minuto;
        }
    }



?>
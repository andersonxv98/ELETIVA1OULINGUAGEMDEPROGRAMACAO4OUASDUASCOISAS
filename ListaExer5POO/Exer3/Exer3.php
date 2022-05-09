<?php 
    abstract class Telefone{
        private $DDD;
        private $n_telefone;


        protected function setDDD($ddd){
            $this->DDD = $ddd;
        }

        protected function setTelefone($telefone){
            $this->n_telefone = $telefone;
        }

        public function getDDD(){
            return $this->DDD;
        }

        public function getTelefone(){
            return $this->n_telefone;
        }

        /*public function __construct($ddd, $telefone){
            $this->setDDD($ddd);
            $this->setTelefone($telefone);
        }*/

        abstract function CalculaCusto($tempo_ligacao);
    } 
?>
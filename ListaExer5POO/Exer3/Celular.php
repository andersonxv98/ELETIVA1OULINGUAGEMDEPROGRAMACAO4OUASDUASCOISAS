    <?php include_once "Exer3.php";
    abstract class Celular extends Telefone{
        private $custominbase;
        private $operadora;

        public function __construct($custominbase, $operadora, $ddd, $telefone){
            $this->setCustominbase($custominbase);
            $this->setOperadora($operadora);
            $this->setDDD($ddd);
            $this->setTelefone($telefone);
        }

        protected function setCustominbase($custominbase){
            $this->custominbase = $custominbase;
        }

        protected function setOperadora($operadora){
            $this->operadora = $operadora;
        }

        public function getCustominbase(){
            return $this->custominbase;
        }

        public function getOperadora(){
            return $this->operadora;
        }
    }

?>
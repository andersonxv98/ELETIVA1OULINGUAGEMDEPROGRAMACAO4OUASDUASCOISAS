<?php

$vetor = [[]];
$k = 0;
for ($i=0; $i < 10 ; $i++) {
    for ($j=0; $j < 10 ; $j++) { 
        $vetor[$i][$j] = $k;
        $k++;
    }
}

function Crescente($vetor){
    
    foreach ($vetor as $key => $value) {
        sort($value);
        foreach ($value as $key => $val) {
            echo "index: ".$key."   Valor:  ".$val;
            echo "<br>";
        }
    }
    
}

function Decrescente($vetor){
    $contador = 9;
  
    for ($i=0; $i <=$contador ; $i++) { 
     if($i == 6){break;}
        $aux = $vetor[$i];
        $vetor[$i] = $vetor[$contador -($i)];
        $vetor[$contador - ($i)] = $aux;
        
    }
    foreach ($vetor as $key => $value) {
        arsort($value);
        
        foreach ($value as $key => $val) {
            
            echo "index: ".$key."   Valor:  ".$val;
            echo "<br>";
        }
    }

   
}

Crescente($vetor);
echo "A MINHA ALMA TA ARMADA E APONTADA PARA A CARA DO SUSSEGO SEGO SEGO SEGO SEGO SEGO SEGO SEGO SEGO -----------------------------------------------";
echo "<br>";
Decrescente($vetor);

?>
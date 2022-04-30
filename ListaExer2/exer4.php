<?php

use LDAP\Result;

 $vetor = [];
 $soma = 0;
for ($i=1; $i<=10; $i++){
    $vetor[$i] = $_POST["valor$i"];
}

foreach ($vetor as $chave => $valor){
        $soma += $valor;
       
    
    
}

echo "Resultado/ Média: ".($soma/10);


?>
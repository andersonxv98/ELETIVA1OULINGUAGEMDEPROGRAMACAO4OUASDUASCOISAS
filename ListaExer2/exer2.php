<?php

for ($i=1; $i<=20; $i++){
    $vetor[$i] = $_POST["valor$i"];
}

$valor_buc  = $_POST["valorbuscado"];

foreach ($vetor as $chave => $valor){
    if($valor_buc == $valor){
        echo "Posição do Vetor: $chave e seu valor é $valor";
        echo "<br>";
    
    }
}




?>
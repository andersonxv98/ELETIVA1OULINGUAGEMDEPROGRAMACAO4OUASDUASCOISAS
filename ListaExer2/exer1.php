<?php

for ($i=1; $i<=10; $i++){
    $vetor[$i] = $_POST["valor$i"];
}

$posicao = 0;
$maior = 0;
//var_dump($vetor);
foreach($vetor as $chave => $valor){
    echo "Posição do Vetor: $chave e seu valor é $valor";
    echo "<br>";
    if ($valor > $maior){
        $maior = $valor;
        $posicao = $chave;
    }
}

echo "O maior valor é $maior e está na posição $posicao";


?>
<?php
$vet_alunos = [];


function Lernomes($vet_alunos){
    sort($vet_alunos[SORT_STRING]);

    foreach ($vet_alunos as  $value) {
        echo $value;
    }

}

$var1 = $_POST['valor1']; //valor kilo
$var2 = $_POST['valor2']; //qtd consum

$result = $var1 * $var2;

echo  "O Preço pago pelo consumo será de: ".$result." DILMAS";

?>
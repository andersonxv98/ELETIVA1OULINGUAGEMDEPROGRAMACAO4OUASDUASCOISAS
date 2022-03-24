<?php
$vet_numeros = [];

function Printar($vet_numeros){
    sort($vet_numeros);

    foreach ($vet_numeros as  $value) {
        echo $value;
        echo "<br>";
        $result = CalcularESOmarDiv($value);
        echo "Soma de Todos os divisores do numero: ".$value." é :   ".$result;
        echo "<br>";
    }
   
}

function CalcularESOmarDiv($value){
    $soma =0;
    for ($i=1; $i < ($value); $i++) { 
       if($value % $i == 0){ 
       $soma = $soma + $i;
       }
    }
}


$var1 = $_POST['valor1']; 
$var2 = $_POST['valor2'];
$var3 = $_POST['valor3']; 
$var4 = $_POST['valor4'];
$var5 = $_POST['valor5']; 

array_push($vet_numeros, $var1, $var2, $var3, $var4, $var5);


Printar($vet_numeros);

?>
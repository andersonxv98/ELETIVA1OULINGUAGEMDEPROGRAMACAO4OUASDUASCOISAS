<?php

function CalcularIMC($var1, $var2){
    $imc = $var1 / $var2;
    switch ($imc) {
        case ($imc < 18.5):
            echo "Abaixo do peso";
            break;
        case ($imc >= 18.6) && ($imc <= 24.9):
            echo "Peso ideal! parabens seu gostosao";
            break;
        case ($imc >= 25) && ($imc <= 29.9):
            echo "Peso levemente acima da média";
                break;
        case ($imc >= 30) && ($imc <= 34.9):
            echo "Obesidade grau 1";
                break;
        case ($imc >= 35) && ($imc <= 39.9):
            echo "Obesidade Grau 2 ";
                break;
        case ($imc >= 40):
            echo "Obesidade Grau 3, olha a motinha do pai VRUMMMMMMMMMMM ";
                break;
        default:
            # code...
            break;
    }
}



$var1 = $_POST['valor1']; 
$var2 = $_POST['valor2'];

CalcularIMC($var1, $var2);

?>
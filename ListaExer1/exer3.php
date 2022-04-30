<?php



function VerValor()
{
    $var1 = $_POST['valor1']; //valor kilo
    if ($var1 > 10) {
        echo "maior que 10";
        return;
    }
    echo "menor que 10";
//$var2 = $_POST['valor2']; //qtd consum

//$result = $var1 * $var2;
}

VerValor();
?>
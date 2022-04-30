<?php
$var1 = $_POST['valor1'];
$var2 = $_POST['valor2'];
$result = [($var1 + $var2),($var1 - $var2),($var1 * $var2),($var1 / $var2)];
echo "soma, sub, mult, div:  ".Implode($result);
echo "<br/>";
echo "soma: ".$result[0];
echo "<br/>";
echo "sub: ".$result[1];
echo "<br/>";
echo "mult: ".$result[2];
echo "<br/>";
echo "div: ".$result[3];
echo "<br/>";
if ($var1 % 2 == 0){
    echo "é par!!";
}
else{
    echo "impar";
}


?>

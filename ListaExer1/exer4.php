<?php



function VerfValor()
{
    $arr_ = [];
    $var1 = $_POST['valor1']; //valor kilo
    if ($var1 % 2 == 0 && $var1 != 0) {
        $arr_.add("par");
    }
   else if ($var1 == 0){
       $arr_.add("Zero");
   }
   else if($var1 %2 ==1){
       $arr_.add("impar");
   }
   else{
       echo "insira um valor válido";
       return;
   }
   foreach ($arr_ as $item)
       echo $item."</br>";
}

VerfValor();
?>

<?php




function CalculoEprint(){
    $var1 = $_POST['valor1'];
    $var2 = $_POST['valor2'];
    $var3 = $_POST['valor3'];
    $var4 = $_POST['valor4'];

    $result_ = ($var1 + $var2 + $var3 + $var4)/  4;
    echo "média total: ".$result_;

    VerAprov($result_);
}

function VerAprov($result_){
    ($result_ >= 7) ? ( "Aprovado")  : ("reprovado");
    echo  $result_;
}
?>
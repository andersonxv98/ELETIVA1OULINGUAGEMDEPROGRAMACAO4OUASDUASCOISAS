<?php
$vet_alunos = [];
function Lernomes($vet_alunos){
    sort($vet_alunos);

    foreach ($vet_alunos as  $value) {
        echo $value;
    }

}

$var1 = $_POST['valor1']; //valor kilo
$var2 = $_POST['valor2'];
$var3 = $_POST['valor3'];
$var4 = $_POST['valor4'];
$var5 = $_POST['valor5'];
$var6 = $_POST['valor6'];
$var7 = $_POST['valor7'];
$var8 = $_POST['valor8'];
$var9 = $_POST['valor9'];
$var10 = $_POST['valor10'];
array_push($vet_alunos, $var1, $var2,$var3,$var4,$var5,$var6,$var7,$var8,$var9,$var10);


Lernomes($vet_alunos)
?>
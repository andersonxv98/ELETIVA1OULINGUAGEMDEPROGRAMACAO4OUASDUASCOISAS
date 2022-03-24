<?php
$vet_alunos = [];
function Lernomes($vet_alunos){
    sort($vet_alunos);

    foreach ($vet_alunos as  $value) {
        echo $value;
        echo " ";
        echo "<br>";
    }
    return $vet_alunos[0];
}

$var1 = $_POST['valor1']; //valor kilo
$var2 = $_POST['valor2'];

array_push($vet_alunos, $var1, $var2);


 $menor =Lernomes($vet_alunos)

 echo "menor numero meu nobre é esse aqui: ".$menor;
?>
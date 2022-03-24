<?php
$vet_alunos = [];
function Lernomes($vet_alunos){
    sort($vet_alunos[SORT_STRING]);

    foreach ($vet_alunos as  $value) {
        echo $value;
    }

}

$var1 = $_POST['valor1']; //valor kilo
array_push($vet_alunos, $var1);

if (count($vet_alunos) >= 10){
    Lernomes($vet_alunos);
}
?>
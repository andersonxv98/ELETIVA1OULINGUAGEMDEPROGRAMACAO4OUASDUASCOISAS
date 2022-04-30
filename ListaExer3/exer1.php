
<?php

    function verificarData($dia, $mes, $ano){
        if (checkdate($mes, $dia, $ano)){
            echo "Data Válida";
        }
        else{
            echo "Data inválida";
        }
    }

    $diaUI = $_POST['dia'];
    $mesUI = $_POST['mes'];
    $anoUI = $_POST['ano'];

verificarData($diaUI, $mesUI, $anoUI);

?>
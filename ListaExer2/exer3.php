<?php
 $vetor = [];
for ($i=1; $i<=20; $i++){
 $bool_ver = in_array($_POST["valor$i"], $vetor);
    if(!($bool_ver)){
        $vetor[$i] = $_POST["valor$i"];
    }
    else{
         $vetor[$i] = "hífen";
    }
    
    
    
}

foreach ($vetor as $chave => $valor){
   
        echo "Posição do Vetor: $chave e seu valor é $valor";
        echo "<br>";
    
    
}



?>
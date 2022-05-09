<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Orientação a Objetos em PHP</title>
  </head>
  <body>
    <?php

        require_once("Exer2.php");
        require_once("Mestredeobras.php");
        require_once("Motorista.php");

        $serventes =[

        $serv1 = new Servente("pedro pedreiro", 1000, 01),
        $serv2 = new Servente("valdir Marreta", 1000, 02),
        $serv3 = new Servente("Savio do pneu", 1200, 03),
        $serv4 = new Servente("Claudinho peneira", 1123, 04),
        $serv5 = new Servente("Elias", 1140, 05),
        ];
        
        /*$serventes2 = [];
        for ($i = 0; $i < 5; $i++){
            $ser = new Servente("servente teste".$i , 1000, $i+11);
            $serventes2[] = $ser;
            
        }*/
        var_dump($serventes);
        //var_dump($serventes2);

        $mestre1 = new Mestredeobras("o mago é implacavél professora", 1600, 10);
        $mestre1->setFuncionarioOnMestre($serventes[0]);
        echo "</br>";
        foreach ($serventes as  $value) {
            # code...
            echo "values: ".$value->getSalarioLiquidoServete();
        }
        foreach($serventes as $serv){
            echo "<br></br>";
            echo "servente: "."  ".$serv->getNome();
            echo "<br></br>";
            $mestre1->setFuncionarioOnMestre($serv);
            echo "servente: SALARIO: ".$serv->getSalarioLiquidoServete();
            echo "<br></br>";
        }
        /*foreach($serventes2 as $servents){
            $mestre1->setFuncionarioOnMestre($servents);
        }*/
        echo "</br>";
        //echo "sOLHA LOOK THE MASTER EOKOKOOKOK : SHINOBU: ".var_dump($mestre1);
       echo"Nome do mestre: ".$mestre1->getNome();
       echo "<br></br>";
       echo"Salario do mestre: ".$mestre1->getSalarioMestre();

        //var_dump($funcarr_);
        //echo "MESTRE DE OBRAS funcionarios : ".;
        //foreach ($serventes a)


       /* $p1 = new Ponto(2, 3);
        $p2 = new Ponto(5, 1);
        
        $distancia =  distanciaDePontos($p1, $p2);
        $contador  = $p2->get_contador();

        echo "<br/>";
        echo "distancia:  ".$distancia;
        echo "<br/>";
        echo "Contador:  ".$contador;
        //echo "Result: ". var_dump($matricial);*/
    ?>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>
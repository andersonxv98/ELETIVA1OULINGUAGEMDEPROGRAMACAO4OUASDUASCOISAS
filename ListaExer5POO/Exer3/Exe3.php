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

        require_once("Exer3.php");
        require_once("Fixo.php");
        require_once("Prepago.php");
        require_once("Pospago.php");
        require_once("Celular.php");

        $fixo = new Fixo(10.43, 15, 993412);
        echo "Fixo-> ddd: " . $fixo->getDDD();
        echo "Fixo-> valormind: " . $fixo->getCustoMinuto();
        echo "Fixo-> telefone: " . $fixo->getTelefone();

        echo "</br>";
        $prepago = new Prepago(0.30, "VIVO", 18, 97028922);
        echo "prepago-> ddd: " . $fixo->getDDD();
        echo "</br>";
        $tempo = 12.32;
        echo"tempo de ligação: ".$tempo."  ";
        echo "prepago-> custo: " . $fixo->CalculaCusto($tempo);
        echo "</br>";
        echo "prepago-> telefone: " . $fixo->getTelefone();
        echo "</br>";
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
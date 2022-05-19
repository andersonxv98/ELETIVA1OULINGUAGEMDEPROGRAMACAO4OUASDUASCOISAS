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

        require_once("../Model/Entity/cliente.php");
        require_once("../Model/Entity/produto.php");
        require_once("../Model/PDO/clientesdao.php");
        $email= $_POST['email'];
        $nome = $_POST['nome'];
        $idade = $_POST['idade'];

        $p = new Clientes(Null, $nome, $email, $idade);

        $pdoclientes =new  ClientesDao();

        $pdoclientes->inserir($p);

      $result=   $pdoclientes->consultar();

     // mysqli_fetch_assoc($result);
      //var_dump($result);
        //require_once("/PDO/");
      //Teste de Criação de classes;
      /*
        $produtos =[

        $produt1 = new Produtos(Null, "Pandeiro", "Pandeiro Profissional pele de couro", 75.00),
        $produt2 = new Produtos(Null, "VIolão", "Violão clássico Queens' collection D13751 Destro", 287.00),
        $produt3 = new Produtos(Null,"Gaita " ,"Gaita Dó Diatônica Blues C 20/V", 50.39),
        $produt4 = new Produtos(Null, "Triangulo", "Triangulo Cromado 25cm x 8mm phx 79a", 39.90),
        $produt5 = new Produtos(Null, "Microfone","Microfone Arcano Nacbuc condensador cardióidde preto", 139.99),
        ];

        $clientes = [
            $client5= new Clientes(Null, "Rosa", "Rosa@mail.com", 20),
            $client4= new Clientes(null, "Andisu", "Andisu.mail@com", 31),
            $client3= new Clientes(null, "Camila", "camila@mila.com", 21),
            $client2= new Clientes(null, "Anderssa", "Dressa.an@mail.com", 23),
            $client1= new Clientes(null, "Weddle", "Butterfree.pkmon@niantic.com", 45),
        ];
        
       
        var_dump($produtos);
       

       
      
        echo "</br>";
        foreach ($produtos as  $value) {
            # code...
            echo "values: ".$value->getNome()
            . "</br>" .
            $value->getId()
            . "</br>" .
            $value->getDescricao()
            . "</br>" .
            $value->getValor()
            . "</br>" 
            ;
        }
        foreach($clientes as $cliente){
            # code...
            echo "values: ".$cliente->getNome()
            . "</br>" .
            $cliente->getId()
            . "</br>" .
            $cliente->getEmail()
            . "</br>" .
            $cliente->getIdade()
            . "</br>" 
            ;
        }
        /*foreach($produtos2 as $produtents){
            $mestre1->setFuncionarioOnMestre($produtents);
        }*//*
        echo "</br>";
        //echo "sOLHA LOOK THE MASTER EOKOKOOKOK : SHINOBU: ".var_dump($mestre1);
       echo"Nome do mestre: ".$mestre1->getNome();
       echo "<br></br>";
       echo"Salario do mestre: ".$mestre1->getSalarioMestre();

        //var_dump($funcarr_);
        //echo "MESTRE DE OBRAS funcionarios : ".;
        //foreach ($produtos a)


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

   
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Sistyema em PHP</title>
  </head>
  <body>
    <h1>Sistema PHP</h1>
    <?php 
       
      /*  setcookie("usuario", $email, time() + (86400 * 1), "/");
        echo "SEja BEm venindo: ".$_COOKIE['usuario'];*/
        session_start();
        for ($i=0; $i < $_SESSION["n_voltas"] ; $i++) { 
          $val_[$i] = $_POST['valor'."$i"];
           
        }
        $menor_tempo = +INF;
        $indice_do_menor_tempo = 0;
        foreach ($val_ as $key => $value) {
          if($value <= $menor_tempo){
            $menor_tempo = $value;
            $indice_do_menor_tempo =$key;
          }
        }


        


                echo "seja bem vindo usuario: ";
                echo "</br>";
               
                echo "</br>";
                echo "Melhor Valor(menor tempo ): ".$menor_tempo;
                echo "</br>";
                echo "volta N em que o valor foi registrado".$indice_do_menor_tempo+1;
                echo "</br>";
                echo "<a href='sair.php'>SAIR</a>";
                
      
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

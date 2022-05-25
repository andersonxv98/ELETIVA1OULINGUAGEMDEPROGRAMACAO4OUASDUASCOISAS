<?php var_dump($arra); ?>
<!doctype html>

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Visualizar CLientes</title>
  </head>
  <body>
    <h1>Visualizar CLientes</h1>

    <?php if ($resposta){
            echo "<div class="."alert alert-success alert-dismissible fade show"." role="."alert".">
            <strong>Inserido com sucesso CIlindro!</strong> You should check in on some of those fields below.
            <button type="."button"." class="."close"." data-dismiss="."alert"." aria-label="."Close".">
              <span aria-hidden="."true".">&times;</span>
            </button>
          </div>";
    }
      else{
        "<div class="."alert alert-success alert-dismissible fade show"." role="."alert".">
            <strong> 1001 01 0101 0 10 10 01 01 AMÉM!  - BENDER (FUTURAMA)!</strong> You should check in on some of those fields below.
            <button type="."button"." class="."close"." data-dismiss="."alert"." aria-label="."Close".">
              <span aria-hidden="."true".">&times;</span>
            </button>
          </div>";

      }
    ?>
    <button type="button" class="btn btn-primary mb-2">Criar novo Registro </button>
    
    <table class="table table-dark table-striped">
  <thead>
    <tr >
      <th scope="col">Nome</th>
      <th scope="col">Email</th>
      <th scope="col">Idade</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
  <?php

    ?>



  </tbody>
    </table>
  </body>
</html>
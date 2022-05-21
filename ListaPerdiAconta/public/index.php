<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Visualizar CLienterssd</title>
  </head>
  <body>
    <h1>Visualizar CLienterssd</h1>
  
    <a href="insertView.php" style="text-decoration:none"><button type="button" class="btn btn-primary mb-2">Criar novo Registro</button></a>
    
    <table class="table table-dark table-striped">
  <thead>
    <tr >
    <th scope="col">id</th>
      <th scope="col">Nome</th>
      <th scope="col">Email</th>
      <th scope="col">Idade</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
  <?php

require_once("../Model/Entity/cliente.php");
require_once("../Model/Entity/produto.php");
require_once("../Model/PDO/clientesdao.php");
require_once("../Controller/ClientesController.php");
$pdoclientes =new  ClientesDao();

//$pdoclientes->inserir($p);

$result=   $pdoclientes->consultar();


//var_dump($result);

foreach ($result as $row){
    //echo $row[0];
    echo "<tr>
   
        <td name="."id"." 
        id="."id".">$row[3]</td>
        <td >$row[0]</td>
        <td>$row[1]</td>
        <td>$row[2]</td>


        <td>
        <form method="."post"." action="."../Controller/deletarCliente.php".">
            <input type="."button"." class="."btn btn-primary"."name="."Excluir"." value="."Excluir"." onclick="."deletarCliente()".">
        </form>
        </td>
        
        <td>
        <input type="."button"." class="."btn btn-primary"."name="."deletar"." value="."Deletar"." onclick="."deletarCliente()".">
        </td>
         
        

        </tr>
   
        ";
    
}

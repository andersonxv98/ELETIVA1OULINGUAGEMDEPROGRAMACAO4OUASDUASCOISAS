<?php

require_once("../Model/Entity/cliente.php");
require_once("../Model/Entity/produto.php");
require_once("../Model/PDO/clientesdao.php");

$id = $_POST['id'];



$p = new Clientes($id, null, null, null);
//echo "OBJETO: ".$p->getEmail()."</br>".$p->getNome();

$pdoclientes =new  ClientesDao();

//$pdoclientes->inserir($p);
$pdoclientes->excluir($p);
$result=   $pdoclientes->consultar();


?>

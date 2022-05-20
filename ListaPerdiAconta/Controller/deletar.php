<?php

require_once("../Model/Entity/cliente.php");
require_once("../Model/Entity/produto.php");
require_once("../Model/PDO/clientesdao.php");

$id = $_POST['id'];



$p = new Clientes(Null, $nome, $email, $idade);
echo "OBJETO: ".$p->getEmail()."</br>".$p->getNome();

$pdoclientes =new  ClientesDao();

$pdoclientes->inserir($p);

$result=   $pdoclientes->consultar();


?>

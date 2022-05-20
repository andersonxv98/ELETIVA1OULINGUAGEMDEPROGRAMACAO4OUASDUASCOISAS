<?php

class Conexao{
  public $conn;
  
  public function __construct(){
    $this->conn = $this->ConectDb();
  }
  public function ConectDb()
  {
    $host = "localhost";
     $username = "root";
   //$password = "admin";
      $password = "";
     $dbname = 'dbphp';

    //echo "Entrou conect DB";
      try{
     //   echo "Entrou do TRY";
      $conn = new PDO("mysql:host=$host;dbname=$dbname",$username,$password);
       // $this->$conn;
      //echo "Fez conexa~]o";
        return $conn;
        }
        catch (PDOException $e)
        {
          echo $e->getMessage();
        //  echo "UM ERRO OCORREU";
          return;
        }
  }
}
  

  //busca conexão
 

 

  // Check connection
/*
    if ($this->conn->connect_error) {
      die("Connection failed: " . $this->conn->connect_error);
      return false;
    }
    echo "Connected successfully";
    return true;
*/


?>

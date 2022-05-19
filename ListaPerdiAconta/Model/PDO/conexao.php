<?php
class Conexao{
  private $servername = "localhost";
  private $username = "root";
  private $password = "admin";
  private $dbname = "dbphp";

  private  PDO $conn;

  public function doConect(){
    echo "ENtrou na func doConect";
    try{

      echo "Entrou do TRY";
    $conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);
      
    //$check = $this->checkConn();
    echo "Fez conexa~]o";
      return $conn;}
      catch (PDOException $e){
        echo $e->getMessage();
        echo "UM ERRO OCORREU";
      }
    
    

   
  }

  //busca conexão
  
  public function getConexao(){
    return $this->conn;
  }
   

 

  // Check connection
  public function checkConn(){
    if ($this->conn->connect_error) {
      die("Connection failed: " . $this->conn->connect_error);
      return false;
    }
    echo "Connected successfully";
    return true;
}
  public function close() {
    ///$this->conn->close;
  }

  public function __construct(){
    $this->doConect();
  }
}


?>


    <?php

        require_once("../Model/Entity/cliente.php");
        require_once("../Model/Entity/produto.php");
        require_once("../Model/PDO/clientesdao.php");
        $email= $_POST['email'];
        $nome = $_POST['nome'];
        $idade = $_POST['idade'];


        echo "TESTE INSIDE INDEX RESPONSE: ".$email."\n".$nome."\n".$idade."\n";

        $p = new Clientes(Null, $nome, $email, $idade);
        echo "OBJETO: ".$p->getEmail()."</br>".$p->getNome();

        $pdoclientes =new  ClientesDao();

        $pdoclientes->inserir($p);

      $result=   $pdoclientes->consultar();

    ?>

   
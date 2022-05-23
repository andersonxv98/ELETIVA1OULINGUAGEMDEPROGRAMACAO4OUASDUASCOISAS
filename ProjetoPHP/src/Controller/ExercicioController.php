<?php


namespace Aluno\ProjetoPhp\Controller\exemplo;


class ExercicioController
{

    public static function exibir(){
        require_once("../View/exemplo.php");
    }


    public static function exibirResultado(){
        $valor1 = $_POST['valor1'];
        $valor2 = $_POST['valor2'];
        $soma = $valor1 + $valor2;
        require_once("../src/View/exemplo.php");
    }
}
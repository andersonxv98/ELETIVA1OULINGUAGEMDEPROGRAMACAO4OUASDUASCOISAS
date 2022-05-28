<?php

require_once __DIR__.'/vendor/autoload.php';

//Aqui a gente recupera o que o usuário digitou e qual 
//método HTTP ele utilizou
$method = $_SERVER['REQUEST_METHOD'];
$path = trim($_SERVER['REQUEST_URI'], '/');

if (strpos($path, 'ProjetoPHP/') >= 0) {
    //die(substr($path, 10)); -> /ola-mundo
    $path = substr($path, 10);
}

//Instanciar classe Router
$router = new Aluno\ProjetoPhp\Router($method, $path);

//ADICIONAR AS ROTAS VÁLIDAS ABAIXO

$router->get('/ola-mundo', function(){
    return "Olá Mundo!";
});

$router->get('/exemplo', 
        'Aluno\ProjetoPhp\Controller\ExercicioController::exibir');

$router->post('/exemplo-resultado',
        'Aluno\ProjetoPhp\Controller\ExercicioController::exibirResultado');

$router->get('/cliente/novo',
'Aluno\ProjetoPhp\Controller\ClientesController::abrirFormularioInserir');

$router->post('/cliente/inserir',
'Aluno\ProjetoPhp\Controller\ClientesController::inserirCliente');

$router->post('/cliente/mostra',
'Aluno\ProjetoPhp\Controller\ClientesController::MostrarClientes');

$router->get('/cliente/alterar/{id}',
'Aluno\ProjetoPhp\Controller\ClientesController::abrirFormularioAlterar');


//ADICIONAR AS ROTAS VÁLIDAS ACIMA

$result = $router->handler();

if (!$result){
    http_response_code(404);
    echo "Página não encontrada";
    die();
}

echo $result($router->getParams());
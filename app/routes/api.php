<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;


$app->get('/', function (Request $request, Response $response, $args) {
    $response->getBody()->write("Vitrine API");
    return $response;
});

$app->get('/products', 'App\Controllers\ProductController:index');
$app->get('/products/{id}', 'App\Controllers\ProductController:show');
$app->post('/products', 'App\Controllers\ProductController:store');
$app->put('/products/{id}', 'App\Controllers\ProductController:update');

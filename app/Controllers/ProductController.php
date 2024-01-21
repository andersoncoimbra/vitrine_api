<?php
namespace App\Controllers;
use App\Models\Product;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class ProductController
{
    public function index(Request $request,Response $response, $args)
    {
        $products = Product::all();

        $response->getBody()->write(json_encode(['products' => $products]));
        return $response
            ->withHeader('Content-Type', 'application/json')
            ->withStatus(200);
    }

    public function show(Request $request,Response $response, $args)
    {
        $product = Product::find($args['id']);

        $response->getBody()->write(json_encode(['product' => $product]));
        return $response
            ->withHeader('Content-Type', 'application/json')
            ->withStatus(200);
    }

    public function store(Request $request,Response $response, $args)
    {
        $data = json_decode($request->getBody()->getContents(), true);


        $product = Product::create($data);

        $response->getBody()->write(json_encode(['product' => $product]));
        return $response
            ->withHeader('Content-Type', 'application/json')
            ->withStatus(201);
    }

    public function update(Request $request,Response $response, $args)
    {
        $data = json_decode($request->getBody()->getContents(), true);

        $product = Product::find($args['id']);
        $product->update($data);

        $response->getBody()->write(json_encode(['product' => $product]));
        return $response
            ->withHeader('Content-Type', 'application/json')
            ->withStatus(200);
    }
}
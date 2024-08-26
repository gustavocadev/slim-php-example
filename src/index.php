<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

require __DIR__ . '/../vendor/autoload.php';

$app = AppFactory::create();

$app->get('/', function (Request $request, Response $response, $args) {
  $users = [
    ['id' => 1, 'name' => 'John'],
    ['id' => 2, 'name' => 'Jane'],
    ['id' => 3, 'name' => 'Tom'],
    ['id' => 4, 'name' => 'Jerry'],
    ['id' => 5, 'name' => 'Spike'],
  ];

  $response->getBody()->write(json_encode($users));
  return $response;
});

$app->run();

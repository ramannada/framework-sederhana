<?php
$app->get('/hello/{name}', function ($request, $response, $args) {
    $controller = new Slim\Controllers\HelloController($this);
    return $controller->getHello($request, $response, $args);
});
$app->get('/user','App\Controllers\UserController:getAll');
$app->get('/user/delete','App\Controllers\UserController:delete');
$app->get('/halo','App\Controllers\UserController:halo');
$app->get('/home','App\Controllers\HomeController:index');
// $app->get('/hello/{name}', function (Request $request, Response $response) {
//     $name = $request->getAttribute('name');
//     $response->getBody()->write("Hello, $name");
//
//     return $response;
// });

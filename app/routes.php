<?php
declare(strict_types=1);

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\App;
use Controllers\SampleController;

return function (App $app) {
    $app->options('/{routes:.*}', function (Request $request, Response $response) {
        // CORS Pre-Flight OPTIONS Request Handler
        return $response;
    });

    $app->get('/', SampleController::class . ':index');
    $app->get('/add', SampleController::class . ':add');
    $app->post('/add', SampleController::class . ':create');
    $app->get('/edit/{id}', SampleController::class . ':edit');
    $app->post('/edit/{id}', SampleController::class . ':update');
    $app->get('/delete/{id}', SampleController::class . ':delete');
    $app->post('/delete/{id}', SampleController::class . ':destroy');
    $app->get('/find', SampleController::class . ':find');
    $app->post('/find', SampleController::class . ':search');
};

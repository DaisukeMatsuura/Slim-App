<?php
declare(strict_types=1);

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\App;
use Controllers\SampleController;
use Controllers\BoardController;

return function (App $app) {
    $app->options('/{routes:.*}', function (Request $request, Response $response) {
        // CORS Pre-Flight OPTIONS Request Handler
        return $response;
    });

    $app->add(function ($request, $handler) {
        $response = $handler->handle($request);
        return $response
            ->withHeader('Access-Control-Allow-Origin', 'http://localhost:8080')
            ->withHeader('Access-Control-Allow-Headers', 'X-Requested-With, Content-Type, Accept, Origin, Authorization')
            ->withHeader('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, PATCH, OPTIONS');
    });

    // 簡易受注管理アプリ
    $app->get('/', SampleController::class . ':index');
    $app->get('/add', SampleController::class . ':add');
    $app->post('/add', SampleController::class . ':create');
    $app->get('/edit/{id}', SampleController::class . ':edit');
    $app->post('/edit/{id}', SampleController::class . ':update');
    $app->get('/delete/{id}', SampleController::class . ':delete');
    $app->post('/delete/{id}', SampleController::class . ':destroy');
    $app->get('/find', SampleController::class . ':find');
    $app->post('/find', SampleController::class . ':search');
    $app->get('/order', SampleController::class . ':order');

    // Markdownコンテンツ投稿アプリ
    $app->get('/board', BoardController::class . ':index');
    $app->get('/board/login', BoardController::class . ':login');
    $app->post('/board/login', BoardController::class . ':signin');
    $app->get('/board/article/{id}', BoardController::class . ':article');
    $app->post('/board/article/{id}', BoardController::class . ':post_comment');
    $app->get('/board/user/{id}', BoardController::class . ':user');
    $app->post('/board/user/{id}', BoardController::class . ':post_article');
};

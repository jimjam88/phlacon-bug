<?php

$app->notFound(function () use ($app) {
    $app->response->setStatusCode(404, 'Not Found')->sendHeaders();
    $app->response->setJsonContent([
        'code'    => 404,
        'message' => 'Not Found',
    ]);
    $app->response->send();
});

$app->get('/', function() use ($app) {
    $app->response->setJsonContent([
        'message' => 'Hello from App 1',
    ]);
    $app->response->send();
});

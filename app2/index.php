<?php

use Phalcon\Mvc\Micro;
use Phalcon\DI\FactoryDefault;
use Phalcon\Mvc\Url;

$app = new Micro();

$di = new FactoryDefault();

$di->set('url', function() {
    $url = new Url();
    $url->setBaseUri('/');
    $url->setBasePath(realpath(__DIR__));
    return $url;
}, true);

$app->setDi($di);

$app->response->setContentType('application/json', 'UTF-8');

require_once $di->get('url')->getBasePath() . '/routes.php';

$app->handle();

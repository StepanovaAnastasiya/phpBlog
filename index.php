<?php

use Blog\Controllers\AddCommentController;
use Blog\Controllers\AddPostController;
use Blog\Controllers\DetailPageController;
use Blog\Controllers\HomePageController;
use Blog\Controllers\ImprintPageController;
use Blog\Controllers\InsertPostController;
use Blog\Controllers\LoginPageController;
use Blog\Controllers\LogoutPageController;

require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/db.php';
$configRuoter = [];
$router = new Blog\Router($_SERVER['REQUEST_URI'], $configRuoter);
$router->addRoute('#^/phpblog/$#', function () {
    $controller = new HomePageController();
    $controller->process();
});
$router->addRoute('#^/phpblog/login$#', function () {
    $controller = new LoginPageController();
    $controller->process();
});
$router->addRoute('#^/phpblog/logout$#', function () {
    $controller = new LogoutPageController();
    $controller->process();
});
$router->addRoute('#^/phpblog/detail/(\d+)$#', function ($postId) {
    $controller = new DetailPageController($postId);
    $controller->process();
});
$router->addRoute('#^/phpblog/add-post$#', function () {
    $controller = new AddPostController();
    $controller->process();
});
$router->addRoute('#^/phpblog/insert-post$#', function () {
    $controller = new InsertPostController();
    $controller->process();
});
$router->addRoute('#^/phpblog/add-comment/(\d+)$#', function ($postId) {
    $controller = new AddCommentController($postId);
    $controller->process();
});
$router->addRoute('#^/phpblog/imprint$#', function () {
    $controller = new ImprintPageController();
    $controller->process();
});

$router->route();
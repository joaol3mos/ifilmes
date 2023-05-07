<?php

require __DIR__ . "/vendor/autoload.php";

use CoffeeCode\Router\Router;

ob_start();

$route = new Router(url(), ":");

$route->namespace("Source\App");

$route->group(null);

$route->get("/", "Web:home");
$route->get("/sobre", "Web:about");
$route->get("/registro","Web:register");
$route->get("/localizacao","Web:location");
$route->get("/blog","Web:blog");
$route->get("/faq","Web:faq");
$route->get("/carrinho-compras","Web:chart");

$route->get("/ops/{errcode}", "Web:error");

$route->group("/app");
$route->get("/", "App:home");

$route->group(null);

$route->dispatch();

if ($route->error()) {
    $route->redirect("/ops/{$route->error()}");
}

ob_end_flush();
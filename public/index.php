<?php

use Src\Http\Route;
use Src\Http\Request;
use Src\Http\Response;

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../routes/web.php';

$route = new Route(new Request(), new Response());

dump($route->request->method(), $route->request->path());
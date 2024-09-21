<?php

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../routes/web.php';

use Src\Http\Route;
use Src\Http\Request;
use Src\Http\Response;


$route = new Route(new Request(), new Response());

$route->resolve();
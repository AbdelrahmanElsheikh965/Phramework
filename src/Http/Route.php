<?php

namespace Src\Http;


class Route 
{

  public static array $routes = [];

  public Request $request;
  public Response $response;

  public function __construct(Request $request, Response $response)
  {
    $this->request = $request;
    $this->response = $response;
  }


  public static function get($route, callable|array $action)
  {
    self::$routes['get'][$route] = $action;
  }

  
  public static function post($route, callable|array $action)
  {
    self::$routes['post'][$route] = $action;
  }


}
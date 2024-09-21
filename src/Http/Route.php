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

  // [ExampleController::class, 'action_method']
  public static function post($route, callable|array $action)
  {
    self::$routes['post'][$route] = $action;
  }


  public function resolve()
  {
    $path   = $this->request->path();
    $method = $this->request->method();
    $action = self::$routes[$method][$path] ?? false;

    if (!$action) {
      return;
    }

    
    if (is_callable($action)) {
      call_user_func($action);
    }


    // TODO: handle query params
    if (is_array($action)) {
      call_user_func_array([new $action[0], $action[1]], []);
    }
  }

}
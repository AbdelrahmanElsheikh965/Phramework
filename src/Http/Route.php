<?php

namespace Src\Http;


class Route 
{

  public static array $routes = [];

  public static function get($route, callable|array $action)
  {
    self::$routes['get'][$route] = $action;
  }

  
  public static function post($route, callable|array $action)
  {
    self::$routes['post'][$route] = $action;
  }


}
<?php

namespace Src\Http;

class Request
{

  public function method()
  {
    return strtolower($_SERVER['REQUEST_METHOD']);
  }
  
  public function path()
  {
    $path = $_SERVER['REQUEST_URI'] ?? '/';

    // get path either URI contains query parameters or not
    return str_contains($path, '?') ? explode('?', $path)[0] : $path;
  }
  
}
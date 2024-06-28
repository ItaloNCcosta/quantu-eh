<?php

namespace Api\Core;

use Api\Routes\Routes;
use Api\Support\RequestType;
use Api\Support\Uri;

class RoutersFilters
{

  private string $uri;
  private string $method;
  private array $routesRegistered;

  public function __construct()
  {
    $this->uri = Uri::get();
    $this->method = RequestType::get();
    $this->routesRegistered = Routes::get();
  }

  private function simpleRouter()
  {
    if (array_key_exists($this->uri, $this->routesRegistered[$this->method])) {
      return $this->routesRegistered[$this->method][$this->uri];
    }

    return null;
  }

  private function dynamicRouter()
  {
    foreach ($this->routesRegistered[$this->method] as $index => $route) {
      $regex = str_replace('/', '\/', ltrim($index, '/'));
      if ($index !== '/' && preg_match("/^$regex$/", ltrim($this->uri, '/'))) {
        $routerRegisteredFound = $route;
        break;
      } else {
        $routerRegisteredFound = null;
      }
    }

    return $routerRegisteredFound;
  }

  public function get()
  {
    $router = $this->simpleRouter();

    if ($router) {
      return $router;
    }

    $router = $this->dynamicRouter();

    if ($router) {
      return $router;
    }

    return 'NotFoundController@index';
  }
}

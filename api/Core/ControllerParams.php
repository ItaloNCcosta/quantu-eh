<?php

namespace Api\Core;

use Api\Routes\Routes;
use Api\Support\RequestType;
use Api\Support\Uri;

class ControllerParams
{
  private function filterParams(string $router)
  {
    $uri = Uri::get();

    $explodeUri = array_values(explode('/', $uri));
    $explodeRouter = explode('/', $router);

    $params = [];
    foreach ($explodeRouter as $index => $routerSegment) {
      if ($routerSegment !== $explodeUri[$index]) {
        $params[$index] = $explodeUri[$index];
      }
    }

    return $params;
  }

  public function get(string $router)
  {
    $routes = Routes::get();
    $requestMethod = RequestType::get();

    $router = array_search($router, $routes[$requestMethod]);

    $params = $this->filterParams($router);

    return array_values($params);
  }
}

<?php

namespace Api\Core;

use Exception;

class Controller
{
  public function execute(string $router)
  {
    if (!str_contains($router, '@')) {
      throw new Exception("The route is registered in the wrong format");
    }

    list($controller, $method) = explode('@', $router);

    $namespace = "Api\Controllers\\";
    $controllerNamespace = $namespace . $controller;

    if (!class_exists($controllerNamespace)) {
      throw new Exception("The controller {$controllerNamespace} does not exist");
    }

    $controller = new $controllerNamespace;

    if (!method_exists($controller, $method)) {
      throw new Exception("The method {$method} does not exist in the controller {$controllerNamespace}");
    }

    $params = new ControllerParams;
    $params = $params->get($router);

    $controller->$method($params);
  }
}
